@extends('admin.layout')

@section('title')
Tenaga Pendidik
@endsection

@section('subtitle')
Halaman untuk manajemen Tenaga Pendidik
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">

        <div id="myData"></div>

    </div>
</div>


{{-- <div class="br-section-wrapper"> --}}
{{-- </div> --}}
@endsection


@section('styles')

<style type="text/css">

</style>

<link href="http://tabulator.info/css/tabulator/4.2/tabulator_site.css" rel="stylesheet">
{{-- <link href="http://tabulator.info/css/tabulator/4.2/tabulator.css" rel="stylesheet"> --}}
{{-- <link href="http://tabulator.info/css/tabulator/4.2/tabulator_midnight.css" rel="stylesheet"> --}}
{{-- <link href="http://tabulator.info/css/tabulator/4.2/tabulator_modern.css" rel="stylesheet"> --}}
{{-- <link href="http://tabulator.info/css/tabulator/4.2/tabulator_simple.css" rel="stylesheet"> --}}
{{-- <link href="http://tabulator.info/css/tabulator/4.2/bootstrap/tabulator_bootstrap.css" rel="stylesheet"> --}}
{{-- <link href="http://tabulator.info/css/tabulator/4.2/bootstrap/tabulator_bootstrap4.css" rel="stylesheet"> --}}
{{-- <link href="http://tabulator.info/css/tabulator/4.2/semantic-ui/tabulator_semantic-ui.css" rel="stylesheet"> --}}
{{-- <link href="http://tabulator.info/css/tabulator/4.2/bulma/tabulator_bulma.css" rel="stylesheet"> --}}


{{-- <link rel="stylesheet" type="text/css" href="{{ asset('http://tabulator.info/css/flexigrid.pack.css') }}" /> --}}
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4http://tabulator.info/css/bootstrap.min.css"> --}}

@endsection

@section('scripts')

<script src="{{ asset('/lib/tabulator/js/tabulator.min.js') }}"></script>

<script type="text/javascript" src="http://oss.sheetjs.com/js-xlsx/xlsx.full.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.0.5/jspdf.plugin.autotable.js"></script>
<script>
var table = new Tabulator("#myData", {

    //theming table

    ajaxFiltering:true,
    // height:"311px",
    layout:"fitColumns",

    pagination:"remote", //enable remote pagination
    ajaxURL:"/admin/tenaga_pendidik/get_data", //set url for ajax request
    paginationSize: 20,
    paginationSize:5,

    ajaxFiltering:true,

    // groupBy:"jenis_kelamin",

    placeholder:"No Data Set",
    columns:[
        {title:"NIK", field:"nik"},
        {title:"Name", field:"nama", width:200, formatter:function(cell){
            var str = '';
            str += '<a href="/admin/tenaga_pendidik/'+ cell.getValue() +'">'+ cell.getValue() +'</a>'

            return str
        }},
        {title:"Jenis Kelamin", width:140, field:"jenis_kelamin", formatter:function(cell, formatterParams, onRendered)
        {
            var kelamin =  cell.getValue() //return the contents of the cell;
            var string_jk = '';

            if(kelamin == 'l')
            {
                $string_jk = 'Laki-laki'
            }
            else
            {
                string_jk = 'Perempuan'
            }

            return string_jk.toLocaleUpperCase()
        }},
        {
            title:"Alamat", field:"kelurahan_id"
        },
        {
            title:"", field:"id",  download:false, formatter:function(cell, formatterParams, onRendered){
                var str = '';
                str += '<div class="btn-group">'
                str += '<a href="" class="btn btn-sm btn-primary"><i class="fa fa-info"></i> Detail</a>'
                str += '<a href="" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Edit</a>'
                str += '<a href="" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</a>'
                str += '</div>'

                return str;

            }
        },
    ],
});



</script>




{{-- <script>
$("#myData").flexigrid({
    url: "{{ route('admin.tenaga_pendidik.data') }}",
    width: 'auto',
    dataType: 'json',
    method: 'GET',
    colModel: [
        {
            width: 160,
            display: 'NIK',
            name: 'nik',
            sortable: true,
            align: 'left'
        },
        {
            display: 'Nama Lengkap',
            width: 200,
            name: 'nama',
            sortable: true,
            align: 'left'
        },
        {
            display: 'JK',
            width: 150,
            name: 'jenis_kelamin',
            sortable: true,
            align: 'center'
        }
    ],
    searchitems: [{
        display: 'name',
        name: 'name'
    }, {
        display: 'Name',
        name: 'employee_salary',
        isdefault: true
    }],
    buttons: [
        {'name':'Tambah Data', 'bclass':'add', 'onpress': gridAction},
        {'separator':true},
        {'name':'Edit Data', 'bclass':'edit', 'onpress': gridAction},
        {'separator':true},
        {'name':'Hapus Data', 'bclass':'delete', 'onpress': gridAction},
    ],
    sortname: "iso",
    sortorder: "asc",
    usepager: true,
    title: 'Data Tenaga Pengajar',
    useRp: true,
    rp: 15,
    showTableToggleBtn: true,
    height: 'auto',
    striped: true,
    // width : 550
});

function gridAction(com, grid) {
    if (com == 'Tambah Data') {
        alert(com)
        $('#add_model').modal('show');
    } else if (com == 'Hapus Data') {
        var conf = confirm('Delete ' + $('.trSelected', grid).length + ' items?');
        alert(conf);
        if (conf) {
            $.each($('.trSelected', grid),
            function (key, value) {
                $.post('response.php', {
                    id: value.firstChild.innerText,
                    action: com.toLowerCase()
                }, function () {
                    $("#employees").flexReload();
                });
            });
        }
    } else if (com == 'Edit Data') {
        $('#edit_model').modal('show');
        if ($('.trSelected', grid).length > 0) {

            $.each($('.trSelected', grid),
            function (key, value) {

                    // collect the data
                $('#edit_id').val(value.children[0].innerText); // in case we're changing the key
                $('#edit_name').val(value.children[1].innerText);
                $('#edit_salary').val(value.children[2].innerText);
                $('#edit_age').val(value.children[3].innerText);
            });
        } else {
            alert('Now row selected! First select row, then click edit button');
        }
    }
}

function ajaxAction(action) {
    data = $("#frm_" + action).serializeArray();
    $.ajax({
        type: "POST",
        url: "response.php",
        data: data,
        dataType: "json",
        success: function (response) {
            $('#' + action + '_model').modal('hide');
            $("#employees").flexReload();
        }
    });
}

$("#btn_add").click(function () {
    ajaxAction('add');
});
$("#btn_edit").click(function () {
    ajaxAction('edit');
});
</script> --}}

@endsection
