<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Stock </title>

    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="blood.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Kalam:wght@300&family=Satisfy&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<?php

$user="root";
$host="localhost";
$pass="";
$dbname="blood_bank";

$con = mysqli_connect($host, $user, $pass, $dbname);

?>

<body>
    <?php
include("./aheader.php");
    ?>

 <div class=" stock">

<h1 class="heading text-danger my-4"><span class="text-danger">"</span> <u> BLOOD STOCK </u> <span class="text-danger">"</span></h1>


<h2><u> WHOLE BLOOD </u> :</h2>
<?php

 $sql="SELECT * FROM whole_blood ";

$result = mysqli_query($con, $sql) or die("failed");

if(mysqli_num_rows($result)>0){

while($row=mysqli_fetch_assoc($result)){
    
?>
<div class="box-container">

    <div class="box">
        <h1>A+ve</h1>
        <p>  <?php echo $row['A+ve'];  ?>  </p>
    </div> 

    <div class="box">
        <h1>A-ve</h1>
        <p><?php echo $row['A-ve'];  ?>  </p>

    </div>

    <div class="box">
        <h1>B+ve</h1>
        <p><?php echo $row['B+ve'];  ?>  </p>

    </div>

    <div class="box">
        <h1>B-ve</h1>
        <p><?php echo $row['B-ve'];  ?>  </p>

    </div>

    <div class="box">
        <h1>AB+ve</h1>
        <p><?php echo $row['AB+ve'];  ?>  </p>

    </div>

    <div class="box">
        <h1>AB-ve</h1>
        <p><?php echo $row['AB-ve'];  ?>  </p>

    </div>

    <div class="box">
        <h1>O+ve</h1>
        <p><?php echo $row['O+ve'];  ?>  </p>

    </div>

    <div class="box">
        <h1>O-ve</h1>
        <p><?php echo $row['O-ve'];  ?>  </p>

    </div>

    <?php

}

}
else{
    echo "error";
}
?>

</div> <br><hr><br>

<h2> <u>PLATELETS</u> :</h2>
<?php

 $sqll="SELECT * FROM platelets_tb ";

$resultt = mysqli_query($con, $sqll) or die("failed");

if(mysqli_num_rows($resultt)>0){

while($row=mysqli_fetch_assoc($resultt)){
    
?>

<div class="box-container">

    <div class="box">
        <h1>A+ve</h1>
        <p><?php  echo $row['A+ve'];  ?> </p>
    </div>

    <div class="box">
        <h1>A-ve</h1>
        <p><?php echo $row['A-ve'];  ?> </p>

    </div>

    <div class="box">
        <h1>B+ve</h1>
        <p><?php echo $row['B+ve'];  ?> </p>

    </div>

    <div class="box">
        <h1>B-ve</h1>
        <p><?php echo $row['B-ve'];  ?> </p>

    </div>

    <div class="box">
        <h1>AB+ve</h1>
        <p><?php echo $row['AB+ve'];  ?> </p>

    </div>

    <div class="box">
        <h1>AB-ve</h1>
        <p><?php echo $row['AB-ve'];  ?> </p>

    </div>

    <div class="box">
        <h1>O+ve</h1>
        <p><?php echo $row['O+ve'];  ?> </p>

    </div>

    <div class="box">
        <h1>O-ve</h1>
        <p><?php echo $row['O-ve'];  ?> </p>

    </div>

    <?php

}

}
else{
    echo "error";
}
?>

</div>

<br><hr><br>
<!-- 
<h2>PLASMA :</h2>
<div class="box-container">

    <div class="box">
        <h1>A+ve</h1>
        <p>15</p>
    </div>

    <div class="box">
        <h1>A-ve</h1>
        <p>15</p>

    </div>

    <div class="box">
        <h1>B+ve</h1>
        <p>15</p>

    </div>

    <div class="box">
        <h1>B-ve</h1>
        <p>15</p>

    </div>

    <div class="box">
        <h1>AB+ve</h1>
        <p>15</p>

    </div>

    <div class="box">
        <h1>AB-ve</h1>
        <p>15</p>

    </div>

    <div class="box">
        <h1>O+ve</h1>
        <p>15</p>

    </div>

    <div class="box">
        <h1>O-ve</h1>
        <p>15</p>

    </div>



</div> -->

</div>
<?php
include("./footer.php")
 ?>
 


</body>
</html>