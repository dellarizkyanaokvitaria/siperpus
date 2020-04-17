<?php
//session_start();
//if($_SESSION)
// {
//     header("Location:http://localhost/siperpus/login/index.php");
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Login</title>
</head>
<center><body>
    <h1>Form Login</h1>
    <?php
    if(isset($_COOKIE['message'])){
        echo $_COOKIE['message'];
    }
    ?>
    </div>
    <br/>
    <br/>
    <form action="proses-login.php" method="post">
    <table>
        <tr>
            <td><label for="">Username</label></td>
            <td> <input type="text" name="username" id=""></td>
        </tr>
        <tr>
            <td><label for="">Password</label></td>
            <td> <input type="password" name="password" id=""></td>
        </tr>
        <tr>
            <td></td>
            <td>
            <input type="submit" value="Login" name="btnlogin" class="btn btn-primary mt-auto">
            </td>
        </tr>
    </table>
    </form>

    </form>
</center>
</body>
</html>