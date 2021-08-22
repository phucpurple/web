

<!doctype html>
<html lang="en">
  <head>
    <title>Res</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="f.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Bootstrap CSS v5.0.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  </head>
  <body>
  <link rel="stylesheet" href="f.css">
  <div id="main-main" class="container-fluid">
        <main>
            <h2 class=" d-flex justify-content-center col-md-3">Thông Tin</h2>
            <form action="" class=" d-flex justify-content-center col-md-3 ">
                <input type="text" class="search" name="search" placeholder="Search ..." >

            </form>
            <div class="row main-content">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Họ Tên</th>
                    <th scope="col">Chức Vụ</th>
                    <th scope="col">Mã Khoa</th>
                    <th scope="col">Tên Khoa</th>
                    <th scope="col">Số Điện Thoại Khoa</th>
                    <th scope="col">Số Điện Thoại</th>
                    <th scope="col">DC Email</th>
                    <th scope="col">DC Email Khoa</th>
                    <th scope="col">DC Khoa</th>
                
                    </tr>
                </thead>
                <tbody class="danhsach">
                    <?php
                        $conn = mysqli_connect('localhost','root','','info');
                        if(!$conn){
                            die(" disconnect");
                        }
                        //Lặp lấy dữ liệu và hiển thị ra bảng
                        //Bước 02: Thực hiện Truy vấn
                        
                       
                        $sql = "SELECT * FROM tbl_danhba AS DB, tbl_khoa AS K WHERE (DB.ma_khoa_id = K.ma_khoa) ";
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
                   
                    
                    
                </tbody>
                </table>

            </div>
        </main>
    </div>
      
    <!-- Bootstrap JavaScript Libraries -->
         <script type="text/javascript">
            $(document).ready(function(){
                $('.search').keyup(function(){
                  var txt =$('.search').val();
                  $.post('ajax.php',{data:txt},function(data){
                    $('.danhsach').html(data);
                  
                    })

                })
            
            })
         </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>