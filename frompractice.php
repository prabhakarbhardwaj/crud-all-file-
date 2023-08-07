<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="savedatapractice.php" method="post">
    ID:<input type="number" name="ID">
      <br>
      <br>
      Cloth:<input type="text" name="coloth">
      <br>
      <br>
       Color:<input type="text" name="color">
      <br>
      <br>
      Metre: <input type="text" name="meter">
      <br>
      <br>
      rate: <input type="number" name="rate"><br> <br>
      <input type="submit">

    <br> <br> <br> <br>

    </form> 
    <table>
            <tr>
                <th>ID</th> 
                <th>CLOTH</th>
                <th>COLOR</th>
                <th>METER</th>
                <th>RATE</th>
                <th>
                    ACTION
                </th>
            </tr>
            <?php
                  $con = mysqli_connect("localhost","root","","prabhakar")or die("not coonect");
                  $query ="SELECT * FROM utc";
                  $result = mysqli_query($con,$query) or die("faild to load");
                  while($row=mysqli_fetch_assoc($result)){
            ?>
            <tr>
                    <td><?php echo $row =["id"];?></td>
                    <td><?php echo $row =["cloth"];?></td>
                    <td><?php echo $row =["color"];?></td>
                    <td><?php echo $row =["meter"];?></td>
                    <td><?php echo $row =["rate"];?></td>
                    
            </tr>
        <?php

              }
              mysqli_close($con); 
        ?>
        </table>
           




    
</body>
</html>