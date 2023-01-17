<?php include '../../Partials/header.php'; ?>
<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $name = stripcslashes($name);
    $surname = stripcslashes($surname);
    $email = stripcslashes($email);
    $username = stripcslashes($username);
    $password = stripcslashes($password);

    $name = mysqli_real_escape_string($db,$name);
    $surname = mysqli_real_escape_string($db,$surname);
    $email = mysqli_real_escape_string($db,$email);
    $username = mysqli_real_escape_string($db,$username);
    $password = mysqli_real_escape_string($db,$password);

    $sql = "INSERT INTO admins (name, surname, email, username, password) VALUES 
            ('$name','$surname','$email','$username','$password')";
    $result = mysqli_query($db,$sql);

    header("Location: ../Public/login.php");
}
?>

<form action="" method="post">
    <div class="registration-container">
        <h1>Registrácia-Admin</h1>
        <hr>

        <label for="name"><b>Meno</b></label>
        <input class="input-reg" type="text" placeholder="Meno..." name="name" id="name" required>

        <label for="surname"><b>Priezvisko</b></label>
        <input class="input-reg" type="text" placeholder="Priezvisko..." name="surname" id="surname" required>

        <label for="email"><b>Email</b></label>
        <input class="input-reg" type="text" placeholder="Email..." name="email" id="email" required>

        <label for="username"><b>Prihlasovacie meno</b></label>
        <input class="input-reg" type="text" placeholder="Prihlasovacie meno..." name="username" id="username" required>

        <label for="password"><b>Heslo</b></label>
        <input class="input-reg" type="password" placeholder="Heslo..." name="password" id="password" required>

        <button type="submit" class="regbtn">REGISTROVAŤ</button>
    </div>

    <div class="container signin">
        <p>Už máš účet? <a href="login.php">Prihlás sa</a>.</p>
    </div>
</form>

<?php include '../../Partials/footer.php'; ?>
