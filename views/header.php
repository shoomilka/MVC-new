<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>MVC site for BeeJee</title>
  </head>
  <body style="background: aliceblue;">


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Tasks</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/index.php/create">Create new task</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/index.php/list/1/namea">Sort by name ASC</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/index.php/list/1/named">Sort by name DESC</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/index.php/list/1/emaila">Sort by email ASC</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/index.php/list/1/emaild">Sort by email DESC</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/index.php/list/1/statusa">Sort by status ASC</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/index.php/list/1/statusd">Sort by status DESC</a>
      </li>





      <?php
        session_start();
        if(!isset($_SESSION['username'])){ ?>
          <li class="nav-item">
            <a class="nav-link" href="/index.php/login">Login</a>
          </li>
        <?php } ?>
    </ul>
  </div>
</nav>


	<div class="container" style="padding-top: 50px;">