<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .btn1 {
            width: 400px;
            border-radius: 25px;
            height: 50px;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
        }

        .box {
            border-radius: 20px;

            margin-top: 200px;
            width: 800px;
            background-color: #fff;
            padding: 50px;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        }

        body {
            overflow-x: hidden;
            background: rgb(194, 232, 241);
            background: linear-gradient(175deg, rgba(194, 232, 241, 1) 12%, rgba(252, 231, 188, 1) 87%);
            background-attachment: fixed;


        }

        .sectionBox {
            background-color: #233073;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        }
    </style>
</head>




<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-4">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand  fs-3" href="index.php">Bookingly Admin</a>
                <div class="collapse navbar-collapse fs-5 " id="navbarTogglerDemo03">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    </ul>

                </div>
            </div>
        </nav>
    </header>

    <section class="h-100 ">
        <div class="container py-5 h-100 ">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card card-registration my-4 sectionBox">
                        <div class="row g-0">
                            <div class="col-xl-6 d-none d-xl-block  p-5 my-5">
                                <br>
                                <img src="img/BOOKINGLY.png" alt="Sample photo" class="img-fluid" style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                            </div>
                            <div class="col-xl-6">
                                <div class="card-body p-md-5 text-black fs-5">
                                    <form action="validation.php" method="POST" enctype="multipart/form-data">
                                        <br><br>
                                        <div class="form-floating mb-3">

                                            <input type="text" class="form-control" id="floatingInput" placeholder="username" name="Admin" required>
                                            <label for="floatingInput">Admin User</label>


                                        </div>
                                        <div class="form-floating">
                                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="Password" required>
                                            <label for="floatingPassword">Admin Password</label>
                                            <br>


                                        </div>

                                        <br>
                                        <div class="form-floating">
                                            <center>

                                                <button type="submit" name="login_admin" class="btn btn-warning  px-5 btn1">Login</button>
                                                <br> <br>
                                                <input class="btn btn-dark px-5 btn1" type="reset" name="reset">
                                                <br> <br>


                                            </center>
                                        </div>


                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>