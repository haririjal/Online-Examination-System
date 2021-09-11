<div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div>Change Password</div>
                    </div>
                </div>
            </div>  

<!--


          <?php

$_SESSION["admin_id"] ="1";
$conn = mysqli_connect("localhost", "root","") or die("Connection Error: " . mysqli_error($conn));
$db = mysqli_select_db($conn,"cee_db") or die("Connection Error: " . mysqli_error($conn));
if (count($_POST) > 0) {
    

    $q= "SELECT * from admin_acc WHERE admin_id='" . $_SESSION["admin_id"] . "'";
    $result = mysqli_query($conn,$q) or die(mysqli_error($conn));
    $arr = mysqli_fetch_assoc($result);


    $arr = mysqli_fetch_assoc($result);
    if ($_POST["currentPassword"] == $arr["admin_pass"]) {
        mysqli_query($conn, "UPDATE admin_acc set admin_pass='" . $_POST["newPassword"] . "' WHERE admin_id='" . $_SESSION["admin_id"] . "'");
        $message = "Password Changed";} 
    else
        $message = "Current Password is not correct";
}
?>

<title>Change Password</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
<script>
function validatePassword() {
var currentPassword,newPassword,confirmPassword,output = true;

currentPassword = document.frmChange.currentPassword;
newPassword = document.frmChange.newPassword;
confirmPassword = document.frmChange.confirmPassword;

if(!currentPassword.value) {
    currentPassword.focus();
    document.getElementById("currentPassword").innerHTML = "required";
    output = false;
}
else if(!newPassword.value) {
    newPassword.focus();
    document.getElementById("newPassword").innerHTML = "required";
    output = false;
}
else if(!confirmPassword.value) {
    confirmPassword.focus();
    document.getElementById("confirmPassword").innerHTML = "required";
    output = false;
}
if(newPassword.value != confirmPassword.value) {
    newPassword.value="";
    confirmPassword.value="";
    newPassword.focus();
    document.getElementById("confirmPassword").innerHTML = "not same";
    output = false;
}   
return output;
}
</script>
    <form name="frmChange" method="post" action=""
        onSubmit="return validatePassword()">
        <div style="width: 500px;">
            <div class="message"><?php if(isset($message)) { echo $message; } ?></div>
            <table border="0" cellpadding="10" cellspacing="0"
                width="500" align="center" class="tblSaveForm">
                <tr class="tableheader">
                    <td colspan="2">Change Password</td>
                </tr>
                <tr>
                    <td width="40%"><label>Current Password</label></td>
                    <td width="60%"><input type="password"
                        name="currentPassword" class="txtField" /><span
                        id="currentPassword" class="required"></span></td>
                </tr>
                <tr>
                    <td><label>New Password</label></td>
                    <td><input type="password" name="newPassword"
                        class="txtField" /><span id="newPassword"
                        class="required"></span></td>
                </tr>
                <td><label>Confirm Password</label></td>
                <td><input type="password" name="confirmPassword"
                    class="txtField" /><span id="confirmPassword"
                    class="required"></span></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="submit"
                        value="Submit" class="btnSubmit"></td>
                </tr>
            </table>
        </div>
    </form>
-->
               
               

        </div>
</div>             



