<?php include 'Partials/header.php'; ?>
<?php include 'logic.php'; ?>


<div class="container mt-5">

    <?php foreach($query as $q) {?>
        <form method="POST">
            <input type="text" hidden value='<?php echo $q['id']?>' name="id">
            <input type="text" placeholder="Blog Title" class="form-control my-3
                    bg-dark text-white text-center" name="title"
                    value="<?php echo $q['title']?>">
            <textarea name="content" class="form-control my-3 bg-dark text-white"
                      cols="30" rows="10"><?php echo $q['content']?></textarea>
            <button class="btn btn-dark" name="update">Update</button>
        </form>
    <?php } ?>

</div>




<?php include 'Partials/footer.php'; ?>
