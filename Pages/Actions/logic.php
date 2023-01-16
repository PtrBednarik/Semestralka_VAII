<?php

    $sql = "SELECT * FROM articles";
    $query = mysqli_query($db, $sql);

    $sqlPosts = "SELECT * FROM adminPosts";
    $queryPosts = mysqli_query($db, $sqlPosts);

    //CREATE
    if (isset($_REQUEST['new_post_news'])) {
        $title = $_REQUEST['title'];
        $content = $_REQUEST['content'];

//        $title = mysqli_real_escape_string($db, $_POST['title']);
        $title = str_replace("\\", "\\\\", $title, $num);
        $title = str_replace("'", "\'", $title, $num);
        $content = str_replace("\\", "\\\\", $content, $num);
        $content = str_replace( "'", "\'", $content, $num);

        $sql = "INSERT INTO articles (title, content) VALUES ('$title', '$content')";
        mysqli_query($db, $sql);

        header("Location: ../Public/news.php?info=added");
        exit();
    } else if (isset($_REQUEST['new_post_info'])) {
        $title = $_REQUEST['title'];
        $content = $_REQUEST['content'];

//        $title = mysqli_real_escape_string($db, $_POST['title']);
        $title = str_replace("\\", "\\\\", $title, $num);
        $title = str_replace("'", "\'", $title, $num);
        $content = str_replace("\\", "\\\\", $content, $num);
        $content = str_replace( "'", "\'", $content, $num);

        $sql = "INSERT INTO adminPosts (title, content) VALUES ('$title', '$content')";
        mysqli_query($db, $sql);

        header("Location: ../Public/info.php?info=added");
        exit();
    }

    //READ
    if ($_GET['tag'] == 'news' && isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
            $sql = "SELECT * FROM articles WHERE id = $id";
            $query = mysqli_query($db, $sql);

            //$sql = "SELECT * FROM articles WHERE title = $tag";
            //$query = mysqli_query($db, $sql);
    }

     if ($_GET['tag'] == 'info' && isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
            echo "mater";
            $sql = "SELECT * FROM adminposts WHERE id = $id";
            $query = mysqli_query($db, $sql);

    }

    //UPDATE
    if ($_GET['tag'] == 'info' && isset($_REQUEST['update'])) {
        $id = $_REQUEST['id'];
        $title = $_REQUEST['title'];
        $content = $_REQUEST['content'];

        $title = str_replace("\\", "\\\\", $title, $num);
        $title = str_replace("'", "\'", $title, $num);
        $content = str_replace("\\", "\\\\", $content, $num);
        $content = str_replace( "'", "\'", $content, $num);

        $sql = "UPDATE adminposts SET title = '$title', content = '$content' WHERE id = $id";
        mysqli_query($db, $sql);

        header("Location: ../Public/info.php?info=updated");
        exit();
    }

    if ($_GET['tag'] == 'news' && isset($_REQUEST['update'])) {
        $id = $_REQUEST['id'];
        $title = $_REQUEST['title'];
        $content = $_REQUEST['content'];

        $title = str_replace("\\", "\\\\", $title, $num);
        $title = str_replace("'", "\'", $title, $num);
        $content = str_replace("\\", "\\\\", $content, $num);
        $content = str_replace( "'", "\'", $content, $num);

        $sql = "UPDATE articles SET title = '$title', content = '$content' WHERE id = $id";
        mysqli_query($db, $sql);

        header("Location: ../Public/news.php?info=updated");
        exit();
    }


if ($_GET['tag'] == 'news' && isset($_REQUEST['delete'])) {
    $sql = "DELETE FROM articles WHERE id = $id";
    $query = mysqli_query($db, $sql);

    header("Location: ../Public/news.php?info=deleted");
    exit();
}

if ($_GET['tag'] == 'info' && isset($_REQUEST['delete'])) {
    $sql = "DELETE FROM adminposts WHERE id = $id";
    $query = mysqli_query($db, $sql);

    header("Location: ../Public/info.php?info=deleted");
    exit();
}



    //DELETE
//    if (isset($_REQUEST['delete'])) {
//        $id = $_REQUEST['id'];
//
//        $sql = "DELETE FROM articles WHERE id = $id";
//        $query = mysqli_query($db, $sql);
//
//        header("Location: ../Public/news.php?info=deleted");
//        exit();
//    }
?>