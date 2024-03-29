<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Task</title>
    <link rel="shortcut icon" href="/asset/images/fav-icon.png" type="image/x-icon">
    <meta content="" name="description">
    <meta content="" name="keywords">


    <!-- Vendor CSS Files -->
    <link href="/admin_asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/admin_asset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/admin_asset/css/style.css" rel="stylesheet">

</head>

<body class="login-body">
    <section>
        <div class="dashboard-login-page-sec">
            <div class="container">
                <div class="row justify-content-center align-items-center mb-4">
                    <div class="col-lg-5 align-items-center">
                        <div class="dashboard-login-page mb-4">
                            <div class="d-flex align-items-center justify-content-between login-logo-img mb-2 ">
                                <h1>Register</h1>
                            </div>
                            <div class="alert-msg " style="color:red;"> @if(Session::has('msg'))
                                {{Session::get('msg') }}
                                @endif
                            </div>
                            <form class="form-horizontal login" method="post" action="/user_register">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <div class="icon-addon">
                                        <label for="username" class="login-user-label  pt-2"><i
                                                class="bi bi-people-fill"></i> Name</label>
                                        <input type="text" name="name" class="form-control" required=""
                                            placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="icon-addon">
                                        <label for="username" class="login-user-label  pt-2"><i
                                                class="bi bi-telephone-fill"></i> Phone number</label>
                                        <input type="text" name="mobile" class="form-control" required=""
                                            placeholder="Phone number" pattern="[0-9]{10}"
                                            title="Please enter a valid 10-digit phone number">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="icon-addon">
                                        <label for="username" class="login-user-label  pt-2"><i
                                                class="bi bi-envelope-fill"></i> Email</label>
                                        <input type="email" name="email" class="form-control" required=""
                                            placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="icon-addon">
                                        <label for="password" class="login-user-labelv  pt-2"><i
                                                class="bi bi-key-fill"></i> Password</label>
                                        <input type="password" name="password" id="new-password" class="form-control"
                                            required="">

                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="icon-addon">
                                        <label for="password" class="login-user-labelv  pt-2"><i
                                                class="bi bi-key-fill"></i>Confrim Password</label>
                                        <input type="password" name="password" id="confirm-password"
                                            class="form-control" required="">

                                    </div>
                                </div>
                                <button type="submit" name="submit" class="btn login-btnn mt-4 mb-3 text-center"
                                    style="color:Black">
                                    <i class="bi bi-box-arrow-in-right"></i> Register
                                </button>
                            </form>

                            <p>Already have an account ? <a href="/admin">Login now</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script>
    var newPasswordInput = document.getElementById("new-password");
    var confirmPasswordInput = document.getElementById("confirm-password");

    confirmPasswordInput.addEventListener("input", validatePassword);

    function validatePassword() {
        if (newPasswordInput.value !== confirmPasswordInput.value) {
            confirmPasswordInput.setCustomValidity("Passwords do not match");
        } else {
            confirmPasswordInput.setCustomValidity("");
        }
    }
</script>
<script>
    CKEDITOR.replace('content');
    CKEDITOR.replace('description');
</script>
<script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="asset/js/dashboard.js"></script>

</html>