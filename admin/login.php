<head>
      <meta charset="utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>Admin Website Kecamatan</title>
  <!-- BOOTSTRAP STYLES-->
      <link rel="stylesheet" href="../asset/css/bootstrap.min.css">  
     <!-- FONTAWESOME STYLES--><!-- 
    <link href="../asset/css/font-awesome.css" rel="stylesheet" type="text/css" > -->
        <!-- CUSTOM STYLES-->
    <link href="../asset/css/custom.css" rel="stylesheet" type="text/css" >
   
</head>
<div class="container-fluid">
  <div style="width: 250px; margin: 0px auto; padding-top:50px;">
    <br>   
    <br>    
<h1  class="texttengah">Silakan Login</h1>
    <form method="post" name="login" action="../library/loginadmin.php">
    <br>
        <div class="form-body">
            <label>Username :</label>
             <div class="form-group ">
                  
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                   <input name="username" type="text" class="form-control" placeholder="Username Anda">
                   </div>
              </div>          
            <label>Password :</label>
            <div class="form-group ">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                   <input name="password" type="password" class="form-control" placeholder="Password Anda">
                   </div>
            </div>
            <label>Sebagai :</label>
            <div class="form-group ">
                   <div class="input-group">
                    <select name="akses">
                      <option value="admin">admin</option>
                      <option value="superadmin">superadmin</option>
                    </select>
            </div>
                 <button  type="submit" class="btn btn-info" name="login_btn"> Masuk   </button>                 
        </div> 
      </div>
</div>
 <br>
<br>