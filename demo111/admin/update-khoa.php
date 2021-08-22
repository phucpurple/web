<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Update </h1>

        <br><br>

        <?php 
            //1. Get the ID of Selected Admin
            $ma_khoa=$_GET['ma_khoa'];

            //2. Create SQL Query to Get the Details
            $sql="SELECT * FROM tbl_khoa WHERE ma_khoa=$ma_khoa";

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

                    $ma_khoa = $row['ma_khoa'];
                    $ten_khoa = $row['ten_khoa'];
                    $phone_khoa = $row['phone_khoa'];
                    $address_email_khoa= $row['address_email_khoa'];
                    $address_khoa = $row['address_khoa'];
                    
                }
                else
                {
                    //Redirect to Manage Admin PAge
                    header('location:'.SITEURL.'admin/mag-khoa.php');
                }
            }
        
        ?>


        <form action="" method="POST">

            <table class="tbl-30">
                

                <tr>
                    <td>Te Khoa: </td>
                    <td>
                        <input type="text" name="ten_khoa" value="<?php echo $ten_khoa; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Số Điện Thoại Khoa: </td>
                    <td>
                        <input type="text" name="phone_khoa" value="<?php echo $phone_khoa; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Địa Chỉ Email Khoa: </td>
                    <td>
                        <input type="text" name="address_email_khoa" value="<?php echo $address_email_khoa; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Địa Chỉ Khoa: </td>
                    <td>
                        <input type="text" name="address_khoa" value="<?php echo $address_khoa; ?>">
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
                
                
                $ten_khoa = $_POST['ten_khoa'];
                $phone_khoa = $_POST['phone_khoa'];
                $address_email_khoa=$_POST['address_email_khoa'];
                $address_khoa=$_POST['address_khoa'];

                //Check whether radion button for featured and active are checked or not
                
                //3. Insert Into Database

                //Create a SQL Query to Save or Add food
                // For Numerical we do not need to pass value inside quotes '' But for string value it is compulsory to add quotes ''
                $sql2 = " UPDATE tbl_khoa SET 
                  
                    ten_khoa = '$ten_khoa',
                    phone_khoa = '$phone_khoa',
                    address_email_khoa = '$address_email_khoa',
                    address_khoa = '$address_khoa'
                    WHERE ma_khoa='$ma_khoa'
                ";

        //Execute the Query
        $res2 = mysqli_query($conn, $sql2);

        //Check whether the query executed successfully or not
        if($res2==true)
        {
            //Query Executed and Admin Updated
            $_SESSION['update'] = "<div class='success'>Admin Updated Successfully.</div>";
            //Redirect to Manage Admin Page
            header('location:'.SITEURL.'admin/mag-khoa.php');
        }
        else
        {
            //Failed to Update Admin
            $_SESSION['update'] = "<div class='error'>Failed to update.</div>";
            //Redirect to Manage Admin Page
            header('location:'.SITEURL.'admin/mag-khoa.php');
        }
    }

?>


<?php include('partials/footer.php'); ?>