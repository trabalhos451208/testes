<?php include_once "/globais/header.php"; ?>
<?php
$cookie_name = $_POST["nome"];
$cookie_value = "a";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
print_r($_POST);
?>
    <form method="post">
        <input type="text" name="nome" />
        <input type="submit" value="setar valor" />
        
    </form>


<?php
if(!isset($_COOKIE[$cookie_name])) {
      echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
      echo "Cookie '" . $cookie_name . "' is set!<br>";
      echo "Value is: " . $_COOKIE[$cookie_name];
}
?>
<?php include_once "/globais/footer.php"; ?>