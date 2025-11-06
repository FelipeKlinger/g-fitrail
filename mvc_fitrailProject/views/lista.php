<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <tr>

    <td>id</td>
    <td>nom</td>


    </tr>


<?php foreach($leerclientes as $cliente) ?>

    <tr>
        td><?= htmlspecialchars($cliente['id']) ?></td>
    </tr>

    
</body>
</html>