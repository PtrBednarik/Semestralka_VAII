<?php include '../../Partials/header.php'; ?>
<?php include 'logic.php'; ?>


<div class="container mt-5 create-container" >
    <div class="row">
        <div class="col-lg-8 mx-auto bg-white p-4 shadow">
            <a class="back-link" href="../Public/news.php">&larrhk; Späť</a>
            <h1 class="h3 text-center">Pridať príspevok</h1>
            <form method="GET">
                <div class="form-group">
                    <label for="title">Nadpis</label>
<!--                    -->
                    <input type="text" required="text" name="title" maxlength="255" class="form-control">
                </div>
                <div class="form-group">
                    <label for="description">Obsah</label>
                    <textarea name="content" required="text" class="form-control my-3" rows="7" ></textarea>
                </div>
                <button name="new_post_news" class="btn create-button btn-primary">Pridať do aktualít</button>
                <button name="new_post_info" class="btn create-button btn-primary">Pridať do informácii</button>
            </form>
        </div>
    </div>
</div>


<?php include '../../Partials/footer.php'; ?>
