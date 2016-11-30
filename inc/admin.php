<?php 
if (empty($_SESSION['email'])) 
{
    header('Location: ?page=connexion');
    exit();
    
} 
else{ 
?>

<input type="button" name="liste" value="Créer une liste" onclick="self.location.href='?page=liste'">
<?php } ?>