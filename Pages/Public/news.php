<?php include '../../Partials/header.php'; ?>
<?php include '../Actions/logic.php'; ?>

<div class="title-container">
    <h3>Aktuality</h3>
</div>

<div class="container mt-5">

    <!-- Display any info -->
    <?php if(isset($_REQUEST['info'])){ ?>
        <?php if($_REQUEST['info'] == "added"){?>
            <div class="alert alert-success" role="alert">
                Príspevok bol úspešne pridaný
            </div>
        <?php } else if ($_REQUEST['info'] == "updated") {?>
            <div class="alert alert-success" role="alert">
                Príspevok bol úspešne upravený
            </div>
        <?php } else if ($_REQUEST['info'] == "deleted") {?>
            <div class="alert alert-danger" role="alert">
                Príspevok bol úspešne zmazaný
            </div>
        <?php } ?>
    <?php } ?>
    <?php session_start();
    if (isset($_SESSION['login_admin'])) {
    ?>
    <!-- Create a new Post button -->
    <div class="text-center">
        <a href="../Actions/create.php" class="btn create-button btn-primary">+ Nový príspevok</a>
    </div>

    <?php
    }
    session_write_close();
    ?>

    <!--------Blog section---------------->
    <section id="blog">
        <!--blog-container--->
        <div class="blog-container">
            <?php foreach($query as $q){ ?>
            <div class="blog-box">
                <div class="blog-text">
                    <a class="blog-title" href="../Actions/view.php?tag=news&id=<?php echo $q['id']; ?>"><?php echo $q['title'];?></a>
                    <p><?php echo substr($q['content'], 0, 200);?>...</p>
                    <a href="../Actions/view.php?tag=news&id=<?php echo $q['id']; ?>">Viac</a>
                </div>
            </div>
            <?php }?>
        </div>
    </section>
</div>


<?php include '../../Partials/footer.php'; ?>




