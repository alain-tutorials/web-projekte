<!DOCTYPE html>
<html lang="en">
    <head>
	<title>The Orange Page</title>
	<meta charset="utf-8" />
    </head>
    <body><?php //echo $chemin; ?>
	<h1 style="color: #F90">Manage Adressliste</h1>        
	<p>
        <a href="<?php 
            $chemin = dirname($_SERVER['PHP_SELF']) . '/add';
            echo $chemin;
        ?>">
            insert new adresse
        </a></p>
        <p><?php 
        /*
            echo "<pre>";
            print_r($adresses);
            echo "</pre>";
            */
         ?></p>
        <table>
            <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Strasse</th>
                <th>PLZ</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>
            <tbody>
    <?php foreach($adresses as $adress):  ?>   
                <tr>
                    <td><?php echo $adress['id']; ?></td>
                    <td><?php echo $adress['name']; ?></td>
                    <td><?php echo $adress['strasse_hausNr']; ?></td>
                    <td><?php echo $adress['plz']; ?></td>
                    <td>
                        <a href="<?php 
             $cheminUpdate = dirname($_SERVER['PHP_SELF']) 
             . '/update/' .  $adress['id'] ;
                    echo $cheminUpdate;
                         ?>">
                            edit
                        </a>
                    </td>
                    <td>
                        <a href="<?php 
                            $cheminDelete = dirname($_SERVER['PHP_SELF']) 
             . '/delete/' .  $adress['id'] ;
                    echo $cheminDelete;
                         ?>">
                            delete
                        </a>
                    </td>
                </tr>         
    <?php endforeach; ?>     
            </tbody>
        </table>
	</body>
</html>
