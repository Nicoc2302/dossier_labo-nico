<section class="row">
    
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