<?php include 'Partials/header.php'; ?>
<?php include 'logic.php'; ?>

<!--<div class="container mt-5">-->
<!---->
<!--    --><?php //foreach($query as $q) {?>
<!--    <div class="bg-dark p-5 rounded-lg text-white text-center">-->
<!--        <h1>--><?php //echo $q['title'];?><!--</h1>-->
<!---->
<!--    <div class="d-flex mt-2 justify-content-center align-items-center">-->
<!--        <a href="edit.php?id=--><?php //echo $q['id'];?><!--" class="btn btn-light btn-sm">Upraviť</a>-->
<!---->
<!--        <form method="POST">-->
<!--            <input type="text" hidden name="id" value="--><?php //echo $q["id"];?><!--">-->
<!--            <button class="btn btn-danger btn-sm ml-2" name="delete">Zmazať</button>-->
<!--        </form>-->
<!---->
<!--    </div>-->
<!--        -->
<!--    </div>-->
<!--    <p class="mt-5 border-left border-dark pl-3">--><?php //echo $q['content'];?><!--</p>-->
<!--    --><?php //} ?>
<!---->
<!--</div>-->



<section class="section-view">
    <?php foreach($query as $q) {?>
    <div class="container mt-5">
        <a class="back-link" href="news.php">&larrhk; Back</a>
        <h1><?php echo $q['title'];?></h1>
        <div>
            <p><?php echo $q['content'];?></p>
        </div>
        <div class="view-buttons">
            <a href="edit.php?id=<?php echo $q['id'];?>" class="btn btn-light btn-sm">Upraviť</a>
            <form method="POST">
                <input type="text" hidden name="id" value="<?php echo $q["id"];?>">
                <button class="btn btn-danger btn-sm ml-2" name="delete">Zmazať</button>
            </form>
        </div>
    </div>
    <?php } ?>
</section>



<?php include 'Partials/footer.php'; ?>
