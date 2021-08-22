<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Update </h1>

        <br><br>

        <?php 
            //1. Get the ID of Selected Admin
            $id=$_GET['id'];

            //2. Create SQL Query to Get the Details
            $sql="SELECT * FROM tbl_danhba WHERE id=$id";

            //Execute the Query
            $res=mysqli_query($conn, $sql);

            //Check whether the query is executed or not
            if($res==true)
            {
                // Check whether the data is available or not
                $count = mysqli_num_rows($res);
                //Check whether we have admin data or not
                if($count==1)
                {
                    // Get the Details
                    //echo "Admin Available";
                    $row=mysqli_fetch_assoc($res);

                    $ho_ten = $row['ho_ten'];
                    $chuc_vu = $row['chuc_vu'];
                    $number_phone = $row['number_phone'];
                    $address_email= $row['address_email'];
                    $ma_khoa_id = $row['ma_khoa_id'];
                    
                }
                else
                {
                    //Redirect to Manage Admin PAge
                    header('location:'.SITEURL.'admin/mag-danhba.php');
                }
            }
        
        ?>


        <form action="" method="POST">

            <table class="tbl-30">
                <tr>
                    <td>Họ Ten: </td>
                    <td>
                        <input type="text" name="ho_ten" value="<?php echo $ho_ten; ?>">
                    </td>
                </tr>

                <tr>
                    <td>Chức Vụ: </td>
                    <td>
                        <input type="text" name="chuc_vu" value="<?php echo $chuc_vu; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Số Điện Thoại: </td>
                    <td>
                        <input type="text" name="number_phone" value="<?php echo $number_phone; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Địa Chỉ Email: </td>
                    <td>
                        <input type="text" name="address_email" value="<?php echo $address_email; ?>">
                    </td>
                </tr>
                <tr>
                    <td>ID khoa: </td>
                    <td>
                        <input type="text" name="ma_khoa_id" value="<?php echo $ma_khoa_id; ?>">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Update " class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>
    </div>
</div>

<?php 

    //Check whether the Submit Button is Clicked or not
    if(isset($_POST['submit']))
    {
          
                //1. Get the DAta from Form
                
                $ho_ten = $_POST['ho_ten'];
                $chuc_vu = $_POST['chuc_vu'];
                $number_phone = $_POST['number_phone'];
                $address_email = $_POST['address_email'];
                $ma_khoa_id = $_POST['ma_khoa_id'];


                //Check whether radion button for featured and active are checked or not
                
                //3. Insert Into Database

                //Create a SQL Query to Save or Add food
                // For Numerical we do not need to pass value inside quotes '' But for string value it is compulsory to add quotes ''
                $sql2 = " UPDATE tbl_danhba SET 
                    ho_ten = '$ho_ten',
                    chuc_vu = '$chuc_vu',
                    number_phone = '$number_phone',
                    address_email = '$address_email',
                    ma_khoa_id = '$ma_khoa_id'
                    WHERE id='$id'
                ";

        //Execute the Query
        $res2 = mysqli_query($conn, $sql2);

        //Check whether the query executed successfully or not
        if($res2==true)
        {
            //Query Executed and Admin Updated
            $_SESSION['update'] = "<div class='success'>Admin Updated Successfully.</div>";
            //Redirect to Manage Admin Page
            header('location:'.SITEURL.'admin/mag-danhba.php');
        }
        else
        {
            //Failed to Update Admin
            $_SESSION['update'] = "<div class='error'>Failed to Update.</div>";
            //Redirect to Manage Admin Page
            header('location:'.SITEURL.'admin/mag-danhba.php');
        }
    }

?>


<?php include('partials/footer.php'); ?>