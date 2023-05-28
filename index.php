<?php
require_once 'main_page/header.php';
?>

<main id="main">

    <?php
    if (isset($_REQUEST['page'])) {
        $page = $_REQUEST['page'];
        if (!empty($page)) {
            require_once 'main_page' . '/' . $page . '.php';
        } else {
            require_once 'main_page/home.php';
        }
    } else {
        $page = 'home';
        require_once 'main_page/home.php';
    }
    ?>

</main>

<?php
require_once 'main_page/footer.php';
?>