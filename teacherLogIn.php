<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Teacher Log In - Stanford High School</title>

    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">

    <link rel="icon" href="Resources/dd64da585bc57cb05e5fd4d8ce873f57 (1).png">

</head>
<body class="main-body">

    <div class="container-fluid vh-100">
        <div class="row ">
            <div class="col-12">
                <div class="col-6 ms-3 mt-4">
                    <img src="Resources/dd64da585bc57cb05e5fd4d8ce873f57 (1).png" class="logo">
                    <span class="text-white name">Stanford High School </span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-8 box mx-auto rounded-3">
                <div class="row my-5">
                    <div class="col-6 d-none d-md-block">
                        <div class="ms-3 me-3">
                            <p class="text-white title">Our Vision <hr class="col-4 text-white"></p>
                            <p class="text-white" style="font-size : 25px">Stanford High School: where students are encouraged to dream big and are provided the support they need to succeed.</p>
                        </div>
                        <div class="ms-3 me-3 mt-5">
                            <p class="text-white title">Our Mission <hr class="col-4 text-white"></p>
                            <p class="text-white" style="font-size : 25px">We, Stanford High School, strive to create a community that inspires, empowers, acknowledges and supports all students on their personal pathway to success.</p>
                        </div>
                    </div>
                    <div class="col-6" id="logIn">
                        <div class="col-8 text-white title">Log in as a teacher<hr></div>
                        <div class="col-10 form-floating my-3">
                            <input type="text" class="form-control" placeholder="E-mail Address">
                            <label for="email" class="form-label text">E-mail Address</label>
                        </div>
                        <div class="col-10 form-floating my-3">
                            <input type="text" class="form-control" placeholder="Password">
                            <label for="pw" class="form-label text">Password</label>
                        </div>

                        <div class="row my-3">
                            <div class="col-5">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="rememberme">
                                    <label class="form-check-label text-white">Remember Me</label>
                                </div>
                            </div>
                            <div class="col-5 text-end">
                                <a href="#" class="link-primary">Forgot Password?</a>
                            </div>

                            <div class="col-10 text-center mt-5">
                                <a href="teacherHome.php" class="col-6 btn btn-secondary">Log In</a>
                            </div>
                            <div class="col-10 text-center my-5">
                                <a href="#" class="col-6 btn btn-success" onclick="changeView();">First time logging in?</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 d-none" id="signIn">
                        <div class="col-8 text-white title">Sign in as a teacher<hr></div>

                        <div class="d-flex">
                            <div class="col-5 form-floating">
                                <input type="text" class="form-control" placeholder="First Name">
                                <label for="fname" class="form-label text">First Name</label>
                            </div>
                            <div class="col-5 form-floating mx-auto">
                                <input type="text" class="form-control" placeholder="Last Name">
                                <label for="lname" class="form-label text">Last Name</label>
                            </div>
                        </div>
                        <div class="col-11 form-floating my-3">
                            <input type="text" class="form-control" placeholder="E-mail Address">
                            <label for="email" class="form-label text">E-mail Address</label>
                        </div>
                        <div class="col-11 form-floating my-3">
                            <input type="text" class="form-control" placeholder="Admission Number">
                            <label for="email" class="form-label text">Employee Number</label>
                        </div>
                        <div class="d-flex">
                            <div class="col-5 form-floating">
                                <input type="password" class="form-control" placeholder="Password">
                                <label for="pw" class="form-label text">Password</label>
                            </div>
                            <div class="col-5 form-floating mx-auto">
                                <input type="password" class="form-control" placeholder="Re-type Password">
                                <label for="rpw" class="form-label text">Re-type Password</label>
                            </div>
                        </div>

                        <div class="row my-3">
                            <div class="col-10 text-center mt-5">
                                <a href="#" class="col-8 btn btn-secondary">Send Verification Code</a>
                            </div>
                            <div class="col-10 text-center my-2">
                                <a href="#" class="col-8 btn btn-success" onclick="changeView();">Already enrolled?</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </div>
    



    <script src="script.js"></script>
</body>
</html>