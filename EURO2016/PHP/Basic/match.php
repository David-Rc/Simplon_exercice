<?php
require "Model.php";
$id = $_GET["id"];
$model = new Model('../competition.xml');
$equipes = $model->readfile();
$groups;

for($i = 0; $i <= count($equipes["groups"]) - 1; $i++){

	if($equipes["groups"][$i]["id"] == $id){
		$groups = $equipes["groups"][$i]["teams"];
	}
}

$equipe1 = $groups[0];
$equipe2 = $groups[1];
$equipe3 = $groups[2];
$equipe4 = $groups[3];

?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type='text/css' src="style.css"/>
	</head>
	<body>
		<button><a href='index.php'>Retour</a></button>
		<h1>Groupe : <?php echo $id ?></h1>
		<h2>Prognostique : </h2>
	<form>
	<legend><span id='equpe1'><?php echo $equipe1 ?></span> - <span id='equipe2'><?php echo $equipe2 ?></span></legend>
	<select id='score1' name="<?php echo $equipe1 ?>">
		<option name='score1' value='0'>0</option>
		<option name='score1' value='1'>1</option>
		<option name='score1' value='2'>2</option>
		<option name='score1' value='3'>3</option>
		<option name='score1' value='4'>4</option>
		<option name='score1' value='5'>5</option>
		<option name='score1' value='6'>6+</option>
	</select>
	<span> - </span>
	<select id='score2' name="<?php echo $equipe2 ?>">
		<option  value='0'>0</option>
		<option  value='1'>1</option>
		<option  value='2'>2</option>
		<option  value='3'>3</option>
		<option  value='4'>4</option>
		<option  value='5'>5</option>
		<option  value='6'>6+</option>
	</select>
	<input type="button" onClick="traiteResultat(1)" value="valider"/>
	</form>
	<form>
	<legend><?php echo $equipe3 ?>  - <?php echo $equipe4 ?></legend>
	<select id='score3' name="<?php echo $equipe3 ?>">
		<option name='score3' value='0'>0</option>
		<option name='score3' value='1'>1</option>
		<option name='score3' value='2'>2</option>
		<option name='score3' value='3'>3</option>
		<option name='score3' value='4'>4</option>
		<option name='score3' value='5'>5</option>
		<option name='score3' value='6'>6+</option>
	</select>
	<span> - </span>
	<select id='score4' name="<?php echo $equipe4 ?>">
		<option name='score4' value='0'>0</option>
		<option name='score4' value='1'>1</option>
		<option name='score4' value='2'>2</option>
		<option name='score4' value='3'>3</option>
		<option name='score4' value='4'>4</option>
		<option name='score4' value='5'>5</option>
		<option name='score4' value='6'>6+</option>
	</select>
	<input type="button" onClick='traiteResultat(2)' value='valider'/>
	</form>
	</body>
	<script src="script.js" type="text/javascript"></script>
</html>