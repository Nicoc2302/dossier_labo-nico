<?php 
$create = isset($_POST['create'])? $_POST['create']:"";
if (!empty($create))
{
	$listname = $_POST['listname'];
	if (!file_exists("./users/".$_SESSION['email']."/liste/".$listname.".txt")) {
		echo"ouvert";
		$filecreate = "./users/".$_SESSION['email']."/liste/".$listname.".txt";
		fopen($filecreate,"w");
		header('Location: ?page=admin');
	}
}




 ?>
 <article class="col-md-4">
		<h2>Créer une nouvelle liste de naissance</h2>
        <form class="form-group" method="post">
            <div class="form-group">
              <label>Nom de la liste</label>
              <input type="text" class="form-control" name="listname">
            </div>
            <button type="submit" class="btn btn-default" name="create" value="create">Créer</button>
        </form>
</article>
