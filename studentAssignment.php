<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Assignments - Stanford High School</title>

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
                <h1 class="sTitle"><i class="bi bi-journal-text me-3"></i>Assignments</h1>
            </div>
            <div class="col-12"><hr></div>

            <div>
                <div class="col-12 subject">
                    <div class="col-12 p-1"><h3 class="text-white px-2"><i class="bi bi-123 me-3"></i>Mathematics</h3></div>
                </div>

                <div class="col-12 my-3">
                    <table class="table table-bordered border-secondary">
                        <thead>
                            <tr>
                                <th class="col-1" scope="col">Assignment ID</th>
                                <th class="col-3" scope="col">Assignment Name</th>
                                <th class="col-1" scope="col">Start Date</th>
                                <th class="col-1" scope="col">End Date</th>
                                <th class="col-1" scope="col">Download</th>
                                <th class="col-1" scope="col">Upload</th>
                                <th class="col-1" scope="col">Status</th>
                                <th class="col-1" scope="col">Marks</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">G7/Math/AS01</td>
                                <td>Mathematics Assignment - 1</td>
                                <td>2023-01-03</td>
                                <td>2023-01-08</td>
                                <td colspan="2"><button class="btn down sub text-white">Submitted</button></td>
                                <td><button class="btn btn-info text-white" style="font-weight: 600;">Pending</button></td>
                                <td><button class="btn down mark text-white">Pending</button></td>
                            </tr>
                            <tr>
                                <td scope="row">G7/Math/AS02</td>
                                <td>Mathematics Assignment - 2</td>
                                <td>2023-01-08</td>
                                <td>2023-01-14</td>
                                <td><button class="btn down text-white">Download</button></td>
                                <td><button class="btn down up text-white">Upload</button></td>
                                <td><button class="btn btn-danger text-white" style="font-weight: 600;">Not Uploaded</button></td>
                                <td><button class="btn down mark text-white">Pending</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-12 subject" style="background-color: cornflowerblue;">
                    <div class="col-12 p-1"><h3 class="text-white px-2"><i class="bi bi-fingerprint me-3"></i>Science</h3></div>
                </div>

                <div class="col-12 my-3">
                    <table class="table table-bordered border-secondary">
                        <thead>
                            <tr>
                                <th class="col-1" scope="col">Assignment ID</th>
                                <th class="col-3" scope="col">Assignment Name</th>
                                <th class="col-1" scope="col">Start Date</th>
                                <th class="col-1" scope="col">End Date</th>
                                <th class="col-1" scope="col">Download</th>
                                <th class="col-1" scope="col">Upload</th>
                                <th class="col-1" scope="col">Status</th>
                                <th class="col-1" scope="col">Marks</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">G7/Sci/AS01</td>
                                <td>Science Assignment - 1</td>
                                <td>2023-01-08</td>
                                <td>2023-01-14</td>
                                <td><button class="btn down text-white">Download</button></td>
                                <td><button class="btn down up text-white">Upload</button></td>
                                <td><button class="btn btn-danger text-white" style="font-weight: 600;">Not Uploaded</button></td>
                                <td><button class="btn down mark text-white">Pending</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-12 subject" style="background-color: salmon;">
                    <div class="col-12 p-1"><h3 class="text-white px-2"><i class="bi bi-translate me-3"></i>Sinhala Language and Literature</h3></div>
                </div>

                <div class="col-12 my-3">
                    <table class="table table-bordered border-secondary">
                        <thead>
                            <tr>
                                <th class="col-1" scope="col">Assignment ID</th>
                                <th class="col-3" scope="col">Assignment Name</th>
                                <th class="col-1" scope="col">Start Date</th>
                                <th class="col-1" scope="col">End Date</th>
                                <th class="col-1" scope="col">Download</th>
                                <th class="col-1" scope="col">Upload</th>
                                <th class="col-1" scope="col">Status</th>
                                <th class="col-1" scope="col">Marks</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">G7/Sin/AS01</td>
                                <td>Sinhala Language Assignment - 1</td>
                                <td>2023-01-05</td>
                                <td>2023-01-10</td>
                                <td><button class="btn down text-white">Download</button></td>
                                <td><button class="btn down up text-white">Upload</button></td>
                                <td><button class="btn btn-danger text-white" style="font-weight: 600;">Not Uploaded</button></td>
                                <td><button class="btn down mark text-white">Pending</button></td>
                            </tr>
                            <tr>
                                <td scope="row">G7/Sin/AS02</td>
                                <td>Sinhala Literature Assignment - 1</td>
                                <td>2023-01-05</td>
                                <td>2023-01-15</td>
                                <td><button class="btn down text-white">Download</button></td>
                                <td><button class="btn down up text-white">Upload</button></td>
                                <td><button class="btn btn-danger text-white" style="font-weight: 600;">Not Uploaded</button></td>
                                <td><button class="btn down mark text-white">Pending</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-12 subject" style="background-color: orchid;">
                    <div class="col-12 p-1"><h3 class="text-white px-2"><i class="bi bi-spellcheck me-3"></i>English Language</h3></div>
                </div>

                <div class="col-12 my-3">
                    <table class="table table-bordered border-secondary">
                        <thead>
                            <tr>
                                <th class="col-1" scope="col">Assignment ID</th>
                                <th class="col-3" scope="col">Assignment Name</th>
                                <th class="col-1" scope="col">Start Date</th>
                                <th class="col-1" scope="col">End Date</th>
                                <th class="col-1" scope="col">Download</th>
                                <th class="col-1" scope="col">Upload</th>
                                <th class="col-1" scope="col">Status</th>
                                <th class="col-1" scope="col">Marks</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">G7/Eng/AS01</td>
                                <td>English Assignment - 1</td>
                                <td>2023-01-08</td>
                                <td>2023-01-14</td>
                                <td><button class="btn down text-white">Download</button></td>
                                <td><button class="btn down up text-white">Upload</button></td>
                                <td><button class="btn btn-danger text-white" style="font-weight: 600;">Not Uploaded</button></td>
                                <td><button class="btn down mark text-white">Pending</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-12 subject" style="background-color: olivedrab;">
                    <div class="col-12 p-1"><h3 class="text-white px-2"><i class="bi bi-briefcase-fill me-3"></i>Business and Accounting Studies</h3></div>
                </div>

                <div class="col-12 my-3">
                    <table class="table table-bordered border-secondary">
                        <thead>
                            <tr>
                                <th class="col-1" scope="col">Assignment ID</th>
                                <th class="col-3" scope="col">Assignment Name</th>
                                <th class="col-1" scope="col">Start Date</th>
                                <th class="col-1" scope="col">End Date</th>
                                <th class="col-1" scope="col">Download</th>
                                <th class="col-1" scope="col">Upload</th>
                                <th class="col-1" scope="col">Status</th>
                                <th class="col-1" scope="col">Marks</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">G7/BS/AS01</td>
                                <td>Business Science Assignment - 1</td>
                                <td>2023-01-03</td>
                                <td>2023-01-07</td>
                                <td colspan="2"><button class="btn down sub text-white">Submitted</button></td>
                                <td><button class="btn btn-info text-white" style="font-weight: 600;">Pending</button></td>
                                <td><button class="btn down mark text-white">Pending</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-12 subject" style="background-color: orange;">
                    <div class="col-12 p-1"><h3 class="text-white px-2"><i class="bi bi-pc-display-horizontal me-3"></i>Information and Communication Technology</h3></div>
                </div>

                <div class="col-12 my-3">
                    <table class="table table-bordered border-secondary">
                        <thead>
                            <tr>
                                <th class="col-1" scope="col">Assignment ID</th>
                                <th class="col-3" scope="col">Assignment Name</th>
                                <th class="col-1" scope="col">Start Date</th>
                                <th class="col-1" scope="col">End Date</th>
                                <th class="col-1" scope="col">Download</th>
                                <th class="col-1" scope="col">Upload</th>
                                <th class="col-1" scope="col">Status</th>
                                <th class="col-1" scope="col">Marks</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">G7/ICT/AS01</td>
                                <td>ICT Assignment - 1</td>
                                <td>2023-01-08</td>
                                <td>2023-01-13</td>
                                <td><button class="btn down text-white">Download</button></td>
                                <td><button class="btn down up text-white">Upload</button></td>
                                <td><button class="btn btn-danger text-white" style="font-weight: 600;">Not Uploaded</button></td>
                                <td><button class="btn down mark text-white">Pending</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row">

            <?php include "footer.php"?>

        </div>

    </div>

</body>