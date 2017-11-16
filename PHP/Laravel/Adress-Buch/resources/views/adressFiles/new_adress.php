<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <?php 
    /*
    $monServeur = 'http://phps.dev/' ;
     $chemin = dirname($_SERVER['PHP_SELF']) . '/add';
        echo $chemin; */
        $url = route('addAdress');
     ?>
    <body>
        <form action="<?php echo $url; ?>" method="POST">
            <p>
                <label>Name :</label><br>
                <input type="text" name="lastname">
            </p>
            <p>
                <label>Strasse & HausNr</label><br>
                <input type="text" name="strasse">
            </p>
            <p>
                <label>PLZ :</label><br>
                <input type="text" name="plz">
            </p>
            <p>
                <label>Stadt :</label><br>
                <input type="text" name="stadt">
            </p>
            <p><input type="submit"></p>
        </form>
    </body>
</html>