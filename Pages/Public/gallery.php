<?php include '../../Partials/header.php'; ?>

<div class="title-container">
    <h3>Galéria</h3>
</div>

<?php
    $PathName = $_SERVER['REQUEST_URI'];
?>

<div class="gallery-menu">
    <div>
        <ul>
            <li>
                <a href="http://localhost/Semestralka/Pages/Public/gallery.php?year=2022">2022</a>
            </li>
            <li>
                <a href="http://localhost/Semestralka/Pages/Public/gallery.php?year=2021">2021</a>
            </li>
            <li>
                <a href="http://localhost/Semestralka/Pages/Public/gallery.php?year=2020">2020</a>
            </li>
            <li>
                <a href="http://localhost/Semestralka/Pages/Public/gallery.php?year=2019">2019</a>
            </li>
            <li>
                <a href="http://localhost/Semestralka/Pages/Public/gallery.php?year=2018">2018</a>
            </li>
            <li>
                <a href="http://localhost/Semestralka/Pages/Public/gallery.php?year=2017">2017</a>
            </li>
            <li>
                <a href="http://localhost/Semestralka/Pages/Public/gallery.php?year=2016">2016</a>
            </li>
            <li>
                <a href="http://localhost/Semestralka/Pages/Public/gallery.php?year=2015">2015</a>
            </li>
            <li>
                <a href="http://localhost/Semestralka/Pages/Public/gallery.php?year=2014">2014</a>
            </li>
            <li>
                <a href="http://localhost/Semestralka/Pages/Public/gallery.php?year=2013">2013</a>
            </li>
            <li>
                <a href="http://localhost/Semestralka/Pages/Public/gallery.php?year=2012">2012</a>
            </li>
            <li>
                <a href="http://localhost/Semestralka/Pages/Public/gallery.php?year=2011">2011</a>
            </li>
            <li>
                <a href="http://localhost/Semestralka/Pages/Public/gallery.php?year=2010">2010</a>
            </li>
            <li>
                <a href="http://localhost/Semestralka/Pages/Public/gallery.php?year=2009">2009</a>
            </li>
            <li>
                <a href="http://localhost/Semestralka/Pages/Public/gallery.php?year=2008">2008</a>
            </li>
            <li>
                <a href="http://localhost/Semestralka/Pages/Public/gallery.php?year=2007">2007</a>
            </li>
            <li>
                <a href="http://localhost/Semestralka/Pages/Public/gallery.php?year=2006">2006</a>
            </li>
            <li>
                <a href="http://localhost/Semestralka/Pages/Public/gallery.php?year=2005">2005</a>
            </li>
            <li>
                <a href="http://localhost/Semestralka/Pages/Public/gallery.php?year=2004">2004</a>
            </li>
            <li>
                <a href="http://localhost/Semestralka/Pages/Public/gallery.php?year=2003">2003</a>
            </li>
            <li>
                <a href="http://localhost/Semestralka/Pages/Public/gallery.php?year=2002">2002</a>
            </li>
            <li>
                <a href="http://localhost/Semestralka/Pages/Public/gallery.php?year=2001">2001</a>
            </li>
<!--            <li>-->
<!--                <a href="http://localhost/Semestralka/Pages/Public/gallery.php?year=2000">2000</a>-->
<!--            </li>-->
            <li>
                <a href="http://localhost/Semestralka/Pages/Public/gallery.php?year=1999">1999</a>
            </li>
        </ul>
    </div>
</div>
<section>
    <div class="row-gallery">
        <?php
        $year = $_GET['year'];
        $sql = "SELECT * FROM images WHERE year = $year";
        $query = mysqli_query($db, $sql);

        if ($query->num_rows > 0) {
            while ($row = $query->fetch_assoc()) {
                $imagePathURL = '../../Zbor_fotky/'.$year.'/'.$row["filepath"];
//                $absoluteImageURL = 'C:/Programs/XAMPP/htdocs/Semestralka/Zbor_fotky/'.$year.'/'.$row["filepath"];
                ?>
                <div class="column-gallery">
                <a href="<?php echo $imagePathURL; ?>">
                    <img src="<?php echo $imagePathURL; ?>" alt=""/>
                </a>
                </div>
      <?php }
        } ?>
    </div>

</section>
<div>



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
<?php include '../../Partials/footer.php'; ?>







