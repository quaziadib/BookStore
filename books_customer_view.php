<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/books_ad_view.css">
</head>
<body>
    <header>
        <a href="" class="logo">The Book Store</a>
        <ul>
            <li><a href="books_customer_view.php">Books</a></li>
            <li><a href="customer_login_view.php">Logout</a></li>
            </div>
        </ul>

    </header>


    
    <section class="banner"></section>
    <div id="main">

        <div class="tile">
            <div>
                <p style="text-align: center">Buy Book</p>
            </div>
            <div style="text-align: center">
                <form action="buy_book.php" method="post" style="padding-top: 10px;">
                <input type="text" name="book_id" id="" placeholder="Enter Book ID" >
                <input type="text" name="trx_id" id="" placeholder="Enter Trx ID" >
                <input type="text" name="user_id" id="" placeholder="Enter User ID" >
                <br>
                <input type="Submit" name="" value="Submit">
                </form>
            </div>
        </div>

        <br>

        <hr>
        <?php 
        require_once("DBconnect.php");
        $sql = "SELECT * FROM book";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            //here we will print every row that is returned by our query $sql
            while($row = mysqli_fetch_array($result)){
            //here we have to write some HTML code, so we will close php tag
        ?>
        <div class="tile">
            <div class="tile_text_area">
                <p class="book_id">Book ID: <?php echo $row[0]; ?></p><br>
                <p class="book_name">Name: <?php echo $row[1]; ?></p><br>
                <p class="book_publish_date">Published Year: <?php echo $row[2]; ?></p><br>
                <p class="book_price">Price: <?php echo $row[3]; ?></p>
            </div>
        </div>
        
        <?php 
            }					
        }
        ?>

    </div>

    
   
<script>
    let subMenu = document.getElementByID("subMenu");
    function toggleMenu(){
        subMenu.classList.toggle("open-menu");
    }
</script>

</body>
</html>