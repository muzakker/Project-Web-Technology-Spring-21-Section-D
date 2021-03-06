<?php
	if(isset($_COOKIE['status'])){
?>

<?php
	$title = "Inventory";
	include('header.php');
    require_once('../../model/bookModel.php');
    $bookList = getAllBook();
?>

<?php include('adminNav.php')?>

<!-- main_content -->
<div style="display: grid; grid-template-columns: 1fr 1fr; padding-top: 0.5em;">

    <?php include('adminSidePanel.php')?>

    <!-- main panel -->
    <div id="main_content" style="background-color: white; width: 1210px; font-family: arial; align-items: center; text-align: center;">
        <!-- title -->
        <span style="font-size: 30px;">
            <b> Manage Inventory </b>
        </span>
        <hr><br>

        <!-- search box -->
        <input type="text" placeholder="Search by book, author, ..." style="font-size: 20px;">
        <button type="submit"><i class="fa fa-search" style="font-size: 20px;"></i></button>
        <hr><br><br>
        
        <!-- table for book list -->
        <table border="1" align="center">
            <caption style="font-size: 30px;">Listed Books</caption>
            
            <tr>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Book ID </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Book Name </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Category </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Author </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Published Date </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Price (taka) </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> </th>
            </tr>

            <?php for($i = 0; $i < count($bookList); $i++){ ?>
            <tr>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> <?=$bookList[$i]['bookID']?> </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> <?=$bookList[$i]['bookname']?> </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> <?=$bookList[$i]['category']?> </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> <?=$bookList[$i]['author']?> </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> <?=$bookList[$i]['published']?> </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> <?=$bookList[$i]['price']?> </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;">
                    <a href="editBook.php?bookID=<?=$bookList[$i]['bookID']?>"> Edit</a> | 
				    <a href="../controller/removeBook.php?bookID=<?=$bookList[$i]['bookID']?>"> Remove </a>
                </td>
            </tr>
            <?php } ?>

        </table>
        <br>

        <!-- add book -->
        <a href="addBooks.php" style="text-decoration: none;">
            <span style="font-size: 20px; background-color: #caefff; border: none; color: black; padding: 10px 10px; border-radius: 10px;"><b> Add Books </b></span>
        </a>

    </div>
</div>

<?php include('footer.html')?>

<?php
	}else{
		header('location: signin.php');
	}
?>
