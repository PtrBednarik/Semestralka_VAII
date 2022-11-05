<?php include 'Partials/header.php'; ?>




<div style="height: 100vh">
    <form action="login-chceck.php" method="post">
        <section class="login_section">
            <h2 style="margin-top: 10%">Prihlásenie</h2>
            <input name="username" type="text" placeholder="Username">
            <input name="password" type="password" placeholder="Heslo"><br>
            <button class="login_button" value="submit" type="submit">Prihlásiť</button>
        </section>
    </form>
</div>


<?php
include 'inc/config.php';
//session_start();
//if ($_SERVER ["REQUEST_METHOD"] == "POST") {
//    $myusername = mysqli_real_escape_string($db,$_POST['username']);
//    $mypassword = mysqli_real_escape_string($db,$_POST['heslo']);
//
//    $sql = "SELECT id FROM users WHERE username = '$myusername' and heslo = '$mypassword'";
//
//    $result = mysqli_query($db,$sql);
//    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//    $active = $row['active'];
//    $count = mysqli_num_rows($result);
//
//    if ($count == 1) {
//        $_SESSION('username');
//        $_SESSION['login_user'] = $myusername;
//
//        header("location: news.php");
//    }
//    else {
//        $error = "Zadal si zle meno alebo heslo!!!";
//    }
//}



?>


<?php include 'Partials/footer.php'; ?>
