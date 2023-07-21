<?php

echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container-fluid">
<a class="navbar-brand" href="#">StuddyBuddy DF</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="/newdf">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="http://localhost:3001">Courses</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="contactus.php" tabindex="-1">Contact</a>
    </li>
  </ul>

  <div class="row mx-2">
  <form class="d-flex" role="search">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-primary" type="submit">Search</button>
  </form>
  <button class="btn btn-primary ml-2" data-toggle="modal" data-target="#loginModal">Login</button>
  <button class="btn btn-primary mx-2" data-toggle="modal" data-target="#signupModal">SignUp</button>
</div>
</div>
</nav>';

include ('partials/_loginModal.php');
include ('partials/_signupModal.php');
if(isset($_GET['signupsuccess'])&& $_GET['signupsuccess']=="true"){
  
  echo'<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
    <strong>Sign-up successful! </strong>You can now login.
  <button type="button" class="close" data-dismiss="alert" aria-label="close">
  <span aria-hidden="true">&times;</span></button>
  </div>';
  }

?>