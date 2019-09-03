<?php
require "connection.php";

if(isset($_GET["Search"])){
	if(!empty($_GET["Search"])){
		$search = trim($_GET["Search"]);
		$search = mysqli_real_escape_string($conn, $search);
		$query = "SELECT * FROM characters WHERE fName LIKE '%{$search}%' OR lName LIKE '%{$search}%'";
	    $result = mysqli_query ($conn, $query);
    if(mysqli_num_rows($result) > 0 ){
	    while($row = mysqli_fetch_assoc($result)){
			?>
        
			<div id="result">
            <img src="icons/user.png" id="user">
			<?php echo "Number of results:" . " " . mysqli_num_rows($result);?>
            <p><strong>Name:</strong><?php echo $row["fName"] . "&nbsp" . $row["lName"] ?></p>
			<p><strong>Game:</strong><?php echo $row['Game'] ?> </p>
            <p><strong>Description:</strong><?php echo $row['Description'] ?></p>
			</div>
			<br>
			<?php
		}
	}else {
		include "inc/nores.php"; 
	}
	}
	else{

		include "inc/type.php";
	}
  
}

?>