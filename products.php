<?php
$products=[
    ["Mini Alarm Clock","6000ks","images/minialarmclock.jpg"],
    ["Healthy Shop Lipstick","15500ks","images/lipstick.jpg"],
    ["ORICO Laptop stand","40000ks","images/laptopstand.jpg"],
    ["MaMa Yum Yum","18000ks","images/mama.jpg"],
    ["BWin shower cream","7800ks","images/showercream.jpg"],
    ["mini washing machine","59400ks","images/washingmachine.jpg"],
    ["Kee's natural cold wax","8500ks","images/wax.jpg"],
    ["2 in 1 box","13500ks","images/2in1box.jpg"],
    ["Adjustable Tripod","16000ks","images/adjustabletripod.jpg"],
    ["Elastic Hair Ties","4500ks","images/elastichairties.jpg"],
    ["Baby Bright body peeling gel & scrub","6500ks","images/peelingjel.jpg"],
    ["LEBELAGE Moisture Aloe Suncreen","11900ks","images/suncream.jpg"],
    ["Lara leather tote bag","15000ks","images/totebag.jpg"],
    ["Mask Bowl Set","2400ks","images/maskbowlset.jpg"],
    ["Mistine Bulgarian 500ml","10500ks","images/mistine.jpg"],
    ["Solar Table Lamp","25000ks","images/solarlamp.jpg"],
    ["Polar Baby Pants","4000ks","images/polarbabypants.jpg"],
];
function showProducts($products){
    $output="";
    foreach($products as $product){
        $output.="<div class='col-md-3 p-2'>";
        $output.="<div class='card ' style='width:18rem;'>";
        $output.= "<img src= '".$product[2]."' class='card-img-top' width='50%' height='50%'>";
        $output.="<div class='card-body'>";
        $output.="<h5 class='card-title'>".$product[0]."</h5>";
        $output.="<p class='card-text text-danger'>".$product[1]."</p>";
        $output.="</div>";
        $output.= "</div>";
        $output.="</div>";
    }
    echo $output;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .card-img-top{
            height: 250px;
            width: 100%;
            object-fit: cover;
        }
        .card-text{
            height: 50px;
            overflow: hidden; 
            text-overflow: ellipsis; 
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php
              showProducts($products);
            ?>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>