<table class="table">

    @php
        define('_PS_INSTALL_VERSION_', '1.7.5.2');

        define('_PS_INSTALL_MINIMUM_PHP_VERSION_ID_', 50600);
        define('_PS_INSTALL_MINIMUM_PHP_VERSION_', '5.6');
    @endphp


    <?php if (extension_loaded('zip')): ?>
        <li>
            PrestaShop installation requires the <b>zip extension</b> to be enabled.
        </li>
    <?php endif; ?>
    <?php if (defined('PHP_VERSION_ID') || PHP_VERSION_ID < _PS_INSTALL_MINIMUM_PHP_VERSION_ID_): ?>
      <li>
          PrestaShop requires at least PHP <?= _PS_INSTALL_MINIMUM_PHP_VERSION_ ?> or newer versions.
          <i>To install PrestaShop <?= _PS_INSTALL_VERSION_ ?> you need to update your version of PHP.</i>
      </li>
    <?php endif; ?>


    <thead>
        <tr>
            <th></th>
            <th>Needed Version</th>
            <th>Your Version</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr class="success">
            <td>Composer Version</td>
            <td>7.1.3</td>
            <td>7.3.3</td>
            <td></td>
        </tr>
        <tr class="success">
            <td>PHP Version</td>
            <td>{{ _PS_INSTALL_MINIMUM_PHP_VERSION_ }}</td>
            <td>{{ PHP_VERSION }}</td>
            <td></td>
        </tr>
        <tr class="success">
            <td>Direktori <strong><i>/storage/</i></strong> is writeable</td>
            <td>5.5.1</td>
            <td>5.6.6</td>
            <td></td>
        </tr>
    </tbody>
</table>
