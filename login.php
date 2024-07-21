<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/styles.css">
        <title>Log in</title>
    </head>
    <body>
        <div class="container">
            <div class="box form-box">
            <?php
            include("php/config.php");
            if(isset($_POST['submit'])) {
                $username = mysqli_real_escape_string($con,$_POST['username']);
                $password = mysqli_real_escape_string($con,$_POST['password']);

                $result = mysqli_query($con, "SELECT * FROM clients WHERE Username='$username' AND Password='$password'") or die ("No Match");

                $row = mysqli_fetch_assoc($result);

                if(is_array($row) && !empty($result)){
                    $_SESSION['valid'] = $row['username'];
                    $_SESSION['valid'] = $row['email'];
                    $_SESSION['valid'] = $row['dateofbirth'];
                    $_SESSION['valid'] = $row['telephone'];
                    $_SESSION['valid'] = $row['gender'];
                    $_SESSION['valid'] = $row['password'];
                }
                else{
                    echo "<div class = 'message'>
                    <p>invalid username or password</p>
                        <div> <br>";
                    echo "<a href= 'login.php'><buttonclass='btn> Go Back </button>";
            }
                if (isset($_SESSION['valid'])){
                header("Location: index.php");
                }
            }else{

            

            ?>


                <header>Login</header>
                <form action="login.php" method="post">
                    <div class="field input">
                        <label for="Username">Username</label>
                        <input type="text" name="username" id="username" required>
                    </div>

                    <div class="field input">
                        <label for="Password">Password</label>
                        <input type="password" name="password" id="password" required>
                    </div>

                    <div class="field">
                        
                        <input type="submit" name="submit" value="Login" required>
                    </div>
                    

                    
                    
                </form>
                <div class="links">
                    Don't have an account? <a href="form.php"><button><strong>Sign Up</strong></button> </a>
                </div>
            </div>
            <?php } ?>
        </div>

    </body>
</html>