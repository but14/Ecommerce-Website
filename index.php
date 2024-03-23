<?php include('includes/header.php');?>
<main>
    <section class="section-1">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <!-- <img src="images/carousel-1.jpg" class="d-block w-100" alt=""> -->

                    <picture>
                        <source media="(max-width: 799px)" srcset="images/carousel-1-m.jpg" />
                        <source media="(min-width: 800px)" srcset="images/carousel-1.jpg" />
                        <img src="images/carousel-1.jpg" alt="" />
                    </picture>

                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3">
                            <h1 class="display-4 text-white mb-3">Kids Fashion</h1>
                            <p class="mx-md-5 px-5">Let your children be as comfortable as possible, with the correct choice of their fashion</p>
                            <a class="btn btn-outline-light py-2 px-4 mt-3" href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    
                    <picture>
                        <source media="(max-width: 799px)" srcset="images/carousel-2-m.jpg" />
                        <source media="(min-width: 800px)" srcset="images/carousel-2.jpg" />
                        <img src="images/carousel-2.jpg" alt="" />
                    </picture>

                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3">
                            <h1 class="display-4 text-white mb-3">Womens Fashion</h1>
                            <p class="mx-md-5 px-5">No one loves you more than yourself. Please always be beautiful</p>
                            <a class="btn btn-outline-light py-2 px-4 mt-3" href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <!-- <img src="images/carousel-3.jpg" class="d-block w-100" alt=""> -->

                    <picture>
                        <source media="(max-width: 799px)" srcset="images/carousel-3-m.jpg" />
                        <source media="(min-width: 800px)" srcset="images/carousel-3.jpg" />
                        <img src="images/carousel-2.jpg" alt="" />
                    </picture>

                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3">
                            <h1 class="display-4 text-white mb-3">WolfShop!Your style is an honor and reward for us</h1>
                            <p class="mx-md-5 px-5">Come to us to receive the most attractive offers</p>
                            <a class="btn btn-outline-light py-2 px-4 mt-3" href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section class="section-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="box shadow-lg">
                        <div class="fa icon fa-check text-primary m-0 mr-3"></div>
                        <h2 class="font-weight-semi-bold m-0">Quality Product</h5>
                    </div>                    
                </div>
                <div class="col-lg-3 ">
                    <div class="box shadow-lg">
                        <div class="fa icon fa-shipping-fast text-primary m-0 mr-3"></div>
                        <h2 class="font-weight-semi-bold m-0">Free Shipping</h2>
                    </div>                    
                </div>
                <div class="col-lg-3">
                    <div class="box shadow-lg">
                        <div class="fa icon fa-exchange-alt text-primary m-0 mr-3"></div>
                        <h2 class="font-weight-semi-bold m-0">14-Day Return</h2>
                    </div>                    
                </div>
                <div class="col-lg-3 ">
                    <div class="box shadow-lg">
                        <div class="fa icon fa-phone-volume text-primary m-0 mr-3"></div>
                        <h2 class="font-weight-semi-bold m-0">24/7 Support</h5>
                    </div>                    
                </div>
            </div>
        </div>
    </section>
    <section class="section-3">
        <div class="container">
            <div class="section-title">
                <h2>Categories</h2>
            </div>           
            <div class="row pb-3">
                <div class="col-lg-3">
                    <div class="cat-card">
                        <div class="left">
                            <img src="images/cat-5.png" alt="" class="img-fluid">
                        </div>
                        <div class="right">
                            <div class="cat-data">
                                <h2>Mens</h2>
                                <p>86 Products</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="cat-card">
                        <div class="left">
                            <img src="images/cat-6.png" alt="" class="img-fluid">
                        </div>
                        <div class="right">
                            <div class="cat-data">
                                <h2>Womens</h2>
                                <p>80 Products</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="cat-card">
                        <div class="left">
                            <img src="images/cat-7.png" alt="" class="img-fluid">
                        </div>
                        <div class="right">
                            <div class="cat-data">
                                <h2>Kids</h2>
                                <p>100 Products</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="cat-card">
                        <div class="left">
                            <img src="images/cat-8.png" alt="" class="img-fluid">
                        </div>
                        <div class="right">
                            <div class="cat-data">
                                <h2>Accessory</h2>
                                <p>65 Products</p>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </section>
    
    <section class="section-4 pt-5">
        <div class="container">
            <div class="section-title">
                <h2>Featured Products</h2>
            </div>    
            <div class="row pb-3">
                <div class="col-md-3">
                    <div class="card product-card">
                        <div class="product-image position-relative">
                            <a href="" class="product-img"><img class="card-img-top" src="images/product-23.png" alt=""></a>
                            <a class="whishlist" href="222"><i class="far fa-heart"></i></a>                            

                            <div class="product-action">
                                <a class="btn btn-dark" href="product.php">
                                    <i class="fa fa-shopping-cart"></i> Add To Cart
                                </a>                            
                            </div>
                        </div>                        
                        <div class="card-body text-center mt-3">
                            <a class="h6 link" href="product.php">STRIPES KHAKI PANTS</a>
                            <div class="price mt-2">
                                <span class="h5"><strong>650.000 VNĐ</strong></span>
                                <span class="h6 text-underline"><del>700.000 VNĐ</del></span>
                            </div>
                        </div>                        
                    </div>                                               
                </div>  
                <div class="col-md-3">
                    <div class="card product-card">
                        <div class="product-image position-relative">
                            <a href="" class="product-img"><img class="card-img-top" src="images/product-32.avif" alt=""></a>
                            <a class="whishlist" href="222"><i class="far fa-heart"></i></a>                            

                            <div class="product-action">
                                <a class="btn btn-dark" href="#">
                                    <i class="fa fa-shopping-cart"></i> Add To Cart
                                </a>                            
                            </div>
                        </div>                        
                        <div class="card-body text-center mt-3">
                            <a class="h6 link" href="product.php">$MAKER CORDUROY VARSITY</a>
                            <div class="price mt-2">
                                <span class="h5"><strong>850.000 VNĐ</strong></span>
                                <span class="h6 text-underline"><del>900.000 VNĐ</del></span>
                            </div>
                        </div>                        
                    </div>                                               
                </div>  
                <div class="col-md-3">
                    <div class="card product-card">
                        <div class="product-image position-relative">
                            <a href="" class="product-img"><img class="card-img-top" src="images/product-9.png" alt=""></a>
                            <a class="whishlist" href="222"><i class="far fa-heart"></i></a>                            

                            <div class="product-action">
                                <a class="btn btn-dark" href="#">
                                    <i class="fa fa-shopping-cart"></i> Add To Cart
                                </a>                            
                            </div>
                        </div>                        
                        <div class="card-body text-center mt-3">
                            <a class="h6 link" href="product.php">EMBOSSED LOGOS STRAIGHT</a>
                            <div class="price mt-2">
                                <span class="h5"><strong>900.000 VNĐ</strong></span>
                                <span class="h6 text-underline"><del>950.000 VNĐ</del></span>
                            </div>
                        </div>                        
                    </div>                                               
                </div>  
                <div class="col-md-3">
                    <div class="card product-card">
                        <div class="product-image position-relative">
                            <a href="" class="product-img"><img class="card-img-top" src="images/product-65.png" alt=""></a>
                            <a class="whishlist" href="222"><i class="far fa-heart"></i></a>                            

                            <div class="product-action">
                                <a class="btn btn-dark" href="#">
                                    <i class="fa fa-shopping-cart"></i> Add To Cart
                                </a>                            
                            </div>
                        </div>                        
                        <div class="card-body text-center mt-3">
                            <a class="h6 link" href="product.php">"YACHT CLUB" WASHED SWEATER</a>
                            <div class="price mt-2">
                                <span class="h5"><strong>700.000 VNĐ</strong></span>
                                <span class="h6 text-underline"><del>750.000 VNĐ</del></span>
                            </div>
                        </div>                        
                    </div>                                               
                </div>  
                <div class="col-md-3">
                    <div class="card product-card">
                        <div class="product-image position-relative">
                            <a href="" class="product-img"><img class="card-img-top" src="images/product-44.png" alt=""></a>
                            <a class="whishlist" href="222"><i class="far fa-heart"></i></a>                            

                            <div class="product-action">
                                <a class="btn btn-dark" href="#">
                                    <i class="fa fa-shopping-cart"></i> Add To Cart
                                </a>                            
                            </div>
                        </div>                        
                        <div class="card-body text-center mt-3">
                            <a class="h6 link" href="product.php">"URBAN LOGO" KHAKI</a>
                            <div class="price mt-2">
                                <span class="h5"><strong>650.000 VNĐ</strong></span>
                                <span class="h6 text-underline"><del>720.000 VNĐ</del></span>
                            </div>
                        </div>                        
                    </div>                                               
                </div>  
                <div class="col-md-3">
                    <div class="card product-card">
                        <div class="product-image position-relative">
                            <a href="" class="product-img"><img class="card-img-top" src="images/product-29.png" alt=""></a>
                            <a class="whishlist" href="222"><i class="far fa-heart"></i></a>                            

                            <div class="product-action">
                                <a class="btn btn-dark" href="#">
                                    <i class="fa fa-shopping-cart"></i> Add To Cart
                                </a>                            
                            </div>
                        </div>                        
                        <div class="card-body text-center mt-3">
                            <a class="h6 link" href="product.php">FLORAL LOGO SHORTS</a>
                            <div class="price mt-2">
                                <span class="h5"><strong>450.000 VNĐ</strong></span>
                                <span class="h6 text-underline"><del>500.000 VND</del></span>
                            </div>
                        </div>                        
                    </div>                                               
                </div>  
                <div class="col-md-3">
                    <div class="card product-card">
                        <div class="product-image position-relative">
                            <a href="" class="product-img"><img class="card-img-top" src="images/product-25.png" alt=""></a>
                            <a class="whishlist" href="222"><i class="far fa-heart"></i></a>                            

                            <div class="product-action">
                                <a class="btn btn-dark" href="#">
                                    <i class="fa fa-shopping-cart"></i> Add To Cart
                                </a>                            
                            </div>
                        </div>                        
                        <div class="card-body text-center mt-3">
                            <a class="h6 link" href="product.php">VELVET CHEETAH SHORT</a>
                            <div class="price mt-2">
                                <span class="h5"><strong>350.000 VNĐ</strong></span>
                                <span class="h6 text-underline"><del>400.000 VNĐ</del></span>
                            </div>
                        </div>                        
                    </div>                                               
                </div>  
                <div class="col-md-3">
                    <div class="card product-card">
                        <div class="product-image position-relative">
                            <a href="" class="product-img"><img class="card-img-top" src="images/product-35.avif" alt=""></a>
                            <a class="whishlist" href="222"><i class="far fa-heart"></i></a>                            

                            <div class="product-action">
                                <a class="btn btn-dark" href="#">
                                    <i class="fa fa-shopping-cart"></i> Add To Cart
                                </a>                            
                            </div>
                        </div>                        
                        <div class="card-body text-center mt-3">
                            <a class="h6 link" href="product.php">"STILL BE FRIENDS" FLEECE JACKET</a>
                            <div class="price mt-2">
                                <span class="h5"><strong>850.000 VNĐ</strong></span>
                                <span class="h6 text-underline"><del>900.000 VNĐ</del></span>
                            </div>
                        </div>                        
                    </div>                                               
                </div>               
            </div>
        </div>
    </section>

    <section class="section-4 pt-5">
        <div class="container">
            <div class="section-title">
                <h2>Latest Produsts</h2>
            </div>    
            <div class="row pb-3">
                <div class="col-md-3">
                    <div class="card product-card">
                        <div class="product-image position-relative">
                            <a href="" class="product-img"><img class="card-img-top" src="images/product-63.png" alt=""></a>
                            <a class="whishlist" href="222"><i class="far fa-heart"></i></a>                            

                            <div class="product-action">
                                <a class="btn btn-dark" href="#">
                                    <i class="fa fa-shopping-cart"></i> Add To Cart
                                </a>                            
                            </div>
                        </div>                        
                        <div class="card-body text-center mt-3">
                            <a class="h6 link" href="product.php">"MONEY & LOVE" TEE</a>
                            <div class="price mt-2">
                                <span class="h5"><strong>500.000 VNĐ</strong></span>
                                <span class="h6 text-underline"><del>550.000 VNĐ</del></span>
                            </div>
                        </div>                        
                    </div>                                               
                </div>  
                <div class="col-md-3">
                    <div class="card product-card">
                        <div class="product-image position-relative">
                            <a href="" class="product-img"><img class="card-img-top" src="images/product-47.png" alt=""></a>
                            <a class="whishlist" href="222"><i class="far fa-heart"></i></a>                            

                            <div class="product-action">
                                <a class="btn btn-dark" href="#">
                                    <i class="fa fa-shopping-cart"></i> Add To Cart
                                </a>                            
                            </div>
                        </div>                        
                        <div class="card-body text-center mt-3">
                            <a class="h6 link" href="product.php">"BORN BROKE DIE RICH" SHIRT</a>
                            <div class="price mt-2">
                                <span class="h5"><strong>650.000 VNĐ</strong></span>
                                <span class="h6 text-underline"><del>700.000 VNĐ</del></span>
                            </div>
                        </div>                        
                    </div>                                               
                </div>  
                <div class="col-md-3">
                    <div class="card product-card">
                        <div class="product-image position-relative">
                            <a href="" class="product-img"><img class="card-img-top" src="images/product-30.png" alt=""></a>
                            <a class="whishlist" href="222"><i class="far fa-heart"></i></a>                            

                            <div class="product-action">
                                <a class="btn btn-dark" href="#">
                                    <i class="fa fa-shopping-cart"></i> Add To Cart
                                </a>                            
                            </div>
                        </div>                        
                        <div class="card-body text-center mt-3">
                            <a class="h6 link" href="product.php">"PATTERN LOGO" MESH SHORT</a>
                            <div class="price mt-2">
                                <span class="h5"><strong>500.000 VNĐ</strong></span>
                                <span class="h6 text-underline"><del>550.000 VNĐ</del></span>
                            </div>
                        </div>                        
                    </div>                                               
                </div>  
                <div class="col-md-3">
                    <div class="card product-card">
                        <div class="product-image position-relative">
                            <a href="" class="product-img"><img class="card-img-top" src="images/product-78.png" alt=""></a>
                            <a class="whishlist" href="222"><i class="far fa-heart"></i></a>                            

                            <div class="product-action">
                                <a class="btn btn-dark" href="#">
                                    <i class="fa fa-shopping-cart"></i> Add To Cart
                                </a>                            
                            </div>
                        </div>                        
                        <div class="card-body text-center mt-3">
                            <a class="h6 link" href="product.php">"LIMITED EDITION" TRUCKER</a>
                            <div class="price mt-2">
                                <span class="h5"><strong>900.000 VNĐ</strong></span>
                                <span class="h6 text-underline"><del>950.000 VNĐ</del></span>
                            </div>
                        </div>                        
                    </div>                                               
                </div>  
                <div class="col-md-3">
                    <div class="card product-card">
                        <div class="product-image position-relative">
                            <a href="" class="product-img"><img class="card-img-top" src="images/product-68.png" alt=""></a>
                            <a class="whishlist" href="222"><i class="far fa-heart"></i></a>                            

                            <div class="product-action">
                                <a class="btn btn-dark" href="#">
                                    <i class="fa fa-shopping-cart"></i> Add To Cart
                                </a>                            
                            </div>
                        </div>                        
                        <div class="card-body text-center mt-3">
                            <a class="h6 link" href="product.php">SPLASHED LOGO WASHED</a>
                            <div class="price mt-2">
                                <span class="h5"><strong>700.000 VNĐ</strong></span>
                                <span class="h6 text-underline"><del>800.000 VNĐ</del></span>
                            </div>
                        </div>                        
                    </div>                                               
                </div>  
                <div class="col-md-3">
                    <div class="card product-card">
                        <div class="product-image position-relative">
                            <a href="" class="product-img"><img class="card-img-top" src="images/product-83.avif" alt=""></a>
                            <a class="whishlist" href="222"><i class="far fa-heart"></i></a>                            

                            <div class="product-action">
                                <a class="btn btn-dark" href="#">
                                    <i class="fa fa-shopping-cart"></i> Add To Cart
                                </a>                            
                            </div>
                        </div>                        
                        <div class="card-body text-center mt-3">
                            <a class="h6 link" href="product.php">BAGUETTE CUBAN LINK NECKLACE</a>
                            <div class="price mt-2">
                                <span class="h5"><strong>2.000.000 VNĐ</strong></span>
                                <span class="h6 text-underline"><del>2.200.000 VNĐ</del></span>
                            </div>
                        </div>                        
                    </div>                                               
                </div>  
                <div class="col-md-3">
                    <div class="card product-card">
                        <div class="product-image position-relative">
                            <a href="" class="product-img"><img class="card-img-top" src="images/product-90.avif" alt=""></a>
                            <a class="whishlist" href="222"><i class="far fa-heart"></i></a>                            

                            <div class="product-action">
                                <a class="btn btn-dark" href="#">
                                    <i class="fa fa-shopping-cart"></i> Add To Cart
                                </a>                            
                            </div>
                        </div>                        
                        <div class="card-body text-center mt-3">
                            <a class="h6 link" href="product.php">"MONEY ALWAYS UP" TRUCK</a>
                            <div class="price mt-2">
                                <span class="h5"><strong>500.000 VNĐ</strong></span>
                                <span class="h6 text-underline"><del>550.000 VNĐ</del></span>
                            </div>
                        </div>                        
                    </div>                                               
                </div>  
                <div class="col-md-3">
                    <div class="card product-card">
                        <div class="product-image position-relative">
                            <a href="" class="product-img"><img class="card-img-top" src="images/product-59.webp" alt=""></a>
                            <a class="whishlist" href="222"><i class="far fa-heart"></i></a>                            

                            <div class="product-action">
                                <a class="btn btn-dark" href="#">
                                    <i class="fa fa-shopping-cart"></i> Add To Cart
                                </a>                            
                            </div>
                        </div>                        
                        <div class="card-body text-center mt-3">
                            <a class="h6 link" href="product.php">"TING TING" TEE</a>
                            <div class="price mt-2">
                                <span class="h5"><strong>350.000 VNĐ</strong></span>
                                <span class="h6 text-underline"><del>400.000 VNĐ</del></span>
                            </div>
                        </div>                        
                    </div>                                               
                </div>               
            </div>
        </div>
    </section>
</main>
<?php include('includes/footer.php');?>