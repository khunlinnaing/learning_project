
<?php require('../../ajax/category/getData.php'); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="miniProject.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <?php require './navBar.php'; ?>
    <section class="homePanel" id="home">
        <img src="../../static/image/pizzaImage.jpeg" class="img-fluid object-fit" alt="">
        <div class="container">
        
        <div class="para my-5">
                <h1 >Trusted Delivery For You</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. </p>
                
                
            </div>
        </div>
    </section>
<section class="advertisePanel" id="sale">
    <div class="para">
        <h1>Why Choose Us?</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus quos illo cum, repellat nemo officiis, repudiandae quo obcaecati suscipit fugiat, eaque iure ab in dignissimos excepturi sequi aliquam blanditiis dicta.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus quos illo cum, repellat nemo officiis, repudiandae quo obcaecati suscipit fugiat, eaque iure ab in dignissimos excepturi sequi aliquam blanditiis dicta.
            <br><br>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit dignissimos laborum mollitia quia aliquid aut facilis perspiciatis voluptate pariatur quod nulla, eum veniam velit obcaecati est alias inventore nesciunt totam?
            <br><br>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit dignissimos laborum mollitia quia aliquid aut facilis perspiciatis voluptate pariatur quod nulla, eum veniam velit obcaecati est alias inventore nesciunt totam?
        </p>
        <a href="./main.php"><button class="signUp">Browse</button></a>
    </div>
    <div class="Chart">
        <div class="insurance">
            <h3>01. Saves Time</h3>
            <p> Using a delivery service can save you a tremendous amount of time. Instead of having an employee drive an item or report across town, an experienced delivery service can do it for you.<br><br>
            </p>
            <span>Read More<i class="fa fa-arrow-right" aria-hidden="true"></i>

            </span>
        </div>
        <div class="insurance">
            <i class="fa-solid fa-tags"></i>
            <h3>02.Convenience</h3>
            <p>Convenience is the main factor that people are moving to online food ordering platforms. All you need to do is download the app, scroll through the app to find your favorite dish, and tap to order. Get your favorite food at your doorstep without working in the kitchen for long hours.<br><br> 
            </p>
            <span>Read More<i class="fa fa-arrow-right" aria-hidden="true"></i>

            </span>
            <a href="#"></a>
        </div>
        <div class="insurance">
            <i class="fa-solid fa-hand-holding-dollar"></i>

            <h3>03.Reliable</h3>
            <p> Reputable package delivery services offer highly reliable service. This means they’ll pick the package up and deliver it on time. Some even guarantee same-day delivery. Courier services can offer timely services because they track their packages from the time they send them to the second they’re delivered.<br><br> 
            </p>
            <span>Read More<i class="fa fa-arrow-right" aria-hidden="true"></i>

            </span>
            <a href="#"></a>
        </div>
        <div class="insurance">
            <i class="fa-regular fa-square-check"></i>
            <h3>04. Customized Service</h3>
            <p> Each time you order, you can try different menu and you can cancel that you don't want to. You order over the phone as well . Also, there are pizza lovers who love to customize their own pizza. Giving options for vegetables, sauces, cheese, etc helps in sales as this is not possible over the phone.<br><br> 
            </p>
            <span>Read More<i class="fa fa-arrow-right" aria-hidden="true"></i>

            </span>
            <a href="#"></a>
        </div>
        
    </div>
</section>
<section class="content">
    <h1>We Help You To Make Better Deals</h1>
    <p>It has survived not only five centuries,but also  the leap into electronic typesetting,remaining essentially unchanged.</p>
</section>


<section class="clientReview" id="client">
    <div class="reviewTop">
    <h1>Clients Review</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas tempora adipisci consequatur distinctio rerum suscipit, nemo similique expedita dolores enim tenetur placeat earum ipsam excepturi quae, voluptatum ratione provident voluptatibus?</p>
    </div>
    <div class="reviewBottom">
        <div class="reviewCard">
            <div class="userReview">
                <img src="../../static/image/pml.jpg" alt="">
                <div class="users">
                    <h3 class="name">PML</h3>
                    <span1>Pizza Restaurant owner</span1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus molestiae dicta velit quisquam ducimus sit vel deleniti iste eveniet animi amet culpa minima, in magnam alias facilis? Iusto, culpa impedit!</p>
                    <span>Read More</span>
                </div>
            </div>
            
        </div>
    </div>
</section>
<section class="subscribePanel "  id="subscribe">
    
    <h1>Subscribe For Latest News</h1>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae, magnam, et velit vitae consectetur recusandae ipsum voluptates exercitationem doloremque, laboriosam aliquam ab reprehenderit rerum voluptatibus. Sapiente asperiores nam delectus similique!</p>
    <form class="subscribe">
        <input type="email" placeholder="Enter your Email Address" class="email">
        <button class="signUp">Subscribe</button>
    </form>
</section>
<section class="contactPanel" id="contact">
    <div class="contact">
       <div> <h1><i class="bi bi-boxes me-1"></i>POS Delivery</h1></div>
       <div>
        <h3>For Contact</h3>
            <span>Address :497 Everfreen Rd.Roseville,CA 95673</span>
            <span>Phone:+959 123 456 789</span>
            <span>Email:adobexd@mail.com</span>
       </div>
       <div class="icon">
        <h3>Flow Us On:</h3>
        <i class='bx bxl-facebook-circle'></i>
        <i class='bx bxl-instagram'></i>
        <i class='bx bxl-twitter'></i>

        <i class='bx bxl-tiktok'></i>

       </div>
    </div>
    <div class="secondContact">
    
    <div class="pages">
        <h2>Pages</h2>
        <ul>
            <li><a href="#home"><i class='bx bx-chevron-right'></i>
Home</a></li>
            <li><a href="#client"><i class='bx bx-chevron-right'></i>
About-Us</a></li>
            <li><a href="./main.php"><i class='bx bx-chevron-right'></i>
Our app</a></li>
            <li><a href="#sale"><i class='bx bx-chevron-right'></i>
Categories</a></li>
            <li><a href="#contact"><i class='bx bx-chevron-right'></i>
Contact Us</a></li>
            
        </ul>
    </div>
    <div class="outher">
        <h2>Outher Links</h2>
        <ul>
            <li><a href="#client"><i class='bx bx-chevron-right'></i>
Customer review</a></li>
            <li><a href="#"><i class='bx bx-chevron-right'></i>
Blogs</a></li>
            <li><a href="#"><i class='bx bx-chevron-right'></i>
Favourite</a></li>
            <li><a href="#"><i class='bx bx-chevron-right'></i>
News and Articles</a></li>
            <li><a href="#client"><i class='bx bx-chevron-right'></i>
Support team</a></li>
            <li><a href="#"><i class='bx bx-chevron-right'></i>
Events</a></li>
        </ul>
    </div>
</div>
</section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>

