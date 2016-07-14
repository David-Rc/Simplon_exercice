<?php
if(isset($_GET["equipe1"]) && isset($_GET["equipe2"]) && isset($_GET["score1"]) && isset($_GET["score2"])){

	$equipe1 = $_GET["equipe1"];
	$equipe2 = $_GET["equipe2"];
	$score1 = $_GET["score1"]; 
	$score2 = $_GET["score2"];

	try
						{
     						$connect = new PDO ('mysql:host=localhost; dbname=Matching;charset-utf8', 'root', 'root');
						} catch ( Exeption $e )
						{       die ('ERROR : '.$e->getMessage());
						}

						$select = "SELECT id
								   FROM Rencontre
								   WHERE equipe_1 LIKE :equipe1
								   AND equipe_2 LIKE :equipe2";
						
						$request = $connect->prepare($select);
						$request->bindParam(':equipe1', $equipe1, PDO::PARAM_STR);
						$request->bindParam(':equipe2', $equipe2, PDO::PARAM_STR);
						$request->execute();
						$result = $request->fetch(PDO::FETCH_ASSOC);
						$id = $result['id'];

						$insert = "INSERT INTO Prognostique 
								   VALUES ('', :id, :score1, :score2, :equipe1, :equipe2)";

						$request2 = $connect->prepare($insert);
						$request2->bindParam(':equipe1', $equipe1, PDO::PARAM_STR);
						$request2->bindParam(':equipe2', $equipe2, PDO::PARAM_STR);
						$request2->bindParam(':score1', $score1, PDO::PARAM_INT);
						$request2->bindParam(':score2', $score2, PDO::PARAM_INT);
						$request2->bindParam(':id', $id, PDO::PARAM_INT);
						$request2->execute();
}else{

	return 'ERROR';

}
?>