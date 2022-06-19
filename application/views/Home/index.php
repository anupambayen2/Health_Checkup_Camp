<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Patient List</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css'; ?>">
  <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'; ?>"></script>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?php echo base_url().'home/index'; ?>">HEALTH CAMP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url().'home/index'; ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'patient/index'; ?>">Patient</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'export/index'; ?>">Reports</a>
      </li>
    
    </ul>
  </div>
</nav>

<div class="container">

  <div class="row">
    <div class="col-sm-12 text-right">
    </div>
    <div class="col-sm-12">
       
        
    <div class="card">
     <!--  <div class="card-body"> -->

        <h3 class="text-center">DELTA DIAGNOSTIC & HEALTH CARE</h3>

      <!-- </div> -->
    </div> 

    <div class="card">
      <div class="card-body">

        <img class="img-fluid" src="<?php echo base_url().'assets/images/health.jpg' ?>">

      </div>
    </div> <!--end of card-->



    </div>
    
  </div>

</div>
 
 <br>
<div class="card bg-dark text-white">

  <p class="text-center">Designed By : Anupam Bayen</p>

</div>
</body>
</html>