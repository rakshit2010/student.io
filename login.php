<?php
session_start();
$error = "";

$users = [
    ["email" => "12202080601115@adit.ac.in", "password" => "rakshit@123", "redirect" => "homepage.html"],
    ["email" => "12202080601149@adit.ac.in", "password" => "kirtan@123", "redirect" => "homepaged.html"],
    //["email" => "12202080601115@adit.ac.in", "password" => "rakshit123", "redirect" => "homepageh.html"]
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $password = $_POST["password"];

    foreach ($users as $user) {
        if ($user["email"] == $email && $user["password"] == $password) {

            header("Location: " . $user["redirect"]);
            exit;

        } else {

            $error = "Invalid email or password.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>

        <?php if (!empty($error)): ?>
            <p id="error-message"><?php echo $error; ?></p>
        <?php endif; ?>

        <form method="POST" action="login.php">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
