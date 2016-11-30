<?php 
function createUser($mail, $prenompere,$nompere,$prenommere,$nommere,$prenomenfant,$password) {
	mkdir("./users/".$mail, 0700);
	mkdir("./users/".$mail."/liste/", 0700);
	$userFile = fopen("./users/".$mail."/data.txt", "w");
	$log = array();
    $log['nompere'] = $nompere;
    $log['prenompere'] = $prenompere;
    $log['nommere'] = $nommere;
    $log['prenommere'] = $prenommere;
    $log['prenomenfant'] = $prenomenfant;
    $log['mail'] = $mail;
    $log['psw'] = $password;
	fwrite($userFile,implode('|',$log));
	fclose($userFile);
}
function userExists($mail) {
    if (is_dir("./users/".$mail)) {
        return true;
    }
    else {
        return false;
    }
}
 ?>