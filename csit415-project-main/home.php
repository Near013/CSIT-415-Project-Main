<!doctype html>
<html>
  <head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home - haight banking</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/popper.css">
  </head>
  <body>
    <div class="container">
      <!-- Navbar -->
      <?php include 'includes/default_navbar.php' ?>

      <!-- Content -->
      <div class="content">
        <div class="d-flex bd-highlight pt-5">
          <div class="flex-fill">
            <div class="container p-3" id="images-box">
              <p class="text-muted">for now, output login errors here</p>
            </div>
          </div>
          <div class="flex-fill">
            <form class="p-4 mx-auto" action="login_user.php" method="POST">
              <h5 class="pb-1 text-center">Sign In</h5>
              <div class="mt-3">
                <!-- <label for="exampleInputEmail1" class="form-label">Username</label> -->
                <input placeholder="Username" type="text" name="username" class="form-control" maxlength="30" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off" required>
              </div>
              <div class="my-3">
                <!-- <label for="exampleInputPassword1" class="form-label">Password</label> -->
                <input placeholder="Password" name="password" type="password" class="form-control" maxlength="25" id="exampleInputPassword1" autocomplete="off" required>
              </div>
              <div class="pb-2">
                <button type="submit" class="btn btn-primary my-2">Continue</button>
              </div>
              <div class="text-center mt-1">
                <span class="" style="color: #454b5f !important;">Don't have an account? <a href="register.php" style="text-decoration: none;">Sign up</a></span>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Popper CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>

    <!-- Custom JS -->
    <script src="js/popper.js"></script>
  </body>
</html>
