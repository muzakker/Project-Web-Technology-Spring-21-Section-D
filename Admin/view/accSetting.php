<?php
	if(isset($_COOKIE['status'])){
?>

<?php
	$title = "User Profile";
	include('header.php');
    require_once('../../model/userModel.php');
    $username = $_COOKIE['username'];
    $row = getUserByName($username);
?>

<?php include('adminNav.php')?>

<!-- main_content -->
<div style="display: grid; grid-template-columns: 1fr 1fr; padding-top: 0.5em;">

    <?php include('adminSidePanel.php')?>

    <!-- main panel -->
    <div id="main_content" style="background-color: white; width: 1210px; font-family: arial; align-items: center; text-align: center;">
        <!-- title -->
        <span style="font-size: 30px;">
            <b> Account Settings </b>
        </span>
        <hr><br><br>

        <script type="text/javascript" src="../assets/js/accSettingCheck.js"></script>
        
            <form id="accForm" method="post" onsubmit="return validationAccSetting()" action="../controller/accSettingCheck.php" enctype="multipart/form-data">
                <table align="center">
                    <tr>
                        <td>
                            Name
                        </td>
                        <td>
                            <input type="text" name="name" value="<?=$row['fullname']?>"> &nbsp; &nbsp;
                        </td>
                    </tr>
                    
                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            Email
                        </td>
                        <td>
                            <input type="email" name="email" value="<?=$row['email']?>"> 
                            <button title="hint: sample@example.com" style="color: blue; font-size: 14px;"><b>i</b></button>
                        </td>
                    </tr>
                    
                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>
                    
                    <tr>
                        <td colspan="2">
                            <fieldset>
                            <legend>Gender</legend>
                                <input type="radio" name="gender" value="male"> Male
                                <input type="radio" name="gender" value="female"> Female
                                <input type="radio" name="gender" value="other"> Other
                            </fieldset>
                        </td>
                    </tr>
                    
                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>
                    
                    <tr>
                        <?php 
                            $str=$row['dob'];
                            $dob=explode("-", $str);
                            $day=$dob[2];
                            $month=$dob[1];
                            $year=$dob[0]; 
                        ?>
                        <td colspan="2">
                            <fieldset>
                            <legend>Date of Birth</legend>
                            <input type="number" name="dd" style="width:40px;" value="<?=$day?>"> / <input type="number" name="mm" style="width:40px;" value="<?=$month?>">	/ <input type="number" name="yyyy" style="width:60px;" value="<?=$year?>"> <i>(dd/mm/yyyy)</i>
                        </td>
                    </tr>
                    
                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>

					<tr>
						<td colspan="2">
                            <fieldset>
                                <legend>Change Profile Picture</legend>
                                <input type="file" name="picture" value="<?=$row['filename']?>">
                            </fieldset>
                        </td>
                    
                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>                        
                    
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" value="Submit" style="font-size: 20px;">
                            <input type="reset" value="Reset" style="font-size: 20px;">
                        </td>
                    </tr>
                </table>
            </form>

    </div>
</div>

<?php include('footer.html')?>

<?php
	}else{
        header('location: signin.php');
    }
?>