<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Donor_list </title>

    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="blood.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Kalam:wght@300&family=Satisfy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "blood_bank";
$con = mysqli_connect($host, $user, $pass, $db);


$sql = "select * from donor_tb";
$res = mysqli_query($con, $sql);

?>

<body>

    <div class="container-fluid">

        <?php
        include("./aheader.php");
        ?>

        <div class=" stock">

            <div class="row"><br>
                <div class=" col-md-12 text-center">
                    <h1 class="text-white"> "<u class="text-danger"> Blood Donor List </u> "</h1>
                </div>
            </div> <br>
            <div style="font-size: 90%; overflow-x:scroll;">

                <table class="table table-bordered text-center">
                    <thead class="bg-danger">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Age</th>
                            <th scope="col">Disease</th>
                            <th scope="col">Blood</th>
                            <!-- <th scope="col">Quantity</th> -->
                            <th scope="col">Gender</th>
                            <th scope="col">Blood_Type</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Aadhar_No.</th>
                            <th scope="col">Address</th>
                            <th scope="col">Date</th>
                            <!-- <th scope="col">Action </th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php

    while ($data = mysqli_fetch_assoc($res)) {
    
    $id = $data['d_id'];
    $name= $data['d_name'];
    $age= $data['d_age'] ;
    $disease= $data['d_disease'];
    $group= $data['d_group'] ;
    $gender= $data['d_gender'] ;
    $type= $data['d_type'] ;
    $mobile= $data['d_mobile'];
    $aadhar= $data['d_aadhar'] ;
    $address= $data['d_address'];
    $date=$data['d_date'] ;

                            echo
                            "
                            <tr>
                            <th scope='row'>" . $data['d_id'] . "</th>
                            <td>" . $data['d_name'] . "</td>
                        <td>" . $data['d_age'] . "</td>
                        <td>" . $data['d_disease'] . "</td>
                        <td>" . $data['d_group'] . "</td>
                        
                        <td>" . $data['d_gender'] . "</td>
                        <td>" . $data['d_type'] . "</td>
                        <td>" . $data['d_mobile'] . "</td>
                        <td>" . $data['d_aadhar'] . "</td>
                        <td>" . $data['d_address'] . "</td>
                        <td>" . $data['d_date'] . "</td>
                       
                       </form>
                        ";
                        }
                        ?>




                        <!-- <tr>
                            <th scope="row">2</th>
                            <td>Wasim Khan</td>
                            <td>20</td>
                            <td>Accident</td>
                            <td>A+ve</td>
                            <td>2 UNIT</td>
                            <td>Male</td>
                            <td>WHOLE BLOOD</td>
                            <td>9128438331</td>
                            <td>786982347654</td>
                            <td>Housing board Bhilai</td>
                            <td>03/02/2023</td>
                            <td>
                                 </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Tusar Mondal</td>
                            <td>20</td>
                            <td>Dangue</td>
                            <td>B+ve</td>
                            <td>1 UNIT</td>
                            <td>Male</td>
                            <td>WHOLE BLOOD</td>
                            <td>9928438331</td>
                            <td>786562347654</td>
                            <td>Bhilai-3 </td>
                            <td>15/02/2023</td>
                            <td>
                               </td>
                        </tr> -->
                    </tbody>
                </table>

            </div>

        </div>

        <footer>
            <?php

            include("./footer.php");

            ?>
        </footer>


    </div>



</body>
<!--  <td><i class='fa-solid fa-user-check' style='color: #078320;'></i>
                        <i class='fa-sharp fa-solid fa-circle-xmark' style='color: #e01a42;'></i>
                        <a href = 'accept.php?age=<?php echo $bca;?>'>ABC</a>
                        </td>

                        
                        </tr>
                        <form action='accept.php' method='post'>
                    
                       <input type='hidden' name='bca' value=''>
                       <input class='btn btn-outline-danger' type='submit' value=' REGISTER NOW'>
 -->

</html>