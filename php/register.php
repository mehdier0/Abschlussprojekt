<?php
// define variables and set to empty values
$genderErr = $nameErr = $sernameErr = $userErr = $emailErr= $passwordErr = "";
$gender = $name = $sername = $username = $email = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["gender"])) {
    $genderErr = "Anrede ist nicht vorhanden!";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  if (empty($_POST["vorname"])) {
    $nameErr = "Vorname ist nicht vorhanden!";
  } else {
    $name = test_input($_POST["vorname"]);
  }
  if (empty($_POST["sername"])) {
    $sernameErr = "Nachname ist nicht vorhanden!";
  } else {
    $sername = test_input($_POST["sername"]);
  }
  if (empty($_POST["username"])) {
    $userErr = "Username nicht vorhanden";
  } else {
    $username = test_input($_POST["username"]);
  }
  if (empty($_POST["email"])) {
    $emailErr = "E-Mail nicht angegeben!";
  } else {
    $email = test_input($_POST["email"]);
  }
  if (empty($_POST["password"])) {
    $passwordErr = "Password nicht angegeben";
  } else {
    $password = test_input($_POST["password"]);
  }
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>

<!DOCTYPE html>
<html lang="de">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bootstrap 5 Registration Form Example</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>

    <body>

    <?php
       include_once "navbar.php"
     ?>
        <div class="container-fluid vh-100" style="margin-top:300px">
            <div class="" style="margin-top:200px">
                <div class="rounded d-flex justify-content-center">
                    <div class="col-md-4 col-sm-12 shadow-lg p-5 bg-light">
                        <div class="text-center">
                            <h3 class="text-primary text-dark">Konto erstellen</h3>
                        </div>
                        <div class="p-4">
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <div class="form-control mb-3" name="gender">
                                <select class="form-select" aria-label="Default select example">
                                <option selected>Anrede</option>
                                <option value="1">Herr</option>
                                <option value="2">Frau</option>
                                </select>
                                <span class="error"> *<?php echo $genderErr;?></span> <br><br>
                              </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-dark"><i
                                            class="bi-pen text-white"></i></span>
                                    <input type="text" class="form-control" name="vorname"placeholder="Vorname">
                                    <span class="error"> * <?php echo $nameErr;?></span> <br><br>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-dark"><i
                                            class="bi-pen text-white"></i></span>
                                    <input type="text" class="form-control" name="sername" placeholder="Nachname">
                                    <span class="error">* <?php echo $sernameErr;?></span> <br><br>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-dark"><i
                                            class="bi bi-person-plus-fill text-white"></i></span>
                                    <input type="text" class="form-control" name="username" placeholder="Username">
                                    <span class="error">* <?php echo $userErr;?></span> <br><br>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-dark"><i
                                            class="bi bi-envelope text-white"></i></span>
                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                    <span class="error">* <?php echo $emailErr;?></span> <br><br>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-dark"><i
                                            class="bi bi-key-fill text-white"></i></span>
                                    <input type="password" class="form-control" name="password" placeholder="password">
                                    <span class="error">* <?php echo $passwordErr;?></span> <br><br>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-dark"><i
                                            class="bi bi-key-fill text-white"></i></span>
                                    <input type="password" class="form-control" name="password" placeholder="password wiederholen">
                                    <span class="error">* <?php echo $passwordErr;?></span> <br><br>
                                </div>
                                <div class="d-grid col-12 mx-auto">
                                    <button class="btn btn-outline-dark" type="submit" value="Registrieren" name="registrieren"><span></span>registrieren</button>
                                </div>
                                <p class="text-center mt-3">Sie haben bereits ein Konto?
                                    <span class="text-primary text-black-50">Login</span>
                                </p>
                            </form>
                            <?php
                            echo $gender;
                            echo $name;
                            echo $sername;
                            echo $username;
                            echo $email;
                            echo $password;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--footer-->
<div class="container-fluid  text-white p-3" style="font-family: 'Poppins', sans-serif; background: #0e0d0f;
background: linear-gradient(to right, #0c0c0c, #101013, #0f0c29);">


     <div class="row justify-content-around text-center text-md-start">

         <div class="col-md-2 text-center">
             <h1 class="fw-bold mt-3 ">Hotel</h1>
             <h4>Schlafgut</h4>
         </div>
         <div class="col-md-2">
             <ul class="list-unstyled">
                 <li class="fw-bold my-2">Partnership</li>
                 <li> <a href="#" class="text-decoration-none text-white">Lorem Impsum</a> </li>
                 <li> <a href="#" class="text-decoration-none text-white"> </a>Lorem Fasad</li>
                 <li> <a href="#" class="text-decoration-none text-white">Mares Zutas</a> </li>
             </ul>
         </div>
         <div class="col-md-2">
             <ul class="list-unstyled">
                 <li class="fw-bold my-2">About</li>
                 <li> <a href="#" class="text-decoration-none text-white">Our Project</a> </li>
                 <li> <a href="#" class="text-decoration-none text-white">Careers</a> </li>

             </ul>
         </div>
         <div class="col-md-2">
             <ul class="list-unstyled">
                 <li class="fw-bold my-2">Support</li>
                 <li> <a href="#" class="text-decoration-none text-white">Contact</a> </li>
                 <li> <a href="impressum.php" class="text-decoration-none text-white">Impressum</a> </li>
                 <li> <a href="faq.php" class="text-decoration-none text-white">FAQ</a> </li>
             </ul>
         </div>
         <div class="col-md-2">
             <ul class="list-unstyled d-flex justify-content-center justify-content-md-start">
                 <li><a href="#" class="text-white"><i class="fa-brands fa-facebook me-2 fa-1x"></i></a></li>
                 <li><a href="#" class="text-white"><i class="fa-brands fa-whatsapp mx-2 fa-1x"></i></a></li>
                 <li><a href="#" class="text-white"><i class="fa-brands fa-youtube mx-2 fa-1x"></i></a></li>
                 <li><a href="#" class="text-white"><i class="fa-brands fa-instagram mx-2 fa-1x"></i></a></li>
             </ul>
         </div>
     </div>
     <hr>
     <div class="row">
         <div class="col-md-12 text-center pt-2">
             <p>&copy; 2022 Copyright <a href="#" class="text-white">The Providers</a></p>
         </div>
     </div>
 </div>
<!--footer ends-->
    </body>
</html>