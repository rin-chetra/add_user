<?php
include("config/conn.php");
if(isset($_POST['btn_save'])){
	$user_label = $_POST['txt_user_label'];
	$gender = $_POST['r_gender'];
	$dob_day = $_POST['cbo_dob_day'];
	$dob_month = $_POST['cbo_dob_month'];
	$dob_year = $_POST['cbo_dob_year'];
	$dob_day = $dob_day."-".$dob_month."-".$dob_year;
	$pob = $_POST['txt_pob'];
	$username =$_POST['txt_username'];
	$password =$_POST['txt_password'];
	$password_confirm =$_POST['txt_confirm'];
	$disable = isset($_POST['chb_dissable']) && isset($_POST['chb_dissable']) ? "True":"False";
	
$query ="INSERT INTO tbl_user VALUES (NULL,'$user_label','$gender','$dob','$pob','$user_name','$password','$disable')";
$result =mysqli_query($con,$query);

	if($password ==$password_confirm){
		if($query){
		echo"<script language=\"javascript\">
                alert(\"Save successfully.\")
            </script>";
	    }else{
		    echo"<script language=\"javascript\">
                alert(\" Data can not insert.\")
             </script>";
		     } 
	}else{
		   echo"<script language=\"javascript\">
                alert(\" Password confirm inrorect.\")
            </script>";
		}
	}
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form Add User</title>
</head>
<body>
<form action="" method="post" name="frm_add_user">
<h2> Form Add User</h2><table width="528" height="218" border="0">
  <tr>
    <td width="121">User label</td>
    <td width="11">:</td>
    <td width="382"><input name="txt_user_label" type="text" id="textfield" /></td>
  </tr>
  <tr>
    <td>Gender</td>
    <td>:</td>
    <td>Mal<input name="r_gender" type="radio" value="Mal" checked="checked"/>
    Femal<input name="r_gender" type="radio" value="Femal"/> 	
    </td>
  </tr>
  <tr>
    <td>DOB</td>
    <td>:</td>
    <td>Day
    <select name="cbo_dob_day">	
    <?php
	for($i=1;$i<=31;$i++){
		$i = sprintf("%02d" ,$i);
		echo "<option lavue=\"$i\">$i</option>";
		}
    ?>
    </select>
    Month
     <select name="cbo_dob_month">
      <option value="January">January</option>
      <option value="February">February</option>
      <option value="March">March</option>
      <option value="April">April</option>
      <option value="May">May</option>
      <option value="June">June</option>
      <option value="July">July</option>
      <option value="August">August</option>
      <option value="September">September</option>
      <option value="October">October</option>
      <option value="Novmeber">Novmeber</option>
      <option value="Desember">Desember</option>
     </select>	
     Year
      <select name="cbo_dob_year">	
    <?php
	for($i=1900;$i<=2017;$i++){
		echo "<option lavue=\"$i\">$i</option>";
		}
    ?>
    </select>
    </td> 
    
  <tr>  
    <td>POB</td>
    <td>:</td>
    <td><input name="txt_pob" type="text" /></td>
  </tr>
  <tr>
    <td>Username</td>
    <td>:</td>
    <td><input name="txt_username" type="text" /></td>
  </tr>
  <tr>
    <td>Password</td>
    <td>:</td>
    <td><input name="txt_password" type="password" /></td>
  </tr>
  <tr>
    <td>Confirm password</td>
    <td>:</td>
    <td><input name="txt_confirm" type="password" /></td>
  </tr>
  <tr>
    <td>Disable</td>
    <td>:</td>
    <td><input name="chb_dissable" type="checkbox" value="" /></td>
  </tr>
  <tr>
    <td colspan="3">
    <input name="btn_save" type="submit" value="Save"/>
    <input name="btn_reset" type="reset" value="Cabcel" />
    </td>
  </tr>
</table>
</form>

<a href="frm_show_user.php"> Show user</a>

</body>
</html>