<?php include '../../Partials/header.php'; ?>

<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $myusername = mysqli_real_escape_string($db,$_POST['username']);
    $mypassword = mysqli_real_escape_string($db,$_POST['password']);

//    $mypasswordHashed = PASSWORD_HASH($mypassword, PASSWORD_DEFAULT);
    //Pre beznych prihlasenych
    $sql = "SELECT id FROM users WHERE username = '$myusername' and password = '$mypassword'";


        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $active = $row['active'];

        $count = mysqli_num_rows($result);
        // Ak dostanem $myusername aj $mypassword, riadok z tabulky musi byt 1
        if ($count == 1) {
            $_SESSION["myusername"];
            $_SESSION['login_user'] = $myusername;

            header("location: index.php");
        } else if ($row == null) {
            redirect('login.php');
            //echo "Nesprávne prihlasovacie meno alebo heslo!";
            //$error = "Nesprávne prihlasovacie meno alebo heslo!";
        }
}
?>
<div style="height: 100vh">
    <form action="" method="post">
        <section class="login_section">
            <h2 style="margin-top: 10%">Prihlásenie</h2>
            <input name="username" type="text" placeholder="Username">
            <input name="password" type="password" placeholder="Heslo" id="loginPasswd" class="passwdInput"><br>
            <div class="showP" style="text-align: center !important;">
                <input class="showPasswd" type="checkbox"  onclick="passwordUnhidden()">Ukáž heslo!
            </div>
            <button class="login_button" value="submit" type="submit">Prihlásiť</button>

            <a style="text-decoration: none; padding: 5px; font-size: 15px; color: #eb6d3f" href="registration.php">Registrovať</a>
            <br>
            <a style="text-decoration: none; font-size: 15px; color: #eb6d3f" href="adminLogin.php">Prihlás sa ako admin</a>
        </section>
    </form>
</div>

<?php include '../../Partials/footer.php'; ?>
