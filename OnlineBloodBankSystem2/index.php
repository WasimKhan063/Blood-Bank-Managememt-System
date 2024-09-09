<?php
include 'includes/db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- <link rel="stylesheet" href="assets/css/style.css">--->
    <!-- <link rel="stylesheet" href="assets/css/styles.css"> --->
     <link rel="stylesheet" href="assets/css/stylesss.css">  
    <!-- <link rel="stylesheet" href="assets/css/style1.css"> --->
    <!-- <link rel="stylesheet" href="assets/css/styles1.css"> --->
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.css"> --->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Kalam:wght@300&family=Satisfy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
<h4> Its a demo website only for development perpose.</h4>
    <header>
        <div class="container-fluid">
            <div class="row head text-light">
                <div class="col-md-3 text-center topicon">
                    <span ><i class="fa-solid fa-phone"></i>+91-9128438331 </span>
                </div>

                <div class="col-md-2 text-center topicon"><span><i class="fa-solid fa-envelope"></i>wk@gmail.com</span></div>
                <div class="col-md-4 "></div>
                <div class="col-md-3 text-center topicon">
                    Follow us :
                    <a style="color: white;" href="https://drive.google.com/file/d/1YLIRQpZVuL3DCbMlZ5BOebvagc8biBa3/view?usp=drivesdk">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a style="color: white;" href="https://drive.google.com/file/d/1YLIRQpZVuL3DCbMlZ5BOebvagc8biBa3/view?usp=drivesdk">
                    <i class="fa-brands fa-twitter"></i>
                </a>
                <a style="color: white;" href="https://drive.google.com/file/d/1YLIRQpZVuL3DCbMlZ5BOebvagc8biBa3/view?usp=drivesdk">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                </div>
            </div>
        </div>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-light head2">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src=" assets/images/logo2.jpg" alt="logo" width="70px">
                    <b>W_K__BLOODBANK</b>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"                                       aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><b> ☰ </b></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link btn mx-1" href="#">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn mx-1" href="donor/register.php">Donate Blood</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn mx-1" href="patient/request_blood.php">Blood For Patient</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn  mx-1" href="pages/contact.php">About Us</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link btn  mx-1" href="login.php">Admin Login</a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>

    </header>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


    <div class="stock" style="font-family:'Times New Roman', Times serif;">
        <!-- Carousel Section -->
        <br>

        <!-- Section 1: Blood Donors -->
        <div class="term">
    <h3 class="heading text-center mb-4 mt-2 text-danger">
        " <i class="fa-solid fa-people-group"></i>  Our Real Heroes Who Regularly Donate Blood"
    </h3>
    <div class="row">
      <div class="col-md-5 col-12 text-center p-3">
            <img id="img" src="assets/images/home.jpeg" alt="img" class="img-fluid rounded shadow-lg">
        </div>
        <div class="col-md-7 pl-3 pt-3">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="thead-secondary">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Group</th>
                            <th>Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Modify query to limit results to 10 rows
                        $result = $conn->query("SELECT * FROM donors WHERE status='Confirmed' LIMIT 10");
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>{$row['donor_id']}</td>
                                    <td>{$row['name']}</td>
                                    <td>{$row['blood_group']}</td>
                                    <td>{$row['phone']}</td>
                                  </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
      
    </div>
</div>
<br>
<hr>
<br>


        <!-- Section 4: Blood Donors -->
        <div class="term">
            <h3 class="heading text-center text-danger mb-2">
                "Who are the blood donors?"
            </h3>
            <div class="row">
                <div class="col-md-6">
                    <p>Most blood donors are volunteers. However, sometimes, a patient may want to
                        donate blood
                        a couple of weeks before undergoing surgery, so that his or her blood is
                        available in
                        case of a blood transfusion. Donating blood for yourself is called an
                        autologous
                        donation. Volunteer blood donors must pass certain criteria, including the
                        following:</p>
                    <ul>
                        <li>At least 16 years old</li>
                        <li>Good health</li>
                        <li>Weigh at least 110 pounds</li>
                        <li>Must pass the physical and health history exam given before donation</li>
                    </ul>
                    <p>Some states permit people younger than 16 or 17 years to donate blood, with
                        parental consent.</p>
                </div>
                <div class="col-md-6">
                    <img src="assets/images/term.jpg" alt="img" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>

        
        <hr>
    
        <!-- Section 3: Blood Types -->
        <!--<div class="term">
            <h3 class="heading text-center text-danger mb-4 mt-2">
                "BLOOD TYPES"
            </h3>

            <div class="row">
                <div class="col-md-6">
                    <img src="assets/images/type.jpeg" alt="img" class="img-fluid rounded shadow">
                </div>
                <div class="col-md-6">
                    <p>According to the American Association of Blood Banks, distribution of blood
                        types in the U.S. includes the following:
                    </p>
                    <ul>
                        <li>O-positive - 39%</li>
                        <li>A-positive - 31%</li>
                        <li>B-positive - 9% </li>
                        <li>O-negative - 9%</li>
                        <li>A-negative - 6%</li>
                        <li>AB-positive - 3%</li>
                        <li>B-negative - 2%</li>
                        <li>AB-negative - 1%</li>

                    </ul>
                    <br>
                    <p>Albumin, immune globulins, and clotting factor concentrates may also be
                        separated
                        and processed for transfusions. </p>
                </div>
            </div>
        </div><br>
        <hr><br> -->
        <!-- Section 2: Blood Components -->
        <!--<div class="term">
            <h3 class="heading text-center text-danger mb-4 mt-2">
                "Components Of Blood"
            </h3>
            <div class="row">
                <div class="col-lg-6">
                    <p>While blood, or one of its components, may be transferred, each component
                        serves many functions, including the following:
                    </p>
                    <ul>
                        <li><b class="text-danger"> Red blood cells. </b> &nbsp; These cells carry
                            oxygen to the tissues in the body and are commonly used in the treatment
                            of anemia.</li>
                        <li> <b class="text-danger"> Platelets. </b> &nbsp; They help the blood to
                            clot and are used in the treatment of leukemia and other forms of
                            cancer.</li>
                        <li><b class="text-danger"> White blood cells. </b>&nbsp; These cells help
                            to fight infection, and aid in the immune process.</li>
                        <li> <b class="text-danger"> Plasma. </b> &nbsp; watery, liquid part of the
                            blood in which the red blood cells, white blood cells, and platelets are
                            suspended. Plasma is needed to carry the many parts of the blood through
                            the bloodstream. Plasma serves many functions, including the following:
                        </li>
                        <ul>
                            <li>Helps to maintain blood pressure</li>
                            <li>Provides proteins for blood clotting</li>
                            <li>Balances the levels of sodium and potassium</li>
                        </ul>
                        <li> <b class="text-danger"> Cryoprecipitate AHF.</b> &nbsp; The portion of
                            the plasma that contains clotting factors that help to control bleeding.
                        </li>
                    </ul>
                    <br>
                  
                </div>
                <div class="col-lg-6">
                    <img src="assets/images/test.jpg" alt="img" class="img-fluid rounded shadow">
                </div>
            </div>
        </div> -->

    

    </div>

    <div class="footer">
    <div class="row">
        <div class="col-md-6">
            <h3 class="text-uppercase">ABOUT W-K-BLOODBANK</h3>

            <p>
                Our BloodBank enforces Drug & Cosmetic Act, National blood policy standards
                and
                guidelines ensuring
                proper collection &
                donation, effective management and monitoring the quality and quantity of
                the
                donated blood. Considering
                the
                national roll out, <a href="index.php" class="text-danger"> W_K__BLOODBANK
                </a>has
                been developed with modular and scalable approach with configurable
                rule
                based architecture allowing customization to easily incorporate specific
                requirements from nationwide
                stakeholders.
            </p>
        </div>

        <div class="col-md-3 link">
            <h3 class="text-uppercase">Our Links</h3>

            <ul class="list-unstyled">
                <li>
                    <a href="patient/request_blood.php">"Blood For Patient"</a>
                </li>
                <li>
                    <a href="donor/register.php">"Donate Blood"</a>
                </li>
                <li>
                    <a href="pages/contact.php">"Contect Us"</a>
                </li>
                <li>
                    <a href="https://drive.google.com/file/d/1YLIRQpZVuL3DCbMlZ5BOebvagc8biBa3/view?usp=drivesdk">"Know more" </a>
                </li>

            </ul>
            <hr>
        </div>

        <div class="col-lg-3">
            <h3 class="text-uppercase">Our contect</h3>

            <ul class="list-unstyled">
                <li><i class="fa fa-map-marker"></i> &nbsp; Bhilai, Chhattisgarh</li>
                <li><i class="fa fa-fax"></i><a href="tel:+91 9128438331"> &nbsp;
                        +91-9128438331</a></li>
                <li><i class="fa fa-phone"></i><a href="tel:+91 9128438331"> &nbsp;
                        +91-9128438331</a></li>
                <li> <i class="fa-solid fa-envelope"></i><a href="#"> &nbsp;
                        info@wkbloodbank.in</a></li>

            </ul>
            <hr>
        </div>

    </div>

    <div class="text-center py-3 ft">
        © 2024 Copyright :
        <a class="text-white" href="../admin/login.php"> wkbloodbank.com</a>

    </div>
</div>

<script src="../assets/js/scripts.js"></script></body>

</html>