<html>
  <head>
    <script></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style type="text/css">
    h1{
      text-align :center;
    }
    table {
      boarder-collapse: collapse;
      width: 100%;
      color: #587;
      font-family: monospace;
      font-size: 25px;
      text-align: left;
    }
    th{
      background-color: #000;
      color: white;

     }
    tr:nth-child(even){
      background-color: #f2f2f2;

    }
    .container {
  justify-content: space-between;
  flex-direction: column;
  height: 100vh;
  display: flex;
}

    
    </style>
    
  </head>
  <body>
  <h1 style="color:skyblue">Enroll table</h1>
   <table>
      <tr>
        <th>firstname</th>
        <th>lastname</th>
        <th>email</th>
        <th>branch</th>
        <th>domain</th>
        <th>referal</th>
       </tr>
   
      <?php
      include_once 'data.php';
       $sql = "SELECT * from enrolldb";
       $result = $conn-> query($sql);

       if($result-> num_rows > 0){
         while($row = $result-> fetch_assoc()){
           echo "<tr><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["email"]."</td><td>".$row["branch"]."</td><td>".$row["domain"]."</td><td>".$row["referal"]."</td></tr>";
         }
         echo "</table>";

       }
       else{
         echo "0result";
       }
       $conn->close();

      ?>


  </table>
  <h1 style="color:skyblue">compousambasddor TABLE</h1>

  <table>
      <tr>
        <th>firstname</th>
        <th>lastname</th>
        <th>email</th>
        <th>phoneNO</th>
        <th>college</th>
        <th>referal</th>
       </tr>
   

       <?php
      $conn=mysqli_connect("localhost","root","","EvolveXdb");
      if ($conn-> connect_error){
        die("connection failed:".$conn-> connect_error);
      }
      $sql = "SELECT * from cadb";
      $result = $conn-> query($sql);

      if($result-> num_rows > 0){
        while($row = $result-> fetch_assoc()){
          echo "<tr><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["email"]."</td><td>".$row["phoneNO"]."</td><td>".$row["college"]."</td><td>".$row["referal"]."</td></tr>";
        }
          echo "</table>";

      }
      else {
        echo "0result";
      }
      $conn->close();
      ?>



    </table>
    
    
    
  </body>
</html>