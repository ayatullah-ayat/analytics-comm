<div class="footer">
    <div class="container">
        <div class="col-md-3 footer-grid">
            <h3>About Us</h3>
            <p>Nam libero tempore, cum soluta nobis est eligendi 
                optio cumque nihil impedit quo minus id quod maxime 
                placeat facere possimus.</p>
        </div>
        <div class="col-md-3 footer-grid ">
            <h3>Menu</h3>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="kitchen.html">Kitchen</a></li>
                <li><a href="care.html">Personal Care</a></li>
                <li><a href="hold.html">Household</a></li>						 
                <li><a href="codes.html">Short Codes</a></li> 
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
        <div class="col-md-3 footer-grid ">
            <h3>Customer Services</h3>
            <ul>
                <li><a href="shipping.html">Shipping</a></li>
                <li><a href="terms.html">Terms & Conditions</a></li>
                <li><a href="faqs.html">Faqs</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="offer.html">Online Shopping</a></li>						 
                
            </ul>
        </div>
        <div class="col-md-3 footer-grid">
            <h3>My Account</h3>
            <ul>
                <li><a href="login.html">Login</a></li>
                <li><a href="register.html">Register</a></li>
                <li><a href="wishlist.html">Wishlist</a></li>
                
            </ul>
        </div>
        <div class="clearfix"></div>
            <div class="footer-bottom">
                <h2 ><a href="index.html"><b>T<br>H<br>E</b>Big Store<span>The Best Supermarket</span></a></h2>
                <p class="fo-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                <ul class="social-fo">
                    <li><a href="#" class=" face"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" class=" twi"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#" class=" pin"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                    <li><a href="#" class=" dri"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                </ul>
                <div class=" address">
                    <div class="col-md-4 fo-grid1">
                            <p><i class="fa fa-home" aria-hidden="true"></i>12K Street , 45 Building Road Canada.</p>
                    </div>
                    <div class="col-md-4 fo-grid1">
                            <p><i class="fa fa-phone" aria-hidden="true"></i>+1234 758 839 , +1273 748 730</p>	
                    </div>
                    <div class="col-md-4 fo-grid1">
                        <p><a href="mailto:info@example.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>info@example1.com</a></p>
                    </div>
                    <div class="clearfix"></div>
                    
                    </div>
            </div>
        <div class="copy-right">
            <p> &copy; 2016 Big store. All Rights Reserved | Design by  <a href="http://w3layouts.com/"> W3layouts</a></p>
        </div>
    </div>
</div>

    <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

    

            <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-info">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                        </div>
                        <div class="modal-body modal-spa">
                                <div class="col-md-5 span-2">
                                            <div class="item">
                                                <img src="images/of.png" class="img-responsive" alt="">
                                            </div>
                                </div>
                                <div class="col-md-7 span-1 ">
                                    <h3>Moong(1 kg)</h3>
                                    <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                                    <div class="price_single">
                                    <span class="reducedfrom "><del>$2.00</del>$1.50</span>
                                    
                                    <div class="clearfix"></div>
                                    </div>
                                    <h4 class="quick">Quick Overview:</h4>
                                    <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                                    <div class="add-to">
                                        <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="1" data-name="Moong" data-summary="summary 1" data-price="1.50" data-quantity="1" data-image="images/of.png">Add to Cart</button>
                                        </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                </div>
<!-- product -->
    






<script type="text/javascript" src="{{ asset('') }}js/move-top.js"></script>
<script type="text/javascript" src="{{ asset('') }}js/easing.js"></script>

<script src="{{ asset('') }}js/bootstrap.js"></script>

<script type='text/javascript' src="{{ asset('') }}js/jquery.mycart.js"></script>




<script type="text/javascript">
    $(document).ready(function() {
    /*
        var defaults = {
        containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear' 
        };
    */	

    $('.starbox').each(function() {
        var starbox = jQuery(this);
            starbox.starbox({
            average: starbox.attr('data-start-value'),
            changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
            ghosting: starbox.hasClass('ghosting'),
            autoUpdateAverage: starbox.hasClass('autoupdate'),
            buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
            stars: starbox.attr('data-star-count') || 5
            }).bind('starbox-value-changed', function(event, value) {
            if(starbox.hasClass('random')) {
            var val = Math.random();
            starbox.next().text(' '+val);
            return val;
            } 
        })
    });							
    $().UItoTop({ easingType: 'easeOutQuart' });

    $(".scroll").click(function(event){		
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
    });

    var goToCartIcon = function($addTocartBtn){
    var $cartIcon = $(".my-cart-icon");
    var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
    $addTocartBtn.prepend($image);
    var position = $cartIcon.position();
    $image.animate({
        top: position.top,
        left: position.left
        }, 500 , "linear", function() {
            $image.remove();
        });
    }
    
    $('.my-cart-btn').myCart({
        classCartIcon: 'my-cart-icon',
        classCartBadge: 'my-cart-badge',
        affixCartIcon: true,
        checkoutCart: function(products) {
            $.each(products, function(){
                console.log(this);
            });
        },
        clickOnAddToCart: function($addTocart){
            goToCartIcon($addTocart);
        },
        getDiscountPrice: function(products) {
            var total = 0;
            $.each(products, function(){
                total += this.quantity * this.price;
            });
            return total * 1;
        }
    });
    });
</script>

<script type="application/x-javascript"> 

    addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } 

</script>
</body>
</html>