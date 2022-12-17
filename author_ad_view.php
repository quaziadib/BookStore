<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/admin_ad_view.css">
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
        </ul>
    </header>



    <section class="banner"></section>
    <div id="main">

    <div class="tile">
            <div>
                <p style="text-align: center">Delete Author</p>
            </div>
            <div style="text-align: center">
                <form action="delete_author.php" method="post" style="padding-top: 10px;">
                <input type="text" name="author_id" id="" placeholder="Enter Author ID" >
                <br>
                <input type="Submit" name="" value="Submit">
                </form>
            </div>
        </div>

        <br>

        <div class="tile">
            <div>
                <p style="text-align: center">Add Author</p>
            </div>
            <div style="text-align: center">
                <form action="add_author.php" method="post" style="padding-top: 10px;">
                <input type="text" name="author_id" id="" placeholder="Enter Author ID" >
                <input type="text" name="Wname" id="" placeholder="Enter Name" >
                <input type="text" name="Wemail" id="" placeholder="Enter Email" >
                <input type="password" name="Wpassword" id="" placeholder="Enter Password" >
                <br>
                <br>
                <input type="Submit" name="" value="Submit">
                </form>
            </div>
        </div>

        <br>

        <div class="tile">
            <div>
                <p style="text-align: center">Modify Author</p>
            </div>
            <div style="text-align: center">
                <form action="modify_author.php" method="post" style="padding-top: 10px;">
                <input type="text" name="author_id" id="" placeholder="Enter Author ID" >
                <input type="text" name="Wname" id="" placeholder="Enter Name" >
                <input type="text" name="Wemail" id="" placeholder="Enter Email" >
                <input type="password" name="Wpassword" id="" placeholder="Enter Password" >
                <br>
                <br>
                <input type="Submit" name="" value="Submit">
                </form>
            </div>
        </div>

        <hr>

        <?php 
        require_once("DBconnect.php");
        $sql = "SELECT * FROM author";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            //here we will print every row that is returned by our query $sql
            while($row = mysqli_fetch_array($result)){
            //here we have to write some HTML code, so we will close php tag
        ?>
        <div class="tile">
            <div class="tile_text_area">
            <p class="author_id">Author ID: <?php echo $row[0]; ?></p><br>
                    <p class="Wname">Name: <?php echo $row[1]; ?></p><br>
                    <p class="Wemail">Email: <?php echo $row[2]; ?></p><br>
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