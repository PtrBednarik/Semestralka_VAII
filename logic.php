<?php


    $sql = "SELECT * FROM article";
    $query = mysqli_query($db, $sql);

    if (isset($_REQUEST["new_post"])) {
        $title = $_REQUEST["title"];
        $content = $_REQUEST["content"];

        $sql = "INSERT INTO article (title, content) VALUES ('$title', '$content')";
        mysqli_query($db, $sql);

        header("Location: news.php?info=added");
        exit();
    }

    if (isset($_REQUEST['id'])) {
        $id = $_REQUEST['id'];

        $sql = "SELECT * FROM article WHERE id = $id";
        $query = mysqli_query($db, $sql);
    }

    if (isset($_REQUEST['update'])) {
        $id = $_REQUEST['id'];
        $title = $_REQUEST["title"];
        $content = $_REQUEST["content"];

        $sql = "UPDATE article SET title = '$title', content = '$content' WHERE id = $id";
        mysqli_query($db, $sql);

        header("Location: news.php?info=updated");
        exit();
    }

    if (isset($_REQUEST['delete'])) {
        $id = $_REQUEST['id'];

        $sql = "DELETE FROM article WHERE id = $id";
        $query = mysqli_query($db, $sql);

        header("Location: news.php?info=deleted");
        exit();
    }

?>