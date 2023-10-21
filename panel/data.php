<?php
session_start();

$lg = "vmk";
$ps = "321";

$ss_lg = $_SESSION["login"];
$ss_ps = $_SESSION["psw"];

if ($lg == $ss_lg and $ps == $ss_ps) {

	// читаем
	$menu = file_get_contents("tmpl/menu.html");

	$cont = file_get_contents("tmpl/panel.html");

	// заполнение шаблонной строки
	$cont = str_replace("{{menu}}",$menu, $cont);	
	echo $cont;


}else{
?>
	<h1>Пройдите авторизацию</h1>
	<a href='index.php'>home</a>
<?php
};
	