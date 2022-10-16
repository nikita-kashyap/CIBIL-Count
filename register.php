<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

<?php
$connect=mysqli_connect("localhost","root","@nikita","project");

if($connect)
{
    $userid=$_POST['userId'];
    $email=$_POST['email-Id'];
    $pass=$_POST['password'];

}
$cmd="insert into register values(".$userid.",'".$email."','".$pass."',true,300);";
$ins=mysqli_query($connect,$cmd);
if ($ins) {
    //echo "Successfully Registered.";
    $loc = "location:dashboard.php?uname=".$userid;
    header($loc);
}
else
{
    echo "<div class='container'><h1>OOPS...Something went wrong.</h1>";
    echo "<a href='login.html'>LogIn</a></div>";
}

?>
</body>
</html>