<?php include 'Partials/header.php'; ?>
<?php include 'logic.php'; ?>


<!--<div class="container mt-5">-->
<!---->
<!--    --><?php //foreach($query as $q) {?>
<!--        <form method="POST">-->

<!--            <input type="text" hidden value='--><?php //echo $q['id']?><!--' name="id">-->
<!--            <input type="text" placeholder="Blog Title" class="form-control my-3-->
<!--                    bg-dark text-white text-center" name="title"-->
<!--                    value="--><?php //echo $q['title']?><!--">-->

<!--            <textarea name="content" class="form-control my-3 bg-dark text-white"-->
<!--                      cols="30" rows="10">--><?php //echo $q['content']?><!--</textarea>-->
<!--            <button class="btn btn-dark" name="update">Upraviť</button>-->
<!--        </form>-->
<!--    --><?php //} ?>
<!---->
<!--</div>-->

<div class="container mt-5 create-container" >
    <div class="row">
        <div class="col-lg-8 mx-auto bg-white p-4 shadow">
            <a class="back-link" href="news.php">&larrhk; Späť</a>
            <h1 class="h3 text-center">Upraviť príspevok</h1>
            <?php foreach($query as $q) {?>
            <form method="POST">
                <div class="form-group">
                    <label for="title">Nadpis</label>
                    <input type="text" hidden value='<?php echo $q['id'];?>' name="id">
                    <input type="text" name="title" class="form-control" value="<?php echo $q['title'];?>">
                </div>
                <div class="form-group">
                    <label for="description">Obsah</label>
                    <textarea name="content" class="form-control" rows="7">
                        <?php echo $q['content'];?>
                    </textarea>
                </div>
                <button name="update" class="btn create-button btn-primary">Upraviť</button>
            </form>
            <?php } ?>
        </div>
    </div>
</div>

<?php include 'Partials/footer.php'; ?>
