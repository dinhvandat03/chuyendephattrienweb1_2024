<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3181">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row" id="num1">
                    <div class="col-md-3">
                        <div class="image">
                            <img src="./hinh1.jpg" alt="" srcset="" class="hinh">
                            <img src="./hinnh2.jpg" alt="" srcset="" class="hinh">
                            <img src="./hinh3.jpg" alt="" srcset="" class="hinh">
                        </div>

                    </div>
                    <div class="col-md-9"> <img src="./hinh4.jpg" alt="" srcset="" class="hinh4"></div>
                </div>
            </div>
            <div class="col-md-4 ">
                <h2>Virtual Product</h2>
                <div class="price">$25.0</div>
                <div class="danhgia">
                    <!-- Add icon library -->
                    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
                <div class="content">
                    Lorem ipsum dolor sit amet, consec tetuer adipiscing elit. Aenean commodo ligula eget dolor
                    massa.
                    Cum sociis natoque penatibus et magnis dis part urient.
                </div>
                <div class="product">
                    <span class="sku">SKU: <span class="sku-text"> 99</span></span>
                    <span class="cate">Category: <span class="cate-text"> Variations</span></span>
                    <span class="tag">Tags: <span class="tag-text"> Equipment,Sport</span></span>
                    <span class="share">share:
                        <ul>

                            <li><i class="fab fa-facebook-square"></i></li>
                            <li><i class="fab fa-twitter-square"></i></li>
                            <li><i class="fab fa-instagram-square"></i></li>
                            <li><i class="fab fa-pinterest-square"></i></i></li>
                        </ul>
                    </span>
                </div>
                <div class="tocart">
                    <div class="quan">
                        <span class="number">2</span>
                        <button class="icon-button">
                            <span class="icon"><i class="fa-solid fa-chevron-up"></i></span>
                            <div></div>
                            <span class="icon"><i class="fa-solid fa-chevron-down"></i></span>
                        </button>

                    </div>
                    <button class="addtocart">ADD TO CART</button>
                    
                </div>
                <div class="heart">
                        <a href=""><span><i class="fa-solid fa-heart"></i></span>Browse Wishlist</a>
                    </div>
            </div>
        </div>
     
       <div class="des-view">
        <div class="des">Description </div>
        <div class="view">Reviews (1) </div>
        <hr>
        <div class="custom-line"></div>
        <p>Lorem ipsum dolor sit amet, consec tetuer adipiscing elit. Aenean commodo <br> ligula eget dolor massa. Cum sociis natoque penatibus et magnis dis part urient <br> montes, nascetur ridiculus mus donec quam.</p>
       </div>
    </div>
</div>