<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/customer_ad_view.css">
</head>
<body>
    <header>
        <a href="" class="logo">The Book Store</a>
        <ul>
            <li><a href="books_ad_view.html">Books</a></li>
            <li><a href="admin_ad_view.html">Admin</a></li>
            <li><a href="author_ad_view.html">Author</a></li>
            <li><a href="publisher_ad_view.html">Publisher</a></li>
            <li><a href="customer_ad_view.html">Customer</a></li>
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
    <div id="main">
        <div class="button_area">
            <button class="btn"><a href="#">Add customer</a></button>
        </div>
        <div class="button_area">
            <button class="btn"><a href="#">Modify customer info</a></button>
        </div>
        <div class="tile">
            <div class="tile_text_area">
                <p class="book_id">SQL_book_id</p><br>
                <p class="book_name">SQL_name</p><br>
                <p class="book_author">SQL_author</p><br>
                <p class="book_publish_date">SQL_publish_date</p><br>
                <p class="book_price">SQL_price(id must be used)</p>
            </div>
            <div class="button_area">
                <button class="remove_customer_btn" onclick="">Remove Customer</button>
            </div>
        </div>
    </div>
   
<script>
    let subMenu = document.getElementByID("subMenu");
    function toggleMenu(){
        subMenu.classList.toggle("open-menu");
    }
</script>

</body>
</html>