<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Casino royale - guessing game</title>
    
</head>
<body>  
<?php require_once 'classes/rock-paper-scissorGame.php'; ?>

<form method="post" action="">
pick a type:
    <select name="type">
        <option value="grass">grass	</option>
        <option value="water">water	</option>
        <option value="fire">fire	</option>
    <input type="submit">
</form>
<label for="count"> Score: <?php echo $_SESSION['count'];?></label>
	
<form action="" method= "post">
<input type="submit" name='reset' value="reset"> 
</form>

</body>
</html>