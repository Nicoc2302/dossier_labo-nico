<?php 
if (empty($_SESSION['email'])) 
{
    header('Location: ?page=connexion');
    exit();
    
} 
else{ 
?>
<<<<<<< Updated upstream

<input type="button" name="liste" value="Créer une liste" onclick="self.location.href='?page=liste'">
<?php } ?>
=======
<<<<<<< HEAD

<input type="button" name="liste" value="Créer une liste" onclick="self.location.href='?page=listecreate'">
<input type="button" name="liste" value="Ajouter un article" onclick="self.location.href='?page=liste'">

<?php 
	$dirname = "./users/".$_SESSION['email']."/liste/";
	$dir = opendir($dirname);

    for($i=0;$file = readdir($dir);$i++)
    {
        if($file != '.' && $file != '..' && !is_dir($dirname.$file))
		{
			$split =explode(".", $file);
			echo "<h2> ".$split[0]."<a href='?page=delete&list=".$split[0]."'><div class=\"glyphicon glyphicon-remove delete\" style=\"font-size:0.8em;\"></div></a></h2>";

			$filename = "./users/".$_SESSION['email']."/liste/".$split[0].".".$split[1];
			$lines = file($filename);
		
		echo "<table border=1>";
        echo"<tr>";
        echo "<th>Nom et prénom</th>";
        echo "<th>Lien vers la liste</th>";
        echo"</tr>";
        for($j=0;$j<count($lines);$j++)
        {
        	if (sizeof($lines[$j])>0) {
        		
            	$sep =explode("|", $lines[$j]);
                echo"<tr>";
                echo "<td>$sep[0]</td>";
                echo "<td>$sep[1]</td>";
                echo"</tr>";
            }
            else
            {
            	echo"error";
            }
            
        }
            echo "</table>";
	}
	}
    closedir($dir);
               
} 
?>
=======

<input type="button" name="liste" value="Créer une liste" onclick="self.location.href='?page=liste'">
<?php } ?>
>>>>>>> origin/master
>>>>>>> Stashed changes
