<?php

require_once 'koneksi.php';

require_once 'header.php';
require_once 'sidebar.php';

// Inisiasi
?>

<main id="main" class="main">

    <?php

    if (isset($_REQUEST['page'])) {
        $page = $_REQUEST['page'];
        if (!empty($page)) {
            require_once  $page . '.php';
        } else {
            require_once 'dashboard.php';
        }
    } else {
        $page = 'dashboard';
        require_once 'dashboard.php';
    }

    ?>

</main>

<?php
require_once 'footer.php';
?>