<?php include("header.php"); ?>
<main>
    <?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        if ($page === 'categorias') {
            include("categoriass.php");
        } elseif ($page === 'reserva') {
            include("reserva.php");
        } else {
            include("home.php");
        }
    } else {
        include("home.php");
    }
    ?>
</main>
<?php include("footer.php"); ?>