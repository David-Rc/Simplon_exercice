<?php 
    include "model.php";
    include "view.php";
    $model = new Model();
    $model->readFile('../competition.json');
	$competition = json_decode($model->data, true);
	$groups = $competition["groups"];
	$competitionView = new View();
?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <header><h1><?php echo $competition["name"] ?></h1></header>
        <div>
        <h4><u>Groupes : </u></h4>
        	<ul>
        	<?php
        		$competitionView->viewArrayList($groups, "id", "teams");
        	?>
        	</ul>
        </div>
    </body>
</html>