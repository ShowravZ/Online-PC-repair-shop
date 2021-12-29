<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">

        <form action="" method= "POST">
<h1 class="text-center">ADD ADMIN</h1>
<br>
<br>
            <table style="width: 50%;">
                <tr>
                    <td>Full Name: </td>
                    <td><input type="text" name="full_name" placeholder="Enter Your Name"></td>
                </tr>
                <tr>
                    <td>Username: </td>
                    <td><input type="text" name="username" placeholder="Enter Your Username"></td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td><input type="password" name="password" placeholder="Enter Your Password"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="button">

                    </td>
                </tr>
            </table>
        </form>

    </div>
</div>

<?php
    if(isset($_POST['submit']))
    {
        //echo "Nigga Yes";
         $full_name = $_POST['full_name'];
         $username = $_POST['username'];
         $password = $_POST['password'];

        //SQL STARTS HERE
        $sql= 
        "INSERT INTO admin_info SET
            full_name='$full_name',
            username='$username',
            password='$password'
        ";

        $conn= mysqli_connect('localhost','root','') or die(mysqli_error());
        $db_select = mysqli_select_db($conn, 'online_pc_repair_shop') or die(mysqli_error());
    }
    else
    {
        //echo "Nigga No";
    }
 ?>

<?php include('partials/end.php'); ?>    