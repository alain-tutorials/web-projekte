<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <?php 
        /*
        echo "<pre>";
        print_r($adressRow);
        echo "</pre>";
        */
        echo "<br>";
        echo 'adressRow["id"] : ';
        echo $adressRow['id'];

        $url = route('updateAdress');
     ?>
    <body>
   
        <form action="<?php echo $url; ?>" method="POST">
            <p>
                <label>Name :</label><br>
                <input type="text" name="lastname" 
                value="<?php echo $adressRow['name'];  ?>">
            </p>
            <p>
                <label>Strasse & HausNr</label><br>
                <input type="text" name="strasse"
                value="<?php echo $adressRow['strasse_hausNr'];  ?>">
            </p>
            <p>
                <label>PLZ :</label><br>
                <input type="text" name="plz"
                value="<?php echo $adressRow['plz'];  ?>">
            </p>
            <p>
                <label>Stadt :</label><br>
                <input type="text" name="stadt"
                value="<?php echo $adressRow['stadt'];  ?>">
            </p>
            <p>
                <input type="hidden" name="id" 
                    value="<?php echo $adressRow['id'] ?>">
            </p>
            <p><input type="submit"></p>
        </form>
    </body>
</html>