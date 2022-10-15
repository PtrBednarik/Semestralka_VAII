<?php include 'Partials/header.php'; ?>



<div class="title-container">
    <h3>Galéria</h3>
</div>
<!--    <h1 class="title">Galeria</h1>-->

<?php
    $PathName = $_SERVER['REQUEST_URI'];
?>

<div class="gallery-menu">
    <div>
        <ul>
            <li>
                <a href="http://localhost/Semestralka/gallery.php?id=2022">2022</a>
            </li>
            <li>
                <a href="http://localhost/Semestralka/gallery.php?id=2021">2021</a>
            </li>
            <li>
                <a href="http://localhost/Semestralka/gallery.php?id=2020">2020</a>
            </li>
            <li>
                <a href="http://localhost/Semestralka/gallery.php?id=2019">2019</a>
            </li>
            <li>
                <a href="http://localhost/Semestralka/gallery.php?id=2018">2018</a>
            </li>
            <li>
                <a href="http://localhost/Semestralka/gallery.php?id=2017">2017</a>
            </li>
            <li>
                <a href="http://localhost/Semestralka/gallery.php?id=2016">2016</a>
            </li>
            <li>
                <a href="http://localhost/Semestralka/gallery.php?id=2015">2015</a>
            </li>
            <li>
                <a href="http://localhost/Semestralka/gallery.php?id=2014">2014</a>
            </li>
            <li>
                <a href="http://localhost/Semestralka/gallery.php?id=2013">2013</a>
            </li>
        </ul>
    </div>
</div>
<!--    --><?php
//        echo $PathName;
//        if (intval($_GET['id']) == '2022') {
//            ?>
<!--            <img src="Assets/CSS/Images/tulen1.jpg">;-->
<!--            --><?php
//        }
//        if (intval($_GET['id']) == '2021') {
//            ?>
<!--            <img src="Assets/CSS/Images/tulen2.jpg">;-->
<!--            --><?php
//    }
//        echo intval($_GET['id']);
//    ?>
<?php include 'Partials/footer.php'; ?>







