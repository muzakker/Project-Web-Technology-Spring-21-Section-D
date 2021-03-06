    

    <?php require_once('../../model/userModel.php'); 
    $username = $_COOKIE['username'];
    $row = getUserByName($username); ?>

    
<!-- side panel -->
    <div id="side_panel" style="width: 300px; background-color:#caefff; font-family:Arial;" align="center">
        <h2><?php echo $_COOKIE['username']?></h2>
        <a href="accSetting.php">
            <img src="../../Admin/assets/images/<?php echo $row['filename'];?>" height="150px;" width="150px" alt="Profile Photo" style="border-radius:50%">
        </a>
        <br> <br> <br>

        <!-- Dashboard -->
        <a href="userDashboard.php" style="text-decoration: none;">
            <span style="font-size:25px;">Dashboard</span>
        </a>

        <hr><br>
        <!-- Book request-->
        <a href="requestForBook.php" style="text-decoration: none;">
            <span style="font-size:25px">Request For a Book</span>
        </a>

        <hr><br>

        <!-- Return -->
        <a href="returnBook.php" style="text-decoration: none;">
            <span style="font-size:25px">Return Book</span>
        </a>

        <hr><br>
        <!-- Details -->
        <a href="books.php" style="text-decoration: none;">
            <span style="font-size:25px">Book list</span>
        </a>

        <hr><br>
        <!-- Review  -->
        <a href="review.php" style="text-decoration: none;">
            <span style="font-size:25px">Review Book</span>
        </a>

        <hr><br>
        <!-- Payment  -->
        <a href="membershipPayment.php" style="text-decoration: none;">
            <span style="font-size:25px">Premium Membership</span>
        </a>

        <hr><br>
    </div>