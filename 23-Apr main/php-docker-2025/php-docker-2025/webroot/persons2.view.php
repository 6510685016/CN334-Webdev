<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            margin: auto;
        }
        table, th, td {
            border : 1px solid black;
            border-collapse: collapse;
            padding: .5em;
        }
    </style>
</head>
<body>
    <!-- person2 -->
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
        </thead>
        <?php foreach ($persons as $person): ?>
        <tr>
            <?php foreach ($person as $key => $value): ?>
            <td> <?= $value;?> </td>
            <?php endforeach; ?>
        </tr>
        <?php endforeach; ?>
    </table>





</body>
</html>