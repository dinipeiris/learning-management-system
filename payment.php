<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Payments - Stanford High School</title>

    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="style.css">

    <link rel="icon" href="Resources/dd64da585bc57cb05e5fd4d8ce873f57 (1).png">

</head>

<body>
    <div class="container-fluid">

        <div class="row">

            <?php include "sHeader.php"?>

        </div>

        <div class="row">
            <div class="col-12 mt-5">
                <h1 class="sTitle"><i class="bi bi-credit-card-2-back me-3"></i>Payments</h1>
            </div>
            <div class="col-12"><hr></div>

            <div class="col-12">
                <h2 class="text-secondary mt-4 mb-5"><i class="bi bi-credit-card-2-back-fill me-3"></i>Pending Payments</h2>
                <div class="col-12 col-lg-10 card border-secondary mx-auto mb-3">
                    <div class="card-body">
                        <h4 class="card-title">Student Enrollment Fee</h4>
                        <p class="card-text">You have free access only for a month starting from 01-01-2023. You have to pay an enrollment fee 
                            of Rs.1,200.00 on or before 31-01-2023 in order to access the portal for the rest of the year. We now accept below given
                            online payment networks.</p> 
                        <img src="Resources/6220ac0f912013c51947f9c4.png" class="mb-3" style="height: 50px;">
                        <h5 class="text-danger">ALL PAYMENTS ARE NON-REFUNDABLE.</h5> <br>
                        <a href="#" class="btn btn-primary">Pay Now</a>
                        <a href="#" class="btn btn-secondary">Remind Me Later</a>
                    </div>
                </div>

                <div class="col-12 col-lg-10 card border-secondary mx-auto mb-3">
                    <div class="card-body">
                        <h4 class="card-title">Astronomical Society - Membership Fee</h4>
                        <p class="card-text">We, the Astronomical Society of Stanford High School charge a membership fee of Rs.200.00 per year.
                            We use the collected money as contributions for the events we organize for our members throughout the year. Please 
                            make the payment before 31-01-2022 kindly. We now accept online payments.
                            <br> <br>
                            Thank You!
                        </p> 
                        <img src="Resources/6220ac0f912013c51947f9c4.png" class="mb-3" style="height: 50px;">
                        <h5 class="text-danger">ALL PAYMENTS ARE NON-REFUNDABLE.</h5> <br>
                        <a href="#" class="btn btn-primary">Pay Now</a>
                        <a href="#" class="btn btn-secondary">Remind Me Later</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <?php include "footer.php"?>

        </div>
    
    </div>

</body>