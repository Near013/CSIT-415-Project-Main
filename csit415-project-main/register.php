<!doctype html>
<html>
  <head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Register - haight banking</title>

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
            <form id="register-form" class="p-4 mx-auto" action="../login.php" method="POST">
              <h5 class="pb-1 text-center">Register</h5>
              <div class="row mt-3">
                <div class="col">
                  <input placeholder="First name" type="text" name="username" class="form-control" maxlength="20" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off" required>
                </div>
                <div class="col">
                  <input placeholder="Last name" type="text" name="username" class="form-control" maxlength="20" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off">
                </div>
              </div>
              <div class="mt-3">
                <!-- <label for="exampleInputEmail1" class="form-label">Username</label> -->
              </div>
              <div class="mt-3">
                <!-- <label for="exampleInputEmail1" class="form-label">Username</label> -->
                <input placeholder="Username" type="text" name="username" class="form-control" maxlength="20" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off" required>
              </div>
              <div class="my-3">
                <!-- <label for="exampleInputPassword1" class="form-label">Password</label> -->
                <input placeholder="Password" type="password" class="form-control" maxlength="25" id="exampleInputPassword1" autocomplete="off" required>
                <label for="">Use at least 8 characters containing at least 1 number and 1 lowercase letter</label>
                <input placeholder="Confirm password" type="password" class="form-control" maxlength="25" id="exampleInputPassword1" autocomplete="off" required>
              </div>
              <div class="mt-3">
                <!-- <label for="exampleInputEmail1" class="form-label">Username</label> -->
                <input placeholder="Phone number" type="text" name="username" class="form-control" maxlength="20" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off" required>
              </div>
              <div class="pb-2">
                <button type="submit" class="btn btn-primary my-2">Continue</button>
              </div>
              <div class="text-center mt-1">
                <span class="" style="color: #454b5f !important;">Have an account already? <a href="register.php" style="text-decoration: none;">Sign in</a></span>
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
