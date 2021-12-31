<?php include('partials/menu.php'); ?>
<!-- Section Starts Here -->
<div class="main-content">
            <div class="wrapper bg008">
                <h1 class="text-right">MANAGE SERVICE</h1>

                <br/><br/><br/><br/>

                <?php
                if(isset($_SESSION['add']))
                {
                    echo $_SESSION['add'];
                    unset ($_SESSION['add']);
                }
                ?>

                
                <br/><br/><br/><br/>
                <table class="table-full">
                    <tr>
                        <th>Serial Number</th>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Actions</th>
                    </tr>

                    <tr>
                        <td>1. </td>
                        <td>Showrav Zaman</td>
                        <td>ShowravZ</td>
                        <td>
                            <a href="#" class="button">Update Admin</a>
                            <a href="#" class="button">Delete Admin</a>
                        </td>
                    </tr>

                    <tr>
                        <td>1. </td>
                        <td>Showrav Zaman</td>
                        <td>ShowravZ</td>
                        <td>
                            <a href="#" class="button">Update Admin</a>
                            <a href="#" class="button">Delete Admin</a>
                        </td>
                    </tr>

                    <tr>
                        <td>1. </td>
                        <td>Showrav Zaman</td>
                        <td>ShowravZ</td>
                        <td>
                            <a href="#" class="button">Update Admin</a>
                            <a href="#" class="button">Delete Admin</a>
                        </td>
                    </tr>
                </table>
                <br/><br/><br/><br/>
                <div style="margin-left: 80%" >
                <a href="<?php echo SITEURL; ?>admin/add-service.php" class="button">ADD SERVICE</a>
                </div>
            </div>
        </div>
        <!-- Section End Here -->

<?php include('partials/end.php'); ?>  