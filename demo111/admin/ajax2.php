<?php require('../config/constants.php'); 
                         $a = $_POST['data'];
    
                        $sql = "SELECT * FROM tbl_danhba WHERE ho_ten LIKE '%$a%' OR  chuc_vu LIKE '%$a%'  OR  number_phone LIKE '%$a%'" ;
                        //Execute the Query
                        $res = mysqli_query($conn, $sql);

                        //CHeck whether the Query is Executed of Not
                        if($res==TRUE)
                        {
                            // Count Rows to CHeck whether we have data in database or not
                            $count = mysqli_num_rows($res); // Function to get all the rows in database

                            $sn=1; //Create a Variable and Assign the value

                            //CHeck the num of rows
                            if($count>0)
                            {
                                //WE HAve data in database
                                while($row=mysqli_fetch_assoc($res))
                                {
                                    //Using While loop to get all the data from database.
                                    //And while loop will run as long as we have data in database

                                    //Get individual DAta
                                    $id=$row['id'];
                                    $hoten=$row['ho_ten'];
                                    $chucvu=$row['chuc_vu'];
                                    $sdt=$row['number_phone'];
                                    $email=$row['address_email'];

                                    //Display the Values in our Table
                                    ?>
                                    
                                    <tr>
                                        <td><?php echo $sn++; ?>. </td>
                                        <td><?php echo $hoten; ?></td>
                                        <td><?php echo $chucvu; ?></td>
                                        <td><?php echo $sdt; ?></td>
                                        <td><?php echo $email; ?></td>
                                        
                                        <td>
                                            
                                            <a href="<?php echo SITEURL; ?>admin/update-danhba.php?id=<?php echo $id; ?>" class="btn-secondary">Update </a>
                                            <a href="<?php echo SITEURL; ?>admin/detele-danhba.php?id=<?php echo $id; ?>" class="btn-danger">Delete </a>
                                        </td>
                                    </tr>

                                    <?php

                                }
                            }
                            else
                            {
                                //We Do not Have Data in Database
                            }
                        }
                    ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>