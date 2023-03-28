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

            <?php include "tHeader.php"?>

        </div>

        <div class="row">
            <div class="col-12 mt-5">
                <h1 class="tTitle"><i class="bi bi-journal-text me-3"></i>Assignments</h1>
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
                                <th class="col-1" scope="col">Grade</th>
                                <th class="col-3" scope="col">Assignment Name</th>
                                <th class="col-1" scope="col">Start Date</th>
                                <th class="col-1" scope="col">End Date</th>
                                <th class="col-1" scope="col">Edit</th>
                                <th class="col-1" scope="col">Delete</th>
                                <th class="col-1" scope="col">Submissions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">G7/Math/AS01</td>
                                <td>Grade 7</td>
                                <td>Mathematics Assignment - 1</td>
                                <td>2023-01-03</td>
                                <td>2023-01-08</td>
                                <td><button class="btn down text-white">Edit</button></td>
                                <td><button class="btn btn-danger text-white" style="font-weight: 600;">Delete</button></td>
                                <td><button class="btn btn-secondary text-white" style="font-weight: 600;">Check</button></td>
                            </tr>
                            <tr>
                                <td scope="row">G7/Math/AS02</td>
                                <td>Grade 7</td>
                                <td>Mathematics Assignment - 2</td>
                                <td>2023-01-08</td>
                                <td>2023-01-14</td>
                                <td><button class="btn down text-white">Edit</button></td>
                                <td><button class="btn btn-danger text-white" style="font-weight: 600;">Delete</button></td>
                                <td><button class="btn btn-secondary text-white" style="font-weight: 600;">Check</button></td>
                            </tr>
                            <tr>
                                <td scope="row">G7/Math/AS01</td>
                                <td>Grade 8</td>
                                <td>Mathematics Assignment - 1</td>
                                <td>2023-01-03</td>
                                <td>2023-01-08</td>
                                <td><button class="btn down text-white">Edit</button></td>
                                <td><button class="btn btn-danger text-white" style="font-weight: 600;">Delete</button></td>
                                <td><button class="btn btn-secondary text-white" style="font-weight: 600;">Check</button></td>
                            </tr>
                            <tr>
                                <td scope="row">G7/Math/AS01</td>
                                <td>Grade 9</td>
                                <td>Mathematics Assignment - 1</td>
                                <td>2023-01-03</td>
                                <td>2023-01-10</td>
                                <td><button class="btn down text-white">Edit</button></td>
                                <td><button class="btn btn-danger text-white" style="font-weight: 600;">Delete</button></td>
                                <td><button class="btn btn-secondary text-white" style="font-weight: 600;">Check</button></td>
                            </tr>
                            <tr>
                                <td scope="row">G7/Math/AS01</td>
                                <td>Grade 8</td>
                                <td>Mathematics Assignment - 2</td>
                                <td>2023-01-07</td>
                                <td>2023-01-12</td>
                                <td><button class="btn down text-white">Edit</button></td>
                                <td><button class="btn btn-danger text-white" style="font-weight: 600;">Delete</button></td>
                                <td><button class="btn btn-secondary text-white" style="font-weight: 600;">Check</button></td>
                            </tr>
                            <tr>
                                <td scope="row">G7/Math/AS01</td>
                                <td>Grade 9</td>
                                <td>Mathematics Assignment - 2</td>
                                <td>2023-01-08</td>
                                <td>2023-01-18</td>
                                <td><button class="btn down text-white">Edit</button></td>
                                <td><button class="btn btn-danger text-white" style="font-weight: 600;">Delete</button></td>
                                <td><button class="btn btn-secondary text-white" style="font-weight: 600;">Check</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-12 my-5">
                    <div class="col-4 d-grid"></div>
                        <button class="btn btn-success ms-5">Add a new assignment</button>
                        <button class="btn btn-danger ms-5">Clear all assignments</button>
                    </div>
                </div>

            </div>
        </div>

        

        <div class="row fixed-bottom">

            <?php include "footer.php"?>

        </div>

    </div>

</body>