<div class="top-nav" id="home">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-auto">
                <p> <i class="bx bxs-envelope"></i> bookingly@gmail.com </p>
                <p> <i class="bx bxs-phone-call"></i> (111) 222-3333</p>
            </div>
            <div class="col-auto social-icons">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-telephone"></i></a>
                <a href="#"><i class="bi bi-people-fill"></i></a>

            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-md navbar-dark bg-custom px-1 sticky-top" aria-label="Third navbar example">
    <div class="container-fluid">
        <img class="navbar-brand" src="img/BOOKINGLY.png" alt="" />
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExample03">
            <ul class="navbar-nav flex-wrap">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="hosting.php">HOSTING</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="rent.php">RENT</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="help.php">HELP</a>

                </li>
            </ul>

            <ul class="navbar-nav flex-wrap ms-md-auto">

                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="" data-bs-toggle="modal" data-bs-target="#modal1">LOGIN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="register.php">SIGNUP</a>
                </li>
            </ul>
        </div>
    </div>

</nav>



<div class="modal py-5" id="modal1" tabindex="-1" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <center>
                    <section class="h-100 ">
                        <div class="container py-5 h-100 ">
                            <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col">

                                    <div class="row g-0">

                                        <div class="col-xl-12">
                                            <div class="container-fluid my-5 text-black fs-5">
                                                <form action="validation.php" method="POST" enctype="multipart/form-data">
                                                    <br><br>
                                                    <div class="form-floating mb-3">

                                                        <input type="email" class="form-control" id="floatingInput" placeholder="EMAIL" name="EMAIL" required>
                                                        <label for="floatingInput">Email</label>


                                                    </div>
                                                    <div class="form-floating">
                                                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="PASSWORD" required>
                                                        <label for="floatingPassword">Password</label>

                                                    </div>

                                                    <br>
                                                    <div class="form-floating">
                                                        <center>

                                                            <button type="submit" name="login" name="login" class="btn btn-warning px-5 btn-custom" style="width: 300px;">Login</button>
                                                            <br> <br>
                                                            <input class="btn btn-primary px-5 btn-custom" style="width: 300px;" type="reset" name="reset">
                                                            <br> <br>
                                                            Not a member?<a href="Register.php"><i>Signup</i></a>

                                                        </center>
                                                    </div>


                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>


                </center>
            </div>

        </div>
    </div>
</div>