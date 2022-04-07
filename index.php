<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>I am vulnerable</title>
  </head>
  <body>
    <h1>Let's Check If You Are Awake</h1>
    <h2>Enter Your IP Address And I Will ping You Back</h2>

    <form method="get" action="index.php">
      Ip Address: <input type="text" name="ip" />
      <br />
      <input type="submit" />
    </form>
  </body>
</html>

<?php
$output=null;
$retval=null;

if(!isset($_GET['ip'])){
	echo "Enter An IP Address"."<br>";
}else{
	exec("ping -c4 " . $_GET['ip'], $output, $retval);
	
	if(isset($output)){
		echo "Thanks For Using My Website"."<br>";
		echo "<pre>";
		print_r($output);
		echo "</pre>";
	
	}
}

