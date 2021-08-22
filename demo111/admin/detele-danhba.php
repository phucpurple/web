<?php 

    //Include constants.php file here
    require('../config/constants.php');
    if(isset($_GET["id"])){

    
  
    $id = $_GET['id'];
}
    //2. Create SQL Query to Delete Admin
    $sql1 = "DELETE FROM tbl_danhba WHERE id=$id";

    //Execute the Query
    $res1 = mysqli_query($conn, $sql1);

    // Check whether the query executed successfully or not
    if($res1==true)
    {
        //Query Executed Successully and Admin Deleted
        //echo "Admin Deleted";
        //Create SEssion Variable to Display Message
        $_SESSION['delete'] = "<div class='success'> Deleted Successfully.</div>";
        //Redirect to Manage Admin Page
        header('location:'.SITEURL.'admin/mag-danhba.php');
    }
    else
    {
        //Failed to Delete Admin
        //echo "Failed to Delete Admin";

        $_SESSION['delete'] = "<div class='error'>Failed to Delete . Try Again Later.</div>";
        header('location:'.SITEURL.'admin/mag-danhba.php');
    }

    //3. Redirect to Manage Admin page with message (success/error)

?>