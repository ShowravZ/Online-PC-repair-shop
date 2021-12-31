<?php include('partials/menu.php'); ?>

    <div class="main-content">
        <div class="wrapper bg002">
            <h1 class="text-center">ADD SERVICE</h1>
            <br>
            <br>

            <?php
                if(isset($_SESSION['upload']))
                {
                    echo $_SESSION['upload'];
                    unset ($_SESSION['upload']);
                }
            ?>

            <form action="" method="POST" enctype="multipart/form-data">
                <table style="width: 30%; margin-left: 35%;" class="emptybg">
                    <tr>
                        <td>Service Name: </td>
                        <td>
                            <input type="text" name="service_name">
                        </td>
                    </tr>
                    <tr>
                        <td>Price: </td>
                        <td>
                            <input type="number" name="price">
                        </td>
                    </tr>

                    <tr>
                        <td>Select Image: </td>
                        <td>
                            <input type="file" name="image">
                        </td>
                    </tr>

                    <tr>
                        <td>Put on Wall?</td>
                        <td>
                            <input type="radio" name="featured" value="Yes"> Yes
                            <input type="radio" name="featured" value="No"> No
                        </td>
                    </tr>

                    <tr>
                        <td>Keep it On?</td>
                        <td>
                            <input type="radio" name="active" value="Yes"> Yes
                            <input type="radio" name="active" value="No"> No
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" value="Add It" class="button" style="margin-left: 80%">
                        </td>
                    </tr>

                </table>

            </form>

            <?php
                    if(isset($_POST['submit']))
                    {   
                        $service_name = $_POST['service_name'];
                        $price = $_POST['price'];

                        if(isset($_POST['featured']))

                        {
                        $featured = $_POST['featured'];
                        }
                        else
                        {
                        $featured = "No";
                        }
                        if(isset($_POST['active']))

                        {
                        $active = $_POST['active'];
                        }
                        else
                        {
                        $active = "No";
                        }
                        if(isset($_FILES['image']['name']))

                        {
                        $image_name = $_FILES['image']['name'];
                        if($image_name!="")
                        {
                            $ext = end(explode('.', $image_name));
                            $image_name = "Service-Name-".rand(0000,9999).".".$ext;
                            $src = $_FILES['image']['temp_name'];
                            $dst= "../images/service/".$image_name;
                            $upload = move_uploaded_file($src, $dst);

                            if($upload==false)

                            {
                                $_SESSION['upload'] = "<div class='failed'>Upload Failed!</div>";
                                header('location:'.SITEURL.'admin/add-service.php');
                                die();
                            }
                        }
                            }
                            else
                                {
                                $image_name = "";
                                }

                        $sql = "INSERT INTO service_info SET
                        service_name = '$service_name',
                        price = '$price',
                        image_name = '$image_name',
                        featured = '$featured',
                        active = '$active' 
                        ";

                    
                        $res= mysqli_query($conn, $sql);

                        if($res==true)
                        {
                        $_SESSION['add']= "<div class='done'>Done!</div>";
                        header('location'.SITEURL.'admin/manage-service.php');
                         }
                        else
                        {
                        $_SESSION['add']= "<div class='failed'>Failed!</div>";
                        header('location'.SITEURL.'admin/manage-service.php');
                        }

                    }

                

            ?>
        </div>
    </div>

<?php include('partials/end.php'); ?>  