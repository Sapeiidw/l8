<nav class="navbar navbar-expand-lg navbar-dark py-3 fixed-top" style="background: #3b267d;">
  <div class="container-fluid">
  <a class="navbar-brand" href="<?= BASEPATH ?>">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <?php 
        if ($_SESSION['role'] == "admin") {
      ?>
      <li class="nav-item"><a class="nav-link" href="<?= BASEPATH ?>user" >user</a></li>
      <li class="nav-item"><a class="nav-link" href="<?= BASEPATH ?>departement" >departement</a></li>
      <li class="nav-item"><a class="nav-link" href="<?= BASEPATH ?>prodi" >prodi</a></li>
      <li class="nav-item"><a class="nav-link" href="<?= BASEPATH ?>matkul" >matkul</a></li>
      <li class="nav-item"><a class="nav-link" href="<?= BASEPATH ?>course" >course</a></li>
      <li class="nav-item"><a class="nav-link" href="<?= BASEPATH ?>assignment" >assignment</a></li>
      <?php 
        }elseif ($_SESSION['role'] == "user") {
          ?>
          <li class="nav-item"><a class="nav-link" href="<?= BASEPATH ?>course" >course</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= BASEPATH ?>assignment" >assignment</a></li>
          <?php
        }
      ?>
    </ul>
    <ul class="navbar-nav ml-auto">
    <li class="nav-item nav-item active dropdown">
        <?php
          if (!isset($_SESSION['username'])) {
            echo '<a class="dropdown-item" href="'.BASEPATH.'login">Login</a>';
          } else {
            echo '
            <a class="nav-link dropdown-toggle" href="'.BASEPATH.'user/'.$_SESSION['id'].'" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              '.$_SESSION['username'].'
            </a>';
          }
        ?>
        <div class="dropdown-menu text-center p-3 shadow-sm" aria-labelledby="navbarDropdown" style="right: 0;left: auto !important;min-width:250px;">
          <div class="alert alert-primary text-small py-3">
            <img src="https://ui-avatars.com/api/?name=<?= $_SESSION['username'] ?>" alt="" srcset="" class="rounded">
          </div>
          <h5 class="title font-weight-bold"><?= $_SESSION['username'] ?></h5>
          <p class="subtitle text-secondary"><?= $_SESSION['email'] ?></p>
            <a href="" class="my-4 px-4 p-2 dropdown-item btn btn-outline-secondary rounded-pill">Manage your Account</a>
            <a class="dropdown-item bg-danger text-white p-2" href="<?= BASEPATH ?>logout">Logout</a>
        </div>
      </li>
    </ul>
  </div>
  </div>
</nav>