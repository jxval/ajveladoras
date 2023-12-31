<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="images/AJ-logo-ico.png" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
    <title>Admin sign up</title>
</head>
<body class="adminlogin-body">
    <div class="adminlogindiv-1">
        <div class="adminlogindiv-2">
            <form action="registeradminuser.php" method="post" name="">
                <center><img src="images/AJ-logo.png" alt=""></center>
                <h2>Registra nuevo usuario administrador</h2>
                <div class="row g-3">
                <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Id</label>
                        <input type="number" class="form-control" id="inputEmail4" name="id">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">First name</label>
                        <input type="text" class="form-control" id="inputEmail4" name="first_name">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Last name</label>
                        <input type="text" class="form-control" id="inputEmail4" name="last_name">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" name="email">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Password</label>
                        <input type="password" class="form-control" id="inputPassword4" name="password">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Rol</label>
                        <input type="text" class="form-control" id="inputEmail4" name="rol">
                    </div>
                    <br>
                <button type="submit" class="btn btn-primary">Registrar</button>
                <br>
                <a href="admin-login.php">Admin Login</a>
            </form>
            <!-- <div class="container-fluid">
                <div class="row d-flex justify-content-center align-items-center m-0" style="height: 100vh;">
                    <div class="login_oueter">
                    <div class="col-md-12 logo_outer">
                        <img src="https://bootstrapfriendly.com/static/images/bootstrapfriendly_logo.png" />
                    </div>
                        <form action="" method="post" id="login" autocomplete="off" class="bg-light border p-3">
                            <div class="form-row">
                            <h4 class="title my-3">Login For Access</h4>
                            <div class="col-12">
                                <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                </div>
                                <input name="username" type="text" value="" class="input form-control" id="username" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                                </div>
                                <input name="password" type="password" value="" class="input form-control" id="password" placeholder="password" required="true" aria-label="password" aria-describedby="basic-addon1" />
                                <div class="input-group-append">
                                    <span class="input-group-text" onclick="password_show_hide();">
                                    <i class="fas fa-eye" id="show_eye"></i>
                                    <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                                    </span>
                                </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group form-check text-left">
                                <input type="checkbox" name="remember" class="form-check-input" id="remember_me" />
                                <label class="form-check-label" for="remember_me">Remember me</label>
                                </div>
                            </div>
                            <div class="col-sm-12 pt-3 text-right">
                                <p>Already registered <a href="#">Register</a></p>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit" name="signin">Login</button>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <script>
        function password_show_hide() {
            var x = document.getElementById("exampleInputPassword1");
            var hide_eye = document.getElementById("show_eye");
            var show_eye = document.getElementById("hide_eye");
            hide_eye.classList.remove("d-none");
            if (x.type === "password") {
                x.type = "text";
                show_eye.style.display = "none";
                hide_eye.style.display = "block";
            } else {
                x.type = "password";
                show_eye.style.display = "block";
                hide_eye.style.display = "none";
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>