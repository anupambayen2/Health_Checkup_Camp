<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>

   <?php 

      $check_list = explode(",",$patient['p_check_list']);

    ?>

  <style type="text/css">
    
    table {

        width: 100%;
        padding-top: 6px;
        padding-bottom: 6px;
        padding-left: 6px;
        padding-right: 6px;
        border: thin dotted 1px;
        font-family: arial, verdana, sans-serif;
        font-size: 12px;
        border-collapse: collapse;

    }

    th {

      height: 25px;
      text-align: left;
      vertical-align: middle;
      border: thin dotted 1px;
      padding-left: 4px;
    }

    td {
      text-align: left;
      vertical-align: middle;
      border: thin dotted 1px;
      padding-left: 4px;
    }




  </style>

  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

  <table>
      
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
              <td><?php if(in_array('FBS',$check_list)) {echo "Yes";}else {echo "No";} ?></td>
              <th>PP :</th>
              <td><?php if(in_array('PP',$check_list)) {echo 'Yes';} else {echo "No";} ?></td>
              <th>RBS :</th>
              <td><?php if(in_array('RBS',$check_list)) {echo 'Yes';} else {echo "No";} ?></td>
            </tr>

            <tr>
              <th>Blood Group :</th>
              <td><?php if(in_array('Blood Group',$check_list)) {echo 'Yes';} else {echo "No";} ?></td>
              <th>Source Type :</th>
              <td><?php echo $patient['p_source']; ?></td>
              <th>Status :</th>
              <td><?php if($patient['p_status']==1){echo "Enrolled" ;}else{echo "Cancelled";} ?></td>
            </tr>

  </table>

</body>
</html>