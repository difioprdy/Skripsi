<?php require_once 'controllers/authController.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="style.css">
    <title>Login Lingkungan Hidup</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form-div login">
               <form action="login.php" method="post">
                   <h3 class="text-center">Login Lingkungan Hidup</h3>

                   <?php if(count($errors) > 0): ?>
                   <div class ="alert alert-danger">
                       <?php foreach($errors as $error): ?>
                       <li><?php echo $error; ?></li>
                       <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                   
                   <div class="form-group">
                       <label for="username">Username atau Email</label>
                       <input type="text" name="username" value="<?php echo $username; ?>" class="form-control form-control-lg">
                   </div>

                   <div class="form-group">
                       <label for="password">Password</label>
                       <input type="password" name="password" class="form-control form-control-lg">
                   </div>

                   <div class="form-group">
                       <button type="submit" name="login-btn" class="btn btn-primary btn-block btn-lg">Login</button>
                   </div>
                   <p class="text-center">Belum terdaftar sebagai admin ? <a href="PinRegisterlh.php">Sign Up</a></p>
                    
               </form> 
            </div>
        </div>
    </div>
</body>
</html>