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



   <hr>

  <div class="row">
    <div class="col-sm-12 text-right">
      <a href="<?php echo base_url().'patient/create'; ?>" class="btn btn-primary btn-sm">New Patient</a>
    </div>
    <div class="col-sm-12 pt-2">
      
        
      <div class="card">
      <div class="card-body">

        <p><b>Patient List :</b>

        <?php if ($this->session->flashdata('success')){ ?>

        <span class="text-success"><?php echo $this->session->flashdata('success'); ?></span>

        <?php } ?>


        </p>

        <div class="table-responsive">

          <style type="text/css">
            
            table {
              font-size: 14px;
            }

          </style>

          <table class="table table-bordered table-sm">
            
            <thead class="thead-light">
              <tr>
                <th>SL No</th>
                <th>Date</th>
                <th>Patient ID</th>
                <th>Patient Name</th>
                <th>Mobile</th>
                <th>Gender</th>
                <th>City</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>

              <?php if(!empty($patients)) {foreach ($patients as $patient) { ?>

              <tr>
                <td><?php echo $patient['id']; ?></td>
                <td><?php echo $patient['p_date']; ?></td>
                <td><?php echo $patient['p_sl_no']; ?></td>
                <td><?php echo $patient['p_name']; ?></td>
                <td><?php echo $patient['p_mobile']; ?></td>
                <td><?php echo $patient['p_gender']; ?></td>
                <td><?php echo $patient['p_city']; ?></td>
                <td>
                  <a href="<?php echo base_url().'patient/view/'.$patient['id']; ?>" class="btn btn-info btn-sm">View</a> 
                  <a href="<?php echo base_url().'patient/edit/'.$patient['id']; ?>" class="btn btn-warning btn-sm">Edit</a> 
                  

                </td>
              </tr>

            <?php }} else { ?>

              <td colspan="8">No Records to display.</td>

            <?php } ?>

            </tbody>

          </table>
          
        </div>

      </div>


    </div> <!--end of card-->

    <br>
    <?php echo $links; ?>


    </div>
    
  </div>

</div>
 

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="card bg-dark text-white">

  <p class="text-center">Designed By : Anupam Bayen</p>
</div>
</body>
</html>