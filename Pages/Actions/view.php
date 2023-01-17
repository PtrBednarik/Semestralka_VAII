<?php include '../../Partials/header.php'; ?>
<?php include 'logic.php'; ?>

<section class="section-view">
    <?php foreach($query as $q) {?>
    <div class="container mt-5">
        <a class="back-link" href="../Public/<?php echo $_GET['tag'] ?>.php">&larrhk; Späť</a>
        <h1><?php echo $q['title'];?></h1>
        <div>
            <p><?php echo nl2br($q['content']);?></p>
        </div>
        <?php
        session_start();
        if (isset($_SESSION['login_admin'])) {
        ?>
        <div class="view-buttons">
            <a href="edit.php?tag=<?php echo $_GET['tag'] ?>&id=<?php echo $q['id'];?>" class="btn btn-light btn-sm">Upraviť</a>

            <form method="POST">
                <input type="text" hidden name="id" value="<?php echo $q["id"];?>">
                <button class="btn btn-danger btn-sm ml-2" name="delete">Zmazať</button>
            </form>
        </div>
    </div>
    <?php
        }
    else if (isset($_SESSION['login_user'])) {
    }
    }
            ?>
</section>



<?php include '../../Partials/footer.php'; ?>
