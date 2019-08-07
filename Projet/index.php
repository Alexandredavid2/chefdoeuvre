<?php
require_once "database.php";
$database = new Database(); // Connexion //
$result = $database->db_query('SELECT * FROM courses'); // Requête //

$courses = $result->fetchAll(PDO::FETCH_OBJ); // Affichage //

//var_dump ($database);
//var_dump ($result);
//var_dump ($courses);


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css"  rel="stylesheet" type="text/css"/>
    <title>Crash Team Racing : Nitro Fueled</title>
</head>
<body>
    
    <table class="table table-hover text-center table-sm">
        <thead class="thead-dark">
            <tr class="table-active">
                <p class=""><th>Nom de la course <img src="img/trophy.png" class="imagesizetrophy" alt="responsive image"></th></p>
                <p class=""><th>Temps N.Tropy <img src="img/ntropyicon.png" class="imagesizentropy" alt="responsive image"></th></p>
                <p class=""><th>Temps Oxide <img src="img/oxideicon.png" class="imagesizeoxide" alt="responsive image"></th></p>
                <p class=""><th>Meilleur Temps <img src="img/besttime.png" class="imagebesttime" alt="responsive image"></th></p>
                <p class=""><th>Temps Saphire <img src="img/saphirerelic.png" class="imagesizerelic" alt="responsive image"></th></p>
                <p class=""><th>Temps Or <img src="img/goldrelic.png" class="imagesizerelic" alt="responsive image"></th></p>
                <p class=""><th>Temps Platine <img src="img/platiniumrelic.png" class="imagesizerelic" alt="responsive image"></th></p>
                <p class=""><th>Meilleur Temps Relique <img src="img/besttimerelic.png" class="imagebesttimerelic" alt="responsive image"></th></p>
                <p class=""><th>Action</th></p>
            </tr>
        </thead>
        
        <?php foreach($courses as $course) : ?>
            <tr>
                <td class="table-course"><?= $course->nomdelacourse ?></td>
                <td class="table-ntropycolor"><?= $course->ntropytime ?></td>
                <td class="table-oxidecolor"><?= $course->oxidetime ?></td>
                <td><?= $course->besttime ?></td>
                <td class="table-saphirecolor"><?= $course->sapphiretime ?></td>
                <td class="table-goldcolor"><?= $course->goldtime ?></td>
                <td class="table-platiniumcolor"><?= $course->platiniumtime ?></td>
                <td><?= $course->bestrelictime ?></td>
                <td><button type="button" class="btn btn-danger btn-sm text-center">Éditer</button>
                
                    <button type="button" class="btn btn-info btn-sm text-center">Astuces</button>
                </td>
            </tr>
        <?php endforeach ?>


    
    </table>
    <a href="personnages.php">
    <button type="button" class="btn btn-dark">Les personnages</button>
    </a>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>