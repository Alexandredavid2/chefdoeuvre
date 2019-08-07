<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css"  rel="stylesheet" type="text/css"/>
    <title>Crash Team Racing : Nitro Fueled</title>
</head>
<body>

   <section id='app'>
    <table class="table">

        <tr>
            <th>Nom de la course</th>
            <th>Temps N.Tropy</th>
            <th>Temps Oxide</th>
            <th>Meilleur Temps</th>
            <th>Temps Saphire</th>
            <th>Temps Or</th>
            <th>Temps Platine</th>
            <th>Meilleur Temps Relique</th>
        </tr>

        
        <tr v-for="course in courses" class=""> 
            <td>{{ course.nomdelacourse }}</td>
            <td>{{ course.ntropytime }}</td>
            <td>{{ course.oxidetime }}</td>
            <td>{{ course.besttime }}</td>
            <td>{{ course.sapphiretime }}</td>
            <td>{{ course.goldtime }}</td>
            <td>{{ course.platiniumtime }}</td>
            <td>{{ course.bestrelictime }}</td>
        </tr>
        



    </table>
    </section>







    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.js"></script>
    <script src="js/app.js"></script> 
</body>
</html>