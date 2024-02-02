<?php
include("../../utils/config.php");
include("../../form_handlers/session_handler.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Additional Services</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="../../index.php"><i class="fa-solid fa-vault fa-2x"></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown">
                            <?php echo 'Hello, ' . $user['first_name'] . ' ' . $user['last_name'] . '!'; ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="../utils/logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <?php if (!empty($error_array)) {
            foreach ($error_array as $error) {
                echo '' . $error . '';
            }
        }
        ?>
    </div>

    <div class="container-fluid">

        <form action="additional_services.php" method="POST" enctype="multipart/form-data">
            <div class="row g-3 py-3">
                <div class="col-9">
                    <h1 class="fw-bold">Additional Services</h1>
                </div>
                <div class="col-3">
                    <input type="submit" name="important_documents_btn" class="btn btn-primary w-100" value="Go">
                </div>
            </div>

            <div class="row g-3 justify-content-center">
                <div class="col-md-6 col-lg-6">
                    <select name="military_service" class="form-select w-100 h-100 shadow-none"
                        placeholder="Military Service">
                        <option disabled selected>Additional Services</option>
                        <option value="army">Travel</option>
                        <option value="army">Power Of Attorney</option>
                        <option value="navy">PTP</option>
                        <option value="marines">Pet Care</option>
                        <option value="air force">House Watch</option>
                        <option value="coast guard">Legal Assistance</option>
                        <option value="coast guard">Rehab</option>
                        <option value="coast guard">Generational/Legacy Education</option>
                        <option value="coast guard">Annual Family Meeting</option>
                        <option value="coast guard">Wealth Management</option>
                        <option value="coast guard">Insurance</option>
                        <option value="coast guard">Risk Management</option>
                        <option value="coast guard">Auto Transport</option>
                        <option value="coast guard">Business Consulting</option>
                        <option value="coast guard">Moving</option>
                        <option value="coast guard">Elder Care</option>
                        <option value="coast guard">Entertainment/Tickets</option>
                    </select>
                </div>
            </div>
        </form>

    </div>

    <script src="../scripts/script.js"></script>

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

</body>

</html>