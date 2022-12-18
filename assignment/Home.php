<?php include 'logForm.php'; ?>




    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laptopia</title>
    <link rel="stylesheet" href="home.css">
    <script src="home.js"></script>
    

</head>
<header class="header">
    <div id="hdr">LAPOTPIA</div>
    <div class="links">
    
    <a href="">Account</a>
    <a href="">Help</a>
    <a href="">Cart</a>
    </div>
        
</header>
<body>
    <div class="body1"> 
            <div class="dummy1">
                <h1> <?php 
                if(isset($_SESSION['success'])){
                    echo $_SESSION['success'];
                };
                ?> 
                <br><span class="sppan">
                <?php
                if(isset($_SESSION['name'])){
                    echo '<h1>'.$_SESSION['name'].'</h1>';
                };

                ?>
                </span></h1><br>
                <button id="frstbtn">
                <a href="Log.php?logout='1'">Logout</a>
                </button> </div>
        <div class="image1">
            <img src="image/toshiba.png" alt="no image">
        </div> 
        
        
    </div>
    <h1 class="hdr">AVAILABLE PRODUCTS</h1>
    <div class="imgs">
    <img src="image/1.png" alt="no image">
    <img src="image/2.png" alt="no image">  
    <img src="image/3.png" alt="no image">
    <img src="image/4.png" alt="no image">
    <img src="image/5.png" alt="no image">
    <img src="image/6.png" alt="no image">
    <img src="image/7.png" alt="no image">
    <img src="image/8.png" alt="no image">
    <img src="image/9.png" alt="no image">
    <img src="image/0.png" alt="no image">
    <img src="image/10.png" alt="no image">
    <img src="image/11.png" alt="no image">
    </div>
    <div class="buysell">
        
        <div class="buy"><span>BUY!</span><br>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam modi vel, odio quis possimus dolore harum, hic ipsam quam blanditiis cum reprehenderit quia assumenda doloribus illum aspernatur, recusandae explicabo voluptatibus!
        
        </div>
        <br>
        <div class="sell"><span >SELL!</span><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt iusto unde illo, similique quasi excepturi voluptatem porro, ipsa voluptatum architecto aperiam tempore et quisquam, laudantium quibusdam inventore cumque velit repudiandae.</div>

    </div>
    <h1 class="aboot">ABOUT US</h1>
    <div class="about">
        
        <div>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas hic voluptatum eius similique? Sint ab, quas eius voluptatibus saepe deserunt eveniet voluptatum labore id, totam vitae! Eos ab deserunt minus!
        <br>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores distinctio laboriosam reiciendis cum harum, velit odio repellendus obcaecati minus, nulla fuga? Dicta nesciunt autem impedit commodi odit quibusdam illo reiciendis.
        <br>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. At, minus?
        </div>
        <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure in magni sequi? Rem natus beatae architecto commodi repellendus laborum ipsa?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto maiores vel voluptatibus nisi sequi asperiores quidem est ipsa, eum sapiente tempora nulla minus ipsum aspernatur iste quos dolores numquam error.
        <br>
        <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut ea nam, fugit repellendus quas quibusdam sed animi iusto, mollitia sequi pariatur dolore odio atque nulla officia, dolorem perferendis esse doloremque.
        </div>
        <div>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima, neque atque dolorem magnam officia voluptates enim veritatis laudantium natus nulla fugit iure, labore eligendi eaque explicabo temporibus veniam, porro molestiae nobis? Quisquam temporibus eligendi voluptas rem facilis error! Ad, qui? Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, quasi vero at aut autem earum ab molestiae, nostrum numquam, optio possimus ducimus vitae unde in eius. Alias dolore aliquam in.</div>
        <div class="logo2"><div class="logo3">LAPTOPIA</div></div>

    </div>

    <div class="white">
        Contacts
        <div class="blue">
            <button>Instagram</button>
            <button>Facebook</button>
            <button>Twitter</button>
            <button>Linkedin</button>
            <button>Landline</button>

        </div>
    </div>
    <footer class="fter">
        Shopify@e-commerce.com
        <br>
        <br>
        LAPTOPIA ⓒ Shopify
        <br>
        <br>
        Conditions of Use & SalePrivacy NoticeInterest-Based Ads
        
    </footer>

</body>
</html>
