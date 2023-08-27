<?php
require_once("connect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $email = $_COOKIE['user'];
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <p>
            <?php echo $row['full_name'] ?>
        </p>
        <p>
            <?php echo $row['email'] ?>
        </p>
        <p>
            <?php echo $row['address'] ?>
        </p>
        <p>
            <?php echo $row['phone'] ?>
        </p>
    <?php } ?>
</body>

</html>