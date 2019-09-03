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
		
		<img src="icons/delete.png" alt="search" id="src">
		
		    <a href="insert.php"><img src="icons/add.png" title="Search" id="add"></a>
		    <a href="remove.php"><img src="icons/del.png" title="Delete" id="del"></a>
		<?php
		    require "inc/connection.php";
			$query= "SELECT * FROM characters";
			$result= mysqli_query($conn, $query);
			if(mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_assoc($result)){
				?>
            	<div id="result">
                    
                    <a href="inc/removeChar.php?id=<?php echo $row['ID'] ?>"> <img src="icons/remove.png" id="remov"> </a>
					<p><strong>Name:</strong><?php echo $row["fName"] . "&nbsp" . $row["lName"] ?></p>
			        <p><strong>Game:</strong><?php echo $row['Game'] ?> </p>
                    <p><strong>Description:</strong><?php echo $row['Description'] ?></p>
         				
		        </div>			
					
			    <?php		
				}
			}else{
				echo "NO CHARACTERS";
			}
		
		
		?>
		
	    </div>
		
		
		

    </div>

</body>
</html>