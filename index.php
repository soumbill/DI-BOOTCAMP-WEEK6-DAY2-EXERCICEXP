<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExerciceXP - Day2</title>
</head>
<body>
    <h1>Exercise 1 : Addition Of Two Numbers</h1>
    <?php 
        $nbre1 = 16;
        $nbre2 = 6;
        $som = $nbre1 + $nbre2;

        echo "La somme est : $som ";
    ?>

    <h1>Exercice 2 : Afficher Le Nombre</h1>
    <?php 
        for ($i = 5; $i <= 15; $i++) { 
            echo $i ?> <br> 
        <?php 
        }
    ?>

    <h1>Exercice 3 : Check Student Grade</h1>
    <?php 
        $note = 30;
        if($note >= 60)
        {
            echo 'grade will be First Division';
        }
        elseif($note > 45 AND $note < 59)
        {
            echo 'grade will be Second Division';
        }
        elseif($note > 33 AND $note < 44)
        {
            echo 'grade will be Third Division';
        }
        else{
            echo 'student will be Fail.';
        }
    ?>

    <h1>Exercise 4 : Show Day Of The Week</h1>
    <?php 
        $day = 10;
        switch ($day) {
            case 1:
                echo 'The day is Monday';
                break;

            case 2:
                echo 'The day is Thursday';
                break;

            case 3:
                echo 'The day is wednesday';
                break;

            case 4:
                echo 'The day is thirsday';
                break;

            case 5:
                echo 'The day is friday';
                break;

            case 6:
                echo 'The day is Saturday';
                break;

             case 7:
                echo 'The day is Sunday';
                break;

            default:
                echo 'show invalid number in default';
                break;
            
        }
    ?>

</body>
</html>