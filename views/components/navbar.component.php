<nav class="navbar navbar-expand-lg navbar-dark py-3" style="background: #3b267d;">
  <div class="container-fluid">
  <a class="navbar-brand" href="<?= BASEPATH ?>">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item"><a class="nav-link" href="<?= BASEPATH ?>user" >user</a></li>
      <li class="nav-item"><a class="nav-link" href="<?= BASEPATH ?>departement" >departement</a></li>
      <li class="nav-item"><a class="nav-link" href="<?= BASEPATH ?>prodi" >prodi</a></li>
      <li class="nav-item"><a class="nav-link" href="<?= BASEPATH ?>matkul" >matkul</a></li>
      <li class="nav-item"><a class="nav-link" href="<?= BASEPATH ?>course" >course</a></li>
      <li class="nav-item"><a class="nav-link" href="<?= BASEPATH ?>assignment" >assignment</a></li>
    </ul>
    <ul class="navbar-nav ml-auto">
    <li class="nav-item nav-item active dropdown">
        <?php
          if (!isset($_SESSION['username'])) {
            echo '<a class="dropdown-item" href="<?= BASEPATH ?>login">Login</a>';
          } else {
            echo '
            <a class="nav-link dropdown-toggle" href="<?= BASEPATH ?>user/'.$_SESSION['id'].'" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              '.$_SESSION['username'].'
            </a>';
          }
          
        ?>
        <div class="dropdown-menu text-center p-3" aria-labelledby="navbarDropdown" style="right: 0;left: auto !important;">
          <div class="alert alert-primary text-small py-3">
            <svg width="5em" height="5em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
              <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
              <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
            </svg>
          </div>
          <h5 class="title font-weight-bold"><?= $_SESSION['username'] ?></h5>
          <p class="subtitle text-secondary"><?= $_SESSION['email'] ?></p>
          <p class="dropdown-item">
            <a href="" class="btn btn-outline-secondary btn-sm px-4 p-1 rounded-pill">Manage your Account</a>
          </p>
          <p class="dropdown-item">
          <a class="btn btn-outline-danger" href="<?= BASEPATH ?>logout">Logout</a>
          </p>
        </div>
      </li>
    </ul>
  </div>
  </div>
</nav>