<!DOCTYPE html>
<html lang="fr">
<meta charset="utf-8"/>

<head>
	<title>To Do List</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body class=bg-1>
	<div class= "container">
		<h1 class="text-center" >To Do List</h1>
	</div>
	<div class="container-fluid text-center">
		<div class ="addTask" >
			<input type= "text" placeholder="Add a text">
			<button>Add</button>
			
			<ol class = "tashPasFini">
				<h3>Tache n'est pas relaiser </h3>
				<li> Task 
					<button><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
					<button><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
				</li>
			</ol>
			
			<ol class = "tacheFini">
				<h3>Tache réaliser</h3>
				<li> Task 
					<button><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
				</li>
			</ol>
			
			
		</div>
	</div>
		
	


</body>



</html>
