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
        <nav class="navbar navbar-expand-lg navbar-light bg-light px-5">
          <a aria-current="true" class="navbar-brand fw-bold fs-4" href="">
            <span id="button" aria-describedby="tooltip">🐶</span>
            <div id="tooltip" role="tooltip">
              woof
              <div id="arrow" data-popper-arrow></div>
            </div>
            haight banking
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div id="foo" class="collapse navbar-collapse" id="navbarNavDropdown">
            <button id="sign-out-btn" class="btn btn-primary text-center m-0 p-0 px-2 mt-1 pb-1">
              <small class="p-0 m-0">Sign out</small>
            </button>
            <ul id="bar" class="navbar-nav">
              <!-- <button id="" class="btn btn-primary">Sign out</button> -->
              <!-- <li class="nav-item"><a class="nav-link" href="">About</a></li> -->
              <!-- <li class="nav-item"><a class="nav-link" href="">Contact</a></li> -->
              <!-- <li class="nav-item"><a class="nav-link" href="">Admin</a></li> -->
            </ul>
          </div>
        </nav>
      <!-- Content -->
      <div class="content">
        <div class="d-flex bd-highlight pt-5">
          <div class="flex-fill">
            <div class="mx-4" id="account">
              <h1 id="greeting"></h1>
              <h3>Current balance:</h3>
              <h5>Account number:</h5>
            </div>
          </div>
          <div class="flex-fill">
            <div id="sidebar" class="d-flex flex-column">
              <div class="p-2 bd-highlight">
                <button class="btn btn-primary">Deposit</button>
              </div>
              <div class="p-2 bd-highlight">
                <button class="btn btn-primary">Withdraw</button>
              </div>
              <div class="p-2 bd-highlight">
                <button class="btn btn-primary">Transfer</button>
              </div>
              <div class="p-2 bd-highlight">
                <button class="btn btn-primary">Flex item 1</button>
              </div>
            </div>
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

    <!--  -->
    <script>
      let greeting = document.getElementById('greeting');
      const hour = new Date().getHours();
      if (hour >= 5 && hour <= 11) {
        greeting.innerText = 'Good Morning';
      } else if (hour >= 12 && hour <= 16) {
        greeting.innerText = 'Good Afternoon';
      } else if (hour >= 17 || hour <= 4) {
        greeting.innerText = 'Good Evening';
      }
    </script>
  </body>
</html>
