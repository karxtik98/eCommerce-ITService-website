<?php
function check_login($con)
{
    if (isset($_SESSION['userid']))
    {
        $id = $_SESSION['userid'];
        $query = "select * from users where userid = '$id' limit 1";
        $result = mysqli_query($con,$query);
        if($result && mysqli_num_rows($result) > 0)
        {
            $userdata = mysqli_fetch_assoc($result);
            return $userdata;
        }
    }
    //redirect to Login
    header("Location: login.php");
    die;
}
function random_num($length)
{
	$text = "";
	if($length < 5)
	{
		$length = 5;
	}
	$len = rand(4,$length);
	for ($i=0; $i < $len; $i++) 
    { 
		$text .= rand(0,9);
	}
	return $text;
}
function get_users($con)
{
    
    $query = "select * from users";
    return mysqli_query($con,$query);
}
?>