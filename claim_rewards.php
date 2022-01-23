<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
  		<title>Social Token (SOCL)</title>
  		<link rel="shortcut icon" type="image/jpg" href="favicon.png"/>

  		<meta name="viewport" contant="width=device-width, initial-scale=1">
  		<meta charset="UTF-8">
  		<meta property="og:image" content="logo_big.png" />
  		<meta property="og:title" content="Social Coin [SOCL]" />
  		<meta property="og:description" content="We grow together!" /> 

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
        .button-5 {
  position: relative;
  top: 25px;
  align-items: center;
  background-clip: padding-box;
  /*background-color: #fa6400;*/
  background-color: #30902B;
  border: 1px solid transparent;
  border-radius: .25rem;
  box-shadow: rgba(0, 0, 0, 0.02) 0 1px 3px 0;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: inline-flex;
  font-family: system-ui,-apple-system,system-ui,"Helvetica Neue",Helvetica,Arial,sans-serif;
  font-size: 16px;
  font-weight: 600;
  justify-content: center;
  line-height: 1.25;
  margin: 0;
  min-height: 3rem;
  padding: calc(.875rem - 1px) calc(1.5rem - 1px);
  position: relative;
  text-decoration: none;
  transition: all 250ms;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: baseline;
  width: auto;
  padding-left:70px; 
  padding-right:70px;
  margin-left: -10px;
}

.button-5:hover,
.button-5:focus {
  background-color: #58B154;
  box-shadow: rgba(0, 0, 0, 0.1) 0 4px 12px;
}

.button-5:hover {
  transform: translateY(-1px);
}

.button-5:active {
  background-color: #367933;
  box-shadow: rgba(0, 0, 0, .06) 0 2px 4px;
  transform: translateY(0);
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

		<center>
		<div class="form_box">
		<h1>Register</h1>
		<form action="connect.php" method="post">
			<div>Twitter Username: <input type="text" name="username"></div>
			<div style="margin-top: 10px;">Wallet Address: <input type="text" name="wallet"></div><br>
			<input class="button-5" type="submit" value="Register" disabled>
		</form>
		</div>
		</center>

	</body>
</html>