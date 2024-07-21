<?php
/*include("php/config.php");

if(isset($_POST['username'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $dateofbirth = $_POST['dateofbirth'];
    $telephone = $_POST['telephone'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];

    // Verify if the email is unique
    $stmt = $con->prepare("SELECT email FROM elitboxer WHERE email=?");
    if ($stmt === false) {
        die('Prepare failed: ' . htmlspecialchars($con->error));
    }

    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if($stmt->num_rows != 0) {
        echo "<div class='message'>
                  <p>This email is used, try another one</p>
              </div><br>";
        echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button></a>";
    } else {
        $stmt = $con->prepare("INSERT INTO elitboxer (username, email, dateofbirth, telephone, gender, password) VALUES (?, ?, ?, ?, ?, ?)");
        if ($stmt === false) {
            die('Prepare failed: ' . htmlspecialchars($con->error));
        }
        
        $stmt->bind_param("ssssss", $username, $email, $dateofbirth, $telephone, $gender, $password);
        
        if ($stmt->execute()) {
            echo "<div class='message'>
                      <p>Registration Successful</p>
                  </div><br>";
            echo "<a href='login.php'><button class='btn'>Log in</button></a>";
        } else {
            echo "<div class='message'>
                      <p>Error Occurred: " . htmlspecialchars($stmt->error) . "</p>
                  </div><br>";
        }
    }
    $stmt->close();
    $con->close();
} else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <header>Sign Up</header>
            <form action="register.php" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                </div>

                <div class="field input">
                    <label for="dateofbirth">Date of Birth</label>
                    <input type="date" name="dateofbirth" id="dateofbirth" required>
                </div>

                <div class="field input">
                    <label for="telephone">Telephone</label>
                    <input type="number" name="telephone" id="telephone" required>
                </div>

                <div class="field">
                    <label>Gender</label><br>
                    <input type="radio" name="gender" value="male" required> Male<br>
                    <input type="radio" name="gender" value="female" required> Female<br>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>

                <div class="field">
                    <input type="submit" name="submit" value="Sign Up">
                    <input type="reset" value="Reset">
                </div>
            </form>

            <div class="links">
                Are you a registered member? <a href="login.php"><button><strong>Sign in</strong></button></a>
            </div>
        </div>
    </div>
</body>
</html>

<?php } ?>
