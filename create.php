<?php include 'Partials/header.php'; ?>
<?php include 'logic.php'; ?>

<?php
//
//    $sql = "SELECT * FROM article";
//    $query = mysqli_query($db, $sql);
//
//    if (isset($_REQUEST["new_post"])) {
//        $title = $_REQUEST["title"];
//        $content = $_REQUEST["content"];
//
//        $sql = "INSERT INTO article (title, content) VALUES ('$title', '$content')";
//        mysqli_query($db, $sql);
//
//        header("Location: news.php?info=added");
//        exit();
//    }
//
//?>

<div class="container mt-5">
    <form method="GET">
        <input type="text" name="title" placeholder="Blog Title" class="form-control
         bg-dark text-white my-3 text-center">
        <textarea name="content" class="form-control bg-dark text-white my-3"></textarea>
        <button name="new_post" class="btn btn-dark">Add Post</button>
    </form>
</div>


<?php include 'Partials/footer.php'; ?>
