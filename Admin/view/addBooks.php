<?php
	if(isset($_COOKIE['status'])){
?>

<?php
	$title = "Add Books";
	include('header.php');
?>

<?php include('adminNav.php')?>

<!-- main_content -->
<div style="display: grid; grid-template-columns: 1fr 1fr; padding-top: 0.5em;">

    <?php include('adminSidePanel.php')?>

    <!-- main panel -->
    <div id="main_content" style="background-color: white; width: 1210px; font-family: arial; align-items: center; text-align: center;">
        <!-- title -->
        <span style="font-size: 30px;">
            <b> Add New Books </b>
        </span>
        <hr><br><br><br>

        <form method="POST" action="../controller/addBookCheck.php">
            <table align="center">
                <tr>
                    <td>
                        Book Name
                    </td>
                    <td>
                        <input type="text" name="bookname" value="">
                    </td>
                </tr>
                
                <tr>
                    <td colspan="3">
                        <hr><br>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        Select Category
                    </td>
                    <td>
                        <select name="category" id="category">
                            <option value="" selected>not selected</option>
                            <option value="physics">Physics</option>
                            <option value="chemistry">Chemistry</option>
                            <option value="biology">Biology</option>
                            <option value="self_help">Self Help</option>
                            <option value="electrical_engineering">Electrical Engineering</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td colspan="3">
                        <hr><br>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        Author Name
                    </td>
                    <td><input type="text" name="author" value=""></td>
                </tr>
                
                <tr>
                    <td colspan="3">
                        <hr><br>
                    </td>
                </tr>

                <tr>
                    <td>
                        Price
                    </td>
                    <td><input type="number" name="price" value=""></td>
                </tr>

                <tr>
                    <td colspan="3">
                        <hr><br>
                    </td>
                </tr>
                
                <tr>
                    <td colspan="3">
                        <input type="submit" name="submit" value="Add" style="font-size: 20px;">
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