<?php
include("conn.php");

$a="INSERT INTO contacts(contact_name,contact_phone,contact_email,contact_address,contact_gender,contact_relationship,contact_dob) values";
$b="('$_POST[name]','$_POST[phone_num]','$_POST[email_address]','$_POST[home_address]','$_POST[gender]','$_POST[relationship]','$_POST[dob]')";
$sql=$a.$b;

if(!mysqli_query($con,$sql))
{
die( "error: ". mysql_error($con));

}

//echo "<script>alert('1 record added!');window.location.href='newprofile.html'";"</script>"
echo "<script type=\"text/javascript\">alert('1 record added!');window.location.href='newprofile.html';</script>";
echo "submitted";
mysqli_close($con);

?>
