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
		
		<img src="icons/game.png" alt="search" id="src">
		
		    <a href="insert.php"><img src="icons/add.png" title="Search" id="add"></a>
		    <a href="remove.php"><img src="icons/del.png" title="Delete" id="del"></a>
		
        <form action="#" method="GET" >
		    <input type="text" name="Search" placeholder="Search" id="box"> <br>
            <input type="submit" value="Search" id="sub">	<br>		
		</form>
		
	    </div>
		
		<br> <br>
		
	<?php
        include "inc/getResults.php"
    ?>




</body>
</html>