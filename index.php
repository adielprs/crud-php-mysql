<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="botstrap/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    
<div class="container">
    <div class="row py-5 mt-4 align-items-center">

        <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
            <img src="https://bootstrapious.com/i/snippets/sn-registeration/illustration.svg" alt="" class="img-fluid mb-3 d-none d-md-block">
            <h1 class="text-center">Login</h1>
        </div>

        <!-- Registeration Form -->
        <div class="col-md-7 col-lg-6 ml-auto">
            <form action="ProsesLogin.php" method="POST">
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                            <i class='bx bx-user-circle'></i>
                            </span>
                        </div>
                        <input   id="firstName" type="text" name="name" placeholder="Name" class="form-control bg-white border-left-0 border-md">
                    </div>

                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                            <i class='bx bx-envelope'></i>
                            </span>
                        </div>
                        <input id="lastName" type="email" name="email" placeholder="Email" class="form-control bg-white border-left-0 border-md">
                    </div>
                     <button type="sumbit" class="btn btn-primary">Login</button>
                     <button type="reset" class="btn btn-danger">Reset</button>
            </form>
        </div>
    </div>
</div>

    <script src="botstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<style>
    .border-md {
    border-width: 2px;
}

.btn-facebook {
    background: #405D9D;
    border: none;
}

.btn-facebook:hover, .btn-facebook:focus {
    background: #314879;
}

.btn-twitter {
    background: #42AEEC;
    border: none;
}

.btn-twitter:hover, .btn-twitter:focus {
    background: #1799e4;
}



/*
*
* ==========================================
* FOR DEMO PURPOSES
* ==========================================
*
*/

body {
    min-height: 100vh;
}

.form-control:not(select) {
    padding: 1.5rem 0.5rem;
}

select.form-control {
    height: 52px;
    padding-left: 0.5rem;
}

.form-control::placeholder {
    color: #ccc;
    font-weight: bold;
    font-size: 0.9rem;
}
.form-control:focus {
    box-shadow: none;
}

</style>