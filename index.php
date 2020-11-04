<?php
session_start();

// Autoload files using composer
require_once __DIR__ . '/vendor/autoload.php';

// Use this namespace

use Classes\Auth;
use Classes\Alert;
use Classes\Prodi;
use Classes\Users;
use Classes\Course;
use Classes\Matkul;
use Steampixel\Route;
use Classes\Assignment;
use Classes\Submission;
use Classes\Departement;
use Classes\CourseMember;

// Define a global basepath
define('BASEPATH','/pabw-oop/');

$padding = (isset($_SESSION['username'])) ? 'style="padding-top:72px"' : "" ;

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.9.0/dist/sweetalert2.min.css" integrity="sha256-Ow4lbGxscUvJwGnorLyGwVYv0KkeIG6+5CAmR8zuRJw=" crossorigin="anonymous">
  <!-- jQuery and JS bundle w/ Popper.js -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.9.0/dist/sweetalert2.all.min.js" integrity="sha256-/Rc4sUX9+MU4xfVQSuqa0Uv4PADrKTMURNa1Sh5T0X4=" crossorigin="anonymous"></script>
  <title>Document</title>
</head>
<body <?= $padding ?>>
  
<?php
if (isset($_SESSION['username'])) {
  include_once 'views/components/navbar.component.php';
}


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
    if (Users::create($data)) {
      if(!isset($_SESSION['username'])) {
        header("Location: ".BASEPATH."login");
      };
    };
  }
  },["get","post"]);
Route::add('/login', function() {
  Auth::login();
  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $data = [
        'email' => $_POST['email'],
        'password' => $_POST['password']
    ];
    if(Users::login($data)){
      Alert::success("login");
    } 
  }
  },["get","post"]);

Route::add('/logout', function() { Auth::logout();});
// user
Route::add('/user', function() { Users::index();});
Route::add('/user/([0-9]*)', function($id) { Users::profile($id); });
Route::add('/user/([0-9]*)/delete', function($id) { 
  if(Users::destroy($id)){
    Alert::deleted("user");
  };
  });
Route::add('/user/([0-9]*)/edit', function($id) {  
  Users::edit($id);
  if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    $data = [
        'username' => $_POST['username'],
        'email' => $_POST['email'],
        'password' => $_POST['password']
    ];
    if(Users::update($data,$_POST['id'])){
      Alert::updated("user");
    } 
  }
  },["get","post"]);  

// departement
Route::add('/departement', function() { Departement::index();});
Route::add('/departement/create', function() {
  Departement::create();
  if (!empty($_POST['name']) && !empty($_POST['kode'])) {
    $data = [
    "name" => $_POST['name'],
    "kode" => $_POST['kode'],
    ];
    Departement::store($data);
  }
  },["get","post"]);
Route::add('/departement/([0-9]*)', function($id) { Departement::profile($id); });
Route::add('/departement/([0-9]*)/delete', function($id) { 
  if(Departement::destroy($id)){
    Alert::deleted("departement");
  };
  });
Route::add('/departement/([0-9]*)/edit', function($id) {  
  Departement::edit($id);
  if (!empty($_POST['name']) && !empty($_POST['kode'])) {
    $data = [
    "name" => $_POST['name'],
    "kode" => $_POST['kode'],
    ];
    if(Departement::update($data,$_POST['id'])){
      Alert::updated("departement");
    } 
  }
  },["get","post"]);  

// prodi
Route::add('/prodi', function() { Prodi::index();});
Route::add('/prodi/create', function() {
  Prodi::create();
  if (!empty($_POST['id_departement']) && !empty($_POST['name'])) {
    $data = [
    "id_departement" => $_POST['id_departement'],
    "name" => $_POST['name'],
    ];
    Prodi::store($data);
  }
  },["get","post"]);
Route::add('/prodi/([0-9]*)', function($id) { Prodi::profile($id); });
Route::add('/prodi/([0-9]*)/delete', function($id) { 
  if(Prodi::destroy($id)){
    Alert::deleted("departement");
  };
  });
Route::add('/prodi/([0-9]*)/edit', function($id) {  
  Prodi::edit($id);
  if (!empty($_POST['id_departement']) && !empty($_POST['name']) ) {
    $data = [
        'id_departement' => $_POST['id_departement'],
        'name' => $_POST['name'],
    ];    
    if(Prodi::update($data,$_POST['id'])){
      Alert::updated("departement");
    } 
  }
  },["get","post"]);  

// matkul
Route::add('/matkul', function() { Matkul::index();});
Route::add('/matkul/create', function() {
  Matkul::create();
  if (!empty($_POST['kode']) && !empty($_POST['name']) && !empty($_POST['sks']) && !empty($_POST['semester']) ) {
    $data = [
    "kode" => $_POST['kode'],
    "name" => $_POST['name'],
    "sks" => $_POST['sks'],
    "semester" => $_POST['semester'],
    // "prasyarat" => $_POST['prasyarat'],
    ];
    Matkul::store($data);
  }
  },["get","post"]);
Route::add('/matkul/([0-9]*)', function($id) { Matkul::profile($id); });
Route::add('/matkul/([0-9]*)/delete', function($id) { 
  if(Matkul::destroy($id)){
    Alert::deleted("matkul");
  }; 
  });
Route::add('/matkul/([0-9]*)/edit', function($id) {  
  Matkul::edit($id);
  if (!empty($_POST['kode']) && !empty($_POST['name']) && !empty($_POST['sks']) && !empty($_POST['semester']) ) {
    $data = [
    "kode" => $_POST['kode'],
    "name" => $_POST['name'],
    "sks" => $_POST['sks'],
    "semester" => $_POST['semester'],
    // "prasyarat" => $_POST['prasyarat'],
    ];
    if(Matkul::update($data,$_POST['id'])){
      Alert::updated("matkul");
    } 
  }
  },["get","post"]);  

// course
Route::add('/course', function() { 
  if ($_SESSION['role'] == "admin" AND isset($_SESSION['id'])) {
    Course::index();
  } else {
    $id = $_SESSION['id'];
    Course::getForUser($id);
  }
  });
Route::add('/course/create', function() {
  Course::create();
  if (!empty($_POST['id_user']) && !empty($_POST['name']) && !empty($_POST['id_matkul']) ) {
    $data = [
    "name" => $_POST['name'],
    "id_matkul" => $_POST['id_matkul'],
    "id_user" => $_POST['id_user'],
    ];
    Course::store($data);
  }
  },["get","post"]);
Route::add('/course/([0-9]*)', function($id) { Course::profile($id); });
Route::add('/course/([0-9]*)/delete', function($id) { 
  
  if(Course::destroy($id)){
    Alert::deleted("course");
  };
 });
Route::add('/course/([0-9]*)/edit', function($id) {  
  Course::edit($id);
  if (!empty($_POST['id_user']) && !empty($_POST['name']) && !empty($_POST['id_matkul']) ) {
    $data = [
    "name" => $_POST['name'],
    "id_matkul" => $_POST['id_matkul'],
    "id_user" => $_POST['id_user'],
    ];
    if(Course::update($data,$_POST['id'])){
      Alert::updated("course");
    }    
  }
  },["get","post"]);  

// course member
Route::add('/course/([0-9]*)/member', function($id) { CourseMember::index($id);});
Route::add('/course/join', function() {
  CourseMember::create();
  if (!empty($_POST['id_courses']) && !empty($_SESSION['id']) ) {
    $data = [
    "id_courses" => $_POST['id_courses'],
    "id_member" => $_SESSION['id'],
    ];
    CourseMember::store($data);
  }
  },["get","post"]);

Route::add('/course-member/([0-9]*)/delete', function($id) { 
  
  if(CourseMember::destroy($id)){
    Alert::deleted("course");
  };
 });
Route::add('/course-member/([0-9]*)/edit', function($id) {  
  CourseMember::edit($id);
  if (!empty($_POST['id_user']) && !empty($_POST['name']) && !empty($_POST['id_matkul']) ) {
    $data = [
    "name" => $_POST['name'],
    "id_matkul" => $_POST['id_matkul'],
    "id_user" => $_POST['id_user'],
    ];
    if(CourseMember::update($data,$_POST['id'])){
      Alert::updated("course");
    }    
  }
  },["get","post"]);  
// assignment
Route::add('/course/([0-9]*)/assignment', function($id) { Assignment::index($id);});
Route::add('/course/([0-9]*)/assignment/create', function($id) {
  Assignment::create($id);
  if (!empty($_POST['name']) && !empty($_POST['deskripsi']) && !empty($_POST['deadline']) && !empty($_POST['id_course'])) {
    $data = [
      "id_course" => $_POST['id_course'],
      "name" => $_POST['name'],
      "deskripsi" => $_POST['deskripsi'],
      "deadline" => $_POST['deadline'],
    ];
    if(Assignment::store($data)){
      Alert::success("course/".$_POST['id_course']);
    };
  }else{
    die("gk boleh kosong");
  }
  },["get","post"]);
Route::add('/assignment/([0-9]*)', function($id) { Assignment::profile($id); });
Route::add('/assignment/([0-9]*)/delete', function($id) { 
  if(Assignment::destroy($id)){
    Alert::deleted("course");
    // header("Location: localhost/".BASEPATH."course");
  };
  });
Route::add('/assignment/([0-9]*)/edit', function($id) {  
  Assignment::edit($id);
  if (!empty($_POST['name']) && !empty($_POST['deskripsi']) && !empty($_POST['deadline']) && !empty($_POST['id_course'])) {
    $data = [
      "id_course" => $_POST['id_course'],
      "name" => $_POST['name'],
      "deskripsi" => $_POST['deskripsi'],
      "deadline" => $_POST['deadline'],
    ];
    Assignment::store($data);
  
    if(Assignment::update($data,$_POST['id'])){
      Alert::updated("course");
      // header("Location: localhost/".BASEPATH."course");
    } 
  }else{
    die("gk boleh kosong");
  } 
  },["get","post"]);  

// submission
Route::add('/assignment/([0-9]*)/create', function($id) {
  Submission::create($id);
  if (!empty($_POST['name']) && !empty($id) && !empty($_SESSION['id'])) {
    $data = [
      "id_assignment" => $id,
      "id_user" => $_SESSION['id'],
      "name" => $_POST['name'],
    ];
    Submission::store($data);
  }else{
    die("gk boleh kosong");
  }
  },["get","post"]);
Route::add('/assignment/([0-9]*)/submission', function($id) { Submission::index($id); });
Route::add('/submission/([0-9]*)/delete', function($id) { 
  if(Assignment::destroy($id)){
    Alert::deleted("course");
    // header("Location: localhost/".BASEPATH."course");
  };
  });
Route::add('/submission/([0-9]*)/edit', function($id) {  
  Submission::edit($id);
  if (!empty($_POST['name']) && !empty($id) && !empty($_POST['id_assignment'])) {
    $data = [
      "name" => $_POST['name'],
      "status" => $_POST['status'],
    ];
    print_r($data);
    if(Submission::update($data,$_POST['id'])){
      Alert::updated("assignment/".$_POST['id_assignment']."/submission");
      // header("Location: localhost/".BASEPATH."course");
    } 
    print_r(Submission::update($data,$_POST['id']));
  }else{
    
    die("gk boleh kosong");
  } 
  },["get","post"]);  



  // Run the Router with the given Basepath
Route::run(BASEPATH);

?>

</body>
</html>

