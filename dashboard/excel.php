<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Download</title>
</head>
<body>
     <?php
          include '../connect.php';
          header("Content-type: application/vnd-ms-excel");
	     header("Content-Disposition: attachment; filename=logs.xls");
     ?>
     <table border="1">
          <thead>
               <tr>
               <th>No</th>
               <th>voltage</th>
               <th>current</th>
               <th>power</th>
               <th>energy</th>
               <th>frequency</th>
               <th>pf</th>
               </tr>
          </thead>
          <tbody>
               <?php 
               $no = 1;
               $data = mysqli_query($connect,"select * from R");
               while($d=mysqli_fetch_array($data)){
               ?>
               <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['voltage']; ?></td>
                    <td><?php echo $d['current']; ?></td>
                    <td><?php echo $d['power']; ?></td>
                    <td><?php echo $d['energy']; ?></td>
                    <td><?php echo $d['frequency']; ?></td>
                    <td><?php echo $d['pf']; ?></td>
               </tr>
               <?php 
               }
               ?>
          </tbody>
     </table>
</body>
</html>