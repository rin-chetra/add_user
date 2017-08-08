<?php
include"config/conn.php";
$sql ="SELECT * FROM `tbl_user`";
$result =mysqli_query($con,$sql);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Show Add User</title>
</head>

<body>
<h2>Show Add User</h2>
<table width="730" border="1">
  <tr>
    <td width="28"><div align="center">No</div></td>
    <td width="59"><div align="center">User ID </div></td>
    <td width="60"><div align="center">Label</div></td>
    <td width="62"><div align="center">Gender</div></td>
    <td width="54"><div align="center">DOB</div></td>
    <td width="50"><div align="center">POB</div></td>
    <td width="78"><div align="center">Username  </div></td>
    <td width="91"><div align="center">Password</div></td>
    <td width="81"><div align="center">Disable</div></td>
    <td width="103"><div align="center">Action</div></td>
  </tr>
  <?php
  $no=1;
  while ($row =mysqli_fetch_array($result)){
	  
  ?>
  <tr>	
    <td><div align="center"><?php echo $no;?></div></td>
    <td><div align="center"><?php echo $row['user_id']?></div></td>
    <td><div align="center"><?php echo $row['user_label']?></div></td>
    <td><div align="center"><?php echo $row['user_gender']?></div></td>
    <td><div align="center"><?php echo $row['user_dob']?></div></td>
    <td><div align="center"><?php echo $row['user_pob']?></div></td>
    <td><div align="center"><?php echo $row['user_log']?></div></td>
    <td><div align="center"><?php echo $row['password']?></div></td>
    <td><div align="center"><?php echo $row['disable']?></div></td>
    <td>
      <div align="center">
      <a href="frm_update_user.php?us_id=<?php echo $row['user_id']?>">
      <img src="image/edite.jpg" width="20" height="20" /> &nbsp   
      </a>
    <img src="image/delete.jpg" width="20" height="20" /></div></td>
  </tr>
  <?php
  $no++;
   }
  ?>
</table>

សរុប: <?php echo mysqli_num_rows($result);?>


</body>
</html>