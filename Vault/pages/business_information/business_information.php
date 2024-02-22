<?php
include("../../utils/config.php");
include("../../form_handlers/session_handler.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Information</title>

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

        <form action="business_information.php" method="POST" id="add_personal_information">
            <div class="row g-3 py-3">
                <div class="col-9">
                    <h1 class="fw-bold">Business Information</h1>
                </div>
                <div class="col-3">
                    <input type="submit" name="personal_information_btn" id="personal_information_btn"
                        class="btn btn-primary w-100" value="Save">
                </div>
            </div>

            <div class="row g-3">
                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                        <label for="floatingInput">Name of Business</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                        <label for="floatingInput">Address</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                        <label for="floatingInput">EIN</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <select name="military_service" class="form-select w-100 h-100 shadow-none"
                        placeholder="Type of Entity">
                        <option disabled selected>Type of Entity</option>
                        <option value="army">Sole Proprietor</option>
                        <option value="navy">LLC</option>
                        <option value="marines">LLP</option>
                        <option value="air force">S Corp</option>
                        <option value="coast guard">L Corp</option>
                        <option value="coast guard">Non Profit</option>
                        <option value="coast guard">Other</option>
                    </select>
                </div>

            </div>
            <div class="row g-3 py-3">

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                        <label for="floatingInput">Ownership</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                        <label for="floatingInput">Partner Name</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                        <label for="floatingInput">Percent Owned</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 last_attorney">
                    <button class="btn btn-primary w-100 h-100 add_attorney_btn">Add +</button>
                </div>

            </div>
            <div class="row g-3">

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                        <label for="floatingInput">Key Employee Name</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                        <label for="floatingInput">Phone Number</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 last_attorney">
                    <button class="btn btn-primary w-100 h-100 add_attorney_btn">Add +</button>
                </div>
            </div>

            <div class="row g-3 py-3">

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                        <label for="floatingInput">CPA</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                        <label for="floatingInput">Phone Number</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 last_attorney">
                    <button class="btn btn-primary w-100 h-100 add_attorney_btn">Add +</button>
                </div>
            </div>

            <div class="row g-3">

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                        <label for="floatingInput">Attorney Name</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                        <label for="floatingInput">Phone Number</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 last_attorney">
                    <button class="btn btn-primary w-100 h-100 add_attorney_btn">Add +</button>
                </div>
            </div>

            <div class="row g-3 py-3">

                <div class="col-md-6 col-lg-3">
                    <label for="formFile" class="form-label"><strong>Business Financials</strong></label>
                    <input class="form-control" type="file" id="formFile">
                </div>

                <div class="col-md-6 col-lg-3">
                    <label for="formFile" class="form-label"><strong>Articles of Incorporation</strong></label>
                    <input class="form-control" type="file" id="formFile">
                </div>
            </div>

            <div class="mb-3">
                <h1 class="h3 text-dark">Business Website</h1>
            </div>

            <div class="row g-3">

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                        <label for="floatingInput">Platform</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                        <label for="floatingInput">Username</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                        <label for="floatingInput">Password</label>
                    </div>
                </div>
            </div>

            <div class="py-3">
                <h1 class="h3 text-dark">Notes</h1>
            </div>

            <div class="row g-3">

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                        <label for="floatingInput">Trademarks</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                        <label for="floatingInput">Royalties</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                        <label for="floatingInput">Key Customers</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                        <label for="floatingInput">License</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                        <label for="floatingInput">Other</label>
                    </div>
                </div>
            </div>

            <div class="py-3">
                <h1 class="h3 text-dark">Business Agreement Uploads</h1>
            </div>

            <div class="row g-3 mb-3">
                <div class="col-md-6 col-lg-3">
                    <label for="formFile" class="form-label"><strong>Rental Agreement</strong></label>
                    <input class="form-control" type="file" id="formFile">
                </div>

                <div class="col-md-6 col-lg-3">
                    <label for="formFile" class="form-label"><strong>Employment Agreement</strong></label>
                    <input class="form-control" type="file" id="formFile">
                </div>

                <div class="col-md-6 col-lg-3">
                    <label for="formFile" class="form-label"><strong>Insurance Policies</strong></label>
                    <input class="form-control" type="file" id="formFile">
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