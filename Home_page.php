<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.72.0">
    <title>Dashboard Template · Bootstrap</title>

    <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/dashboard/">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        .input-group-append {
            cursor: pointer;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        body {
            font-size: .875rem;
        }

        .feather {
            width: 16px;
            height: 16px;
            vertical-align: text-bottom;
        }

        /* Sidebar*/

        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
            /* Behind the navbar */
            padding: 48px 0 0;
            /* Height of navbar */
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
        }

        @media (max-width: 767.98px) {
            .sidebar {
                top: 5rem;
            }
        }

        .sidebar-sticky {
            position: relative;
            top: 0;
            height: calc(100vh - 48px);
            padding-top: .5rem;
            overflow-x: hidden;
            overflow-y: auto;
            /* Scrollable contents if viewport is shorter than content. */
        }

        .sidebar .nav-link {
            font-weight: 500;
            color: #333;
        }

        .sidebar .nav-link .feather {
            margin-right: 4px;
            color: #727272;
        }

        .sidebar .nav-link.active {
            color: #007bff;
        }

        .sidebar .nav-link:hover .feather,
        .sidebar .nav-link.active .feather {
            color: inherit;
        }

        .sidebar-heading {
            font-size: .75rem;
            text-transform: uppercase;
        }

        /*Navbar*/
        .navbar-brand {
            padding-top: .75rem;
            padding-bottom: .75rem;
            font-size: 1rem;
            background-color: rgba(0, 0, 0, .25);
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);
        }

        .navbar .navbar-toggler {
            top: .25rem;
            right: 1rem;
        }

        .navbar .form-control {
            padding: .75rem 1rem;
            border-width: 0;
            border-radius: 0;
        }

        .form-control-dark {
            color: #fff;
            background-color: rgba(255, 255, 255, .1);
            border-color: rgba(255, 255, 255, .1);
        }

        .form-control-dark:focus {
            border-color: transparent;
            box-shadow: 0 0 0 3px rgba(255, 255, 255, .25);
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#"><i class="fa-solid fa-user-doctor fs-2"></i>
            <small class="fw-bold fs-5">Shaheen Clinic</small></a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse"
            data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link active" href="Login_page.php" target="_blank">Sign out</a>
            </li>
        </ul>
    </nav>

    <section class="menu">
        <div class="container-fluid">
            <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                    <div class="position-sticky pt-3">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="Home_page.php">
                                    <span data-feather="home"></span>
                                    <p><i class="fa fa-home" aria-hidden="true"></i> Home</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Department_page.php">
                                    <span data-feather="file"></span>
                                    Medical Departments
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="shopping-cart"></span>
                                    Products
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="users"></span>
                                    Customers
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="bar-chart-2"></span>
                                    Reports
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="layers"></span>
                                    Integrations
                                </a>
                            </li>
                        </ul>

                        <h6
                            class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                            <span>Saved reports</span>
                            <a class="link-secondary" href="#" aria-label="Add a new report">
                                <span data-feather="plus-circle"></span>
                            </a>
                        </h6>
                        <ul class="nav flex-column mb-2">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="file-text"></span>
                                    Current month
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="file-text"></span>
                                    Last quarter
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="file-text"></span>
                                    Social engagement
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="file-text"></span>
                                    Year-end sale
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                    <div
                        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2 display-6 fw-bold">Patient Registration Form</h1>
                    </div>

                    <form action="">
                        <p class="text-primary fs-5 fst-italic">Patient Information</p>
                        <div class="row g-3 mb-4">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="First name"
                                    aria-label="First name">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                            </div>
                        </div>

                        <div class="col mb-4">
                            <select id="inputState" placeholder="Gender" class="form-select">
                                <option selected>Select Your Gender </option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                                <option value="3">Others</option>
                            </select>
                        </div>

                        <div class="col mb-4">
                            <small>Enter Your Date of Birth</small>
                            <div class="input-group date" id="datepicker">
                                <input type="date" class="form-control" placeholder="Date of birth" id="date" />
                            </div>
                        </div>

                        <div class="col mb-4">
                            <select id="inputState" placeholder="Marital Status" class="form-select">
                                <option selected>Choose Your Marital Status</option>
                                <option value="1">Single</option>
                                <option value="2">Engaged</option>
                                <option value="3">Married</option>
                                <option value="4">Divorced</option>

                            </select>
                        </div>

                        <div class="col mb-4">
                            <input type="email" placeholder="Email" class="form-control" id="inputEmail4">
                        </div>

                        <p class="text-primary fs-5 fst-italic">Patient Address</p>
                        <div class="col mb-4">
                            <input type="text" placeholder="Home Address" class="form-control" id="inputAddress"
                                placeholder="1234 Main St">
                        </div>
                        <div class="col mb-4">
                            <input type="text" placeholder="City" class="form-control" id="inputCity">
                        </div>
                        <div class="col mb-4">
                            <select id="inputState" placeholder="State" class="form-select">
                                <option selected>Choose Your State </option>
                                <option value="1">Punjab</option>
                                <option value="2">Sindh</option>
                                <option value="3">KPK</option>
                                <option value="4">Balochistan</option>
                                <option value="5">Gilgit Baltistan</option>
                                <option value="6">Azad Kashmir</option>
                            </select>
                        </div>

                        <p class="text-primary fs-5 fst-italic">Patient Body Mass</p>
                        <div class="row mb-4">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Height" aria-label="First name">
                                <small>Height in Foots &amp; Inches</small>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Weight" aria-label="Last name">
                                <small>Weight in Kilograms</small>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Blood Sugar"
                                    aria-label="First name">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Blood Pressure"
                                    aria-label="Last name">
                            </div>
                        </div>

                        <p class="text-primary fs-5 fst-italic">Patient Insurance</p>
                        <div class="row mb-4">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Insurance Company"
                                    aria-label="First name">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Insurance No."
                                    aria-label="Last name">
                            </div>
                        </div>

                        <p class="text-primary fs-5 fst-italic">Patient Medical History</p>
                        <textarea class="form-control mb-4" id="exampleFormControlTextarea1"
                            placeholder="Tell us about your medical history" rows="3"></textarea>



                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary text-center">Submit</button>
                        </div>
                    </form>

    </section>


    </main>
    </div>
    </div>


    <script>
        $(function () {
            $('#datepicker').datepicker();
        });
     </script>
    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-DBjhmceckmzwrnMMrjI7BvG2FmRuxQVaTfFYHgfnrdfqMhxKt445b7j3KBQLolRl"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js"
        integrity="sha384-EbSscX4STvYAC/DxHse8z5gEDaNiKAIGW+EpfzYTfQrgIlHywXXrM9SUIZ0BlyfF"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
        integrity="sha384-i+dHPTzZw7YVZOx9lbH5l6lP74sLRtMtwN2XjVqjf3uAGAREAF4LMIUDTWEVs4LI"
        crossorigin="anonymous"></script>
    <script src="dashboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>