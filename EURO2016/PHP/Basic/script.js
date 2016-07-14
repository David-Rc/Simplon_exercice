
var request = new XMLHttpRequest


var reponse = function(){
			var data = this.responseText;
			console.log(data);
		}

function traiteResultat(id){

	var equipe1 = document.getElementById('score1').name;
	var equipe2 = document.getElementById('score2').name;
	var equipe3 = document.getElementById('score3').name;
	var equipe4 = document.getElementById('score4').name;

	var score1 = document.getElementById('score1').value;
	var score2 = document.getElementById('score2').value;
	var score3 = document.getElementById('score3').value;
	var score4 = document.getElementById('score4').value;


	if(id == 1){
		request.onload = reponse;
		request.open('GET', 'insert.php?equipe1='+equipe1+'&&score1='+score1+'&&equipe2='+equipe2+"&&score2="+score2, true);
		request.send();
	} else if (id == 2 ){
		request.onload = reponse;
		request.open('GET', 'insert.php?equipe1='+equipe3+'&&score1='+score3+'&&equipe2='+equipe4+"&&score2="+score4, true);
		request.send();
	}

			
		}

	
	

