<?php 
    include('inc/function.php');
    $nompere = isset($_POST['nompere'])? $_POST['nompere']:"";
    $prenompere = isset($_POST['prenompere'])? $_POST['prenompere']:"";
    $nommere = isset($_POST['nommere'])? $_POST['nommere']:"";
    $prenommere = isset($_POST['prenommere'])? $_POST['prenommere']:"";
    $prenomenfant = isset($_POST['prenomenfant'])? $_POST['prenomenfant']:"";
    $mail = isset($_POST['mail'])? $_POST['mail']:"";
    $identifiant = isset($_POST['identifiant'])? $_POST['identifiant']:"";
    $psw = isset($_POST['psw'])? $_POST['psw']:"";
    $error_nompere="";
    $error_prenompere="";
    $error_nommere="";
    $error_prenommere="";
    $error_identifiant="";
    $error_psw="";
    $error_mail="";
    $error_mail_co="";
    $inscription = isset($_POST['inscription'])? $_POST['inscription']:"";
    $connexion = isset($_POST['connexion'])? $_POST['connexion']:"";
    $mail_co = isset($_POST['mail_co'])? $_POST['mail_co']:"";
    $psw_co = isset($_POST['psw_co'])? $_POST['psw_co']:"";
    $error=array();
    $error_text = 0;
    if (!empty($connexion)) { 
        echo "<pre>";
        print_r($_POST);
        echo "</pre>"; 
        if (empty($_POST['mail_co']))
        {
            $error_text = 1;
            $error_email_co="has-error";
            $error[]="Veuillez introduire un email.";
            $error_class="has-error";
        }
        if (empty($_POST['psw_co']))
        {
            $error_text = 1;
            $error_email_co="has-error";
            $error[]="Veuillez introduire un mot de passe.";
            $error_class="has-error";
        }
        else
        {
            $error_text = 3;
        }
            if (!empty($error) && $error_text == 1) {

?>
<div class="alert alert-danger" role="alert">
    <?php
        foreach($error as $value)
            echo $value . "<br/>";
    ?>
</div>
<?php
} if(empty($error) && $error_text == 3 ) {


    echo "<div class='alert alert-success' role='alert'>connexion envoyé avec succès</div>";
 
}
}

    if (!empty($inscription)) { 
        echo "<pre>";
        print_r($_POST);
        echo "</pre>"; 
        if (empty($_POST['mail']))
        {
            $error_text = 1;
            $error_email="has-error";
            $error[]="Veuillez introduire une adresse mail.";
            $error_class="has-error";
        }
        if (empty($_POST['nompere']))
        {
            $error_text = 1;
            $error_email="has-error";
            $error[]="Veuillez introduire le nom du père.";
            $error_class="has-error";
        }
        if (empty($_POST['prenompere']))
        {
            $error_text = 1;
            $error_email="has-error";
            $error[]="Veuillez introduire le prénom du père.";
            $error_class="has-error";
        }
        if (empty($_POST['nommere']))
        {
            $error_text = 1;
            $error_email="has-error";
            $error[]="Veuillez introduire le nom de la mère.";
            $error_class="has-error";
        }
        if (empty($_POST['prenommere']))
        {
            $error_text = 1;
            $error_email="has-error";
            $error[]="Veuillez introduire le prénom de la mère.";
            $error_class="has-error";
        }
        if (empty($_POST['identifiant']))
        {
            $error_text = 1;
            $error_email="has-error";
            $error[]="Veuillez introduire un identifiant.";
            $error_class="has-error";
        }
        if (empty($_POST['passeword']))
        {
            $error_text = 1;
            $error_email="has-error";
            $error[]="Veuillez introduire un mot de passe.";
            $error_class="has-error";
        }
        else
        {
            $error_text = 2;
        }
             
    }
    if (!empty($error) && $error_text == 1) {

?>
<div class="alert alert-danger" role="alert">
    <?php
        foreach($error as $value)
            echo $value . "<br/>";
    ?>
</div>
<?php
} if(empty($error) && $error_text == 2 ) {


    echo "<div class='alert alert-success' role='alert'>Formulaire envoyé avec succès</div>";
 
}

?>

<section class="row">
    <article class="col-md-6">
        <form method="post">
            <article class="form-group <?php echo $error_email_co; ?>">
              <label for="exampleInputmail_co">mail</label>
              <input type="text" class="form-control" id="exampleInputmail_co" placeholder="Identifiant" required name = "mail_co" value=<?php echo $mail_co ;?>>
            </article>
            <article class="form-group <?php echo $error_email_co; ?>">
              <label for="exampleInputpsw_co">Mot de passe</label>
              <input type="password" class="form-control" id="exampleInputpsw_co" placeholder="Mot de passe" required name = "psw_co" value=<?php echo $psw_co ;?>>
            </article>
            
            <input type="submit" class="btn btn-default" name = "connexion"></input>
        </form>
    </article>

    <article class="col-md-6">
        <form method="post">
        	<article class="form-group <?php echo $error_email; ?>">
	        	<label for="exampleInputnompere">Nom du père</label>
	            <input type="text" class="form-control" id="exampleInputnompere" placeholder="Nom" required name = "nompere" value=<?php echo $nompere ;?>>
            </article>
            <article class="form-group <?php echo $error_email; ?>">
	            <label for="exampleInputprenompere">Prénom du père</label>
	            <input type="text" class="form-control" id="exampleInputprenompere" placeholder="Prénom" required name = "prenompere" value=<?php echo $prenompere ;?>>
            </article>
            <article class="form-group <?php echo $error_email; ?>">
	            <label for="exampleInputnommere">Nom de la mère</label>
	            <input type="text" class="form-control" id="exampleInputnommere" placeholder="nom" required name = "nommere" value=<?php echo $nommere ;?>>
            </article>
            <article class="form-group <?php echo $error_email; ?>">
	            <label for="exampleInputprenommere">Prénom de la mère</label>
	            <input type="text" class="form-control" id="exampleInputprenommere" placeholder="Prénom" required name = "prenommere" value=<?php echo $prenommere; ?>>
            </article>
            <article class="form-group">
	            <label for="exampleInputprenomenfant">Prénom de l'enfant</label>
	            <input type="text" class="form-control" id="exampleInputprenomenfant" placeholder="Prénom" required name = "prenomenfant" value=<?php echo $prenomenfant ;?>>
            </article>

            <article class="form-group <?php echo $error_email; ?>">
	            <label for="exampleInputmail">Adresse mail</label>
	            <input type="email" class="form-control" id="exampleInputmail" placeholder="Adresse mail" required name = "mail" value=<?php echo $mail ;?>>
            </article>
            <article class="form-group <?php echo $error_email; ?>">
                <label for="exampleInputidentifiant">Identifiant</label>
                <input type="email" class="form-control" id="exampleInputidentifiant" placeholder="Identifiant" required name = "identifiant" value=<?php echo $identifiant; ?>>
            </article>
            <article class="form-group <?php echo $error_email; ?>">
	            <label for="exampleInputpassword">Mot de passe</label>
	            <input type="password" class="form-control" id="exampleInputpassword" placeholder="Mot de passe" required name = "passeword" value=<?php echo $psw; ?>>
            </article>
            <input type="submit" class="btn btn-default" name = "inscription"></input>
        </form>
    </article>
</section>

<?php 
    if ($inscription== 'Envoyer' && empty($error)) {
        
        $nompere = $_POST['nompere'];
        $prenompere = $_POST['prenompere'];
        $nommere = $_POST['nommere'];
        $prenommere = $_POST['prenommere'];
        $prenomenfant = $_POST['prenomenfant'];
        $mail = $_POST['mail'];
        $identifiant = $_POST['identifiant'];
        $psw = $_POST['passeword'];
        if (empty($_POST['prenomenfant']))
        {
            $prenomenfant = "Inconnu";
        }
        // Create a table
        createUser($mail, $prenompere, $nompere,$prenommere,$nommere, $identifiant,$prenomenfant, $psw);
        
    }
    
    if ($connexion== 'Envoyer' && empty($error)){
        $mail_co = $_POST['mail_co'];
        $psw_co=$_POST['psw_co'];

        $filename = "./users/".$mail_co."/data.txt";
        $lines = file($filename,FILE_IGNORE_NEW_LINES);
        for($i=0;$i<count($lines);$i++)
        {
            $split =explode("|", $lines[$i]);
            if($split[5]==$mail_co && $split[7]==$psw_co)
            {
                $_GET['page'] = '?page=admin';
            }
            else
            {
                echo"error";
            }
        }
    }
?>