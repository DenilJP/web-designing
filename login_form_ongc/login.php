<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Login Form</title>
</head>
<body>
    <!-- main --> 
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <!-- login_container -->
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <!-- left_container -->
            <div class="col-md-6 rounded-5 d-flex justify-content-center align-item-center flex-column left-box" style="background: #D3D3D3;">
                <div class="featured-image mb-3 ">
                    <img src="img/ongc_logo.jpg" class="img-fluid rounded mx-auto d-block" style="width:250px" >
                    <p  class="text-black fs-1 text-center" style="font-family: 'Courier New', Courier, monospace; font-weight: 1000;  ">ONGC</p>
                    <p  class="text-black fs-3 text-center" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;  ">( Oil and Natural Gas Corporation)</p>
                </div>
            </div>

            <!-- right_container -->
            <div class="col-md-6  right-box">
                <div class="row align-item-center">
                
                <div class="header-text mb-4">
                     <p class="text-black fs-1 text-center" style="font-family: 'Courier New', Courier, monospace; font-weight: 600; ">Hello , Users</p>
                     <p class="text-black fs-3 text-center" style="font-family: 'Courier New', Courier, monospace; font-weight: 600; ">Welcome Back To ONGC .</p>
                </div>
                <div class="form-label"><label for="exinput" class="text-black fs-3" style="font-family: 'Courier New', Courier, monospace; font-weight: 600; ">E-mail </label></div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control form-control-lg bg-light fs-6"  placeholder="Email address">
                </div>
                <div class="form-label"><label for="exinput" class="text-black fs-3" style="font-family: 'Courier New', Courier, monospace; font-weight: 600; ">Password</label></div>
                <div class="input-group mb-1">
                    <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password">
                </div>
                <div class="input-group mb-5 d-flex justify-content-between">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="formCheck">
                        <label for="formCheck" class="form-check-label text-secondary text-black"><small>Remember Me</small></label>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <button type="submit" class="btn btn-lg btn-outline-secondary w-100 fs-6">Login</button>
                </div>
                
                </div>
            </div>
        </div>
    </div>
</body>
</html>