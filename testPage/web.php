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
    <table>
        <thead>
            <th>
            <td><b>Key</b></td>
            <td><b>Value</b></td>
            </th>
        </thead>
        <tbody>
            <?php foreach ($_SERVER as $key => $value): ?>
                <tr>
                    <td><?= $key ?></td>
                    <td><?= $value ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>