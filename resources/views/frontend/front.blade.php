@extends('template.fronttemplate')
@section('main')
    <main>
        <!-- section1 -->
        <section>
            <div class="container">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide ">
                            <img src="https://freshcart.codescandy.com/assets/images/slider/slide-1.jpg" alt="">
                            <div class="swiperText text-start py-5 px-5 ">
                                <span class="badge text-bg-warning swiperText1 p-2">Free Shipping - orders over
                                    $100</span>
                                <br>
                                <span class="text-dark swiperText2 ">SuperMarket For Fresh Grocery </span>
                                <p class="mb-2 lead">Introduced a new model for online grocery shopping
                                    and convenient home delivery.</p>
                                <a href="#" class="btnButtonBlack p-2 text-decoration-none ">Shop Now
                                    <i class="fa-sharp fa-solid fa-arrow-right fa-2xs align-baseline ms-2"
                                        style="color: #ffffff;"></i>
                                </a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <img src="https://freshcart.codescandy.com/assets/images/slider/slider-2.jpg" alt="">
                            <div class="swiperText text-start py-5 px-5 ">
                                <span class="badge text-bg-warning swiperText1 p-2">Free Shipping - orders over
                                    $100</span>
                                <br>
                                <span class="text-dark swiperText2 ">Free Shipping on orders over <span
                                        class="fcolorGreen">$100</span></span>
                                <p class="mb-2 lead">Free Shipping to First-Time Customers Only, After promotions and
                                    discounts are applied.
                                </p>
                                <a href="#" class="btnButtonBlack p-2 text-decoration-none ">Shop Now
                                    <i class="fa-sharp fa-solid fa-arrow-right fa-2xs align-baseline ms-2"
                                        style="color: #ffffff;"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!-- section2 -->
        <section>
            <div class="container mb-5">
                <div class="smallHeadline col-12 mb-4 mt-3 position-relative">
                    <span class="sHeadline">Featured Categories</span>
                    <div id="swiper-button-prev" class="swiper-button-prev"></div>
                    <div id="swiper-button-next" class="swiper-button-next"></div>
                </div>

                <div class="">

                    <div id="swiperSmall mb-3" class="swiper mySwiper2">
                        <div class="swiper-wrapper d-flex">
                            <div class="swiper-slide">
                                <div class="card  swiper2Img w-100 align-items-center h-100">
                                    <img src="https://freshcart.codescandy.com/assets/images/category/category-dairy-bread-eggs.jpg"
                                        class="card-img-top" alt="...">
                                    <div class="card-body ">
                                        <span class="card-title fs-7">Dairy,Bread & Eggs</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card  swiper2Img w-100 align-items-center h-100 ">
                                    <img src="https://freshcart.codescandy.com/assets/images/category/category-snack-munchies.jpg"
                                        class="card-img-top" alt="...">
                                    <div class="card-body ">
                                        <span class="card-title fs-7 fs-7">Snack & Munchies</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card  swiper2Img w-100 align-items-center h-100">
                                    <img src="https://freshcart.codescandy.com/assets/images/category/category-bakery-biscuits.jpg"
                                        class="card-img-top" alt="...">
                                    <div class="card-body ">
                                        <span class="card-title fs-7">Bakery & Biscuits</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card  swiper2Img w-100 align-items-center h-100">
                                    <img src="https://freshcart.codescandy.com/assets/images/category/category-instant-food.jpg"
                                        class="card-img-top" alt="...">
                                    <div class="card-body ">
                                        <span class="card-title fs-7">Instant Food</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card  swiper2Img w-100 align-items-center h-100">
                                    <img src="https://freshcart.codescandy.com/assets/images/category/category-tea-coffee-drinks.jpg"
                                        class="card-img-top" alt="...">
                                    <div class="card-body ">
                                        <span class="card-title fs-7">Tea, Coffee & Drinks</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card  swiper2Img w-100 align-items-center h-100">
                                    <img src="https://freshcart.codescandy.com/assets/images/category/category-atta-rice-dal.jpg"
                                        class="card-img-top" alt="...">
                                    <div class="card-body ">
                                        <span class="card-title fs-7">Atta, Rice & Dal</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card  swiper2Img w-100 align-items-center h-100">
                                    <img src="https://freshcart.codescandy.com/assets/images/category/category-baby-care.jpg"
                                        class="card-img-top" alt="...">
                                    <div class="card-body ">
                                        <span class="card-title fs-7">Baby Care</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card  swiper2Img w-100 align-items-center h-100">
                                    <img src="https://freshcart.codescandy.com/assets/images/category/category-chicken-meat-fish.jpg
                                    "
                                        class="card-img-top " alt="...">
                                    <div class="card-body">
                                        <span class="card-title fs-7">Chicken, Meat & Fish</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card  swiper2Img w-100 align-items-center h-100">
                                    <img src="https://freshcart.codescandy.com/assets/images/category/category-cleaning-essentials.jpg"
                                        class="card-img-top" alt="...">
                                    <div class="card-body ">
                                        <span class="card-title fs-7">Cleaning Essentials</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card  swiper2Img w-100 align-items-center h-100">
                                    <img src="https://freshcart.codescandy.com/assets/images/category/category-pet-care.jpg"
                                        class="card-img-top" alt="...">
                                    <div class="card-body ">
                                        <span class="card-title fs-7">Pet Care</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section>
        <!-- section3 -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 mb-3 ">
                        <div class="py-5 px-5 rounded img1">
                            <span class="sHeadline">Fruits & Vegetables</span>
                            <p class="mb-4">Get Upto
                                <span class="fw-bold"> 30% </span>
                                Off
                            </p>
                            <a href="#" class="btnButtonBlack p-3 text-decoration-none">Shop Now</a>

                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4 ">
                        <div class=" py-5 px-5 rounded img2">
                            <span class="sHeadline">Featured Categories</span>
                            <p class="mb-4">Get Upto
                                <span class="fw-bold"> 25% </span>
                                Off
                            </p>
                            <a href="#" class="btnButtonBlack p-3 text-decoration-none">Shop Now</a>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section4 -->
        <section class="my-lg-5 my-4">
            <div class="container">
                <div class="smallHeadline col-12 mb-3">
                    <span class="sHeadline">Featured Categories</span>
                </div>
                <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-3 ">
                    @foreach ($products ?? [] as $product)
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <img class="mb-3"
                                        src="{{ asset($product->img_path)}}"
                                        alt=" Grocery Ecommerce Template"
                                        width="100%"
                                        height="150px">
                                    <div class=" mb-1 ">
                                        <span class="small">
                                            <a href="#" class="text-decoration-none text-muted">
                                                {{ $product->name }}
                                            </a>
                                        </span>
                                    </div>
                                    <div class="mb-1">
                                        <span class="sHeadline2  ">
                                            <a href="#" class="text-decoration-none text-muted">
                                                {{ $product->desc }}
                                            </a>
                                        </span>
                                    </div>
                                    <div class="mb-1">
                                        <span class="small  ">
                                            <i class="fa-solid fa-star-sharp fa-2xs" style="color: #ffc107;"></i>
                                            <i class="fa-solid fa-star-sharp fa-2xs" style="color: #ffc107;"></i>
                                            <i class="fa-solid fa-star-sharp fa-2xs" style="color: #ffc107;"></i>
                                            <i class="fa-solid fa-star-sharp fa-2xs" style="color: #ffc107;"></i>
                                            <i class="fa-solid fa-star-sharp-half-stroke fa-2xs" style="color: #ffc107;"></i>
                                            <a href="#" class="text-decoration-none text-muted">
                                                4.5(149)
                                            </a>
                                        </span>
                                    </div>

                                    <div>
                                        <span class="text-dark small mx-1 fw-bold">${{ $product->price }}</span>
                                        <span class="small mb-1 ">
                                            <a href="#" class="text-decoration-line-through text-muted">
                                                $
                                            </a>
                                        </span>
                                        <a href="#" class="btnButtonGreen p-2 px-3 text-decoration-none float-end">+
                                            Add</a>
                                    </div>



                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


            </div>
        </section>
        <!-- section5 -->
        <section>
            <div class="container">
                <div class="smallHeadline col-12 mb-4">
                    <span class="sHeadline">Daily Best Sells</span>
                </div>
                <div class="row row-cols-lg-4 row-cols-1 row-cols-md-2 g-4 flex-nowrap pb-5 overflow-x-auto">
                    <div class="col img3 rounded pt-5 px-4">
                        <div class="text-white fw-bold ">
                            <span class="sHeadline ">100% Organic Coffee Beans.</span>
                            <p class="mt-3 mb-3">Get the best deal before close.</p>
                            <a href="#" class="btnButtonGreen p-2 px-3 text-decoration-none ">Shop Now
                                <i class="fa-solid fa-arrow-right fa-2xs ms-2 align-baseline fw-bolder"
                                    style="color: #ffffff;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <img class="mb-3 img-fluid"
                                        src="https://freshcart.codescandy.com/assets/images/products/product-img-11.jpg"
                                        alt=" Grocery Ecommerce Template ">
                                </div>

                                <div class=" mb-1 ">
                                    <span class="small">
                                        <a href="#" class="text-decoration-none text-muted">
                                            Tea, Coffee & Drinks
                                        </a>
                                    </span>
                                </div>
                                <div class="mb-1">
                                    <span class="sHeadline2  ">
                                        <a href="#" class="text-decoration-none text-muted">
                                            Roast Ground Coffee
                                        </a>
                                    </span>
                                </div>
                                <div class="mb-1">
                                    <span class="text-dark small mx-1 fw-bold">$13</span>
                                    <span class="small mb-1 ">
                                        <a href="#" class="text-decoration-line-through text-muted">
                                            $18
                                        </a>
                                    </span>
                                    <span class="small float-end">
                                        <i class="fa-solid fa-star-sharp fa-2xs" style="color: #ffc107;"></i>
                                        <i class="fa-solid fa-star-sharp fa-2xs" style="color: #ffc107;"></i>
                                        <i class="fa-solid fa-star-sharp fa-2xs" style="color: #ffc107;"></i>
                                        <i class="fa-solid fa-star-sharp fa-2xs" style="color: #ffc107;"></i>
                                        <i class="fa-solid fa-star-sharp-half-stroke fa-2xs" style="color: #ffc107;"></i>
                                        <a href="#" class="text-decoration-none text-muted">
                                            4.5
                                        </a>
                                    </span>
                                </div>

                                <div>

                                    <a href="#"
                                        class="btnButtonGreen p-2 px-3 text-decoration-none w-100 d-block fw-bolder">+
                                        Add to cart</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <img class="mb-3 img-fluid"
                                        src="https://freshcart.codescandy.com/assets/images/products/product-img-12.jpg"
                                        alt=" Grocery Ecommerce Template ">
                                </div>

                                <div class=" mb-1 ">
                                    <span class="small">
                                        <a href="#" class="text-decoration-none text-muted">
                                            Fruits & Vegetables
                                        </a>
                                    </span>
                                </div>
                                <div class="mb-1">
                                    <span class="sHeadline2  ">
                                        <a href="#" class="text-decoration-none text-muted">
                                            Crushed Tomatoes
                                        </a>
                                    </span>
                                </div>
                                <div class="mb-1">
                                    <span class="text-dark small mx-1 fw-bold">$13</span>
                                    <span class="small mb-1 ">
                                        <a href="#" class="text-decoration-line-through text-muted">
                                            $18
                                        </a>
                                    </span>
                                    <span class="small float-end">
                                        <i class="fa-solid fa-star-sharp fa-2xs" style="color: #ffc107;"></i>
                                        <i class="fa-solid fa-star-sharp fa-2xs" style="color: #ffc107;"></i>
                                        <i class="fa-solid fa-star-sharp fa-2xs" style="color: #ffc107;"></i>
                                        <i class="fa-solid fa-star-sharp fa-2xs" style="color: #ffc107;"></i>
                                        <i class="fa-solid fa-star-sharp-half-stroke fa-2xs" style="color: #ffc107;"></i>
                                        <a href="#" class="text-decoration-none text-muted">
                                            4.5
                                        </a>
                                    </span>
                                </div>

                                <div>

                                    <a href="#"
                                        class="btnButtonGreen p-2 px-3 text-decoration-none w-100 d-block fw-bolder">+
                                        Add to cart</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <img class="mb-3 img-fluid"
                                        src="https://freshcart.codescandy.com/assets/images/products/product-img-13.jpg"
                                        alt=" Grocery Ecommerce Template ">
                                </div>

                                <div class=" mb-1 ">
                                    <span class="small">
                                        <a href="#" class="text-decoration-none text-muted">
                                            Fruits & Vegetables
                                        </a>
                                    </span>
                                </div>
                                <div class="mb-1">
                                    <span class="sHeadline2  ">
                                        <a href="#" class="text-decoration-none text-muted">
                                            Golden Pineapple
                                        </a>
                                    </span>
                                </div>
                                <div class="mb-1">
                                    <span class="text-dark small mx-1 fw-bold">$13</span>
                                    <span class="small mb-1 ">
                                        <a href="#" class="text-decoration-line-through text-muted">
                                            $18
                                        </a>
                                    </span>
                                    <span class="small float-end">
                                        <i class="fa-solid fa-star-sharp fa-2xs" style="color: #ffc107;"></i>
                                        <i class="fa-solid fa-star-sharp fa-2xs" style="color: #ffc107;"></i>
                                        <i class="fa-solid fa-star-sharp fa-2xs" style="color: #ffc107;"></i>
                                        <i class="fa-solid fa-star-sharp fa-2xs" style="color: #ffc107;"></i>
                                        <i class="fa-solid fa-star-sharp-half-stroke fa-2xs" style="color: #ffc107;"></i>
                                        <a href="#" class="text-decoration-none text-muted">
                                            4.5
                                        </a>
                                    </span>
                                </div>

                                <div>

                                    <a href="#"
                                        class="btnButtonGreen p-2 px-3 text-decoration-none w-100 d-block fw-bolder">+
                                        Add to cart</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <!-- section6 -->
        <section>
            <div class="container mb-5">
                <div class="row">
                    <div class="col-md-6 col-lg-3 mb-3 mb-xl-0">
                        <div class="mb-4">
                            <img src="https://freshcart.codescandy.com/assets/images/icons/clock.svg" alt="">
                        </div>
                        <span class="sHeadline ">10 minute grocery now </span>
                        <p class="mt-3">Get your order delivered to your doorstep at the earliest from FreshCart pickup
                            stores near you.</p>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-3 mb-xl-0">
                        <div class="mb-4">
                            <img src="https://freshcart.codescandy.com/assets/images/icons/gift.svg" alt="">
                        </div>
                        <span class="sHeadline ">Best Prices & Offers</span>
                        <p class="mt-3">Cheaper prices than your local supermarket, great cashback offers to top it off.
                            Get best pricess & offers.
                        </p>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-3 mb-xl-0">
                        <div class="mb-4">
                            <img src="https://freshcart.codescandy.com/assets/images/icons/package.svg" alt="">
                        </div>
                        <span class="sHeadline ">Wide Assortment</span>
                        <p class="mt-3">Choose from 5000+ products across food, personal care, household, bakery, veg
                            and non-veg & other categories.</p>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-3 mb-xl-0">
                        <div class="mb-4">
                            <img src="https://freshcart.codescandy.com/assets/images/icons/refresh-cw.svg" alt="">
                        </div>
                        <span class="sHeadline ">Easy Returns</span>
                        <p class="mt-3">Not satisfied with a product? Return it at the doorstep & get a refund within
                            hours. No questions asked <a href="#"
                                class="fcolorGreen fw-bold text-decoration-none">policy</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection



@section('js')

@endsection
