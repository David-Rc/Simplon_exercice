<?php 

    include "Model.php";
    include "view.php";
    //include "test.php";
    $model = new Model('../../competition.json');
    $competition = $model->readFile();
    $groups = $competition["groups"];
    $competitionView = new View();
?> 
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <header><h1><?php echo $competition["name"]; ?></h1></header>
        <div>
        	<ul>
        	<?php
        		$competitionView->viewGroupsList($groups, "id", "teams");
        	?>
        	</ul>
        </div>
        <script src='script.js' type='text/javascript'></script>
    </body>
</html>
