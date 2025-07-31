<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <style>

@media (max-width:500px){

            .loging-form form {
                width: 100% !important;
            }

            .loging-form {
                padding:70px 20px !important;
            }
}

        .loging-form {
            justify-content: center;
            justify-items: center;
            padding: 80px 0;
        }

        .loging-form form {
            background-color: white;
            width: 30%;
            padding: 30px;
            border-radius: 20px;

        }

        main {
            background-image: url('https://res.cloudinary.com/dxk6wjttq/image/upload/v1753969679/login_nipotw.jpg');
            background-size: cover;
            height: 100vh;
        }

      
    </style>
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <div class="loging-form">
            <form>
                <div class="text-center">
                    <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753969681/logo_gnmwyi.jpg" class="w-50" alt="logo">
                    <h4>Champion Cricket League</h4>
                    <p>Please log in to your account</p>
                </div>

                <div class="mb-3">
                    <label for="registraiton-id" class="form-label">Registration ID</label>
                    <input type="text" class="form-control" id="registraiton-id"
                        placeholder="Enter a valid Registration ID" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label for="mobile" class="form-label">Enter Your 10 Digit Mobile Number</label>
                    <input type="tel" placeholder="Enter Phone Number" class="form-control" id="mobile">
                </div>

                <button type="submit" class="btn btn-primary w-100">Submit</button>
                <p>Don't have an account? <a href="registration.php" class="text-danger">Register Now</a></p>
            </form>
        </div>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>