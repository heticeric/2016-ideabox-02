<?php
/**
 * Created by IntelliJ IDEA.
 * User: pollen
 * Date: 28/10/2016
 * Time: 11:18
 */
$login = "eric";
$pwd = "eric";

if( isset($_POST['name'] ) && $_POST['pwd'] ) {
	if
	($login == $_POST['name']
		&& $pwd == $_POST['pwd']
	) {
		echo json_encode( array( 'message' => 'Bienvenue', "status"=>"ok") );
	} else {
		echo json_encode(array('message' => 'Mauvais enregistrement.', "status" => "ko"));
	}
} else
{
	echo json_encode(array('message' => 'Mauvais enregistrement.', "status" => "ko"));
}


?>
