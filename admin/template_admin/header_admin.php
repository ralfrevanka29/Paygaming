<?php 
session_start();
if(!isset($_SESSION['user'])){
  header("location:index.php");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  </head>
  <body>
  <nav class="navbar navbar-expand-md bg-secondary"data-bs-theme="dark">
  <div class="container-fluid ">
    <a class="navbar-brand me-2" href="dashboard.php"><b>Pay</b>Gaming</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav" style="width:100%;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="transaksi.php">Transaksi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="game.php">Game</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="bank.php">Bank</a>
        </li>
        <div class="d-flex justify-content-end" style="width:100%">
        <a class="btn btn-outline-light"  href="../proses/logout.php">Logout</a>
        </div>
      </ul>
    </div>
  </div>
</nav>