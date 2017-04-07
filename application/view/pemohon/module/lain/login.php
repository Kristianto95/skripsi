<?php
//session_start();
?>
<div class="container">
  <div style="width: 250px; margin: 0px auto;">
    <br>   
    <br>    
<h1  class="texttengah">Silakan Login</h1>
    <form method="post" name="login" action="../library/loginproses.php">
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
                 <button  type="submit" class="login" name="login_btn"> Masuk   </button>                 
        </div>   <a href="?module=daftar-akun"  class="btn btn-info" style="width:100%; height:40px; padding-top:10px;">Buat Akun</a> 
  </div>
</div>
 <br>
<br>