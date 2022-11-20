<?php include 'Partials/header.php'; ?>
<?php include 'logic.php'; ?>


<div class="container mt-5 create-container" >
    <div class="row">
        <div class="col-lg-8 mx-auto bg-white p-4 shadow">
            <a class="back-link" href="news.php">&larrhk; Späť</a>
            <h1 class="h3 text-center">Pridať príspevok</h1>
            <form method="GET">
                <div class="form-group">
                    <label for="title">Nadpis</label>
                    <input type="text" name="title" maxlength="255" class="form-control">
                </div>
                <div class="form-group">
                    <label for="description">Obsah</label>
                    <textarea name="content" class="form-control my-3" rows="7" ></textarea>
                </div>
                <button name="new_post" class="btn create-button btn-primary">Pridať</button>
            </form>
        </div>
    </div>
</div>


<?php include 'Partials/footer.php'; ?>
