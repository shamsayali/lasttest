<?php
require 'connection.php';





?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
       @media (min-width: 1025px) {
      .h-custom {
        height: 100vh !important;
        }
            }
    li a{
        font-family: Times New Roman;

    }
    ul li:hover{
        background-color: grey;
        padding-left: 6px;
        border-radius: 4px;
    }
        
    </style>
  </head>
<body>
   <section class="h-100 h-custom" style="background-color: #8fc4b7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center h-100">
      <div class="col-lg-8 col-xl-6">
      <nav class="navbar navbar-dark bg-primary fixed-top">
  <div class="container-fluid">
    <h3 class="text-white" style="font-family: Times New Roman; font-weight: bolder;">ICT6 (2024-2025)</h3>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" style="background-color: black;" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
    <h3 class="text-white" style="font-family: Times New Roman; font-weight: bolder;">ICT 6 (2024-2025)</h3>
        
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3" style="font-size: 15px;">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="picture.php" style="color: red;"><span class="fa fa-home"></span> HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="inst.php" style="color: red;"><span class="fa fa-home"></span> INSTRUCTINS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="sem1.php" style="color: red;">VIEW SEMISTER ONE MODULES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="sem2.php" style="color: red;">VIEW SEMISTER TWO MODULES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="sem1notes.php" style="color: red;">VIEW SEMISTER ONE NOTES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="sem2notes.php" style="color: red;">VIEW SEMISTER TWO NOTES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="past1.php" style="color: red;">VIEW SEMISTER ONE PAST PAPER</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="past2.php" style="color: red;">VIEW SEMISTER TWO PAST PAPER</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="participant.php" style="color: red;">VIEW ALL PARTICIPANT</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="week.php" style="color: red;">VIEW THE NUMBER OF WEEK</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php" style="color: red;">LOG OUT</a>
          </li>
          
        </ul>
       
      </div>
    </div>
  </div>
</nav>
<br>
<div class="row">
    <div class="col-sm-12">
      <H2>PAST PAPER SEMISTER 2 ONLY</H2>
     <table class="table table-bordered">
        <tr>
            <th>MODULE NAME</th>
            <th>ACTION</th>

        </tr>
        <tr>
            <td>WEB MANAGEMENET</td>
            <td><button class="btn btn-primary"><span class="fa fa-download"></span><a href="web.pdf" download style="color: white;font-weight: bolder;text-decoration: none;"> Download</a></td>
            
            

        </tr>
        <tr>
            <td>COMPUTER GRAPHIC</td>
            <td><button class="btn btn-primary"><span class="fa fa-download"></span><a href="graphic.pdf" download style="color: white;font-weight: bolder;text-decoration: none;"> Download</a></td>


        </tr>
        <tr>
            <td>HUMAN COMPUTER INTERECTION (HCI)</td>
            <td><button class="btn btn-primary"><span class="fa fa-download"></span><a href="hci.pdf" download style="color: white;font-weight: bolder;text-decoration: none;"> Download</a></td>


        </tr>
        <tr>
            <td>SOFTWARE DEVELOPMENT</td>
            <td><button class="btn btn-primary"><span class="fa fa-download"></span><a href="software.pdf" download style="color: white;font-weight: bolder;text-decoration: none;"> Download</a></td>


        </tr>
        <tr>
            <td>ADVANCED NETWORKING TECHNOLOGY</td>
            <td><button class="btn btn-primary"><span class="fa fa-download"></span><a href="adnet.pdf" download style="color: white;font-weight: bolder;text-decoration: none;"> Download</a></td>


        </tr>
      
        <tr>
            <td>ANNUITY </td>
            <td><button class="btn btn-primary"><span class="fa fa-download"></span><a href="anuity.pdf" download style="color: white;font-weight: bolder;text-decoration: none;"> Download</a></td>

            

        </tr>
        <tr>
            <td>C++ CONTROL STRUCTURE</td>
            <td><button class="btn btn-primary"><span class="fa fa-download"></span><a href="cpp.pdf" download style="color: white;font-weight: bolder;text-decoration: none;"> Download</a></td>


        </tr>

     </table>

    </div>


</div>
      </div>

    </div>
 
  </div>
  
</section>


     

    
</body>
</html>