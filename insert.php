<html lang="en">
<head> 
    <title> Game Characters </title>
	<meta charset="UTF-8">
    <link href="style.css" type="text/css" rel="stylesheet">
</head> 
<body>
    <div>
	    <ul id="navi">
		<li><a href="index.php"> SEARCH </a></li>
		<li><a href="char.php"> CHARACTERS </a></li>
		
		</ul>
	</div>
	
    <div id="wrapper">
	
	    <div id="search">
		
		<img src="icons/user2.png" alt="search" id="src">
		
		    <a href="index.php"><img src="icons/add.png" title="Search" id="add"></a>
		    <a href="remove.php"><img src="icons/del.png" title="Delete" id="del"></a>
		
        <form action="#" method="POST" id="add2">
		    <label for="fName"> First Name: 
            <input type="text" name="fName" id="firstname"> 
            <br></label>
            <label for="lName"> Last Name: 
            <input type="text" name="lName" id="lastname"> 
            <br></label>
			<label for="Game"> Game: 
            <input type="text" name="Game" id="game"> 
			<br></label>
			<label for="Description"> Description:</label>
			<br></label>
            <input type="textbox" name="Description" id="description"> 
			
			<input type="submit" name="insert" value="INSERT"> 
		</form>
		<div id="insertres">
		<?php
		    if (isset($_POST['insert'])){
				if(isset($_POST['fName']) && isset($_POST['lName']) && isset($_POST['Game']) && isset($_POST['Description'])){
				    if(!empty($_POST['fName']) && !empty($_POST['lName']) && !empty($_POST['Game']) && !empty($_POST['Description'])){
						$fName = trim($_POST['fName']);
						$lName = trim($_POST['lName']);
						$Game = trim($_POST['Game']);
						$Description= trim($_POST['Description']);
					require 'inc/connection.php';
						$fName = mysqli_real_escape_string($conn,$fName);
						$lName = mysqli_real_escape_string($conn,$lName);
						$Game = mysqli_real_escape_string($conn,$Game);
						$Description = mysqli_real_escape_string($conn,$Description);
						
					    $query = "INSERT INTO characters (fName, lName, game, description) VALUES ('{$fName}','{$lName}','{$Game}','{$Description}')";
						
						if(mysqli_query($conn,$query) === TRUE){
							echo "Succes";
						}else{
							"Error";
						}
						}else{
						echo "You must fill all fields";
					}
					
			
			}else{
				echo "All parameters not sent";
			}
			}
		
		
		?>
		
		
		
		</div>
		
	    </div>
		
		
		

    </div>

</body>
</html>