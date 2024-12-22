<?php
$html = "";
if ($_POST["elegido"]==1) {
	$html = '
	<option value="1">Megane</option>
	<option value="2">Scennic</option>
	<option value="3">Traffic</option>
	';	
}
if ($_POST["elegido"]==2) {
	$html = '
	<option value="1">Ibiza</option>
	<option value="2">Toledo</option>
	<option value="3">Cordoba</option>
	<option value="4">Arosa</option>
	';	
}
if ($_POST["elegido"]==3) {
	$html = '
	<option value="1">106</option>
	<option value="2">206</option>
	<option value="3">306</option>
	';	
}
echo $html;	
?>