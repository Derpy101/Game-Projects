<?php
session_start();
 
$user["Stefan"] = "stefan1230";
$user["Toby"] = "toby123";
$user["Beka"] = "beka";
$user["Admin"] = "admin1";
$user["Guest"] = "123";
$user["Test"] = "test";
 
if (!isset($_SESSION['logged_in']))
{
    echo '<h1>Login</h1>';
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if (empty($_POST['username']) || empty($_POST['password']))
        {
            echo '<span style="color:red; font-weight: bold">Please fill in all fields!</span>';
        }
        elseif ($user[$_POST['username']] != $_POST['password'])
        {
            echo '<span style="color:red; font-weight: bold">Your username/password is wrong!</span>';
        }
        else
        {
            //header("Refresh: 1");
            $_SESSION['ingelogd'] = true;
            $name = $user[$_POST['username']];
            $_SESSION["user"] = $name;
            echo $name;
            echo '<span style="color:green; font-weight: bold">You are now logged in!</span>';
            header("Location:game.php?");
        }
    }
    else
    {
        exit('Please Login....<br /><br />
        <form method="POST" action=""><p>
        Username:<br />
        <input type="text" name="username" /><br /><br />
        Password:<br />
        <input type="password" name="password" /><br /><br />
        <input type="submit" value="Login" /> <input type="reset" value="Clear" />
        </form>');
    }
}
?>