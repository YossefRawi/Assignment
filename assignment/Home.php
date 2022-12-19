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
    <div id="search"> 
        <form method="post" style="margin:auto;"> 
        <input type="text" name="srh" placeholder="search" size="60" required>
        <button name="btn" style="transition:none;"> Go </button>
        </form>
        </div>
    <form id="right" method="post"> <label> Sort By:</label>
        <select name="sorting" required>
        <option> --Select Option-- </option>
        <option value="low"> Price: Low to High </option>
        <option value="high"> Price: High to Low </option>
        </select>
        <input type="submit" Value="Sort_Your_Products" name="btn2">
        </form> <br><br><br><br>
<?php
//retrieve Data
if (isset($_POST['btn'])) {
?>
<center>
    <table>
    <?php
$st=$_POST['srh'];
  $myquery="select * from `products` where `productname` like '%$st%'"; 
$result= mysqli_query($con,$myquery);
while ($row=mysqli_fetch_array($result)) {
  ?>
 <tr style="text-align: center;display: inline;"> 
<td style="border: thin solid lightgrey;width:250px;"> <pre>
<img src="<?php echo $row['image']; ?>">

<b><?php echo $row['productname'];  ?> </b>
<span style="color: blue; font-weight:bold;"><?php echo $row['price'];  ?> </span>
</pre>
 </td>


  </tr>
<?php
}

}
?>
</table></center>

<?php
//sort_Data
if (isset($_POST['btn2'])) {
  ?>
  <center>
    <table>
      <?php
  $opt=$_POST['sorting'];
  if ($opt=="low") {
    $qq="select * from `product` order by `price` ASC";
    $re=mysqli_query($con,$qq);
    while ($row=mysqli_fetch_array($re)) {
      ?>
<tr style="text-align: center;display: inline;"> 
<td style="border: thin solid lightgrey;width:250px;"> <pre>
<img src="<?php echo $row['image']; ?>">
<b><?php echo $row['name'];  ?> </b>
<span style="color: blue; font-weight:bold;"><?php echo $row['price'];  ?> </span>
</pre>
 </td>


  </tr>

      <?php
    }
  }else{
$qq="SELECT * FROM `products` order by `price` DESC";
    $re=mysqli_query($con,$qq);
    while ($row=mysqli_fetch_array($re)) {
      ?>
<tr style="text-align: center;display: inline;"> 
<td style="border: thin solid lightgrey;width:250px;"> <pre>
<img class="lapimg" src="<?php echo $row['image']; ?>">

<b><?php echo $row['productname'];  ?> </b>
<span style="color: blue; font-weight:bold;"><?php echo $row['price'];  ?> </span>

</pre>
 </td>


  </tr>
<?php
  }
}
}
?>
</table></center>
    
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
