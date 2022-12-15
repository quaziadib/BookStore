<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/test.css">
    <script>
    function OnClick(()=>{
        let subMenu = document.getElementByID("subMenu");
    function toggleMenu(){
        subMenu.classList.toggle("open-menu");
    }
    });

</script>

</head>
<body>
    <?php
    <header>
        <a href="#" class="logo">The Book Store</a>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Team</a></li>
            <li><a href="#">Contact</a></li>
            <div class="user_logout_dropdown">
            </div>
        </ul>
        <img src="user_icon.png" class="user_pic" onclick="toggleMenu()">
        <div class="sub_menu_wrap" id="subMenu">
            <div class="sub_menu">
                <div class="user_info">
                    <img src="user_icon.png">
                    <h3>SQL_User_name</h3>
                </div>
                <hr>
                <a href="#" class="sub_menu_link">
                    <img src="profile.png">
                    <p>Edit Profile</p>
                    <span></span>
                </a>
                <a href="#" class="sub_menu_link">
                    <img src="setting.png">
                    <p>Settings & Privacy</p>
                    <span></span>
                </a>
                <a href="#" class="sub_menu_link">
                    <img src="help.png">
                    <p>Help & Support</p>
                    <span></span>
                </a>
                <a href="#" class="sub_menu_link">
                    <img src="logout.png">
                    <p>Logout</p>
                    <span></span>
                </a>
            </div>
        </div>
    </header>
    <section class="banner"></section>
    <div id="main">
        <div class="tile">
            <div class="tile_text_area">
                <p class="book_name">SQL_name</p><br>
                <p class="book_author">SQL_author</p><br>
                <p class="book_publish_date">SQL_publish_date</p><br>
                <p class="book_price">SQL_price(id must be used)</p>
            </div>
            <div class="button_area">
                <button class="buy_book_btn" onclick="OnClick">Buy book</button>
            </div>
        </div>
    </div>
   

</body>
</html>