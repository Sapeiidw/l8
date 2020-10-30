<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <!-- jQuery and JS bundle w/ Popper.js -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <title>Document</title>
</head>
<body>
  
<?php

session_start();
include_once 'views/components/navbar.component.php';
// Autoload files using composer
require_once __DIR__ . '/vendor/autoload.php';

// Use this namespace
use Classes\Auth;
use Classes\Users;
use Steampixel\Route;

// Define a global basepath
define('BASEPATH','/pabw-oop/');

Route::add('/',function() {include_once 'views/index.php';});
// auth
Route::add('/register', function() {
  Users::register();
  if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    $data = [
        'username' => $_POST['username'],
        'email' => $_POST['email'],
        'password' => $_POST['password']
    ];
    Users::create($data);
  }
  },["get","post"]);
Route::add('/login', function() {
  Auth::login();
  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $data = [
        'email' => $_POST['email'],
        'password' => $_POST['password']
    ];
    $login = Users::login($data);
    if ($login) {
      // Auth::MakeSession($login);
      print_r($login);
    }else {
      die("wrong email or password!!");
    }
  }
  },["get","post"]);

Route::add('/logout', function() { $user = Auth::logout();});
// user
Route::add('/user', function() { $user = Users::index();});
Route::add('/user/([0-9]*)', function($id) { $user = Users::profile($id); });
Route::add('/user/([0-9]*)/delete', function($id) { $user = Users::destroy($id); });
Route::add('/user/([0-9]*)/edit', function($id) {  
  $user = Users::edit($id);
  if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    $data = [
        'username' => $_POST['username'],
        'email' => $_POST['email'],
        'password' => $_POST['password']
    ];
    Users::update($data,$_POST['id']);
  }
  },["get","post"]);  

// mimpi
  // Run the Router with the given Basepath
Route::run(BASEPATH);

?>

</body>
</html>

