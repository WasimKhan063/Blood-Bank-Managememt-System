<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Blood_seeker </title>

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

$sql = "SELECT * FROM receiver_tb";
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
          <h1 class="text-white"> "<u class="text-danger"> Blood Seeker List </u> "</h1>
        </div>
      </div> <br>
      <div style="font-size: 90%; overflow-x:scroll;">

        <table class="table table-bordered">
          <thead class="bg-danger">
            <tr>
              <th scope="col">ID.</th>
              <th scope="col">Name</th>
              <th scope="col">Age</th>
              <th scope="col">Disease</th>
              <th scope="col">Blood</th>
              <th scope="col">Quantity</th>
              <th scope="col">Gender</th>
              <th scope="col">Blood_Type</th>
              <th scope="col">Mobile</th>
              <th scope="col">Aadhar_No.</th>
              <th scope="col">Address</th>
              <th scope="col">Date</th>
              <!-- <th scope="col">Action</th> -->
            </tr>
          </thead>
          <tbody>
            <?php
            while ($data = mysqli_fetch_assoc($res)) {
              $id = $data['r_id'];
              echo
              "
               <tr>
                            <th scope='row'>" . $data['r_id'] . "</th>
                            <td>" . $data['r_name'] . "</td>
                            <td>" . $data['r_age'] . "</td>
                            <td>" . $data['r_disease'] . "</td>
                            <td>" . $data['r_group'] . "</td>
                            <td>" . $data['r_qnty'] . "</td>
                            <td>" . $data['r_gender'] . "</td>
                            <td>" . $data['r_type'] . "</td>
                            <td>" . $data['r_mobile'] . "</td>
                            <td>" . $data['r_aadhar'] . "</td>
                            <td>" . $data['r_address'] . "</td>
                            <td>" . $data['r_date'] . "</td>
                            <td> </td>
                        </tr>
                        ";
            } ?>


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

</html>