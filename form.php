<!DOCTYPE html>
<html lang="en">
    <head> 
        <title>login page</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <style>
             .navbar-nav{
                flex-direction: row;
            }
            .nav-item{
                padding-left: 10px !important
            }
            .heading1{
                background-color: grey;
                color: #ffff;
            }
         </style>

    </head>

    <body>
        <header> </header> 
  <body>
    <form method="POST" action="MysqlDynamicDatainsert.php">
    <center>
                <div class="col-sm-12 col-sm-12 col-lg-4">
                    <div class="card" style="width: 25rem;">
                        <div class="card-body">
                            <div class="text-center">
                                <form>
                                    <a class="navbar-brand" href="#">   
                                        <img src="assets/images/logo.png" width="50" height="50" alt="LOGO">
                                     </a> <br>
                                     <p><b>USER LOGIN FORM </b></p>
                                     <p>Please fill in your credentials to continue </p>
                                     <form id="login">
                                       <div class="form-group">
        <input type="text" name=" name" placeholder="enter your name">
          </div>
          <div class="form-group">
        <input type="text"   name="email" placeholder="enter your email">
          </div>
        <div class="form-group">
        <input type="password" name=" password" placeholder="enter your password">
          </div>
         <div class="form-group">
                                        <input type="submit" class="btn btn-block btn-success">
          </div>
</form>
</div>
                        </div>
                    </div>
                </div>
            </center>
            
</body>
</html>


       