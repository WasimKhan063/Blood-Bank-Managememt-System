<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> About Us </title>

    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="blood.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Kalam:wght@300&family=Satisfy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</head>


<body>

    <div class="container-fluid">

        <?php
        include("./header.php");
        ?>

        <div class=" stock">

            <div class="row">
                <div class=" col-md-12 text-sm-center" style="font-size:200%; color: #940707;">
                    <u> Bloodbank is a private Bloodbank Management system </u>
                </div>
            </div> <br>
            <div class="text-center text-danger">
                <h5>Our Bloodbank will Inaugurate on 7th April 2023 by Hon'ble Minister of Health and Family Welfare,
                    Sh. J P Nadda</h5>
            </div>
            <div class="text-justify">

                Our BloodBank enforces Drug & Cosmetic Act, National blood policy standards and guidelines ensuring
                proper collection &
                donation, effective management and monitoring the quality and quantity of the donated blood. Considering
                the
                national roll out, e-Rakt Kosh has been developed with modular and scalable approach with configurable
                rule
                based architecture allowing customization to easily incorporate specific requirements from nationwide
                stakeholders.
            </div>
            <hr>
            <div class="row">
                <div class="col-md-5"> <br>


                    <div>
                        <h1 class="text-danger text-center"> <span>"</span> Objectives <span>"</span> </h1>
                    </div> <br>


                    <div class="form-row text-danger login">

                        <div class="text-white">
                            <i>
                                <ul>
                                    <li>Safe and Adequate Blood Supplie</li>
                                    <li>Reduced Turnaround Tim</li>
                                    <li>Preventing Wastage of Bloo</li>
                                    <li>Restrict Professional Donor</li>
                                    <li>Networking of Blood Bank</li>
                                    <li>Donor Respository</li>
                                </ul>
                            </i>

                        </div>
                    </div>


                </div>


                <div class="col-md-7 text-lg-center mr-md-n5 pb-5"> <br>
                    <img src="images/objective.jpg" alt="img" width="45%">

                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12 text-center">
                    <h4 class=" text-danger my-4">ASHIRWAD-BLOODBANK has six major components for management of the blood donation life cycle: </h4> <br>
                </div>

                <div class="row" id="term">
                    <div class="col-md-6 ">
                        <img src="images/Screenshot.jpg" alt="img" width="100%" height="80%" class="mx-auto d-block">
                    </div>

                    <div class="col-md-6">
                        <ul>
                            <li>The bio metric Donor Management System for identifying, tracking and blocking donors based on donor's health, donation history etc. </li>
                            <li>It provides features such as blood grouping, TTI screening, antibody screening, component preparation etc. as per the defined processes and rules. </li>
                            <li>A centralized Blood Inventory Management System for keeping track of the blood stock across numerous blood banks. </li>
                            <li>Bio-Medical Waste Management System for disposal of discarded blood and other waste generated during this process. </li>
                            <li>Generation of rare blood group donor registries and the generation of regular repeat donors </li>
                            <li>Alert and Notification System</li>



                        </ul>


                    </div>
                </div>
                <div>
                    <a href="Login.php">
                    <input id="log" type="button" class="btn btn-outline-danger"
                                value="ADMIN LOGIN">
                    </a>

                </div>
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