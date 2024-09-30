<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin - FashionFix</title>
    <link rel="stylesheet" href="src/css/style.css">
    <script src="src/js/script.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>
    <div class="header">
            <div class="headerbox">
                <a href="index.php"><img src="src/logo1.png" alt="fashionfix logo" class="logoimg"></a></div>
            <div class="searchbox" style="cursor: pointer;">
                <span class="material-symbols-outlined">
                search
                </span>
                <input type="text" name="searchbox" id="" class="Stext" placeholder="Search Products...">
             </div>
            <div class="headerboxs">
                <span class="material-symbols-outlined shape" >
                    favorite
                </span>
                <span class="material-symbols-outlined shape">
                    shopping_cart
                </span>
                <div class="signin">
                    <a href="signin.php" class="signfont">Sign Up</a>
                </div>
                <div class="login">
                   <span class="material-symbols-outlined" style="font-size: 20px;margin: auto; border: 2px solid white; border-radius: 20px; text-align: center;">
                    person
                    </span> 
                    <a href="login.php" style="margin: auto; font-family: 'Roboto Condensed', sans-serif !important; font-size: 15px; font-weight: 500; padding-right: 3px; color: white; text-align: center;">Log In</a>
                </div>
                
            </div>
        </div>
    
        <nav>
            <ol class="nav">
                <a href="index.php" class="nostyle"><li class="nostyle">HOME</li></a>
                <a href="" class="nostyle" style="display: block;"><li class="nostyle">MEN</li></a>
                <a href="" class="nostyle"><li class="nostyle">WOMEN</li></a>
                <a href="" class="nostyle"><li class="nostyle">KIDS</li></a>
                <a href="" class="nostyle"><li class="nostyle">HOME & LIVING</li></a>
                <a href="" class="nostyle"><li class="nostyle">CONTACT US</li></a>
                <a href="" class="nostyle"><li class="nostyle">NEED HELP?</li></a>
            </ol>
            <div class="navbox" style="display: none;">
                <div class="nostyle">
                    <img src="src/logo.jpg" width="90px" height="200px" style="padding: 20px;" alt="">
                    <ul style="width: 30%;">
                        <li class="innernavCap">Clothing</li>
                        <li class="innernav">T Shirts</li>
                        <li class="innernav">Hoodies</li>
                        <li class="innernav">Casual Pants</li>
                        <li class="innernav">Shorts</li>
                        <li class="innernav">Formal Shirts</li>
                    </ul>
                    <ul style="width: 30%;">
                        <li class="innernavCap">Accessories</li>
                        <li class="innernav">Hats & Caps</li>
                        <li class="innernav">Watch</li>
                        <li class="innernav">Belt</li>
                        <li class="innernav">Wallet</li>
                        <li class="innernav">Footwear</li>
                    </ul>
                </div>
            </div>
        </nav>
<div class="bodysite">
    <div class="signinbox">
        <h2 class="headd">Create Account</h2>
        <p class="signpara">Please fill in the information below to create an account</p>
        
        <p class="signparaa">Name</p>
        <input class="inputbox" type="text" name="" id="">

        <p class="signparaa">E-mail</p>
        <input class="inputbox" type="text" name="" id="">

        <p class="signparaa">Password</p>
        <input class="inputbox" type="password" name="" id="">

        
        <p class="signpara marginpara">
            <input class="checkbox" type="checkbox" name="" id="">By clicking this you agree to our terms & conditions.
        </p>

        <button type="submit" class="submitbtn">Create An Account</button>
        <p class="para" style="text-align: center; margin-top: 20px;">
            Already have an account?
            <a href="login.php" style="color: blue;">Login here</a>
        </p>
    </div>
</div>
    <footer>
        <div class="footerboxes">
            <div class="footerbox">
                <img src="src/logo.jpg" width="50" height="50" alt="">
                <p class="para">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.?
                </p>
                <i style="font-size:24px; color: #000;" class="fa">&#xf16d;</i>
                <i style="font-size:24px; color: #000; margin-left: 10px;" class="fa">&#xf09a;</i>
            </div>
            <div class="footerbox">
                <ul>
                    <li class="footerlinkCAP"><a href="">Men</a></li>
                    <li class="footerlink"><a href="">T Shirt</li>
                    <li class="footerlink"><a href="">Trousers</li>
                    <li class="footerlink"><a href="">Shirt</li>
                </ul>
            </div>
            <div class="footerbox">
                <ul>
                    <li class="footerlinkCAP"><a href="">WOMEN</a></li>
                    <li class="footerlink"><a href="">Tshirt</a></li>
                    <li class="footerlink"><a href="">Jeans</a></li>
                    <li class="footerlink"><a href="">Dresses</a></li>
                </ul>
            </div>
            <div class="footerbox">
                <ul>
                    <li class="footerlinkCAP"><a href="">KIDS</a></li>
                    <li class="footerlink"><a href="">Tshirt</a></li>
                    <li class="footerlink"><a href="">Pants</a></li>
                    <li class="footerlink"><a href="">Toys</a></li>
                </ul>
            </div>
            <div class="footerbox">
                <ul>
                    <li class="footerlinkCAP"><a href="">HOME & LIVING</a></li>
                    <li class="footerlink"><a href="">Decor</a></li>
                    <li class="footerlink"><a href="">Dining</a></li>
                    <li class="footerlink"><a href="">Pillow</a></li>
                </ul>
            </div>
            <div class="footerbox">
                <ul>
                    <li class="footerlinkCAP"><a href="">CONTACT US</a></li>
                    <li class="footerlink">0714983657</li>
                    <li class="footerlink">ADDress</li>
                    <li class="footerlink">fashionfix@gmail.com</li>
                </ul>
            </div>
        </div>

        <hr style="margin: 0px; color: white;">
        <div style="display: flex; background-color: #ffaf49;">
            <div class="width60">Copyright  2024 FashionFix. All rights reserverd.</div>
           <hr>
            <div class="width40"> Terms & Condition | Privacy Policy</div>

        </div>
                
    </footer>
</body>
</html>