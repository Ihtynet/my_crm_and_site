<?php
session_start();

$lg = "vmk";
$ps = "321";

$post_lg = $_REQUEST["login"];
$post_ps = $_REQUEST["psw"];


$ss_lg = $_SESSION["login"];
$ss_ps = $_SESSION["psw"];

//print_r ($_SESSION);

if ($lg == $ss_lg and $ps == $ss_ps) {
	require_once("data.php");
}else{
	
	if ($lg == $post_lg and $ps == $post_ps) {
		
		$_SESSION["login"] = $post_lg;
		$_SESSION["psw"] = $post_ps;
		
		require_once("data.php");
		
	}else{
		require_once("login.php");
	}
	
}


