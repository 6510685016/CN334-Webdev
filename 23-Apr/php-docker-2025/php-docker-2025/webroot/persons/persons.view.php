<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Persons List</title>
    <link rel="stylesheet" href="css/table.css">
</head>
<body>

<h1 class="page-title">Persons List</h1>

<a href="create.php" class="add-new"> Add The Persons </a>

<table class="data-table">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Action</th>
    </tr>
    </thead>
    <?php foreach ($persons as $person): ?>
        <tr>
            <td> <?= $person["id"];?> </td>
            <td> <?= $person["name"]." ".$person["surname"];?> </td>
            <td> <?= $person["email"];?> </td>
            <td> <?= $person["phone"];?> </td>
            <td>
                <a href="update.php?id=<?= $person["id"];?>" class="btn-action btn-edit">
                    Update
                </a>
                <a href="delete.php?id=<?= $person["id"];?>" class="btn-action btn-delete">
                    Delete
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>