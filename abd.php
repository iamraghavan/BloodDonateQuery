<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project - Blood Donate</title>


    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'></link> 

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/bootstrap.css">

    <link rel="stylesheet" href="./vendors/iconly/bold.css">
    <link rel="stylesheet" href="./vendors/choices.js/choices.min.css" />

    <link rel="stylesheet" href="./vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="./vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/app.css">
    <link rel="shortcut icon" href="./images/favicon.svg" type="image/x-icon">
</head>
<body>

    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>
 
                        <li class="sidebar-item  ">
                            <a href="Dashboard.html" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
 
                        <li class="sidebar-item">
                            <a href="./abd.php" class='sidebar-link'>
                                <i class="bi bi-plus-square-fill"></i>
                                <span>Add Blood Donor</span>
                            </a>
                           
                        </li>

                        <li class="sidebar-item ">
                            <a href="./love.html" class='sidebar-link'>
                                <i class="bi bi-chat"></i>
                                <span>Manage Query</span>
                            </a>
                            
                        </li>

                        <li class="sidebar-item">
                            <a href="./search-donor.html" class='sidebar-link'>
                                <i class="bi bi-table"></i>
                                <span>Search Donors</span>
                            </a>
            
                        </li>

                        <li class="sidebar-item has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-server"></i>
                                <span>Upload Database</span>
                            </a>
            
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main" class='layout-navbar'>
            <header class='mb-3'>
                <nav class="navbar navbar-expand navbar-light ">
                    <div class="container-fluid">
                        <a href="#" class="burger-btn d-block">
                            <i class="bi bi-justify fs-3"></i>
                        </a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                
                                <!-- <li class="nav-item dropdown me-3">
                                    <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class='bi bi-bell bi-sub fs-4 text-gray-600'></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                        <li>
                                            <h6 class="dropdown-header">Notifications</h6>
                                        </li>
                                        <li><a class="dropdown-item">No notification available</a></li>
                                    </ul>
                                </li> -->
                            </ul>
                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="user-menu d-flex">
                                        <div class="user-name text-end me-3">
                                            <h6 class="mb-0 text-gray-600">Administrator</h6>
                                            <p class="mb-0 text-sm text-gray-600"><span id="user" class="message">Hello, <email-id></Email-id></span></p>
                                        </div>
                                        <div class="user-img d-flex align-items-center">
                                            <div class="avatar avatar-md">
                                                <img src="./images/man.png">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                    <li>
                                        <h6 class="dropdown-header">Hello, Admin!</h6>
                                    </li>
                                    <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-person me-2"></i> My
                                            Profile</a></li>
                                    <!-- <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-gear me-2"></i>
                                            Settings</a></li> -->
                                    <!-- <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-wallet me-2"></i>
                                            Wallet</a></li>
                                    <li> -->
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li onclick="logout()"><a class="dropdown-item" href="#"><i
                                        class="icon-mid bi bi-box-arrow-left me-2"></i> Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
            <div id="main-content">

                <div class="page-heading">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1 order-last">
                                <!-- <img width="200px" src="../assets/img/logo.png" alt="" srcset=""> -->
                                
                            </div>
                           
                            <!-- <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Layout Vertical Navbar
                                        </li>
                                    </ol>
                                </nav>
                            </div> -->
                        </div>
                    </div>
                    <section class="section">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"><i class="bi bi-plus-square-fill"></i> Add Blood Donor</h4>
                            </div>
                            <div class="card-body">
                                <section id="multiple-column-form">
                        <div class="row match-height">
                            <div class="col-12">
                                  <div class="card">
                                    <div class="card-content">
                                        <div class="card-body">
<form class="form" action="" method="post" id="registrationform">
                                                            
    <div class="row">
            <div class="col-md-6 col-12">
                <div class="form-group">
                    <label for="first-name-column ">Full Name</label>
                    <input type="text" inputmode="text" id="id1" class="form-control"
                placeholder="Full Name" name="name">
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="form-group">
            <label for="last-name-column">Email id</label>
            <input inputmode="email" type="email"  id="id2" class="form-control "
                placeholder="Email" name="email">
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="form-group">
            <label for="city-column">Select Blood Group</label>
            <div class="input-group mb-3">
                <label class="input-group-text"
                    for="inputGroupSelect01">Group</label>
                <select class="form-select" id="id3" name="bloodGroupType">
                    <option selected>Choose...</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="A1+">A1+</option>
                    <option value="A1-">A1-</option>
                    <option value="A1B+">A1B+</option>
                    <option value="A1B-">A1B-</option>
                    <option value="A2+">A2+</option>
                    <option value="A2-">A2-</option>
                    <option value="A2B+">A2B+</option>
                    <option value="A2B-">A2B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="Bombay Blood Group">Bombay Blood Group</option>
                    <option value="INRA">INRA</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-12">
        <div class="form-group">
            <label for="company-column">Date</label>
            <input type="date" id="id12" class="form-control"
                name="BloodDonateDate" placeholder="">
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="form-group">
            <label for="country-floating">Gender</label>
            <fieldset class="form-group">
                <select class="form-select" id="id4" name="genderType">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option>Transgender</option>
                </select>
            </fieldset>
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="form-group">
            <label for="company-column">Age</label>
            <input type="number" pattern="[0-9]*" inputmode="numeric" id="id5" class="form-control"
                name="age" placeholder="Enter Your Age">
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="form-group">
            <label for="email-id-column">Contact Number</label>
            <input inputmode="tel" type="number" pattern="[0-9]*" inputmode="numeric" id="id6" class="form-control"
                name="contactNumber" placeholder="Contact Number">
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="form-group">
            <label for="email-id-column">Alternative Contact Number</label>
            <input inputmode="tel" type="number" pattern="[0-9]*" inputmode="numeric" id="id11" class="form-control"
                name="AltcontactNumber" placeholder="Alternative Contact Number">
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="form-group">
            <label for="email-id-column">Address</label>
            <input type="text" id="id7" class="form-control"
                name="address" placeholder="Address">
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="form-group">
            <label for="email-id-column">Select Country</label>
            
            <div class="form-group">
                <select name="country" class="countries form-select" id="id8">
                    <option value="">Select Country</option>
                </select>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="form-group">
            <label for="email-id-column">Select State</label>
            
            <div class="form-group">
                <select name="state" class="states form-control" id="id9">
                    <option value="">Select State</option>
                </select>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="form-group">
            <label for="email-id-column">Select city</label>
            
            <div class="form-group">
                <select name="city" class="cities form-control" id="id10">
                    <option value="">Select City</option>
                </select>
            </div>
        </div>
    </div> 

    <div class="col-md-6 col-12">
        <div class="form-group">
            <label for="email-id-column">Enter Your <b>Area / Town / City </b></label>
            
            <div class="form-group">
                <input type="locations" id="id13" class="form-control"
                name="Area" placeholder="Area / Town / City ">
            </div>
        </div>
    </div> 
    <div class="col-md-6 col-12">
        <div class="form-group">
            <label for="email-id-column">Please confirm your availability to donate blood</label>
            
            <div class="form-group">
                <select name="statusCheck" class="form-control" id="id14">
                    <option value="Available">Available</option>
                    <option value="Unavailable">Unavailable</option>
                </select>
            </div>
        </div>
    </div> 


    <br>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                    




                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>


    <div class="col-12 d-flex justify-content-end">
            <button class="btn btn-primary me-1 mb-1" id="submit_button" disabled onclick="check()"  type="submit" value=" Submit Details " name="submit" sendMessage() >Submit</button>
            <!-- <button class="btn btn-primary me-1 mb-1" id="selbtn" >Select</button>
            <button class="btn btn-primary me-1 mb-1" id="redbtn" >read</button>
            <button class="btn btn-primary me-1 mb-1" id="delbtn" >Delete</button> -->
        
            <!-- <input type="checkbox"
            class="form-check-input form-check-success" checked
            name="customCheck" id="customColorCheck3">
        <label class="form-check-label"
            for="customColorCheck3">Success</label> -->


            <button type="reset"
            class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                                </div>
                                                            </div>

                                                            <hr class="mt-7 mb-6">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input form-check-success"
id="terms_and_conditions" value="1" onclick="terms_changed(this)">
                  <label class="form-check-label">I authorise this website to display my name and telephone number, so that the needy could contact me, as and when there is an emergency.</label>
                </div>
                <hr class="mt-7 mb-6">
                                                        </form>
<br>
<br>
                                                        <div class="alert alert-light-info color-info">
                                                           <b style="color:red;"> Important : </b> All Voluntary Donors are warned of likely misuse of blood donated by them at the hospital with or without the knowledge of the hospital management. At some places the hospital staff have taken the blood and sold it to others for a price. As a responsible citizen/voluntary blood donor, we request you to keep a watch on such people and hospitals. Donors must inform the Kurudhi team Members / Coordinators of such areas in case of any doubt.
                                                        </div>

                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>






                    </section>
                </div>

                <!-- Enter your age: <input id="age">
                <button onclick="check()">Check</button> -->

                <footer>
                    <div class="footer clearfix mb-0 text-muted">
                        <div class="float-start">
                            <p>2022 &copy; Anbu Raghavan</p>
                        </div>
                        
                    </div>
                </footer>
            </div>
        </div>
    </div>
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://demos.phplift.net/country-state-and-city-dropdown-jquery/js/countrystatecity.js?v3"></script> 
    <script src="./vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/main.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.10.0/firebase.js"></script>
    <script type="module" src="./Utility/config.js"></script>
    <script type="module" src="./javascript/Dashboard.js"></script>
    <!-- <script type="module" src="./javascript/realtimeDatabase.js"></script> -->
        <!-- <script data-main="scripts/main" src="scripts/require.js"></script> -->

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script> 

z
         


<!-- ---------------------------------------- -->

<script>
    function terms_changed(termsCheckBox){
        if(termsCheckBox.checked){
            document.getElementById("submit_button").disabled = false;
        } else{
            document.getElementById("submit_button").disabled = true;
        }
    }

    // Age Checking above 60+

    var ages = document.getElementById("id5");
    function check(){
             var nbr;
             nbr = Number(document.getElementById("id5").value);
             if(nbr > 60 || nbr > 18)
             {
                // swal("You are not an adult");
             }
             else
             {
                swal({
        title: "Sorry Voluntary Donor " ,
        text: `You are not eligible for Donate Blood ! ${ages} `,
        icon: "success",
        button: "Aww yiss!"
        });
             }
         }

</script>




<!-- ----------------------------------------- -->


<?php   
    if(isset($_POST["submit"])){
    include 'insert.php';
  
    $sql = "INSERT INTO BloodDonarTable (name, email, gender, age, contactNum, altContactNum,bloodType, dateofBloodDate,  
    address , country , state, city, area, status)
    VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["genderType"]."','".$_POST["age"]."','".$_POST["contactNumber"]."'
    ,'".$_POST["AltcontactNumber"]."'
    ,'".$_POST["bloodGroupType"]."'
    ,'".$_POST["BloodDonateDate"]."'
    ,'".$_POST["address"]."'
    ,'".$_POST["country"]."'
    ,'".$_POST["state"]."'
    ,'".$_POST["city"]."'
    ,'".$_POST["Area"]."'
    ,'".$_POST["statusCheck"]."')";
    
    if ($conn->query($sql) === TRUE) {
    echo "
        <script type= 'text/javascript'>
            swal('New record created successfully');
        </script>";
    } 
    else 
    {
        // echo 
        // "<script type= 'text/javascript'>
        //     alert('Error: " . $sql . "<br>" . $conn->error."');
        // </script>";
    }
    
    $conn->close();
    }
    ?>

    





</body>


</html>
