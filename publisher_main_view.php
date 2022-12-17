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
            <li><a href="author_req_page.php">Author</a></li>
            <div class="user_logout_dropdown">
            </div>
        </ul>
        <img src="img/user_icon.png" class="user_pic" onclick="toggleMenu()">
        <div class="sub_menu_wrap" id="subMenu">
            <div class="sub_menu">
                <div class="user_info">
                    <img src="img/user_icon.png">
                    <h3>SQL_User_name</h3>
                </div>
                <hr>
                <a href="#" class="sub_menu_link">
                    <img src="img/setting.png">
                    <p>Settings & Privacy</p>
                    <span></span>
                </a>
                <a href="#" class="sub_menu_link">
                    <img src="img/logout.png">
                    <p>Logout</p>
                    <span></span>
                </a>
            </div>
        </div>
    </header>



    <section class="banner"></section>

        </div>

        <hr>

        <?php 
        require_once("DBconnect.php");
        $sql = "SELECT * FROM Send_Manuscript;";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            //here we will print every row that is returned by our query $sql
            while($row = mysqli_fetch_array($result)){
            //here we have to write some HTML code, so we will close php tag
        ?>
        <div class="tile">
            <div class="tile_text_area">
                    <p class="pub_id">Publisher ID: <?php echo $row[0]; ?></p><br>
                    <p class="author_id">Author ID: <?php echo $row[1]; ?></p><br>
                    
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