<?php

if(!empty($_SERVER['HTTP_CLIENT_IP'])){
    $ip=$_SERVER['HTTP_CLIENT_IP'];
} else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){

    $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];

} else {

    $ip=$_SERVER['REMOTE_ADDR'];

}

$query = "SELECT * FROM `track` WHERE ip='".$ip."'";

$result = mysqli_query($link, $query); 

$number_of_result = mysqli_num_rows($result); 

if ($number_of_result)
{
	while($row= mysqli_fetch_array($result))
	{
		$number = $row['number'];
		$number +=1;
		$query = "UPDATE `track` SET number='".$number."' WHERE ip='".$ip."'";
		if (!mysqli_query($link, $query)) 
		{
			echo "Error";
		}
	}
}
else
{
	$num = 1;
	$page = 'home';
	$query = "INSERT INTO `track`(`ip`,`number`,`page`) VALUES('".$ip."',".$num.",'".$page."')";
	if (!mysqli_query($link, $query)) 
	{
		echo "Error";
	}
}


?>