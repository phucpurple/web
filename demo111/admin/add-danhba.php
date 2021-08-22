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
                    <td>Họ Tên </td>
                    <td>
                        <input type="text" name="ho_ten" placeholder="">
                    </td>
                </tr>

                <tr>
                    <td>Chức Vụ</td>
                    <td>
                        <input type="text" name="chuc_vu" placeholder=""></input>
                    </td>
                </tr>

                <tr>
                    <td>Số Điện Thoại: </td>
                    <td>
                        <input type="text" name="number_phone">
                    </td>
                </tr>

                <tr>
                    <td>Địa Chỉ Email: </td>
                    <td>
                        <input type="text" name="address_email">
                    </td>
                </tr>
                <tr>
                    <td>Mã Khoa </td>
                    <td>
                        <input type="text" name="ma_khoa_id">
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
                $ho_ten = $_POST['ho_ten'];
                $chuc_vu = $_POST['chuc_vu'];
                $number_phone = $_POST['number_phone'];
                $address_email = $_POST['address_email'];
                $ma_khoa_id = $_POST['ma_khoa_id'];


                //Check whether radion button for featured and active are checked or not
                
                //3. Insert Into Database

                //Create a SQL Query to Save or Add food
                // For Numerical we do not need to pass value inside quotes '' But for string value it is compulsory to add quotes ''
                $sql2 = "INSERT INTO tbl_danhba SET 
                    ho_ten = '$ho_ten',
                    chuc_vu = '$chuc_vu',
                    number_phone = $number_phone,
                    address_email = '$address_email',
                    ma_khoa_id = '$ma_khoa_id'
                    
                ";

                //Execute the Query
                $res2 = mysqli_query($conn, $sql2);

                //CHeck whether data inserted or not
                //4. Redirect with MEssage to Manage Food page
                if($res2 == true)
                {
                    //Data inserted Successfullly
                    $_SESSION['add'] = "<div class='success'>Food Added Successfully.</div>";
                    header('location:'.SITEURL.'admin/mag-danhba.php');
                }
                else
                {
                    //FAiled to Insert Data
                    $_SESSION['add'] = "<div class='error'>Failed to Add .</div>";
                    header('location:'.SITEURL.'admin/mag-danhba.php');
                }

                
            }

        ?>


    </div>
</div>

<?php include('partials/footer.php'); ?>