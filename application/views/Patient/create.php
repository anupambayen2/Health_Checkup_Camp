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

  <div class="container pt-2">

    <div class="card">

      <div class="card-body">
         <h5 class="card-title">New Patient :</h5>
         <hr>


            <?php 

                $date = date("Y-m-d");
                $time = date('H:i');
                
                $text = "TVR";

                $year = date("Y");
                $month = date("m");
                $day = date("d");

                $hour = date("H");
                $minutes = date("i");
                $seconds = date("s");

                $patient_id = $text.$year.$month.$day.$hour.$minutes.$seconds;

            ?>


            <script>
              
                $(document).ready(function(){

                    $("#height,#weight").keyup(function(){

                        var bmi =0;
                        var x = Number($("#height").val());
                        var y = Number($("#weight").val());

                        var bmi = y/(x*x);
                        var bmi = bmi.toFixed(2);
                        $("#bmi").val(bmi);

                    });
                });

            </script>

          <form method="post" action="<?php echo base_url().'patient/create'; ?>">


             <?php echo form_error('gender'); ?>

              <div class="form-row">

                <div class="from-group col-md-2">
                    <label>Patient Id</label>
                    <input type="text" name="p_sl_no" class="form-control form-control-sm" value="<?php echo $patient_id; ?>" readonly>
                </div>
                <div class="from-group col-md-2">
                    <label>Date</label>
                    <input type="text" name="p_date" class="form-control form-control-sm" value="<?php echo $date; ?>" readonly>
                </div>
                <div class="from-group col-md-2">
                    <label>Time</label>
                    <input type="text" name="p_time" class="form-control form-control-sm" value="<?php echo $time; ?>" readonly>
                </div>

                 <div class="from-group col-md-3">
                    <label>Identity Proof <span class="text-danger">*</span></label>
                      <select name="p_id_proof" class="form-control form-control-sm">
                      <option selected>Choose...</option>
                      <option value="Aadhar">Aadhar</option>
                      <option value="Voter">Voter</option>
                      <option value="DL">Driving Licence</option>
                      <option value="Passport">Passport</option>
                      <option value="Bank Passbook">Bank Passbook</option>
                      <option value="OCI">OCI</option>
                      <option value="Others">Others</option>
                    </select>
                </div>

                <div class="from-group col-md-3">
                    <label>ID No</label>
                    <input type="text" name="p_id_no" class="form-control form-control-sm">
                </div>

                <div class="from-group col-md-6 pt-2">
                    <label>Name <span class="text-danger">*</span></label>
                    <input type="text" name="p_name" class="form-control form-control-sm">
                </div>

                <div class="from-group col-md-3 pt-2">
                    <label>Gender <span class="text-danger">*</span></label>
                      <select id="inputState" name="p_gender" class="form-control form-control-sm">
                      <option selected>Choose...</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                </div>

                <div class="from-group col-md-3 pt-2">
                    <label>Age <span class="text-danger">*</span></label>
                    <input type="text" name="p_age" class="form-control form-control-sm">
                </div>

                <div class="from-group col-md-5 pt-2">
                    <label>Mobile <span class="text-danger">*</span></label>
                    <input type="text" name="p_mobile" class="form-control form-control-sm">
                </div>

                <div class="from-group col-md-7 pt-2">
                    <label>Email</label>
                    <input type="text" name="p_email" class="form-control form-control-sm">
                </div>

                <div class="from-group col-md-12 pt-2">
                    <label>Address <span class="text-danger">*</span></label>
                    <input type="text" name="p_address" class="form-control form-control-sm">
                </div>

                <div class="from-group col-md-3 pt-2">
                    <label>City <span class="text-danger">*</span></label>
                    <input type="text" name="p_city" value="Kolkata" class="form-control form-control-sm" readonly>
                </div>

                <div class="from-group col-md-3 pt-2">
                    <label>Zip Code <span class="text-danger">*</span></label>
                    <input type="text" name="p_zip" class="form-control form-control-sm">
                </div>

                <div class="from-group col-md-2 pt-2">
                    <label>Height [Mtrs] <span class="text-danger">*</span></label>
                    <input type="text" id="height" name="p_height" class="form-control form-control-sm">
                </div>

                <div class="from-group col-md-2 pt-2">
                    <label>Weight [Kgs] <span class="text-danger">*</span></label>
                    <input type="text" id="weight" name="p_weight" class="form-control form-control-sm">
                </div>

                <div class="from-group col-md-2 pt-2">
                    <label>BMI</label>
                    <input type="text" id="bmi" name="p_bmi" class="form-control form-control-sm" readonly>
                </div>

                 <div class="from-group col-md-1 pt-2">
                    <label>BP</label>
                    <input type="text" name="p_bp" class="form-control form-control-sm">
                </div>

                 <div class="from-group col-md-1 pt-2">
                    <label>Pulse</label>
                    <input type="text" name="p_pulse" class="form-control form-control-sm">
                </div>
                <div class="from-group col-md-1 pt-2">
                    <label>SPO2</label>
                    <input type="text" name="p_spo" class="form-control form-control-sm">
                </div>

                 <div class="form-group col-md-1 pt-5">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="p_check_list[]" value="FBS">
                    <label>
                      FBS <span class="text-danger">*</span>
                    </label>
                  </div>
                </div>

                 <div class="form-group col-md-1 pt-5">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="p_check_list[]" value="PP">
                    <label>
                      PP <span class="text-danger">*</span>
                    </label>
                  </div>
                </div>

                 <div class="form-group col-md-1 pt-5">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="p_check_list[]" value="RBS">
                    <label>
                      RBS <span class="text-danger">*</span>
                    </label>
                  </div>
                </div>

                <div class="form-group col-md-2 pt-5">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="p_check_list[]" value="Blood Group">
                    <label>
                      Blood Group <span class="text-danger">*</span>
                    </label>
                  </div>
                </div>

                 <div class="from-group col-md-4 pt-2">
                    <label>How did you hear about this health camp ? <span class="text-danger">*</span></label>
                      <select id="inputState" name="p_source" class="form-control form-control-sm">
                      <option selected>Choose...</option>
                      <option value="Facebook">Facebook</option>
                      <option value="Google">Google</option>
                      <option value="Word of Mouth">Word of Mouth</option>
                      <option value="Banner-Poster">Banner-Poster</option>
                      <option value="Walk-In">Walk-In</option>
                      <option value="Others">Others</option>
                    </select>
                </div>

                <div class="from-group col-md-4 pt-2">
                    
                    <input type="submit" name="submit" value="Submit" class="btn btn-primary btn-sm" />
                    <a href="<?php echo base_url().'patient/index' ?>" class="btn btn-warning btn-sm">Cancel</a>
                </div>

              </div> <!--end of form row--->

              <hr>

            
          </form>

      </div>

    </div>
  </div>

<br>
<div class="card bg-dark text-white">

  <p class="text-center">Designed By : Anupam Bayen</p>
</div>
</body>
</html>