<?php 
    $age = 23;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1 p2</title>
</head>
<body>
<?php if ($age >= 18 && $age < 130){ ?>
        <p>Vous êtes majeur.</p>
        <?php } else if ($age > 0 && $age < 18) { ?>
        <p>Vous êtes mineur.</p>
        <?php } ?>
</body>
</html>