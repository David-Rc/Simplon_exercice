<?php

    include "model.php";
    include "connect.php";

    $model = new Model('./../competition.xml');
    $competition = $model->readFile();
    $competitionGroups = $competition['groups'];
    $x = 0;

    for($i = 0; $i <= count($competitionGroups) -1; $i++){

    	$teams = $competitionGroups[$i]['teams'];
    	$groupsId = $competitionGroups[$i]['id'];

    	foreach($teams as $team){

    		if($x == 0){

    			$team1 = $team;
    			$x++;

    		} else if ($x == 1){

    					try
						{
     						$connect = new PDO ('mysql:host=localhost; dbname=Matching;charset-utf8', 'root', 'root');
						} catch ( Exeption $e )
						{       die ('ERROR : '.$e->getMessage());
						}

    					$insert = "INSERT INTO Rencontre 
    							   VALUES ('', :team1, :team, :group, '', '')";
    					$request = $connect->prepare($insert);
						$request->bindParam(':team1', $team1, PDO::PARAM_STR);
						$request->bindParam(':team', $team, PDO::PARAM_STR);
						$request->bindParam(':group', $groupsId, PDO::PARAM_STR);
						$request->execute();
    					$x = 0;

    		}

    		

    	}

    }

 ?>