<?php include 'Partials/header.php'; ?>
<?php include 'logic.php'; ?>

<?php   //$sql = "SELECT * FROM article";
        //$query = mysqli_query($db, $sql);
?>

<div class="title-container">
    <h3>Aktuality</h3>
</div>

<div class="container mt-5">

    <!-- Display any info -->
    <?php if(isset($_REQUEST['info'])){ ?>
        <?php if($_REQUEST['info'] == "added"){?>
            <div class="alert alert-success" role="alert">
                Post has been added successfully
            </div>
        <?php } else if ($_REQUEST['info'] == "updated") {?>
            <div class="alert alert-success" role="alert">
                Post has been updated successfully
            </div>
        <?php } else if ($_REQUEST['info'] == "deleted") {?>
            <div class="alert alert-danger" role="alert">
                Post has been deleted successfully
            </div>
        <?php } ?>
    <?php } ?>

    <!-- Create a new Post button -->
    <div class="text-center">
        <a href="create.php" class="btn btn-outline-dark">+ Create a new post</a>
    </div>

    <!-- Display posts from database -->
    <div class="row">
        <?php foreach($query as $q){ ?>
            <div class="col-12 col-lg-4 d-flex justify-content-center">
                <div class="card text-white bg-dark mt-5" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $q['title'];?></h5>
                        <p class="card-text"><?php echo substr($q['content'], 0, 50);?>...</p>
                        <a href="view.php?id=<?php echo $q['id']?>" class="btn btn-light">Read More <span class="text-danger">&rarr;</span></a>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>

</div>
<?php include 'Partials/footer.php'; ?>




