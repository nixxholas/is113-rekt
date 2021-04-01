<!-- add your code here -->

<?php
session_start();

if (isset($_POST["age"]))
    $_SESSION["age"] = $_POST["age"];
?>

<html>
<body>
<form method="post" action="summary-session.php">
    Hobby: <input type="text" name="hobby"/>
    <input type="submit" value="Next"/>
</form>
</body>
<?php
if (isset($_POST["Next"])) {
    $_SESSION['hobby'] = $_POST['hobby'];
    header("Location:session3.php");
    exit;
}
?>
</html>
