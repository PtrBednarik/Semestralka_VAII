<?php include '../../Partials/header.php';
//include '../../inc/session.php';
//include '../../inc/sessionAdmin.php';
session_start();
if (isset($_SESSION['login_admin']) || isset($_SESSION['login_user'])) {
$sql = "SELECT * FROM adminposts";
$query = mysqli_query($db, $sql);
?>


    <div class="title-container">
        <h3>Informácie</h3>
    </div>
<?php
    if (isset($_SESSION['login_admin'])) {
    ?>
    <!-- Create a new Post button -->
    <div class="text-center">
        <a href="../Actions/create.php" class="btn create-button btn-primary">+ Nový príspevok</a>
    </div>
<?php } ?>

    <section id="blog">
        <!--blog-container--->
        <div class="blog-container">

            <?php foreach($query as $q){ ?>
                <!--box-1------->
                <div class="blog-box">
                    <!--text------->
                    <div class="blog-text">
                        <a class="blog-title" href="../Actions/view.php?tag=info&id=<?php echo $q['id']; ?>"><?php echo $q['title'];?></a>
                        <p><?php echo substr($q['content'], 0, 200);?>...</p>
                        <a href="../Actions/view.php?tag=info&id=<?php echo $q['id']; ?>">Viac</a>
                    </div>
                </div>
            <?php }?>
        </div>
    </section>
<?php include '../../Partials/footer.php';

}
session_write_close();


?>