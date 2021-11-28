<?php 
	include('functions.php');
	
if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Home Page</h2>
	</div>
	<div class="content">
		
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
		
		<div class="profile_info">
			<img src="user.png"  >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="index.php?logout='1'" style="color: red;">logout</a>
						  
							<!DOCTYPE html>
<html>
<head>
<style>
.button {
  display: inline-block;
  border-radius: 1px;
  background-color: #000000;
  border: none;
  color: #ffffff;
  text-align: center;
  font-size: 5px;
  font-size: 16px;
  padding: 10px;
  width: 125px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
</head>
<body>

<h2></h2>

<button class="button" <button onclick="document.location='index1.html'"> <a=href="index1.html" style="vertical-align:middle"> <span>Homepage </span></button>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <a href="index.php?logout='1'" class=" -info btn-lg">
    <span class="glyphicon glyphicon-log-out"></span> Log out

</body>
</html>

					
					


				


		
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					


				<?php endif ?>
			</div>
		</div>
	</div>
</body>
</html>