<?php
if (isset($_POST['insert'])) {
        //connection//==============================================================================================================
        $host = "localhost";
        $username = "root";
        $password = "";
        $db = "insertupdatedeleteview";

        $con = mysqli_connect($host, $username, $password, $db);
        // if ($con) {
        //   echo "<h1><center>Sucssefully connected to the database";
        // } else {
        //   echo "can't connect to the database due to " . mysqli_connect_error();
        // }

        //save data========================================================================================================================
        $uname = $_POST['uname'];
        $city = $_POST['city'];

        $log = "insert into inward (uname, city) VALUES ('$uname',' $city')";

        $query = mysqli_query($con, $log);

        // if ($query) {
        //     echo "માલ આઈ ગ્યો";
        // }
        // else{
        //     echo "માલ નથી મડ્યો";
        // }
}
?>

<html lang="en">

<head>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>Data Manager</title>
</head>

<body>
  <div class="container-fluid"><br>
    <h1 class="text-center bg-dark text-white display-6">INSERT | UPDATE | DELETE | VIEW </h1><br>
  </div>
    <div class="container">
    <form action="" method="post">
      <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">Username</span>
        <input type="text"  name="uname" class="form-control display-6" aria-label="Sizing example input" maxlength="15" placeholder="Enter your Username" aria-describedby="inputGroup-sizing-sm" required>
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">City   </span>
        <input type="text" name="city"  class="form-control display-6" aria-label="Sizing example input" maxlength="15" placeholder="Enter Your city" aria-describedby="inputGroup-sizing-sm"required>
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">Set profile  </span>
        <input type="file" name="profile"  class="form-control display-6" aria-label="Sizing example input" placeholder="Enter Your city" aria-describedby="inputGroup-sizing-sm">
      </div>

      <div class="text-center">
        <button type="submit" class="btn btn-outline-success  rounded-3" name="insert">Insert Data</button>

      </div>
  </form>

  <div class="container py-5">
  <table class="table table-bordered table-striped" >
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">username</th>
        <th scope="col">city</th>
      </tr>
    </thead>
    <tbody>
<!-- ========================================  DISPLAY ===================================================== -->
      <?php
              $host = "localhost";
              $username = "root";
              $password = "";
              $db = "insertupdatedeleteview";
      
        $con = mysqli_connect($host, $username, $password, $db);
     
        $show =  "select * from inward";

        $runshow = mysqli_query($con, $show);

          
        $srno = 0;
        
        // var_dump($display);
        while ($display = mysqli_fetch_array($runshow)) {
        
          $srno = $srno+1;

      ?>
        <tr>
          <th scope="row"><?php echo $srno  ?></th>
          <td><?php echo $display['uname']; ?></td>
          <td><?php echo $display['city'];?> </td>
        </tr>
   
<?php
    }

?>
 </tbody>
  </table>
  </div>
</body>
</html>