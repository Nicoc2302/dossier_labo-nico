<<<<<<< Updated upstream
=======
<<<<<<< HEAD
<?php
$ajout = isset($_POST['ajout'])? $_POST['ajout']:"";
if (!empty($ajout)) {
    $listname = $_POST['listname'];
    $dossier = "./users/".$_SESSION['email']."/liste/";
    $userFile = fopen("./users/".$_SESSION['email']."/liste/".$listname, "a");
    $liste = array();
    $description = $_POST['description'];
    
    $nom = $_POST['name'];
    $prix = $_POST['prix'];
    $photo = $_POST['photo'];
    $liste['description'] = $description;
    $liste['nom'] = $nom;
    $liste['prix'] = $prix;
    $liste['photo'] = $photo;
    fwrite($userFile,implode('|',$liste));
    fclose($userFile);



}
 ?>



<section class="row">
    <article class="col-md-4">
        <form method="post" enctype="multipart/form-data">
        	<article class="form-group">
	        	<label for="exampleInputnom">Nom de l'objet</label>
	            <input type="text" class="form-control" id="exampleInputnom" placeholder="Nom" required name = "name" >
            </article>
            <article class="form-group">
	            <label for="exampleInputphoto">Photo de l'objet</label>
	            <input type="file" class="form-control" id="exampleInputphoto" required name = "photo" >
            </article>
            <article class="form-group">
	            <label for="exampleInputdescription">Description</label>
	            <input type="textarea" class="form-control" id="exampleInputdescription" placeholder="Description" required name = "description" >
            </article>
            <article class="form-group">
	            <label for="exampleInputprix">Prix</label>
	            <input type="number" class="form-control" id="exampleInputprix" placeholder="Prix" required name = "prix" >
            </article>
            <article>
                  <label>Ajouter à la liste</label>
                  <select class="form-control" name="listname">
                    <?php

                        $files = array_values(array_diff_assoc(scandir("./users/".$_SESSION['email']."/liste"), array('|', '..')));
                        $taille = sizeof($files);
                        for ($i = 0; $i < $taille; $i++) 
                        {
                            $filename = explode("|",$files[$i])[0];
                            echo "<option value=\"".$filename."\">".$filename."</option>";
                            print_r(scandir("./users/".$_SESSION['email']."/liste"));
                        }
                    ?>
                  </select>
            </article>
            <input type="submit" class="btn btn-default" name = "ajout"></input>
        </form>
    </article>
</section>
=======
>>>>>>> Stashed changes
<section class="row">
    <article class="col-md-6">
        <form method="post">
        	<article class="form-group">
	        	<label for="exampleInputnompere">Nom de l'objet</label>
	            <input type="text" class="form-control" id="exampleInputnompere" placeholder="Nom" required name = "nompere" >
            </article>
            <article class="form-group">
	            <label for="exampleInputprenompere">Photo de l'objet</label>
	            <input type="file" class="form-control" id="exampleInputprenompere" placeholder="Prénom" required name = "prenompere" >
            </article>
            <article class="form-group">
	            <label for="exampleInputnommere">Description</label>
	            <input type="text" class="form-control" id="exampleInputnommere" placeholder="nom" required name = "nommere" >
            </article>
            <article class="form-group">
	            <label for="exampleInputprenommere">Prix</label>
	            <input type="text" class="form-control" id="exampleInputprenommere" placeholder="Prénom" required name = "prenommere" >
            </article>          
            <input type="submit" class="btn btn-default" name = "inscription"></input>
        </form>
    </article>
<<<<<<< Updated upstream
</section>
=======
</section>
>>>>>>> origin/master
>>>>>>> Stashed changes
