<?php
$pageTitle = "first php page";
$currentTime = date("H:i:s");
?>

<html lang="en">

<head>
    <title><?= $pageTitle ?></title>
</head>

<body>
    <h1>Welcome</h1>
    <p>
        Current Server Time: <?= $currentTime ?>
    </p>
</body>

</html>