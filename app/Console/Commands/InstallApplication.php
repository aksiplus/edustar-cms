<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Library\DataSekolah;

use DB;

use App\Master\Sekolah;

class InstallApplication extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'edustar-cms:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'A Starter command to prepare your basic informations';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->line("You can use Ctrl+C to exit the installer any time.\n");
        $this->checkSekolah();
        $this->createDatabase();
        $this->migrate();
        $this->seed();
        $this->setUpKey();
        $this->setSekolah();
    }


    /**
     * This method creates the database by taking inputs from the user.
     *
     * @return void
    */
    private function checkSekolah()
    {
        $users = \App\User::all();

        $bar = $this->output->createProgressBar(count($users));

        $bar->start();

        foreach ($users as $user) {
            // $this->performTask($user);
            $bar->advance();
        }

        $bar->finish();

        // $sekolah = Sekolah::first();
        // if ($sekolah)
        // {
        //     $this->info('EduStar telah terinstall untuk ' . $sekolah->nama_sekolah);
        //     return false;

        // }

        // return true;
    }

    /**
     * This method creates the database by taking inputs from the user.
     *
     * @return void
    */
    private function createDatabase(){
        if($this->testDbConnection()){
            return;
        }

        $this->line("You need to choose a database type.");

        install_database:

        $connection = null;
        $host = null;
        $port = null;
        $database = null;
        $username = null;
        $password = null;

        $available_connections = array_keys(config('database.connections'));
        $connection = $this->choice('Choose a connection type', $available_connections);

        if($connection == "sqlite"){
            $path = database_path('database.sqlite');
            touch($path);
            $this->info('Database file created at ' . $path);
        } else{
            $defaultPort = $connection == "mysql" ? 3306
                               : ($connection == "pgsql" ? 5432 : null);

            $host = $this->ask('Database host', 'localhost');
            $port = $this->ask('Database port', $defaultPort);
            $database = $this->ask('Database name', 'latihan');
            $username = $this->ask('Database username', 'root');
            $password = $this->secret('Database password');
        }

        $settings = compact('connection', 'host', 'port', 'database', 'username', 'password');
        $this->updateEnvironmentFile($settings);

        if(!$this->testDbConnection()){
            $this->error('Tidak dapat terhubung ke Database.');
            goto install_database;
        }
    }

    /**
     * This method is to test the DB connection.
     *
     * @return boolean
    */
    private function testDbConnection(){
        $this->line('Checking DB connection.');

        try{
            DB::connection(DB::getDefaultConnection())->reconnect();
        }catch(\Exception $e){
            return false;
        }

        $this->info('Terhubung ke Database');
        return true;
    }

    /**
     * Updates the environment file with the given database settings.
     *
     * @param  string  $settings
     * @return void
     */
    private function updateEnvironmentFile($settings)
    {
        $env_path = base_path('.env');
        DB::purge(DB::getDefaultConnection());

        foreach($settings as $key => $value){
            $key = 'DB_' . strtoupper($key);
            $line = $value ? ($key . '=' . $value) : $key;
            putenv($line);
            file_put_contents($env_path, preg_replace(
                '/^' . $key . '.*/m',
                $line,
                file_get_contents($env_path)
            ));
        }

        config()->offsetSet("database", include(config_path('database.php')));

    }

    /**
     * Migrate the Database.
     *
     * @return void
    */
    private function migrate(){
        $this->line("\nStarting DB Migration...");
        $this->call('migrate');
    }

    /**
     * Seeds the Database.
     *
     * @return void
    */
    private function seed(){
        $this->line("\nStarting DB Seeding...");
        $this->call('db:seed');
    }

    /**
     * Sets up the application key.
     *
     * @return void
    */
    private function setUpKey(){
        $this->call('key:generate');
        $this->info("\nApplication installation completed!");
        $this->info("\nAnda bisa mengakses nya sekarang!");
    }

    /**
     * Sets up the application key.
     *
     * @return void
    */
    private function setSekolah(){

        system('clear');

        $this->line('=======================');
        $this->line('|  EduStar CMS v1.0.0 |');
        $this->line('=======================');

        $bentuk_pendidikan = array_keys(DataSekolah::bentukPendidikan());

        $nama_sekolah = $this->ask('Nama Sekolah Anda');
        $bentuk_pendidikan = $this->choice('Bentuk Pendidikan' , $bentuk_pendidikan);
        $alamat_sekolah = $this->ask('Alamat Sekolah');

        $sekolah = Sekolah::first();

        if ($sekolah) //Jika data sekolah ada
        {
            $sekolah->delete();
        }

        $sekolah = new Sekolah;
        $sekolah->nama_sekolah = $nama_sekolah;
        $sekolah->bentuk_pendidikan = $bentuk_pendidikan;
        $sekolah->alamat = $alamat_sekolah;

        $sekolah->save();

    }
}
