<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add </h1>

        <br><br>

        <?php 
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }
        ?>

        <form action="" method="POST" >
        
            <table class="tbl-30">

                <tr>
                    <td>Mã Khoa </td>
                    <td>
                        <input type="text" name="ma_khoa" placeholder="">
                    </td>
                </tr>

                <tr>
                    <td>Tên Khoa</td>
                    <td>
                        <input type="text" name="ten_khoa" placeholder=""></input>
                    </td>
                </tr>

                <tr>
                    <td>Số Điện Thoại Khoa: </td>
                    <td>
                        <input type="text" name="phone_khoa">
                    </td>
                </tr>
                <tr>
                    <td>DC Email Khoa: </td>
                    <td>
                        <input type="text" name="address_email_khoa">
                    </td>
                </tr>
                <tr>
                    <td>DC Khoa : </td>
                    <td>
                        <input type="text" name="address_khoa">
                    </td>
                </tr>


                
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add " class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>

        
        <?php 

            //CHeck whether the button is clicked or not
            if(isset($_POST['submit']))
            {
                //Add the Food in Database
                //echo "Clicked";
                
                //1. Get the DAta from Form
                $ma_khoa = $_POST['ma_khoa'];
                $ten_khoa = $_POST['ten_khoa'];
                $phone_khoa = $_POST['phone_khoa'];
                $address_email_khoa=$_POST['address_email_khoa'];
                $address_khoa=$_POST['address_khoa'];
                //Check whether radion button for featured and active are checked or not
                
                //3. Insert Into Database

                //Create a SQL Query to Save or Add food
                // For Numerical we do not need to pass value inside quotes '' But for string value it is compulsory to add quotes ''
                $sql2 = "INSERT INTO tbl_khoa SET 
                    ma_khoa = '$ma_khoa',
                    ten_khoa = '$ten_khoa',
                    phone_khoa = '$phone_khoa',
                    address_email_khoa= '$address_email_khoa',
                    address_khoa='$address_khoa'
                    
                 ";

                //Execute the Query
                $res2 = mysqli_query($conn, $sql2);

                //CHeck whether data inserted or not
                //4. Redirect with MEssage to Manage Food page
                if($res2 == true)
                {
                    //Data inserted Successfullly
                    $_SESSION['add'] = "<div class='success'>Food Added Successfully.</div>";
                    header('location:'.SITEURL.'admin/mag-khoa.php');
                }
                else
                {
                    //FAiled to Insert Data
                    $_SESSION['add'] = "<div class='error'>Failed to Add .</div>";
                    header('location:'.SITEURL.'admin/mag-khoa.php');
                }

                
            }

        ?>


    </div>
</div>

<?php include('partials/footer.php'); ?>