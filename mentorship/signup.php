<?php 
include("process.php"); 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <a href="index.html"><img style="width: 5%;" src="image/logo-removebg-preview.png" alt=""></a>
    <marquee behavior="" direction=""><h1>Sterling Mentoring Programmes 2022: MENTEE APPLICATION</h1></marquee>
    
        <div class="regform">
            <!-- form bwgings here -->
            <form action="" method="post">
                <!--Error Message-->
                <?php if($error){ ?><div class="errorWrap">
                    <strong>Error </strong> : <?php echo htmlentities($error);?></div>
                    <?php } ?>
                <!--Success Message-->
                <?php if($msg){ ?><div class="succWrap">
                    <strong>Well Done </strong> : <?php echo htmlentities($msg);?></div>
                    <?php } ?> 
                <fieldset>
                    <label for="sid">Employee ID(000000/JB0000)</label><br>
                    <input type="text" name="sid" id="sid">
                </fieldset>
                <fieldset>
                    <label for="fname">Name (First Name, Surname)</label><br>
                    <input type="text" name="fname" id="fname">
                </fieldset>
                <fieldset>
                    <label for="gender">Gender</label><br>
                    <select name="gender" id="gender">
                        <option value="male">Male</option>
                        <option value="femmale">Female</option>
                        <option value="other">Others</option>
                    </select>
                </fieldset>
                <fieldset>
                    <label for="role">Role</label><br>
                    <select name="role" id="role">
                        <option value="mentee">Mentee</option>
                        <option value="mentor">Mentor</option>
                        <option value="admin">Admin</option>
                    </select>
                </fieldset>  
                <fieldset>
                    <label for="motivation">Briefly tell us why you would like to be Mentored</label><br>
                        <textarea name="motivation" id="motivation" cols="30" rows="3"></textarea>
                </fieldset>
                    
                <fieldset>
                    <label for="self">Describe yourself in one sentence</label><br>
                        <textarea name="self" id="self" cols="30" rows="3"></textarea>
                </fieldset>
                    
                <fieldset>
                    <label for="reasons">What are three (3) of your expectations you have of the mentoring programme?</label><br>
                        <textarea name="reasons" id="reasons" cols="30" rows="3"></textarea>
                </fieldset>
                <fieldset>
                    <label for="focus">Which are your top 3 areas of impact/focus?</label><br>
                        <textarea name="focus" id="focus" cols="30" rows="3"></textarea>
                </fieldset>
        
                <fieldset>
                    <label for="hobby">Hobbies</label><br>
                        <textarea name="hobby" id="hobby" cols="30" rows="3"></textarea>
                </fieldset>
                        
                <fieldset>
                    <label for="moreInformation">Any other information you may like to share</label><br>
                        <textarea name="moreInformation" id="moreInformation" cols="30" rows="3"></textarea>
                </fieldset>
                <fieldset>
                    <label for="password">Password</label><br>
                        <input type="password" id="password" name= "password">
                </fieldset>
                
            <input type="Submit" name="submitbtn" id="submitbtn" value="Submit">
            </form>
        </div>
</body>
</html>