<?php
    	
	include_once 'config/config.php';
	//var_dump($_POST);
	

 
  $employeeid=$_POST['employeeid'];
   
  $employeename=$_POST['employeename'];

$email=$_POST['email'];
$role=$_POST['role'];

$currentaddress=$_POST['currentaddress'];
$permanentaddress=$_POST['permanentaddress'];
$mobilenumber=$_POST['mobilenumber'];

$group1=$_POST['group1'];

$dob=$_POST['dob'];
$qualification=$_POST['qualification'];


$joiningdate=$_POST['joiningdate'];
$registrationdate=$_POST['registrationdate'];
$departmentid=$_POST['departmentid'];
$branchid=$_POST['branchid'];
$designationid=$_POST['designationid'];
$shiftid=$_POST['shiftid'];
$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];
$bankaccountnumber=$_POST['bankaccountnumber'];
$pannumber=$_POST['pannumber'];
$city=$_POST['city'];
$basicsalary=$_POST['basicsalary'];
$createddate=$_POST['createddate'];
$modifieddate=$_POST['modifieddate'];
$status=$_POST['status'];
//$img=addslashes($_POST['img']);
//$pt_amt=0;
if($basicsalary<=5999)
{
  $pt_amt=0;
}
else if($basicsalary>=6000 && $basicsalary<=8999)
{
  $pt_amt=80;
}
else if($basicsalary>=9000 && $basicsalary<=11999)
{
  $pt_amt=150;
}
else if($basicsalary>=12000)
{
  $pt_amt=200;
}
$q="update employee set Employee_id='$employeeid',Employee_name='$employeename',Current_address='$currentaddress',Permanent_address='$permanentaddress',Mobile_number='$mobilenumber',Gender='$group1',Email='$email',DOB='$dob',Qualification='$qualification',Joining_date='$joiningdate',Registration_date='$registrationdate',Department_id='$departmentid',Branch_id='$branchid',Designation_id='$designationid',Shift_id='$shiftid',Password='$password',Bank_account_number='$bankaccountnumber',PAN_number='$pannumber',Created_date='$createddate',Modified_date='$modifieddate',Status='$status',Confirm_password='$confirmpassword',Roles='$role',city='$city',Basic_salary='$basicsalary',PT='$pt_amt' where Employee_id='$employeeid'";





$status = mysqli_query($connection_obj,$q);
    // if(mysqli_affected_rows($db_obj) > 0)
      if(mysqli_affected_rows($connection_obj) > 0)
  
  {
      $employee_data = mysqli_fetch_assoc($status);
    //  echo $employee_data;

  }
  else
  {
echo "insert error".mysqli_error($connection_obj);
   // header("location:./500.php");
  }


  $status = mysqli_query($connection_obj,$q);
  if($status)
  {
    
    header("location:./employee_view.php");
  }
  else
  {
    echo "insert error".mysqli_error($connection_obj);
    //header("location:./500.php");
  }
 

 

            

?>
