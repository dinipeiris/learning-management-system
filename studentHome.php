<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home - Stanford High School</title>

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
                <h1 class="sTitle">Dashboard</h1>
            </div>
            <div class="col-12"><hr></div>

            <div class="col-12">
                <h2 class="text-secondary my-4"><i class="bi bi-bell-fill me-3"></i>Notices!!!</h2>
                <div class="col-12 col-lg-10 card border-success mx-auto mb-3">
                    <div class="card-body text-success">
                        <h5 class="card-title">Happy New Year 2023</h5>
                        <p class="card-text">Dear students, wishing that the new year brings new hopes and new opportunities. Learn from your 
                            mistakes, and accomplish your goals for future. You are a very talented and hardworking student. May your talents get 
                            recognized and hard work pay you. Happy new year to all of you.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-10 card border-danger mx-auto mb-3">
                    <div class="card-body text-danger">
                        <h5 class="card-title"><i class="bi bi-exclamation-circle-fill me-2"></i>Pending Portal Payments!!!</h5>
                        <p class="card-text">You have free access only for a month starting from 01-01-2023. You have to pay an enrollment fee 
                            of Rs.1,200.00 on or before 31-01-2023 in order to access the portal for the rest of the year. We now accept online 
                            payments.</p>
                        <a href="#"><button class="btn btn-danger">Pay Now</button></a>
                    </div>
                </div>
            </div>

            <div class="col-12 my-3">
                <h2 class="text-secondary my-4"><i class="bi bi-calendar-event-fill me-3"></i>Upcoming Events</h2>
                <div class="d-md-flex">
                    <div class="col-11 col-md-5 col-lg-3 card mx-auto">
                        <img class="card-img-top" src="Resources/blog-navigate-tricky-parent-teacher-meeting-like-pro.png" alt="Card image cap">
                        <div class="card-body text-center">
                        <h4 class="card-title"><a>Parent Teacher Meeting</a></h4>
                        <p class="card-text text-start">Year beginnig parent teacher meeting is happening in order to discuss about our school plan 
                            for the rest of the year. Please pass this message to your parents in case they missed our email. <br> <br>
                            <span><i class="bi bi-calendar-date me-3"></i> 19th January 2023</span> <br>
                            <span><i class="bi bi-alarm me-3"></i> 9.00 AM onwards</span> <br>
                            <span><i class="bi bi-geo-alt me-3"></i> School Main Hall</span> <br>
                        </p>
                        
                        </div>
                    </div>
                    <div class="col-11 col-md-5 col-lg-3 card mx-auto">
                        <img class="card-img-top" src="Resources/z_jun-p10-Sinhala-and-Hindu-New.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                        <h4 class="card-title"><a>Sinhala Hindu New Year Celebration</a></h4>
                        <p class="card-text text-start">Sinhala & Hindu New Year is the traditional New Year of the Sinhalese people in our country.
                            We are all set to celebrate the festival at our school this year as well. Further information about this event will be 
                            notified later.<br> <br>
                            <span><i class="bi bi-calendar-date me-3"></i> 19th January 2023</span> <br>
                            <span><i class="bi bi-alarm me-3"></i> 9.00 AM onwards</span> <br>
                            <span><i class="bi bi-geo-alt me-3"></i> School Main Hall</span> <br>
                        </p>
                        
                        </div>
                    </div>
                </div>
            </div>
                
        </div>


    </div>

    <div class="row">

        <?php include "footer.php"?>

    </div>



    <script src="script.js"></script>

</body>