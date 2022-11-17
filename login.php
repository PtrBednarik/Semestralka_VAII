<?php include 'Partials/header.php'; ?>

<?php
//    session_start();
//    include ("inc/config.php");
//    //include ("functions.php");
//
//if ($_SERVER['REQUEST_METHOD'] == "POST")
//{
//    //something was posted
//    $username = $_POST['username'];
//    $password = $_POST['password'];
//
//    if (!empty($username) && !empty($password) && !is_numeric($username)) {
//
//        //read from databaase
//        $query = "select * from user where username = '$username' limit 1";
//
//        $result = mysqli_query($con, $query);
//
//        if ($result) {
//            if ($result && mysqli_num_rows($result) > 0) {
//                $user_data = mysqli_fetch_assoc($result);
//
//                if ($user_data['password'] === $password) {
//
//                    $_SESSION['user_id'] = $user_data['user_id'];
//                    header("Location: index.php");
//                    die;
//                }
//            }
//        }
//        echo "Nesprávne prihlasovacie meno alebo heslo!";
//    }
//    else {
//        echo "Nesprávne prihlasovacie meno alebo heslo!";
//    }
//}
//?>
<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $myusername = mysqli_real_escape_string($db,$_POST['username']);
    $mypassword = mysqli_real_escape_string($db,$_POST['password']);

    $sql = "SELECT id FROM user WHERE username = '$myusername' and password = '$mypassword'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if($count == 1) {
        $_SESSION["myusername"];
        $_SESSION['login_user'] = $myusername;

        header("location: index.php");
    }else {
        $error = "Napis pravne heslo vole!";
    }
}
?>

<div style="height: 100vh">
    <form action="" method="post">
        <section class="login_section">
            <h2 style="margin-top: 10%">Prihlásenie</h2>
            <input name="username" type="text" placeholder="Username">
            <input name="password" type="password" placeholder="Heslo"><br>
            <button class="login_button" value="submit" type="submit">Prihlásiť</button>
        </section>
    </form>
</div>


<?php
//include 'inc/config.php';
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
//
//?>


<?php include 'Partials/footer.php'; ?>
