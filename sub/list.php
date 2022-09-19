<?php
include('../php/credential/log_in.php');
function is_session_started() {
    if ( php_sapi_name() !== 'cli' ) {
	if ( version_compare(phpversion(), '5.4.0', '>=') ) {
	    return session_status() === PHP_SESSION_ACTIVE ? TRUE : FALSE;
	} else {
	    return session_id() === '' ? FALSE : TRUE;
	}
    }
    return FALSE;
}
function send_query($query, $defConn){
    $result=$defConn->query($query);
    if(!$result){
	die('Query fallida');
    }
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/style.css"></link>
	<title>Algo - Lista</title>
    </head>
    <body style="background-color: #edfafc;">
	<header style="background-color: #ffa6c5;">
	</header>
	<div class="conjunction" style="background-color: #faffb0">
<?php
var_dump($_SESSION['result']);
?>
	</div>
    </body>
</html>
