<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: signup.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>CIBO</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="meat.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <link rel="icon" type="image/x-icon" href="C:\Users\91944\Pictures\vasu yadav.png">
    <link rel="stylesheet" href="C:\xampp\htdocs\project\meat 2.css"/>
    <script src="C:\xampp\htdocs\project\meat2.jsx"class="utf-8"></script>
    
</head>
<body>
<header>
    <a href="#" class="logo"><i class="fas fa-utensils">cibo</i></a>
    <nav class="navbar">
    <a  class="active" href="#home">home</a>
    <a href="#dishes">dishes</a>
    <a href="#about">about</a>
    <a href="#menu">menu</a>
    <a href="#review">review</a>
    <a href="#order">order</a>
    </nav>
    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
        <a href="#" class="fas fa-heart" id="offer-icon"></a>
        <div class="icons">
            <a onclick="window.location.href='cart.html'" class="fas fa-shopping-cart" id="cart-items"></a>
            <span class="cart-count">0</span>
        </div>

    </div>
    </header> 

    </section>
    <!-- Popup Ad -->
<div id="popup-ad" class="popup">
    <div class="popup-content">
        <span class="close-btn" onclick="closePopup()">&times;</span>
        <h2>Special Offer!</h2>
        <p>Get 20% off on your first order. Use code: <strong>WELCOME20</strong></p>
        <button onclick="closePopup()">Shop Now</button>
    </div>
</div>
    
    <!-- <div class="container">
        <div id="root"></div>
        <div class="sidebar">
            <div class="head"><p>my cart</p>
                <div class="cartItem">your cart is empty</div>
                <div class="food">
                    <h3>Total</h3>
                    <h2 id="total">0.00 rs</h2>
                </div>
            </div>
        </div>
    </div> -->
    
        <section class="shopping-cart">
            <h1 class="heading">&#128512; special offer Today &#128512;</h1>
            <div class="box-container">
            <div class="box">
                <i class="fas fa-fire"></i>
                <img src="https://www.shutterstock.com/image-photo/sliced-mutton-bone-600w-1097177561.jpg">
                <div class="content">
                    <h3> raw chicken</h3>
                    <span class="price">299/-active</span>
                    <span class="quantity">qty:1.5kg</span>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-fire"></i>
                <img src="https://www.shutterstock.com/image-photo/mutton-meat-600w-582555493.jpg">
                <div class="content">
                    <h3>raw beef</h3>
                    <span class="price">699/-active</span>
                    <span class="quantity">qty:1.5kg</span>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-fire"></i>
                <img src="https://www.shutterstock.com/image-photo/boneless-lamb-steak-meat-spices-600w-1386424904.jpg">
                <div class="content">
                    <h3>raw mutton</h3>
                    <span class="price">599/-active</span>
                    <span class="quantity">qty:1.5kg</span>
                </div>
            </div>
        </div>
        </section>





        <!-- <div  id="modalbox" class="model-container">
            <div class="model">
            <i class="fas fa-heart"></i>
                <h3>special offer</h3>
                <h2>80<span>%</span><sup>off</sup></h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem dolorem sed odio id neque iusto dolore, sapiente fugit incidunt laborum, ad, ullam illum velit voluptatem sint iure dolor excepturi quo!</p>
                <button>ok</button>
                <button onclick="closeModal()">cancel</button>
                <i class="fas fa-times" onclick="closeModal()"></i>
                <div class="offer">
                <a href="#">get it</a>
                </div>
                </div>
            </div> -->





<form action="" id="search-form">
    <input type="text"  placeholder="search here" name="" id="search-box" onkeyup="search()">
    <label for="search-box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>
</form>

<!-- <div>
    <section id="cart">
        <h2>Shopping Cart</h2>
        <ul id="cart-items"></ul>
        <i class="fas fa-times" id="close"></i>
        <p>Total: $<span id="total">0.00</span></p>
</div> -->




<section class="home" id="home">
    <div class=" swiper-container home-slider">
        <div class=" swiper-wrapper wrapper">
            <div class="swiper-slide slide">
                <div class="content">
                    <span>our special dish</span>
                    <h3>spicy chicken tandoori</h3>
                    <p>Lorem ipsum dolor sit amet consectetur<br> adipisicing elit. Non, in praesentium<br> tenetur molestias possimus magni sit rem fugit dignissimos ratione nemo aut aliquid veniam culpa nihil magnam deserunt quasi ad!</p>
                    <a href="#" class="btn">order now</a>
                    </div>
                    <div class="image">
                        <img src="https://media.istockphoto.com/id/179405527/photo/chicken.jpg?s=612x612&w=0&k=20&c=YCtPoqIHHJeSJEYNrmxqRXtNMEFAwm_n0Qj6RWnwSkU=" alt="">
                    </div>
                </div>
            
            <div class=" swiper-slide slide">
                <div class="content">
                    <span>our special dish</span>
                    <h3>prawns deep fry</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Non, in praesentium tenetur molestias possimus<br> magni sit rem fugit dignissimos ratione nemo aut aliquid veniam culpa nihil magnam deserunt quasi ad!</p>
                    <a href="#" class="btn">order now</a>
                    </div>
                    <div class="image">
                        <img src="https://media.istockphoto.com/id/981734470/photo/grilled-shrimp-with-tamarind-sauce-or-tamarind-udang-gorend-assam-prawn-malaysian-dish.jpg?s=612x612&w=0&k=20&c=B6irVZZwe2cTYy9XRte9_V4YXxacvs-0jIUPHL69ciE=" alt="">
            </div>
        </div>
            <div class="swiper-slide slide">
                <div class="content">
                    <span>our special dish</span>
                    <h3>crazy fish fry</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>Non, in praesentium tenetur molestias possimus <br>magni sit rem fugit dignissimos ratione nemo aut aliquid veniam culpa nihil magnam deserunt quasi ad!</p>
                    <a href="#" class="btn">order now</a>
                    </div>
                    <div class="image">
                        <img src="https://c4.wallpaperflare.com/wallpaper/433/128/985/fish-meat-plate-green-wallpaper-preview.jpg" alt="" width="300px" height="300px" >
                    
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</div>
</section>


<section class="features" id="features">
    <h1 class="heading">our<span>features</span></h1>
    <div class="box-container">
        <div class="box">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtreiLGjmjBwILTDE-YvoziD4Vr-bzMoYVnQ&usqp=CAU" alt="">
            <h3>spicy and hot</h3>
            <p>we are hummble to say that this is an trusted web-site order some thing ,we are providing pure non-veg items</p>
            <a href="#" class="btn">read more</a>
        </div>
        <div class="box">
            <img src="https://t4.ftcdn.net/jpg/05/48/62/95/360_F_548629586_cDOlrTXotOkYIENXcXBQ1CaGg5W4yK00.jpg" alt="">
            <h3>free delivery</h3>
            <p>we are hummble to say that this is an trusted web-site order some thing ,we are providing pure non-veg items</p>
            <a href="#" class="btn">read more</a>
        </div>
        <div class="box">
            <img src="data:image/jpeg;base64,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" alt="">
            <h3>easy payments</h3>
            <p>we are hummble to say that this is an trusted web-site order some thing ,we are providing pure non-veg items</p>
            <a class="btn" href="#popup">payment<a/>
        </div>
    </div>
</section>

<section class="payments">
<div class="box">
	<a class="button" href="popup1">payment</a>
</div>
<div id="popup1" class="overlay">
	<div class="popup">
        <h1>MAKE A SAFE PAYMENTS<span>PAYMENT</span></h1>
        <img src="https://media2.giphy.com/media/d8Emd2WnaJR2HoiHQy/200w.webp?cid=ecf05e47s3xcl4cip7b4p4sycd18inzwsrubpoknoy655b5e&rid=200w.webp&ct=g">
		<a class="close" href="#">&times;</a>
		<div class="content">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSnyOoxY1k_Hj78I_Vb6S9sP4qV4cL5HkRzsa_7s5_ScOF5FSnIYXSWSwDXOE3xR6KHEu0&usqp=CAU"  height="40" width="40" usemap="#good">
            <map name="good">
                <area shape="rect" coords="0,90,80,5" href="https://phonepay.com"/>
            </map>
            <map name="food">
                <area shape="rect" coords="0,90,80,5" href="https://paytm.com"/>
            <img src="data:image/png;base64,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" height="40" width="40" usemap="#food">
        </map>
			<p>our payments are very secure and trusted payments in this website</p>
		</div>
    </div>
</div>
</section>

<section class="dishes" id="dishes">
    <h3 class="sub-heading">our dishes</h3>
    <h1 class="heading">popular dishes</h1>
    <div class="box-container">
        <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="https://c4.wallpaperflare.com/wallpaper/768/217/159/lemon-food-chicken-baked-wallpaper-preview.jpg" alt=""  width="300px" height="300px">
                <h3>tasty FOOD</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    </div>
                    <span>99/-</span>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
            <div class="box">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <img src="https://c4.wallpaperflare.com/wallpaper/796/449/290/chicken-legs-close-up-three-plate-wallpaper-preview.jpg" alt=""  width="300px" height="300px">
                    <h3>tasty FOOD</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span>99/-</span>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
            <div class="box">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                        <img src="https://c4.wallpaperflare.com/wallpaper/367/822/458/chicken-wings-fried-food-food-cuisine-wallpaper-preview.jpg" alt="" width="300px" height="300px">
                        <h3>tasty FOOD</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span>99/-</span>
                            <button class="add-to-cart">Add to Cart</button>
                        </div>
             <div class="box">
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="fas fa-eye"></a>
                            <img src="https://media.istockphoto.com/id/1440153678/photo/chicken-fried-lolipop-non-veg-food.jpg?s=612x612&w=0&k=20&c=g9II2CSepZzb1sXaeeAe89W8Dwk1IJI82qnJgOBdJvg=" alt=""  width="300px" height="300px" >
                            <h3>chicken lolipops</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                </div>
                                <span>99/-</span>
                                <button class="add-to-cart">Add to Cart</button>
                            </div>
                        <div class="box">
                                <a href="#" class="fas fa-heart"></a>
                                <a href="#" class="fas fa-eye"></a>
                                <img src="https://media.istockphoto.com/id/1405551683/photo/fish-fry-on-a-frying-pan-with-curry-leaves-close-up-shot-of-indian-traditional-kerala-style.jpg?s=612x612&w=0&k=20&c=XFV1zpxmW0QVaEQtTqahAV1CHiP6AfDTOBTUB7oVROE=" alt=""  width="300px" height="300px">
                                <h3>fish fry</h3>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <span>99/-</span>
                                    <button class="add-to-cart">Add to Cart</button>
                                </div>
                                <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
            <img src="https://c4.wallpaperflare.com/wallpaper/543/4/31/grilled-chicken-crispy-fried-wallpaper-preview.jpg" alt="" width="300px" height="300px" >
            <h3>tasty FOOD</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                </div>
                <span>99/-</span>
                <a href="#" class="btn">add to cart</a>
            </div>
                        </div>
         </div>
</section>

<!-- <div class="layer">
    <h1>most popular dishes and resturants</h1>
    <div class="video-container">
    <div class="video"><video src="C:\Users\91944\Downloads\what’s-the-biggest-fast-food-restaurant-in-the-world-you-won’t-believe-it-givefastlink.mp4"muted></video></div>
    <div class="video"><video src="C:\Users\91944\Downloads\best-north-indian-food-paneer-with-stuffed-parantha-favorite-veg-lunch-item-shorts-givefastlink.mp4"muted></video></div>
    <div class="video"><video src="C:\Users\91944\Downloads\15-best-foods-around-the-world-givefastlink.mp4"muted></video></div>
    <div class="video"><video src="C:\Users\91944\Downloads\6-cheese-dishes-from-around-the-world-you-need-in-your-life-givefastlink.mp4"muted></video></div>
    <div class="video"><video src="C:\Users\91944\Downloads\21-popular-fried-chicken-dishes-around-the-world-around-the-world-givefastlink.mp4"muted></video></div>
</div>
<div class="popup-video">
    <i class="fas fa-times"></i>
   <video src="C:\Users\91944\Downloads\what’s-the-biggest-fast-food-restaurant-in-the-world-you-won’t-believe-it-givefastlink.mp4"muted autoplay controls></video>
</div>
</div> -->


<section class="about" id="about">
    <h3 class="sub-heading">about us</h3>
    <h1 class="heading">why choose us</h1>
    <div class="row">
        <div class="image">
            <img src="https://img.freepik.com/free-vector/packaging-circle-sticker-template-design_742173-4832.jpg?uid=R176335932&ga=GA1.1.127734788.1732700280&semt=ais_hybrid" alt="">
        </div>
        <div class="content">
            <h3>best food in the country</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro maiores totam non, modi tenetur iure quibusdam explicabo voluptatem vitae alias cupiditate natus quod! Autem, obcaecati nemo eum commodi deserunt quos?</p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium cupiditate odio, accusamus magnam explicabo vero! Nemo officia numquam accusamus soluta odit officiis eaque quod delectus modi aperiam. Repellendus, delectus neque.</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates provident nulla aliquid maiores nihil unde, repellat aliquam nesciunt sint vero nam repellendus porro est fugit dolorum ipsam eius similique. Rerum?</p>
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-shipping-fast"></i>
                    <span>free delivery</span>
                </div>
                <div class="icons">
                    <i class="fas fa-dollar-sign"></i>
                    <span>easy payments</span>
                </div>
                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>24/7 service</span>
                </div>
            </div>
            <a href="#" class="btn">learn more</a>
        </div>
    </div>
</section>



<section class="menu" id="menu">
    <h3 class="sub-heading">our menu</h3>
    <h1 class="heading">tody special</h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="https://c1.wallpaperflare.com/preview/973/361/77/barbecue-meat-grill-grilled-meats.jpg" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div  class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="content" data-id="1" data-name="Product 1" data-price="199">
                    <h3>grill mutton</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro maiores totam non, modi tenetur iure quibusdam explicabo voluptatem vitae alias cupiditate natus quod! Autem, obcaecati nemo eum commodi deserunt quos?</p>
                    <button class="add-to-cart">Add to Cart</button>
                  <span class="price">199/-</span>
                  </div>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="https://c4.wallpaperflare.com/wallpaper/663/296/974/meat-food-meal-dinner-wallpaper-preview.jpg" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div  class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="content" data-id="1" data-name="Product 2" data-price="299">
                    <h3>mutton manjuri</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro maiores totam non, modi tenetur iure quibusdam explicabo voluptatem vitae alias cupiditate natus quod! Autem, obcaecati nemo eum commodi deserunt quos?</p>
                    <button class="add-to-cart">Add to Cart</button>
                  <span class="price">299/-</span>
                  </div>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="https://e0.pxfuel.com/wallpapers/303/489/desktop-wallpaper-mutton-tikka-biryani-mutton-biryani.jpg" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div  class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="content" data-id="3" data-name="Product 3" data-price="399">
                    <h3>mutton bhiriyani</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro maiores totam non, modi tenetur iure quibusdam explicabo voluptatem vitae alias cupiditate natus quod! Autem, obcaecati nemo eum commodi deserunt quos?</p>
                    <button class="add-to-cart">Add to Cart</button>
                  <span class="price">399/-</span>
                  </div>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="https://e1.pxfuel.com/desktop-wallpaper/315/269/desktop-wallpaper-authentic-mutton-biryani-recipe-flavarich-mutton-biryani.jpg" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div  class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="content" data-id="4" data-name="Product 4" data-price="349">
                    <h3>mutton bhiriyani special</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro maiores totam non, modi tenetur iure quibusdam explicabo voluptatem vitae alias cupiditate natus quod! Autem, obcaecati nemo eum commodi deserunt quos?</p>
                    <button class="add-to-cart">Add to Cart</button>
                  <span class="price">349/-</span>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="https://e0.pxfuel.com/wallpapers/498/672/desktop-wallpaper-tandoori-paneer-tikka-in-the-oven-my-food-story-chicken-tikka.jpg" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div  class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="content" data-id="5" data-name="Product 5" data-price="249">
                    <h3>paneer mutton fry</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro maiores totam non, modi tenetur iure quibusdam explicabo voluptatem vitae alias cupiditate natus quod! Autem, obcaecati nemo eum commodi deserunt quos?</p>
                    <button class="add-to-cart">Add to Cart</button>
                  <span class="price">249/-</span>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="https://e0.pxfuel.com/wallpapers/656/834/desktop-wallpaper-craving-biryani-head-over-to-these-delectable-spots-in-mumbai-biriyani.jpg" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div  class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="content" data-id="6" data-name="Product 6" data-price="599">
                    <h3>mutton maha raja</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro maiores totam non, modi tenetur iure quibusdam explicabo voluptatem vitae alias cupiditate natus quod! Autem, obcaecati nemo eum commodi deserunt quos?</p>
                    <button class="add-to-cart">Add to Cart</button>
                  <span class="price">599/-</span>
                  </div>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="https://e0.pxfuel.com/wallpapers/729/326/desktop-wallpaper-chicken-tikka-masala.jpg" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div  class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="content" data-id="7" data-name="Product 7" data-price="299">
                    <h3>mutton butter curry</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro maiores totam non, modi tenetur iure quibusdam explicabo voluptatem vitae alias cupiditate natus quod! Autem, obcaecati nemo eum commodi deserunt quos?</p>
                    <button class="add-to-cart">Add to Cart</button>
                  <span class="price">299/-</span>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="https://e0.pxfuel.com/wallpapers/793/379/desktop-wallpaper-non-veg-biryani-bollywood-cricket-travel-recipes-more-thumbnail.jpg" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div  class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="content" data-id="8" data-name="Product 8" data-price="299">
                    <h3>special dish</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro maiores totam non, modi tenetur iure quibusdam explicabo voluptatem vitae alias cupiditate natus quod! Autem, obcaecati nemo eum commodi deserunt quos?</p>
                    <button class="add-to-cart">Add to Cart</button>
                  <span class="price">299/-</span>
                
            </div>
        </div>
    </div>
    <div class="box">
        <div class="image">
            <img src="https://media.gettyimages.com/id/679705480/photo/lamb-curry-meal-on-rustic-wooden-table.jpg?s=612x612&w=0&k=20&c=KscNa5BR-uEq9gKrWp1D248EotQY5HT0rzDUxpnshjE=" alt="">
            <a href="#" class="fas fa-heart"></a>
        </div>
        <div  class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="content"data-id="9" data-name="Product 9" data-price="400">
                <h3>mutton with chees</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro maiores totam non, modi tenetur iure quibusdam explicabo voluptatem vitae alias cupiditate natus quod! Autem, obcaecati nemo eum commodi deserunt quos?</p>
                 <button class="add-to-cart">Add to Cart</button>
              <span class="price">400/-</span>
            </div>
        </div>
    </div>
    <div class="box">
        <div class="image">
            <img src="https://media.gettyimages.com/id/1352486099/photo/high-angle-view-of-food-in-bowl-on-table.jpg?s=612x612&w=0&k=20&c=1E0_YmVdXFJASkRv9G2Ooumwic9QzXDx92yviHp6TSg=" alt="">
            <a href="#" class="fas fa-heart"></a>
        </div>
        <div  class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="content" data-id="10" data-name="Product 10" data-price="299">
                <h3>gravy with extra masal</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro maiores totam non, modi tenetur iure quibusdam explicabo voluptatem vitae alias cupiditate natus quod! Autem, obcaecati nemo eum commodi deserunt quos?</p>
                <button class="add-to-cart">Add to Cart</button>
              <span class="price">299/-</span>
            </div>
        </div>
    </div>
    <div class="box">
        <div class="image">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQW4moMMD9bcGFLYBv_CgIsChgoWH8H8DLG0FdR-IjorDdcahWpgTVZtuaIj3ewWSaB7F8&usqp=CAU" alt="">
            <a href="#" class="fas fa-heart"></a>
        </div>
        <div  class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="content" data-id="11" data-name="Product 11" data-price="199">
                <h3>crazy spicey mutton curry</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro maiores totam non, modi tenetur iure quibusdam explicabo voluptatem vitae alias cupiditate natus quod! Autem, obcaecati nemo eum commodi deserunt quos?</p>
                <button class="add-to-cart">Add to Cart</button>
              <span class="price">199/-</span>
            </div>
        </div>
    </div>
    <div class="box">
        <div class="image">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTx935e6jqT7o9r10NB-wDvZuV3P0b1CXCFRQ&usqp=CAU" alt="">
            <a href="#" class="fas fa-heart"></a>
        </div>
        <div  class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="content" data-id="12" data-name="Product 12" data-price="199">
                <h3>spicy mutton gravys</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro maiores totam non, modi tenetur iure quibusdam explicabo voluptatem vitae alias cupiditate natus quod! Autem, obcaecati nemo eum commodi deserunt quos?</p>
                <button class="add-to-cart">Add to Cart</button>
              <span class="price">199/-</span>
            </div>
        </div>
    </div>
    </div>
    </div>
        </div>
        </div>
</section>


<section class="review" id="review">
    <h3 class="sub-heading">customer review</h3>
    <h1 class="heading">what they say</h1>
    <div class="swiper-container review-slider">
        <div class="wrapper">
            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="C:\Users\91944\Pictures\Screenshot (4).png" alt="">
                    <div class="user-info">
                        <h3>vinay yadav</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo in nihil culpa minima. Ipsa magnam vel maxime debitis soluta optio suscipit deleniti provident molestias iste, fugiat voluptatum asperiores cum adipisci.</p>
                </div>
            </div>
        <div class="swiper-slide slide">
            <i class="fas fa-quote-right"></i>
            <div class="user">
                <img src="C:\Users\91944\Pictures\Screenshot (7).png" alt="">
                <div class="user-info">
                    <h3>bhavani yadav</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo in nihil culpa minima. Ipsa magnam vel maxime debitis soluta optio suscipit deleniti provident molestias iste, fugiat voluptatum asperiores cum adipisci.</p>
            </div>
    <div class="swiper-slide slide">
        <i class="fas fa-quote-right"></i>
        <div class="user">
            <img src="C:\Users\91944\Pictures\Screenshot (6).png" alt="">
            <div class="user-info">
                <h3>poorna yadav</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo in nihil culpa minima. Ipsa magnam vel maxime debitis soluta optio suscipit deleniti provident molestias iste, fugiat voluptatum asperiores cum adipisci.</p>
        </div>
<div class="swiper-slide slide">
    <i class="fas fa-quote-right"></i>
    <div class="user">
        <img src="C:\Users\91944\Pictures\IMG_20221128_093235.jpg" alt="">
        <div class="user-info">
            <h3>pavan yadav</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
    </div>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo in nihil culpa minima. Ipsa magnam vel maxime debitis soluta optio suscipit deleniti provident molestias iste, fugiat voluptatum asperiores cum adipisci.</p>
    </div>
    </div>
    </div>
    </div>
</section>


<section class="order" id="order">
    <h3 class="sub-heading">order now</h3>
    <h1 class="heading">free and fast</h1>
    <form action="">
        <div class="inputBox">
            <div class="input">
                <span>your name</span>
                <input type="text" placeholder="enter your name">
                </div>
            </div>
        <div class="inputBox">
            <div class="input">
                <span>your number</span>
                <input type="number" placeholder="your number">
                </div>
                </div>
        <div class="inputBox">
            <div class="input">
                <span>how much</span>
                <input type="number" placeholder="how many orders">
                </div>
                </div>
        <div class="inputBox">
            <div class="input">
                <span>your order</span>
                <input type="text" placeholder="enter food name">
                </div>
                </div>
        <div class="inputBox">
            <div class="input">
                <span>additional food</span>
                <input type="text" placeholder="extra with food">
                </div>
                </div>
        <div class="inputBox">
            <div class="input">
                <span> how much</span>
                <input type="number" placeholder="how many orders">
                </div>
                </div>
        <div class="inputBox">
            <div class="input">
                <span>date and time </span>
                <input type="datetime-local">
                </div>
                </div>
        <div class="inputBox">
            <div class="input">
                <span>your address</span>
                <textarea name="" placeholder="enter your address" id="" cols="30" rows="10"></textarea>
                </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>your meassage</span>
                <textarea name="" placeholder="enter your meassage" id="" cols="30" rows="10"></textarea>
                </div>
                </div>
        <input type="submit" value="order now" class="btn">
    </form>
</section>



<section class="cibo">
    <div class="box-container">
        <div class="box">
            <h3>locations</h3>
            <a href="#" >india</a>
            <a href="#" >japan</a>
            <a href="#" >russia</a>
            <a href="#" >USA</a>
            <a href="#" >france</a>
            </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="#" >home</a>
            <a href="#" >dishes</a>
            <a href="#" >about</a>
            <a href="#" >menu</a>
            <a href="#" >orders</a>
            <a href="#">reviews</a>
        </div>
    <div class="box">
        <h3>contact info</h3>
        <a href="#" >+91 9059341395</a>
        <a href="#" >+123-456-7890</a>
        <a href="#" >vasalavasuyadav@gmail.com</a>
        <a href="#" >vasuyadav040502gmail.com</a>
        <a href="#">Andhara,Udamalapadu,india</a>
       
        </div>
    <div class="box">
        <h3>follow us on</h3>
        <a href="#" >facebook</a>
        <a href="#" >istagram</a>
        <a href="#" >twitter</a>
        <a href="#" >whats app</a>
        <a href="#">chrome</a>
        </div>
        </div>
    <div class="credit">copyright @ 2022 by<span>mr.web designer</span> </div>
    <H1> &#128525;Thanks for visiting our page &#128525;</H1>
</section>



















<script>


// Function to show popup after 3 seconds
window.onload = function () {
    setTimeout(() => {
        document.getElementById("popup-ad").style.display = "flex";
    }, 3000);
};

// Function to close popup
function closePopup() {
    document.getElementById("popup-ad").style.display = "none";
}

    // let  modelBox = document.getElementById('modalbox');
   
//    function showModal(){
//        setTimeout(() => {
//            modelBox.style.display = "show";
//        },10000)
//    }
//    function closeModal(){
//        modelBox.style.display = "none";
//    }
    
// let popup = document.getElementById('popup');

// function openPopup(){
//     popup.classList.add("open-popup");
// }
// function closePopup(){
//     popup.classList.remove("open-popup");}



//     document.querySelector('cart-items').onclick = () =>{
//     document.querySelector('#cart').classList.toggle('active');
// }
// document.querySelector('#close').onclick = () =>{
//     document.querySelector('#cart').classList.remove('active');
// }
// }
// </script>

<script>

//     let cart = JSON.parse(localStorage.getItem('cart')) || [];

// // Function to update cart count in navbar
// function updateCartCount() {
//     document.querySelector('.cart-count').textContent = cart.length;
// }

// // Function to add product to cart
// document.querySelectorAll('.add-to-cart').forEach(button => {
//     button.addEventListener('click', (event) => {
//         const product = event.target.closest('.content');
//         const id = product.dataset.id;
//         const name = product.dataset.name;
//         const price = product.dataset.price;

//         cart.push({ id, name, price });
//         localStorage.setItem('cart', JSON.stringify(cart));
//         updateCartCount();
//     });
// });
let cart = JSON.parse(localStorage.getItem('cart')) || [];
function updateCartCount() {
    const cartCountElement = document.querySelector('.cart-count');
    if (cartCountElement) {
        cartCountElement.textContent = cart.length;
    }
}

// Function to add product to cart
document.querySelectorAll('.add-to-cart').forEach(button => {
    button.addEventListener('click', (event) => {
        const product = event.target.closest('.content');
        const id = product.dataset.id;
        const name = product.dataset.name;
        const price = parseFloat(product.dataset.price); // Ensure price is a number

        if (!isNaN(price)) {
            cart.push({ id, name, price }); // Add product to cart
            localStorage.setItem('cart', JSON.stringify(cart)); // Save cart to localStorage
            updateCartCount();
            alert(`${name} added to cart!`);
        } else {
            console.error("Invalid price for product:", name);
        }
    });
});

    </script>
    <!-- <script src="C:\Users\vasal\OneDrive\Documents\cards\project\meat 1\cart.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="meat21.js"></script>

<script src="C:\Users\vasal\OneDrive\Desktop\xamp\htdocs\project\meat.js"></script>
</body>
</html>