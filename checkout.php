<?php include('includes/header.php');?>
<main>
    <section class="section-5 pt-3 pb-3 mb-3 bg-white">
        <div class="container">
            <div class="light-font">
                <ol class="breadcrumb primary-color mb-0">
                    <li class="breadcrumb-item"><a class="white-text" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="white-text" href="#">Shop</a></li>
                    <li class="breadcrumb-item">Checkout</li>
                </ol>
            </div>
        </div>
    </section>

    <section class="section-9 pt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="sub-title">
                        <h2>Shipping Address</h2>
                    </div>
                    <div class="card shadow-lg border-0">
                        <div class="card-body checkout-form">
                            <div class="row">
                                
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name">
                                    </div>            
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name">
                                    </div>            
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                                    </div>            
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <textarea name="address" id="address" cols="30" rows="3" placeholder="Address" class="form-control"></textarea>
                                    </div>            
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Mobile No.">
                                    </div>            
                                </div>
                                

                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <textarea name="order_notes" id="order_notes" cols="30" rows="2" placeholder="Order Notes (optional)" class="form-control"></textarea>
                                    </div>            
                                </div>

                            </div>
                        </div>
                    </div>    
                </div>
                <div class="col-md-4">
                    <div class="sub-title">
                        <h2>Order Summery</h3>
                    </div>                    
                    <div class="card cart-summery">
                        <div class="card-body">
                            <div class="d-flex justify-content-between pb-2">
                                <div class="h6">STRIPES KHAKI PANTS X 1</div>
                                <div class="h6">650.000 VNĐ</div>
                            </div>
                            <div class="d-flex justify-content-between pb-2">
                                <div class="h6">$MAKER CORDUROY VARSITY X 2</div>
                                <div class="h6">1.700.000 VNĐ</div>
                            </div>
                            <div class="d-flex justify-content-between summery-end">
                                <div class="h6"><strong>Subtotal</strong></div>
                                <div class="h6"><strong>2.350.000 VNĐ</strong></div>
                            </div>
                            <div class="d-flex justify-content-between mt-2">
                                <div class="h6"><strong>Shipping</strong></div>
                                <div class="h6"><strong>50.000 VNĐ</strong></div>
                            </div>
                            <div class="d-flex justify-content-between mt-2 summery-end">
                                <div class="h5"><strong>Total</strong></div>
                                <div class="h5"><strong>2.400.000 VNĐ</strong></div>
                            </div>                            
                        </div>
                    </div>   
                    
                    <div class="card payment-form ">                        
                        <h3 class="card-title h5 mb-3">Payment</h3>
                        <div class="card-body p-0">
                            
                        <div class="input-group apply-coupan mt-4">
                        <input type="text" placeholder="Coupon Code" class="form-control">
                        <button class="btn btn-dark" type="button" id="button-addon2">Apply Coupon</button>
                    </div> 
                            <div class="pt-4">
                                <a href="#" class="btn-dark btn btn-block w-100">Order Now</a>
                            </div>
                        </div>                        
                    </div>

                          
                    <!-- CREDIT CARD FORM ENDS HERE -->
                    
                </div>
            </div>
        </div>
    </section>
</main>
<?php include('includes/footer.php');?>