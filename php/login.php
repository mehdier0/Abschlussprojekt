<!DOCTYPE html>
<html lang="de">

<head>

    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/login.css">

</head>

<body>

    <?php
        include 'navbar.php';
    ?>

    <?php
        $msg = '';

    if (
        isset($_POST['login']) && !empty($_POST['username'])
        && !empty($_POST['password'])
    ) {

        if (
            $_POST['username'] == 'Admin' &&
            $_POST['password'] == 'admin123'
        ) {
            $_SESSION['userID'] = '123';
            header('Location: index.php'); 
        } else if (
            $_POST['username'] == 'test1' &&
            $_POST['password'] == 'abc'
        ) {
            $_SESSION['userID'] = '234';
            header('Location: index.php'); 
        } else {
            $msg = 'Wrong credentials, please try again!';
        }
    }
    ?>

  

<div class="allforum" style="padding-top: 120px;">
    <div class="login">

        <h1 class="text-center">Hallo!</h1>
        
        <form class="needs-validation" method="post">
        <h4 class="text-center"><?php echo $msg; ?></h4>
            <div class="form-group was-validated">
                <label class="form-label" for="name">Username</label>
                <input  type="text" name="username" id="username" required>
                
            </div>
            <div class="form-group was-validated">
                <label class="form-label" for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>
            <div class="form-group form-check">
                <input class="form-check-input" type="checkbox" id="check">
                <label class="form-check-label" for="check">Erinneren Sie mich</label>
            </div>
            <input class="btn btn-success w-100" type="submit" value="SIGN IN" name="login">
        </form>
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