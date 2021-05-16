<?php
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$message = filter_input(INPUT_POST, 'message');
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "mywebsite";
 //create connection
$conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error())
{
die('Connect Error('.mysqli_connect_errno().')'
. mysqli_connect_error());
}
else
{
$sql = "INSERT INTO message(Your_Name, Your_Email, Your_Message)
values ('$name' , '$email' , '$message')";
if($conn->query($sql))
{
echo  "Message sent";
}
else
{
echo "Error:".$sql."<br>".$conn->error;
}
header("Location: index.html", true, 301);
exit();
$conn->close();
}

?>