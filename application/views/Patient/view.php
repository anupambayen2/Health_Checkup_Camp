<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>View Patient</title>
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
    <div class="col-sm-11 pt-2">
       
       <?php 

          $check_list = explode(",",$patient['p_check_list']);

        ?>
        
      <div class="card">
      <div class="card-body">

        <p><b>Details of - <?php echo $patient['p_name']; ?> [<?php echo $patient['id']; ?>] :</b></p>

        <div class="table-responsive">

           <style type="text/css">
            
            table {
              font-size: 14px;
            }

          </style>

          <table class="table table-bordered table-sm">
            
            <tr>
              <th>Patient ID :</th>
              <td><?php echo $patient['p_sl_no']; ?></td>
              <th>Date :</th>
              <td><?php echo $patient['p_date']; ?></td>
              <th>Time :</th>
              <td><?php echo $patient['p_time']; ?></td>
            </tr>

             <tr>
              <th>ID Proof :</th>
              <td><?php echo $patient['p_id_proof']; ?></td>
              <th>ID Number :</th>
              <td colspan="3"><?php echo $patient['p_id_no']; ?></td>
            </tr>

             <tr>
              <th>Patient Name :</th>
              <td><?php echo $patient['p_name']; ?></td>
              <th>Gender :</th>
              <td><?php echo $patient['p_gender']; ?></td>
              <th>Age :</th>
              <td><?php echo $patient['p_age']; ?></td>
            </tr>

             <tr>
              <th>Mobile No :</th>
              <td><?php echo $patient['p_mobile']; ?></td>
              <th>Email Id :</th>
              <td colspan="3"><?php echo $patient['p_email']; ?></td>
            </tr>

            <tr>
              <th>Address :</th>
              <td colspan="5"><?php echo $patient['p_address']; ?></td>
            </tr>

            <tr>
              <th>City :</th>
              <td><?php echo $patient['p_city']; ?></td>
              <th>Zip Code :</th>
              <td colspan="3"><?php echo $patient['p_zip']; ?></td>
            </tr>

            <tr>
              <th>Height :</th>
              <td><?php echo $patient['p_height']; ?></td>
              <th>Weight :</th>
              <td><?php echo $patient['p_weight']; ?></td>
              <th>BMI :</th>
              <td><?php echo $patient['p_bmi']; ?></td>
            </tr>

            <tr>
              <th>BP :</th>
              <td><?php echo $patient['p_bp']; ?></td>
              <th>Pulse :</th>
              <td><?php echo $patient['p_pulse']; ?></td>
              <th>SPO2 :</th>
              <td><?php echo $patient['p_spo']; ?></td>
            </tr>

            <tr>
              <th>FBS :</th>
              <td><?php if(in_array('FBS',$check_list)) {echo "&#9745;";}else {echo "&#9746;";} ?></td>
              <th>PP :</th>
              <td><?php if(in_array('PP',$check_list)) {echo '&#9745;';} else {echo "&#9746;";} ?></td>
              <th>RBS :</th>
              <td><?php if(in_array('RBS',$check_list)) {echo '&#9745;';} else {echo "&#9746;";} ?></td>
            </tr>

            <tr>
              <th>Blood Group :</th>
              <td><?php if(in_array('Blood Group',$check_list)) {echo '&#9745;';} else {echo "&#9746;";} ?></td>
              <th>Source Type :</th>
              <td><?php echo $patient['p_source']; ?></td>
              <th>Status :</th>
              <td><?php if($patient['p_status']==1){echo "Enrolled" ;}else{echo "Cancelled";} ?></td>
            </tr>



           

          
          </table>
          
        </div>

      </div>
    </div> <!--end of card-->
    <br>
    <a href="<?php echo base_url().'patient/index'; ?>" class="btn btn-primary btn-sm ">Back to List</a>
    <a href="<?php echo base_url().'patient/downloadPDF/'.$patient['id']; ?>" class="btn btn-danger btn-sm">Print PDF</a> 



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

<div class="card bg-dark text-white">

  <p class="text-center">Designed By : Anupam Bayen</p>
</div>
 

</body>
</html>