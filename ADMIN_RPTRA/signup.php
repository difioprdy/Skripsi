<?php require_once 'controllers/authController.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="style.css">
    <title>Registrasi Admin RPTRA</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form-div">
               <form action="signup.php" method="post">
                   <h3 class="text-center">Registrasi Admin RPTRA</h3>

                   <?php if(count($errors) > 0): ?>
                   <div class ="alert alert-danger">
                       <?php foreach($errors as $error): ?>
                       <li><?php echo $error; ?></li>
                       <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                   
                   <div class="form-group">
                       <label for="username">Username</label>
                       <input type="text" name="username" value="<?php echo $username; ?>" class="form-control form-control-lg">
                   </div>

                   <div class="form-group">
                       <label for="email">Email</label>
                       <input type="email" name="email" value="<?php echo $email; ?>" class="form-control form-control-lg">
                   </div>

                   <div class="form-group">
                       <label for="password">Password</label>
                       <input type="password" name="password" class="form-control form-control-lg">
                   </div>

                   <div class="form-group">
                       <label for="passwordConf">Confirm Password</label>
                       <input type="password" name="passwordConf" class="form-control form-control-lg">
                   </div>

                   <div class="form-group">
                       <button type="submit" name="signup-btn" class="btn btn-primary btn-block btn-lg">Sign Up</button>
                   </div>
                   <p class="text-center">Sudah terdaftar sebagai admin ? <a href="login.php">Sign In</a></p>
                    
               </form> 
            </div>
        </div>
    </div>
</body>
</html>