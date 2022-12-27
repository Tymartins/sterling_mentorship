<?php include("loginProcess.php"); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN STERLING MENTORING PROGRAMME</title>
    <link rel="stylesheet" href="css/style.css">
</head>


<body>
<table width="900" border="0" align="center" cellpadding="0" cellspacing="1" class="graybox">
 <tr> 
  <td valign="top"> <table width="100%" border="0" cellspacing="0" cellpadding="20">
    <tr> 
     <td class="contentArea"> <form method="post" name="frmLogin" id="frmLogin">
       <p>&nbsp;</p>
       <table width="350" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#77777;" class="entryTable">
        <tr id="entryTableHeader"> 
         <td>:: User Login ::</td>
        </tr>
        <tr> 
         <td class="contentArea"> 
		 <!-- <div class="errorMessage" align="center"><?php echo $errorMessage; ?></div> -->

		  <table width="100%" border="0" cellpadding="2" cellspacing="1" class="text">
           <tr align="center"> 
            <td colspan="3">&nbsp;</td>
           </tr>
           <tr class="text"> 
            <td width="100" align="right">Staff Id</td>
            <td width="10" align="center">:</td>
            <td><input name="sid" type="text" class="box" id="sid"  size="30" maxlength="40"></td>
           </tr>
           <tr>
             <td align="right">Password</td>
             <td align="center">:</td>
             <td><input name="pword" type="password" class="box" id="pword" size="30" maxlength="40"></td>
           </tr>
           <tr> 
            <td width="100" align="right">Role </td>
            <td width="10" align="center">:</td>
            <td><label>
              <select name="role" class="box">
			  <option >&nbsp;&nbsp;--- Select Role --- &nbsp;</option>
			 <!--  <option value="admin">&nbsp;&nbsp; Administrator &nbsp;</option> -->
			  <option value="customer">&nbsp;&nbsp; Mentee &nbsp;</option>
			  <option value="employee">&nbsp;&nbsp; Mentor &nbsp;</option>
              </select>
              </label></td>
           </tr>
           <tr>
             <td colspan="2">&nbsp;</td>
             <td>&nbsp;</td>
           </tr>
           <tr>
             <td colspan="2">&nbsp;</td>
             <td><div align="right">New Member <a href="signup.php">Register Here</a> </div></td>
           </tr>
           <tr>
             <td colspan="3"><div align="right"><a href="forget-password.php">Forget Password</a> </div></td>
             </tr>
           <tr> 
            <td colspan="2">&nbsp;</td>
            <td><input name="submit" type="submit" id="submit" value=" Login Now " style="font-size:14px;color:#0066FF;padding:5px 8px;"></td>
           </tr>
          </table></td>
        </tr>
       </table>
       <p>&nbsp;</p>
      </form></td>
    </tr>
   </table></td>
 </tr>
</table>






   <!--  <form class="user-form" action="" method="post">
    <h1>Welcome Back</h1>
    <p class="username">
        <label for="sid">staff Id</label>
       <input type="text" name="sid" id="sid">
    </p>
    <p class="password">
        <label for="password">Password </label>
        <input type="password" name="password" id="password">
    </p>
        <input type="Submit" id="submit" value="submit">
        <br>
        <a class="nav-bar" href="signup.php">Don't have a profile? Register</a>
    </form>
</section>    --> 
    
    
</body>
</html>