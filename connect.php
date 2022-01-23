<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
  		<title>Social Token (SOCL)</title>
  		<link rel="shortcut icon" type="image/jpg" href="favicon.png"/>

  		<meta name="viewport" contant="width=device-width, initial-scale=1">
  		<meta charset="UTF-8">
  		<meta property="og:image" content="" />
  		<meta property="og:title" content="Title" />
  		<meta property="og:description" content="Description" /> 

  		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  		<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  		
  		<style type="text/css">
  			body
      		{
        		background-image: url(bkg1.jpg);
      		}
  			.bar
      		{
        		width: 100%;
        		height: 60px;
        		background-color: #333333;
      		}
      		.small_logo
      		{
        		position: absolute;
        		top: 10px;
        		left: 10px;
      		}
		    .crypto_name
		    {
		        position: absolute;
		        top: 20px;
		        left: 60px;
		        color: white;
		    }
		    .form_box
		    {
		    	position: absolute;
        		top: 170px;
        		left: 30%;
        		width: 40%;
        		background: rgba(51, 51, 51, 0.2);
        		/*background-color: #333333;*/
        		border-radius: 10px;
        		color: black;
        		padding-top: 50px;
        		padding-bottom: 50px;
		    }
  		</style>
	</head>

	<body>
		<div class="bar">
			<a href="index.php">
    		<span class="small_logo"><img height="40" src="small_logo_trans2.png" /></span>
    		<span class="crypto_name">SOCIAL COIN</span>
    		</a>
		 </div>
		 <br><br>

	<?php
	$servername = "localhost";
	$u = "root";
	$p = "";
	$dbname = "test_bdd";

try {
    	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $u, $p);
		// set the PDO error mode to exception
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		// prepare sql and bind parameters
    	$stmt = $conn->prepare("INSERT INTO test_table (username, wallet) 
		VALUES (:username, :wallet)");
    	$stmt->bindParam(':username', $username);
    	$stmt->bindParam(':wallet', $wallet);

		// insert a row
    	$username = $_POST["username"];
    	$wallet = $_POST["wallet"];

    	// execute statement
    	if (strlen($wallet) == 11) 
    	{	
    		if(strlen($username) < 16)
    		{
    			
    			$is_valid = twitterAccountExists($username);

    			if($is_valid == 1)
    			{
    				$stmt->execute();	// Everything is valid
    				echo "New records created successfully<br>";
    			}
    			else
    			{
    				echo "Invalid username<br>";
    			}
    			
    		}
    		else
    		{
    			echo "Invalid username<br>";
    		}
    	}
    	else 
    	{
    		echo "Error: Adresses contains 11 characters<br>";
    	}

	}
	catch(PDOException $e)
	{
    	echo "Error: " . $e->getMessage();
	}
	$conn = null;



	function twitterAccountExists($username)
	{
    	$headers = get_headers("https://twitter.com/".$username);
    	if(strpos($headers[0], '404') !== false ) 
    	{
        	return false;
    	} 
    	else 
    	{
        	return true;
    	}
	}
?>
	</body>
</html>