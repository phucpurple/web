<?php require('config/constants.php');
    $a = $_POST['data'];
    $sql = "SELECT * FROM tbl_danhba AS DB, tbl_khoa AS K WHERE ((DB.ma_khoa_id = K.ma_khoa) AND (ho_ten LIKE '%$a%' OR ten_khoa LIKE '%$a%' OR ma_khoa LIKE '%$a%' OR chuc_vu LIKE '%$a%' ))";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
    $i=1;
    while($row = mysqli_fetch_assoc($result)){
?>
        <tr>
            <th scope="row"><?php echo $i; ?></th>
            <td> <?php echo $row['ho_ten']; ?> </td>
            <td> <?php echo $row['chuc_vu']; ?></td>
            <td> <?php echo $row['ma_khoa']; ?></td>
            <td> <?php echo $row['ten_khoa']; ?> </td>
            <td> <?php echo $row['phone_khoa']; ?></td>
            <td> <?php echo $row['number_phone']; ?></td>
            <td> <?php echo $row['address_email']; ?></td>
            <td> <?php echo $row['address_email_khoa']; ?></td>
            <td> <?php echo $row['address_khoa']; ?></td>
            
        </tr>
<?php
    $i++;
    }
}

?>


<!-- Bootstrap JavaScript Libraries -->


</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>