<section class="row">
    <article class="col-md-6">
        <form method="post">
            <article class="form-group <?php echo $error_email_co; ?>">
              <label for="exampleInputidentifiant_co">Identifiant</label>
              <input type="text" class="form-control" id="exampleInputidentifiant_co" placeholder="Identifiant" required name = "identifiant_co" >
            </article>
            <article class="form-group <?php echo $error_email_co; ?>">
              <label for="exampleInputpsw_co">Mot de passe</label>
              <input type="password" class="form-control" id="exampleInputpsw_co" placeholder="Mot de passe" required name = "psw_co"> 
            </article>
            
            <input type="submit" class="btn btn-default" name = "connexion"></input>
        </form>
    </article>

    <article class="col-md-6">
        <form method="post">
        	<article class="form-group <?php echo $error_email; ?>">
	        	<label for="exampleInputnompere">Nom de l'objet</label>
	            <input type="text" class="form-control" id="exampleInputnompere" placeholder="Nom" required name = "nompere" >
            </article>
            <article class="form-group <?php echo $error_email; ?>">
	            <label for="exampleInputprenompere">Photo de l'objet</label>
	            <input type="file" class="form-control" id="exampleInputprenompere" placeholder="Prénom" required name = "prenompere" >
            </article>
            <article class="form-group <?php echo $error_email; ?>">
	            <label for="exampleInputnommere">Description</label>
	            <input type="text" class="form-control" id="exampleInputnommere" placeholder="nom" required name = "nommere" >
            </article>
            <article class="form-group <?php echo $error_email; ?>">
	            <label for="exampleInputprenommere">Prix</label>
	            <input type="text" class="form-control" id="exampleInputprenommere" placeholder="Prénom" required name = "prenommere" >
            </article>
           
            <input type="submit" class="btn btn-default" name = "inscription"></input>
        </form>
    </article>
</section>