<?php include 'logForm.php'; ?>




    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laptopia</title>
    <link rel="stylesheet" href="home.css">
    
    

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
                <h1> 
                    <?php 
                if(isset($_SESSION['success'])){
                    echo $_SESSION['success'];
                };
                //print hello
                ?> 
                <br><span class="sppan">
                <?php
                if(isset($_SESSION['name'])){
                    echo '<h1>'.$_SESSION['name'].'</h1>';
                };
                // print session name 
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
    <center>
    <div id="search"> 
        <form method="post" style="margin:auto;"> 
        <input type="text" name="srh" placeholder="search" size="60" required>
        <button name="btn"  style="height:40px; width:50px;border: 1px white solid;
    color:white ;
    background-color: #1f2937;"> Search </button>
        </form>
        </div>
    <form id="right" method="post"> <label> Sort By:</label>
        <select name="sorting" required>
        <option> --Select Option-- </option>
        <option value="low"> Price: Low to High </option>
        <option value="high"> Price: High to Low </option>
        </select>
        <input type="submit" Value="Sort" name="btn2" style="height:40px; width:40px;border: 1px white solid;
    color:white ;
    background-color: #1f2937;">
        </form> <br><br><br>
        </center>
<?php
//retrieve Data
if (isset($_POST['btn'])) {
?>
<center>
    <table style='display:flex; justify-content:center;'>
    <?php
$st=$_POST['srh'];
  $myquery="select * from `products` where `productname` like '%$st%'"; 
$result= mysqli_query($con,$myquery);
//perfotms a query on a db
while ($row=mysqli_fetch_array($result)) {
//returns result in the shape of an array
  ?>
<tr style="text-align: center;display: inline; margin-left:150px;">
<td style="border: thin solid lightgrey; width:250px; "> <pre>
<img style = "width: 300px; height:200px; " src="<?php echo $row['image']; ?>">

<b><?php echo $row['productname'];  ?> </b>
<span style="color: blue; font-weight:bold;"> <?php echo $row['price'];  ?> </span>
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
    <table style='display:flex; justify-content:center;'>
      <?php
  $opt=$_POST['sorting'];
  if ($opt=="low") {
    $qq="select * from `products` order by `price` ASC";
    $re=mysqli_query($con,$qq);
    while ($row=mysqli_fetch_array($re)) {
      ?>
<tr style="text-align: center;display: inline; margin-left:150px;" > 
<td style="border: thin solid lightgrey;width:250px;"> <pre>
<img style = "width: 300px; height:200px;" src="<?php echo $row['image']; ?>">
<b><?php echo $row['productname'];  ?> </b>
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
<tr style="text-align: center;display: inline; margin-left:150px;"> 
<td style="border: thin solid lightgrey;width:250px;"> <pre>
<img style = "width: 300px; height:200px; " src="<?php echo $row['image'];?>">

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
<br>
    
   
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
