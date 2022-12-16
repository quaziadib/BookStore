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
            <li><a href="books_ad_view.php">Books</a></li>
            <li><a href="admin_ad_view.php">Admin</a></li>
            <li><a href="author_ad_view.php">Author</a></li>
            <li><a href="publisher_ad_view.php">Publisher</a></li>
            <li><a href="customer_ad_view.php">Customer</a></li>
            <li><a href="admin_login_view.php">Logout</a></li>
            </div>
        </ul>

    </header>


    
    <section class="banner"></section>
    <div id="main">

        <div class="tile">
            <div>
                <p style="text-align: center">Delete Book</p>
            </div>
            <div style="text-align: center">
                <form action="delete_book.php" method="post" style="padding-top: 10px;">
                <input type="text" name="book_id" id="" placeholder="Enter Book ID" >
                <br>
                <input type="Submit" name="" value="Submit">
                </form>
            </div>
        </div>

        <br>

        <div class="tile">
            <div>
                <p style="text-align: center">Add Book</p>
            </div>
            <div style="text-align: center">
                <form action="add_book.php" method="post" style="padding-top: 10px;">
                <input type="text" name="book_id" id="" placeholder="Enter Book ID" >
                <input type="text" name="Bname" id="" placeholder="Enter Book Name" >
                <input type="text" name="Bpub_year" id="" placeholder="Enter Publish" >
                <input type="text" name="Bprice" id="" placeholder="Enter Price" >
                <br>
                <br>
                <input type="Submit" name="" value="Submit">
                </form>
            </div>
        </div>

        <br>

        <div class="tile">
            <div class="sub_menu_link">
                <p style="text-align: center">Modify Book</p>
            </div>
            <div style="text-align: center">
                <form action="modify_book.php" method="post" style="padding-top: 10px;">
                <input type="text" name="book_id" id="" placeholder="Enter Book ID" >
                <input type="text" name="Bname" id="" placeholder="Enter Book Name" >
                <input type="text" name="Bpub_year" id="" placeholder="Enter Publish" >
                <input type="text" name="Bprice" id="" placeholder="Enter Price" >
                <input type="text" name="pub_id" id="" placeholder="Enter Publishers ID" >
                <input type="text" name="author_id" id="" placeholder="Enter Author ID" >
                <br>
                <br>
                <input type="Submit" name="" value="Submit">
                </form>
                <span></span>
            </div>
        </div>

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
                <p class="book_id"><?php echo $row[0]; ?></p><br>
                <p class="book_name"><?php echo $row[1]; ?></p><br>
                <p class="book_author">SQL_author</p><br>
                <p class="book_publish_date"><?php echo $row[2]; ?></p><br>
                <p class="book_price"><?php echo $row[3]; ?></p>
            </div>
            <div class="button_area">
                <button class="modify"><a href="#">Modify book info</a></button>
            </div>
            <div class="button_area">
                <button class="remove_book_btn" name = <?php $row[0] ?> onclick="">Remove book</button>
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