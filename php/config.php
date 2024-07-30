<?php
$con = mysqli_connect('localhost', 'root','' ,'elitboxer' );

// Check connection
if ($con === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
