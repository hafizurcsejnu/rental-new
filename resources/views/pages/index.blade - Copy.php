@extends('layouts.master') 

@section('content')

</div>
<div class="page-template-content">
    <div class="bravo-form-search-all" style="background-image: linear-gradient(0deg,rgba(0, 0, 0, 0.2),rgba(0, 0, 0, 0.2)),url('https://www.bookingcore.org/uploads/demo/general/home-mix.jpg') !important">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-heading">Hi There!</h1>
                    <div class="sub-heading">Where would you like to go?</div>
                    <div class="g-form-control">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="bravo_hotel">
                                <a href="#bravo_hotel" class=" active " aria-controls="bravo_hotel" role="tab" data-toggle="tab">
                                    <i class="fa fa-building-o"></i> Hotel
                                </a>
                            </li>
                            <li role="bravo_space">
                                <a href="#bravo_space" class="" aria-controls="bravo_space" role="tab" data-toggle="tab">
                                    <i class="icofont-building-alt"></i> Space
                                </a>
                            </li>
                            <li role="bravo_tour">
                                <a href="#bravo_tour" class="" aria-controls="bravo_tour" role="tab" data-toggle="tab">
                                    <i class="icofont-island-alt"></i> Tour
                                </a>
                            </li>
                            <li role="bravo_car">
                                <a href="#bravo_car" class="" aria-controls="bravo_car" role="tab" data-toggle="tab">
                                    <i class="icofont-car"></i> Car
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane  active " id="bravo_hotel">
                                <form action="https://www.bookingcore.org/en/hotel" class="form bravo_form" method="get">
                                    <div class="g-field-search">
                                        <div class="row">
                                            <div class="col-md-4 border-right">
                                                <div class="form-group">
                                                    <i class="field-icon fa icofont-map"></i>
                                                    <div class="form-content">
                                                        <label>Location</label>
                                                        <div class="smart-search">
                                                            <input type="text" class="smart-search-location parent_text form-control" readonly placeholder="Where are you going?" value="" data-onLoad="Loading..." data-default="[{&quot;id&quot;:3,&quot;title&quot;:&quot; California&quot;},{&quot;id&quot;:5,&quot;title&quot;:&quot; Los Angeles&quot;},{&quot;id&quot;:6,&quot;title&quot;:&quot; New Jersey&quot;},{&quot;id&quot;:2,&quot;title&quot;:&quot; New York, United States&quot;},{&quot;id&quot;:1,&quot;title&quot;:&quot; Paris&quot;},{&quot;id&quot;:7,&quot;title&quot;:&quot; San Francisco&quot;},{&quot;id&quot;:4,&quot;title&quot;:&quot; United States&quot;},{&quot;id&quot;:8,&quot;title&quot;:&quot; Virginia&quot;}]">
                                                            <input type="hidden" class="child_id" name="location_id" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 border-right">
                                                <div class="form-group">
                                                    <i class="field-icon icofont-wall-clock"></i>
                                                    <div class="form-content">
                                                        <div class="form-date-search-hotel">
                                                            <div class="date-wrapper">
                                                                <div class="check-in-wrapper">
                                                                    <label>Check In - Out</label>
                                                                    <div class="render check-in-render">03/20/2020</div>
                                                                    <span> - </span>
                                                                    <div class="render check-out-render">03/21/2020</div>
                                                                </div>
                                                            </div>
                                                            <input type="hidden" class="check-in-input" value="03/20/2020" name="start">
                                                            <input type="hidden" class="check-out-input" value="03/21/2020" name="end">
                                                            <input type="text" class="check-in-out" name="date" value="2020-03-20 - 2020-03-21">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 border-right dropdown form-select-guests">
                                                <div class="form-group">
                                                    <i class="field-icon icofont-travelling"></i>
                                                    <div class="form-content dropdown-toggle" data-toggle="dropdown">
                                                        <div class="wrapper-more">
                                                            <label>Guests</label>
                                                            <div class="render">
                                                                <span class="adults"><span class="one ">1 Adult</span> <span class=" d-none  multi" data-html=":count Adults">1 Adults</span></span>
                                                                -
                                                                <span class="children">
<span class="one " data-html=":count Child">0 Child</span>
                                                                <span class="multi  d-none " data-html=":count Children">0 Children</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-menu select-guests-dropdown">
                                                        <input type="hidden" name="adults" value="1" min="1" max="20">
                                                        <input type="hidden" name="children" value="0" min="0" max="20">
                                                        <input type="hidden" name="room" value="1" min="1" max="20">
                                                        <div class="dropdown-item-row">
                                                            <div class="label">Rooms</div>
                                                            <div class="val">
                                                                <span class="btn-minus" data-input="room"><i class="icon ion-md-remove"></i></span>
                                                                <span class="count-display">1</span>
                                                                <span class="btn-add" data-input="room"><i class="icon ion-ios-add"></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-item-row">
                                                            <div class="label">Adults</div>
                                                            <div class="val">
                                                                <span class="btn-minus" data-input="adults"><i class="icon ion-md-remove"></i></span>
                                                                <span class="count-display">1</span>
                                                                <span class="btn-add" data-input="adults"><i class="icon ion-ios-add"></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-item-row">
                                                            <div class="label">Children</div>
                                                            <div class="val">
                                                                <span class="btn-minus" data-input="children"><i class="icon ion-md-remove"></i></span>
                                                                <span class="count-display">0</span>
                                                                <span class="btn-add" data-input="children"><i class="icon ion-ios-add"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="g-button-submit">
                                        <button class="btn btn-primary btn-search" type="submit">Search</button>
                                    </div>
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane " id="bravo_space">
                                <form action="https://www.bookingcore.org/en/space" class="form bravo_form" method="get">
                                    <div class="g-field-search">
                                        <div class="row">
                                            <div class="col-md-4 border-right">
                                                <div class="form-group">
                                                    <i class="field-icon fa icofont-map"></i>
                                                    <div class="form-content">
                                                        <label>Location</label>
                                                        <div class="smart-search">
                                                            <input type="text" class="smart-search-location parent_text form-control" readonly placeholder="Where are you going?" value="" data-onLoad="Loading..." data-default="[{&quot;id&quot;:3,&quot;title&quot;:&quot; California&quot;},{&quot;id&quot;:5,&quot;title&quot;:&quot; Los Angeles&quot;},{&quot;id&quot;:6,&quot;title&quot;:&quot; New Jersey&quot;},{&quot;id&quot;:2,&quot;title&quot;:&quot; New York, United States&quot;},{&quot;id&quot;:1,&quot;title&quot;:&quot; Paris&quot;},{&quot;id&quot;:7,&quot;title&quot;:&quot; San Francisco&quot;},{&quot;id&quot;:4,&quot;title&quot;:&quot; United States&quot;},{&quot;id&quot;:8,&quot;title&quot;:&quot; Virginia&quot;}]">
                                                            <input type="hidden" class="child_id" name="location_id" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 border-right">
                                                <div class="form-group">
                                                    <i class="field-icon icofont-wall-clock"></i>
                                                    <div class="form-content">
                                                        <div class="form-date-search">
                                                            <div class="date-wrapper">
                                                                <div class="check-in-wrapper">
                                                                    <label>From - To</label>
                                                                    <div class="render check-in-render">03/20/2020</div>
                                                                    <span> - </span>
                                                                    <div class="render check-out-render">03/21/2020</div>
                                                                </div>
                                                            </div>
                                                            <input type="hidden" class="check-in-input" value="03/20/2020" name="start">
                                                            <input type="hidden" class="check-out-input" value="03/21/2020" name="end">
                                                            <input type="text" class="check-in-out" name="date" value="2020-03-20 - 2020-03-21">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 border-right dropdown form-select-guests">
                                                <div class="form-group">
                                                    <i class="field-icon icofont-travelling"></i>
                                                    <div class="form-content dropdown-toggle" data-toggle="dropdown">
                                                        <div class="wrapper-more">
                                                            <label>Guests</label>
                                                            <div class="render">
                                                                <span class="adults"><span class="one ">1 Adult</span> <span class=" d-none  multi" data-html=":count Adults">1 Adults</span></span>
                                                                -
                                                                <span class="children">
<span class="one " data-html=":count Child">0 Child</span>
                                                                <span class="multi  d-none " data-html=":count Children">0 Children</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-menu select-guests-dropdown">
                                                        <input type="hidden" name="adults" value="1" min="1" max="20">
                                                        <input type="hidden" name="children" value="0" min="0" max="20">
                                                        <div class="dropdown-item-row">
                                                            <div class="label">Adults</div>
                                                            <div class="val">
                                                                <span class="btn-minus" data-input="adults"><i class="icon ion-md-remove"></i></span>
                                                                <span class="count-display">1</span>
                                                                <span class="btn-add" data-input="adults"><i class="icon ion-ios-add"></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-item-row">
                                                            <div class="label">Children</div>
                                                            <div class="val">
                                                                <span class="btn-minus" data-input="children"><i class="icon ion-md-remove"></i></span>
                                                                <span class="count-display">0</span>
                                                                <span class="btn-add" data-input="children"><i class="icon ion-ios-add"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="g-button-submit">
                                        <button class="btn btn-primary btn-search" type="submit">Search</button>
                                    </div>
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane " id="bravo_tour">
                                <form action="https://www.bookingcore.org/en/tour" class="form bravo_form" method="get">
                                    <div class="g-field-search">
                                        <div class="row">
                                            <div class="col-md-6 border-right">
                                                <div class="form-group">
                                                    <i class="field-icon fa icofont-map"></i>
                                                    <div class="form-content">
                                                        <label>Location</label>
                                                        <div class="smart-search">
                                                            <input type="text" class="smart-search-location parent_text form-control" readonly placeholder="Where are you going?" value="" data-onLoad="Loading..." data-default="[{&quot;id&quot;:3,&quot;title&quot;:&quot; California&quot;},{&quot;id&quot;:5,&quot;title&quot;:&quot; Los Angeles&quot;},{&quot;id&quot;:6,&quot;title&quot;:&quot; New Jersey&quot;},{&quot;id&quot;:2,&quot;title&quot;:&quot; New York, United States&quot;},{&quot;id&quot;:1,&quot;title&quot;:&quot; Paris&quot;},{&quot;id&quot;:7,&quot;title&quot;:&quot; San Francisco&quot;},{&quot;id&quot;:4,&quot;title&quot;:&quot; United States&quot;},{&quot;id&quot;:8,&quot;title&quot;:&quot; Virginia&quot;}]">
                                                            <input type="hidden" class="child_id" name="location_id" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 border-right">
                                                <div class="form-group">
                                                    <i class="field-icon icofont-wall-clock"></i>
                                                    <div class="form-content">
                                                        <div class="form-date-search">
                                                            <div class="date-wrapper">
                                                                <div class="check-in-wrapper">
                                                                    <label>From - To</label>
                                                                    <div class="render check-in-render">03/20/2020</div>
                                                                    <span> - </span>
                                                                    <div class="render check-out-render">03/21/2020</div>
                                                                </div>
                                                            </div>
                                                            <input type="hidden" class="check-in-input" value="03/20/2020" name="start">
                                                            <input type="hidden" class="check-out-input" value="03/21/2020" name="end">
                                                            <input type="text" class="check-in-out" name="date" value="2020-03-20 - 2020-03-21">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="g-button-submit">
                                        <button class="btn btn-primary btn-search" type="submit">Search</button>
                                    </div>
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane " id="bravo_car">
                                <form action="https://www.bookingcore.org/en/car" class="form bravo_form" method="get">
                                    <div class="g-field-search">
                                        <div class="row">
                                            <div class="col-md-6 border-right">
                                                <div class="form-group">
                                                    <i class="field-icon fa icofont-map"></i>
                                                    <div class="form-content">
                                                        <label>Location</label>
                                                        <div class="smart-search">
                                                            <input type="text" class="smart-search-location parent_text form-control" readonly placeholder="Where are you going?" value="" data-onLoad="Loading..." data-default="[{&quot;id&quot;:3,&quot;title&quot;:&quot; California&quot;},{&quot;id&quot;:5,&quot;title&quot;:&quot; Los Angeles&quot;},{&quot;id&quot;:6,&quot;title&quot;:&quot; New Jersey&quot;},{&quot;id&quot;:2,&quot;title&quot;:&quot; New York, United States&quot;},{&quot;id&quot;:1,&quot;title&quot;:&quot; Paris&quot;},{&quot;id&quot;:7,&quot;title&quot;:&quot; San Francisco&quot;},{&quot;id&quot;:4,&quot;title&quot;:&quot; United States&quot;},{&quot;id&quot;:8,&quot;title&quot;:&quot; Virginia&quot;}]">
                                                            <input type="hidden" class="child_id" name="location_id" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 border-right">
                                                <div class="form-group">
                                                    <i class="field-icon icofont-wall-clock"></i>
                                                    <div class="form-content">
                                                        <div class="form-date-search">
                                                            <div class="date-wrapper">
                                                                <div class="check-in-wrapper">
                                                                    <label>From - To</label>
                                                                    <div class="render check-in-render">03/20/2020</div>
                                                                    <span> - </span>
                                                                    <div class="render check-out-render">03/21/2020</div>
                                                                </div>
                                                            </div>
                                                            <input type="hidden" class="check-in-input" value="03/20/2020" name="start">
                                                            <input type="hidden" class="check-out-input" value="03/21/2020" name="end">
                                                            <input type="text" class="check-in-out" name="date" value="2020-03-20 - 2020-03-21">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="g-button-submit">
                                        <button class="btn btn-primary btn-search" type="submit">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bravo-offer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="item">
                        <div class="featured-text">HOLIDAY SALE</div>
                        <h2 class="item-title">Special Offers</h2>
                        <p class="item-sub-title">Find Your Perfect Hotels Get the best
                            <br> prices on 20,000+ properties
                            <br> the best prices on</p>
                        <a href="#" class="btn btn-default">See Deals</a>
                        <div class="img-cover" style="background: url('https://www.bookingcore.org/uploads/demo/general/image_home_mix_1.jpg')"></div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item">
                        <div class="featured-icon"><i class="icofont-email"></i></div>
                        <h2 class="item-title">Newsletters</h2>
                        <p class="item-sub-title">Join for free and get our
                            <br> tailored newsletters full of
                            <br> hot travel deals.</p>
                        <a href="/register" class="btn btn-default">Sign Up</a>
                        <div class="img-cover" style="background: url('https://www.bookingcore.org/uploads/demo/general/image_home_mix_2.jpg')"></div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item">
                        <div class="featured-icon"><i class="icofont-island-alt"></i></div>
                        <h2 class="item-title">Travel Tips</h2>
                        <p class="item-sub-title">Tips from our travel experts to
                            <br> make your next trip even
                            <br> better.
                        </p>
                        <a href="/register" class="btn btn-default">Sign Up</a>
                        <div class="img-cover" style="background: url('https://www.bookingcore.org/uploads/demo/general/image_home_mix_3.jpg')"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="bravo-list-hotel layout_normal">
            <div class="title">
                Bestseller Listing
            </div>
            <div class="sub-title">
                Hotel highly rated for thoughtful design
            </div>
            <div class="list-item">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="item-loop ">
                            <div class="thumb-image ">
                                <a href="https://www.bookingcore.org/en/hotel/hotel-stanford">
                                    <img class='img-responsive lazy' data-src=https://www.bookingcore.org/uploads/demo/space/space-5.jpg alt='Hotel Stanford'>
                                </a>
                                <div class="star-rate">
                                    <div class="list-star">
                                        <ul class="booking-item-rating-stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="service-wishlist " data-id="1" data-type="hotel">
                                    <i class="fa fa-heart"></i>
                                </div>
                            </div>
                            <div class="item-title">
                                <a href="https://www.bookingcore.org/en/hotel/hotel-stanford">
Hotel Stanford
</a>
                            </div>
                            <div class="location">
                                Paris
                            </div>
                            <div class="service-review">
                                <span class="rate">
4.5/5 <span class="rate-text">Excellent</span>
                                </span>
                                <span class="review">
4 Reviews
</span>
                            </div>
                            <div class="info">
                                <div class="g-price">
                                    <div class="prefix">
                                        <span class="fr_text">from</span>
                                    </div>
                                    <div class="price">
                                        <span class="text-price">$300 <span class="unit">/night</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="item-loop ">
                            <div class="thumb-image ">
                                <a href="https://www.bookingcore.org/en/hotel/hotel-wbf-homachi">
                                    <img class='img-responsive lazy' data-src=https://www.bookingcore.org/uploads/demo/space/space-6.jpg alt='Hotel WBF Hommachi'>
                                </a>
                                <div class="star-rate">
                                    <div class="list-star">
                                        <ul class="booking-item-rating-stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="service-wishlist " data-id="2" data-type="hotel">
                                    <i class="fa fa-heart"></i>
                                </div>
                            </div>
                            <div class="item-title">
                                <a href="https://www.bookingcore.org/en/hotel/hotel-wbf-homachi">
Hotel WBF Hommachi
</a>
                            </div>
                            <div class="location">
                                Paris
                            </div>
                            <div class="service-review">
                                <span class="rate">
4.5/5 <span class="rate-text">Excellent</span>
                                </span>
                                <span class="review">
4 Reviews
</span>
                            </div>
                            <div class="info">
                                <div class="g-price">
                                    <div class="prefix">
                                        <span class="fr_text">from</span>
                                    </div>
                                    <div class="price">
                                        <span class="text-price">$350 <span class="unit">/night</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="item-loop ">
                            <div class="thumb-image ">
                                <a href="https://www.bookingcore.org/en/hotel/castello-casole-hotel">
                                    <img class='img-responsive lazy' data-src=https://www.bookingcore.org/uploads/demo/space/space-7.jpg alt='Castello Casole Hotel'>
                                </a>
                                <div class="star-rate">
                                    <div class="list-star">
                                        <ul class="booking-item-rating-stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="service-wishlist " data-id="3" data-type="hotel">
                                    <i class="fa fa-heart"></i>
                                </div>
                            </div>
                            <div class="item-title">
                                <a href="https://www.bookingcore.org/en/hotel/castello-casole-hotel">
Castello Casole Hotel
</a>
                            </div>
                            <div class="location">
                                Paris
                            </div>
                            <div class="service-review">
                                <span class="rate">
4.5/5 <span class="rate-text">Excellent</span>
                                </span>
                                <span class="review">
4 Reviews
</span>
                            </div>
                            <div class="info">
                                <div class="g-price">
                                    <div class="prefix">
                                        <span class="fr_text">from</span>
                                    </div>
                                    <div class="price">
                                        <span class="text-price">$350 <span class="unit">/night</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="item-loop ">
                            <div class="thumb-image ">
                                <a href="https://www.bookingcore.org/en/hotel/redac-gateway-hotel">
                                    <img class='img-responsive lazy' data-src=https://www.bookingcore.org/uploads/demo/space/space-8.jpg alt='Redac Gateway Hotel'>
                                </a>
                                <div class="star-rate">
                                    <div class="list-star">
                                        <ul class="booking-item-rating-stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="service-wishlist " data-id="4" data-type="hotel">
                                    <i class="fa fa-heart"></i>
                                </div>
                            </div>
                            <div class="item-title">
                                <a href="https://www.bookingcore.org/en/hotel/redac-gateway-hotel">
Redac Gateway Hotel
</a>
                            </div>
                            <div class="location">
                                Paris
                            </div>
                            <div class="service-review">
                                <span class="rate">
4.7/5 <span class="rate-text">Excellent</span>
                                </span>
                                <span class="review">
3 Reviews
</span>
                            </div>
                            <div class="info">
                                <div class="g-price">
                                    <div class="prefix">
                                        <span class="fr_text">from</span>
                                    </div>
                                    <div class="price">
                                        <span class="text-price">$500 <span class="unit">/night</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="bravo-list-locations  style_4 ">
            <div class="title">
                Top Destinations
            </div>
            <div class="sub-title">
                It is a long established fact that a reader
            </div>
            <div class="list-item">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="destination-item ">
                            <div class="image" style="background: url(https://www.bookingcore.org/uploads/demo/location/location-1.jpg)">
                                <div class="effect"></div>
                                <div class="content">
                                    <h4 class="title">Paris</h4>
                                    <div class="desc">
                                        <a href="https://www.bookingcore.org/en/space?location_id=1" target="_blank">
7 Spaces
</a>
                                        <a href="https://www.bookingcore.org/en/hotel?location_id=1" target="_blank">
6 Hotels
</a>
                                        <a href="https://www.bookingcore.org/en/tour?location_id=1" target="_blank">
5 Tours
</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="destination-item ">
                            <div class="image" style="background: url(https://www.bookingcore.org/uploads/demo/location/location-2.jpg)">
                                <div class="effect"></div>
                                <div class="content">
                                    <h4 class="title">New York, United States</h4>
                                    <div class="desc">
                                        <a href="https://www.bookingcore.org/en/space?location_id=2" target="_blank">
1 Space
</a>
                                        <a href="https://www.bookingcore.org/en/hotel?location_id=2" target="_blank">
2 Hotels
</a>
                                        <a href="https://www.bookingcore.org/en/tour?location_id=2" target="_blank">
4 Tours
</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="destination-item ">
                            <div class="image" style="background: url(https://www.bookingcore.org/uploads/demo/location/location-3.jpg)">
                                <div class="effect"></div>
                                <div class="content">
                                    <h4 class="title">California</h4>
                                    <div class="desc">
                                        <a href="https://www.bookingcore.org/en/space?location_id=3" target="_blank">
2 Spaces
</a>
                                        <a href="https://www.bookingcore.org/en/hotel?location_id=3" target="_blank">
1 Hotel
</a>
                                        <a href="https://www.bookingcore.org/en/tour?location_id=3" target="_blank">
1 Tour
</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="destination-item ">
                            <div class="image" style="background: url(https://www.bookingcore.org/uploads/demo/location/location-4.jpg)">
                                <div class="effect"></div>
                                <div class="content">
                                    <h4 class="title">United States</h4>
                                    <div class="desc">
                                        <a href="https://www.bookingcore.org/en/space?location_id=4" target="_blank">
1 Space
</a>
                                        <a href="https://www.bookingcore.org/en/tour?location_id=4" target="_blank">
1 Tour
</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="destination-item ">
                            <div class="image" style="background: url(https://www.bookingcore.org/uploads/demo/location/location-5.jpg)">
                                <div class="effect"></div>
                                <div class="content">
                                    <h4 class="title">Los Angeles</h4>
                                    <div class="desc">
                                        <a href="https://www.bookingcore.org/en/hotel?location_id=5" target="_blank">
2 Hotels
</a>
                                        <a href="https://www.bookingcore.org/en/tour?location_id=5" target="_blank">
1 Tour
</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="destination-item ">
                            <div class="image" style="background: url(https://www.bookingcore.org/uploads/demo/location/location-1.jpg)">
                                <div class="effect"></div>
                                <div class="content">
                                    <h4 class="title">New Jersey</h4>
                                    <div class="desc">
                                        <a href="https://www.bookingcore.org/en/tour?location_id=6" target="_blank">
1 Tour
</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bravo-list-tour box_shadow">
        <div class="container">
            <div class="title">
                Our best promotion tours
                <div class="sub-title">
                    Most popular destinations
                </div>
            </div>
            <div class="list-item">
                <div class="row row-eq-height">
                    <div class="col-lg-4 col-md-6 col-item">
                        <div class="item">
                            <div class="header-thumb">
                                <div class="sale_info">61%</div>
                                <img class='img-responsive lazy' data-src=https://www.bookingcore.org/uploads/demo/tour/tour-1.jpg alt='American Parks Trail end Rapid City'>
                                <a class="st-btn st-btn-primary tour-book-now" href="https://www.bookingcore.org/en/tour/american-parks-trail">Book now</a>
                                <div class="service-wishlist " data-id="1" data-type="tour">
                                    <i class="fa fa-heart"></i>
                                </div>
                            </div>
                            <div class="caption clear">
                                <div class="title-address">
                                    <h3 class="title"><a href="https://www.bookingcore.org/en/tour/american-parks-trail"> American Parks Trail end Rapid City </a></h3>
                                    <p class="duration">
                                        <span>
4 hours
</span> -
                                        <i>
Paris
</i>
                                    </p>
                                </div>
                                <div class="g-price">
                                    <div class="price">
                                        <span class="onsale">$2.000</span>
                                        <span class="text-price">$764</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-item">
                        <div class="item">
                            <div class="featured">
                                Featured
                            </div>
                            <div class="header-thumb">
                                <div class="sale_info">68%</div>
                                <img class='img-responsive lazy' data-src=https://www.bookingcore.org/uploads/demo/tour/tour-2.jpg alt='New York: Museum of Modern Art'>
                                <a class="st-btn st-btn-primary tour-book-now" href="https://www.bookingcore.org/en/tour/new-york-museum-of-modern-art">Book now</a>
                                <div class="service-wishlist " data-id="2" data-type="tour">
                                    <i class="fa fa-heart"></i>
                                </div>
                            </div>
                            <div class="caption clear">
                                <div class="title-address">
                                    <h3 class="title"><a href="https://www.bookingcore.org/en/tour/new-york-museum-of-modern-art"> New York: Museum of Modern Art </a></h3>
                                    <p class="duration">
                                        <span>
5 hours
</span> -
                                        <i>
Paris
</i>
                                    </p>
                                </div>
                                <div class="g-price">
                                    <div class="price">
                                        <span class="onsale">$900</span>
                                        <span class="text-price">$283</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-item">
                        <div class="item">
                            <div class="featured">
                                Featured
                            </div>
                            <div class="header-thumb">
                                <div class="sale_info">46%</div>
                                <img class='img-responsive lazy' data-src=https://www.bookingcore.org/uploads/demo/tour/tour-3.jpg alt='Los Angeles to San Francisco Express '>
                                <a class="st-btn st-btn-primary tour-book-now" href="https://www.bookingcore.org/en/tour/los-angeles-to-san-francisco-express">Book now</a>
                                <div class="service-wishlist " data-id="3" data-type="tour">
                                    <i class="fa fa-heart"></i>
                                </div>
                            </div>
                            <div class="caption clear">
                                <div class="title-address">
                                    <h3 class="title"><a href="https://www.bookingcore.org/en/tour/los-angeles-to-san-francisco-express"> Los Angeles to San Francisco Express </a></h3>
                                    <p class="duration">
                                        <span>
1 hour
</span> -
                                        <i>
Paris
</i>
                                    </p>
                                </div>
                                <div class="g-price">
                                    <div class="price">
                                        <span class="onsale">$1.500</span>
                                        <span class="text-price">$797</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-item">
                        <div class="item">
                            <div class="featured">
                                Featured
                            </div>
                            <div class="header-thumb">
                                <div class="sale_info">58%</div>
                                <img class='img-responsive lazy' data-src=https://www.bookingcore.org/uploads/demo/tour/tour-4.jpg alt='Paris Vacation Travel '>
                                <a class="st-btn st-btn-primary tour-book-now" href="https://www.bookingcore.org/en/tour/paris-vacation-travel">Book now</a>
                                <div class="service-wishlist " data-id="4" data-type="tour">
                                    <i class="fa fa-heart"></i>
                                </div>
                            </div>
                            <div class="caption clear">
                                <div class="title-address">
                                    <h3 class="title"><a href="https://www.bookingcore.org/en/tour/paris-vacation-travel"> Paris Vacation Travel </a></h3>
                                    <p class="duration">
                                        <span>
6 hours
</span> -
                                        <i>
New York, United States
</i>
                                    </p>
                                </div>
                                <div class="g-price">
                                    <div class="price">
                                        <span class="onsale">$850</span>
                                        <span class="text-price">$349</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-item">
                        <div class="item">
                            <div class="header-thumb">
                                <div class="sale_info">6%</div>
                                <img class='img-responsive lazy' data-src=https://www.bookingcore.org/uploads/demo/tour/tour-5.jpg alt='Southwest States (Ex Los Angeles) '>
                                <a class="st-btn st-btn-primary tour-book-now" href="https://www.bookingcore.org/en/tour/southwest-states">Book now</a>
                                <div class="service-wishlist " data-id="5" data-type="tour">
                                    <i class="fa fa-heart"></i>
                                </div>
                            </div>
                            <div class="caption clear">
                                <div class="title-address">
                                    <h3 class="title"><a href="https://www.bookingcore.org/en/tour/southwest-states"> Southwest States (Ex Los Angeles) </a></h3>
                                    <p class="duration">
                                        <span>
6 hours
</span> -
                                        <i>
New York, United States
</i>
                                    </p>
                                </div>
                                <div class="g-price">
                                    <div class="price">
                                        <span class="onsale">$1.900</span>
                                        <span class="text-price">$1.775</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-item">
                        <div class="item">
                            <div class="featured">
                                Featured
                            </div>
                            <div class="header-thumb">
                                <div class="sale_info">81%</div>
                                <img class='img-responsive lazy' data-src=https://www.bookingcore.org/uploads/demo/tour/tour-6.jpg alt='Eastern Discovery (Start New Orleans)'>
                                <a class="st-btn st-btn-primary tour-book-now" href="https://www.bookingcore.org/en/tour/eastern-discovery-start-new-orleans">Book now</a>
                                <div class="service-wishlist " data-id="6" data-type="tour">
                                    <i class="fa fa-heart"></i>
                                </div>
                            </div>
                            <div class="caption clear">
                                <div class="title-address">
                                    <h3 class="title"><a href="https://www.bookingcore.org/en/tour/eastern-discovery-start-new-orleans"> Eastern Discovery (Start New Orleans) </a></h3>
                                    <p class="duration">
                                        <span>
3 hours
</span> -
                                        <i>
New York, United States
</i>
                                    </p>
                                </div>
                                <div class="g-price">
                                    <div class="price">
                                        <span class="onsale">$2.100</span>
                                        <span class="text-price">$389</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="bravo-list-space layout_normal">
            <div class="title">
                Rental Listing
            </div>
            <div class="sub-title">
                Homes highly rated for thoughtful design
            </div>
            <div class="list-item">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="item-loop ">
                            <div class="featured">
                                Featured
                            </div>
                            <div class="thumb-image ">
                                <a href="https://www.bookingcore.org/en/space/stay-greenwich-village">
                                    <img class='img-responsive lazy' data-src=https://www.bookingcore.org/uploads/demo/space/space-11.jpg alt='STAY GREENWICH VILLAGE'>
                                </a>
                                <div class="price-wrapper">
                                    <div class="price">
                                        <span class="onsale">$300</span>
                                        <span class="text-price">$150 <span class="unit">/day</span></span>
                                    </div>
                                </div>
                                <div class="service-wishlist " data-id="11" data-type="space">
                                    <i class="fa fa-heart"></i>
                                </div>
                            </div>
                            <div class="item-title">
                                <a href="https://www.bookingcore.org/en/space/stay-greenwich-village">
STAY GREENWICH VILLAGE
</a>
                                <div class="sale_info">50%</div>
                            </div>
                            <div class="location">
                                Paris
                            </div>
                            <div class="service-review">
                                <span class="rate">
4.5/5 <span class="rate-text">Excellent</span>
                                </span>
                                <span class="review">
4 Reviews
</span>
                            </div>
                            <div class="amenities">
                                <span class="amenity total" data-toggle="tooltip" title="No. People">
<i class="input-icon field-icon icofont-people  "></i> 7
</span>
                                <span class="amenity bed" data-toggle="tooltip" title="No. Bed">
<i class="input-icon field-icon icofont-hotel"></i> 7
</span>
                                <span class="amenity bath" data-toggle="tooltip" title="No. Bathroom">
<i class="input-icon field-icon icofont-bathtub"></i> 9
</span>
                                <span class="amenity size" data-toggle="tooltip" title="Square">
<i class="input-icon field-icon icofont-ruler-compass-alt"></i> 144 sqft
</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="item-loop ">
                            <div class="thumb-image ">
                                <a href="https://www.bookingcore.org/en/space/lily-dale-village">
                                    <img class='img-responsive lazy' data-src=https://www.bookingcore.org/uploads/demo/space/space-10.jpg alt='LILY DALE VILLAGE'>
                                </a>
                                <div class="price-wrapper">
                                    <div class="price">
                                        <span class="onsale"></span>
                                        <span class="text-price">$250 <span class="unit">/day</span></span>
                                    </div>
                                </div>
                                <div class="service-wishlist " data-id="10" data-type="space">
                                    <i class="fa fa-heart"></i>
                                </div>
                            </div>
                            <div class="item-title">
                                <a href="https://www.bookingcore.org/en/space/lily-dale-village">
LILY DALE VILLAGE
</a>
                            </div>
                            <div class="location">
                                Paris
                            </div>
                            <div class="service-review">
                                <span class="rate">
4.3/5 <span class="rate-text">Very Good</span>
                                </span>
                                <span class="review">
4 Reviews
</span>
                            </div>
                            <div class="amenities">
                                <span class="amenity total" data-toggle="tooltip" title="No. People">
<i class="input-icon field-icon icofont-people  "></i> 5
</span>
                                <span class="amenity bed" data-toggle="tooltip" title="No. Bed">
<i class="input-icon field-icon icofont-hotel"></i> 7
</span>
                                <span class="amenity bath" data-toggle="tooltip" title="No. Bathroom">
<i class="input-icon field-icon icofont-bathtub"></i> 4
</span>
                                <span class="amenity size" data-toggle="tooltip" title="Square">
<i class="input-icon field-icon icofont-ruler-compass-alt"></i> 119 sqft
</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="item-loop ">
                            <div class="featured">
                                Featured
                            </div>
                            <div class="thumb-image ">
                                <a href="https://www.bookingcore.org/en/space/luxury-single">
                                    <img class='img-responsive lazy' data-src=https://www.bookingcore.org/uploads/demo/space/space-9.jpg alt='LUXURY SINGLE'>
                                </a>
                                <div class="price-wrapper">
                                    <div class="price">
                                        <span class="onsale">$400</span>
                                        <span class="text-price">$350 <span class="unit">/day</span></span>
                                    </div>
                                </div>
                                <div class="service-wishlist " data-id="9" data-type="space">
                                    <i class="fa fa-heart"></i>
                                </div>
                            </div>
                            <div class="item-title">
                                <a href="https://www.bookingcore.org/en/space/luxury-single">
LUXURY SINGLE
</a>
                                <div class="sale_info">12%</div>
                            </div>
                            <div class="location">
                                Paris
                            </div>
                            <div class="service-review">
                                <span class="rate">
4.0/5 <span class="rate-text">Very Good</span>
                                </span>
                                <span class="review">
2 Reviews
</span>
                            </div>
                            <div class="amenities">
                                <span class="amenity total" data-toggle="tooltip" title="No. People">
<i class="input-icon field-icon icofont-people  "></i> 6
</span>
                                <span class="amenity bed" data-toggle="tooltip" title="No. Bed">
<i class="input-icon field-icon icofont-hotel"></i> 3
</span>
                                <span class="amenity bath" data-toggle="tooltip" title="No. Bathroom">
<i class="input-icon field-icon icofont-bathtub"></i> 3
</span>
                                <span class="amenity size" data-toggle="tooltip" title="Square">
<i class="input-icon field-icon icofont-ruler-compass-alt"></i> 126 sqft
</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="item-loop ">
                            <div class="featured">
                                Featured
                            </div>
                            <div class="thumb-image ">
                                <a href="https://www.bookingcore.org/en/space/paris-greenwich-villa">
                                    <img class='img-responsive lazy' data-src=https://www.bookingcore.org/uploads/demo/space/space-8.jpg alt='PARIS GREENWICH VILLA'>
                                </a>
                                <div class="price-wrapper">
                                    <div class="price">
                                        <span class="onsale"></span>
                                        <span class="text-price">$500 <span class="unit">/day</span></span>
                                    </div>
                                </div>
                                <div class="service-wishlist " data-id="8" data-type="space">
                                    <i class="fa fa-heart"></i>
                                </div>
                            </div>
                            <div class="item-title">
                                <a href="https://www.bookingcore.org/en/space/paris-greenwich-villa">
PARIS GREENWICH VILLA
</a>
                            </div>
                            <div class="location">
                                Paris
                            </div>
                            <div class="service-review">
                                <span class="rate">
4.6/5 <span class="rate-text">Excellent</span>
                                </span>
                                <span class="review">
5 Reviews
</span>
                            </div>
                            <div class="amenities">
                                <span class="amenity total" data-toggle="tooltip" title="No. People">
<i class="input-icon field-icon icofont-people  "></i> 8
</span>
                                <span class="amenity bed" data-toggle="tooltip" title="No. Bed">
<i class="input-icon field-icon icofont-hotel"></i> 7
</span>
                                <span class="amenity bath" data-toggle="tooltip" title="No. Bathroom">
<i class="input-icon field-icon icofont-bathtub"></i> 7
</span>
                                <span class="amenity size" data-toggle="tooltip" title="Square">
<i class="input-icon field-icon icofont-ruler-compass-alt"></i> 142 sqft
</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="bravo-list-car layout_normal">
            <div class="title">
                Car Trending
            </div>
            <div class="sub-title">
                Book incredible things to do around the world.
            </div>
            <div class="list-item">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="item-loop ">
                            <div class="featured">
                                Featured
                            </div>
                            <div class="thumb-image ">
                                <a href="https://www.bookingcore.org/en/car/vinfast-fadil-standard">
                                    <img class='img-responsive lazy' data-src=https://www.bookingcore.org/uploads/demo/car/car-12.jpg alt='Vinfast Fadil Standard'>
                                </a>
                                <div class="service-wishlist " data-id="13" data-type="car">
                                    <i class="fa fa-heart-o"></i>
                                </div>
                            </div>
                            <div class="item-title">
                                <a href="https://www.bookingcore.org/en/car/vinfast-fadil-standard">
                                    <i class="fa fa-bolt d-none"></i> Vinfast Fadil Standard
                                </a>
                            </div>
                            <div class="location">
                                Paris
                            </div>
                            <div class="amenities">
                                <span class="amenity total" data-toggle="tooltip" title="Passenger">
<i class="input-icon field-icon icon-passenger  "></i>
<span class="text">
8
</span>
                                </span>
                                <span class="amenity bed" data-toggle="tooltip" title="Gear Shift">
<i class="input-icon field-icon icon-gear"></i>
<span class="text">
Auto
</span>
                                </span>
                                <span class="amenity bath" data-toggle="tooltip" title="Baggage">
<i class="input-icon field-icon icon-baggage"></i>
<span class="text">
8
</span>
                                </span>
                                <span class="amenity size" data-toggle="tooltip" title="Door">
<i class="input-icon field-icon icon-door"></i>
<span class="text">
4
</span>
                                </span>
                            </div>
                            <div class="info">
                                <div class="g-price">
                                    <div class="prefix">
                                        <span class="fr_text">from</span>
                                    </div>
                                    <div class="price">
                                        <span class="onsale"></span>
                                        <span class="text-price">$400 <span class="unit">/night</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="item-loop ">
                            <div class="featured">
                                Featured
                            </div>
                            <div class="thumb-image ">
                                <a href="https://www.bookingcore.org/en/car/vinfast-lux-a20-plus">
                                    <img class='img-responsive lazy' data-src=https://www.bookingcore.org/uploads/demo/car/car-11.jpg alt='Vinfast Lux A2.0 Plus'>
                                </a>
                                <div class="service-wishlist " data-id="12" data-type="car">
                                    <i class="fa fa-heart-o"></i>
                                </div>
                            </div>
                            <div class="item-title">
                                <a href="https://www.bookingcore.org/en/car/vinfast-lux-a20-plus">
Vinfast Lux A2.0 Plus
</a>
                            </div>
                            <div class="location">
                                California
                            </div>
                            <div class="amenities">
                                <span class="amenity total" data-toggle="tooltip" title="Passenger">
<i class="input-icon field-icon icon-passenger  "></i>
<span class="text">
8
</span>
                                </span>
                                <span class="amenity bed" data-toggle="tooltip" title="Gear Shift">
<i class="input-icon field-icon icon-gear"></i>
<span class="text">
Auto
</span>
                                </span>
                                <span class="amenity bath" data-toggle="tooltip" title="Baggage">
<i class="input-icon field-icon icon-baggage"></i>
<span class="text">
8
</span>
                                </span>
                                <span class="amenity size" data-toggle="tooltip" title="Door">
<i class="input-icon field-icon icon-door"></i>
<span class="text">
4
</span>
                                </span>
                            </div>
                            <div class="info">
                                <div class="g-price">
                                    <div class="prefix">
                                        <span class="fr_text">from</span>
                                    </div>
                                    <div class="price">
                                        <span class="onsale"></span>
                                        <span class="text-price">$350 <span class="unit">/night</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="item-loop ">
                            <div class="thumb-image ">
                                <a href="https://www.bookingcore.org/en/car/vinfast-lux-v8-suv">
                                    <img class='img-responsive lazy' data-src=https://www.bookingcore.org/uploads/demo/car/car-10.jpg alt='Vinfast Lux V8 (SUV)'>
                                </a>
                                <div class="service-wishlist " data-id="11" data-type="car">
                                    <i class="fa fa-heart-o"></i>
                                </div>
                            </div>
                            <div class="item-title">
                                <a href="https://www.bookingcore.org/en/car/vinfast-lux-v8-suv">
                                    <i class="fa fa-bolt d-none"></i> Vinfast Lux V8 (SUV)
                                </a>
                            </div>
                            <div class="location">
                                Virginia
                            </div>
                            <div class="amenities">
                                <span class="amenity total" data-toggle="tooltip" title="Passenger">
<i class="input-icon field-icon icon-passenger  "></i>
<span class="text">
8
</span>
                                </span>
                                <span class="amenity bed" data-toggle="tooltip" title="Gear Shift">
<i class="input-icon field-icon icon-gear"></i>
<span class="text">
Auto
</span>
                                </span>
                                <span class="amenity bath" data-toggle="tooltip" title="Baggage">
<i class="input-icon field-icon icon-baggage"></i>
<span class="text">
8
</span>
                                </span>
                                <span class="amenity size" data-toggle="tooltip" title="Door">
<i class="input-icon field-icon icon-door"></i>
<span class="text">
4
</span>
                                </span>
                            </div>
                            <div class="info">
                                <div class="g-price">
                                    <div class="prefix">
                                        <span class="fr_text">from</span>
                                    </div>
                                    <div class="price">
                                        <span class="onsale"></span>
                                        <span class="text-price">$250 <span class="unit">/night</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="item-loop ">
                            <div class="thumb-image ">
                                <a href="https://www.bookingcore.org/en/car/toyota-prius-plus">
                                    <img class='img-responsive lazy' data-src=https://www.bookingcore.org/uploads/demo/car/car-9.jpg alt='Toyota Prius Plus'>
                                </a>
                                <div class="service-wishlist " data-id="10" data-type="car">
                                    <i class="fa fa-heart-o"></i>
                                </div>
                            </div>
                            <div class="item-title">
                                <a href="https://www.bookingcore.org/en/car/toyota-prius-plus">
                                    <i class="fa fa-bolt d-none"></i> Toyota Prius Plus
                                </a>
                            </div>
                            <div class="location">
                                San Francisco
                            </div>
                            <div class="amenities">
                                <span class="amenity total" data-toggle="tooltip" title="Passenger">
<i class="input-icon field-icon icon-passenger  "></i>
<span class="text">
4
</span>
                                </span>
                                <span class="amenity bed" data-toggle="tooltip" title="Gear Shift">
<i class="input-icon field-icon icon-gear"></i>
<span class="text">
Auto
</span>
                                </span>
                                <span class="amenity bath" data-toggle="tooltip" title="Baggage">
<i class="input-icon field-icon icon-baggage"></i>
<span class="text">
7
</span>
                                </span>
                                <span class="amenity size" data-toggle="tooltip" title="Door">
<i class="input-icon field-icon icon-door"></i>
<span class="text">
4
</span>
                                </span>
                            </div>
                            <div class="info">
                                <div class="g-price">
                                    <div class="prefix">
                                        <span class="fr_text">from</span>
                                    </div>
                                    <div class="price">
                                        <span class="onsale"></span>
                                        <span class="text-price">$199 <span class="unit">/night</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="item-loop ">
                            <div class="featured">
                                Featured
                            </div>
                            <div class="thumb-image ">
                                <a href="https://www.bookingcore.org/en/car/honda-civic">
                                    <img class='img-responsive lazy' data-src=https://www.bookingcore.org/uploads/demo/car/car-8.jpg alt='Honda Civic'>
                                </a>
                                <div class="service-wishlist " data-id="9" data-type="car">
                                    <i class="fa fa-heart-o"></i>
                                </div>
                            </div>
                            <div class="item-title">
                                <a href="https://www.bookingcore.org/en/car/honda-civic">
                                    <i class="fa fa-bolt d-none"></i> Honda Civic
                                </a>
                            </div>
                            <div class="location">
                                New Jersey
                            </div>
                            <div class="amenities">
                                <span class="amenity total" data-toggle="tooltip" title="Passenger">
<i class="input-icon field-icon icon-passenger  "></i>
<span class="text">
7
</span>
                                </span>
                                <span class="amenity bed" data-toggle="tooltip" title="Gear Shift">
<i class="input-icon field-icon icon-gear"></i>
<span class="text">
Auto
</span>
                                </span>
                                <span class="amenity bath" data-toggle="tooltip" title="Baggage">
<i class="input-icon field-icon icon-baggage"></i>
<span class="text">
3
</span>
                                </span>
                                <span class="amenity size" data-toggle="tooltip" title="Door">
<i class="input-icon field-icon icon-door"></i>
<span class="text">
4
</span>
                                </span>
                            </div>
                            <div class="info">
                                <div class="g-price">
                                    <div class="prefix">
                                        <span class="fr_text">from</span>
                                    </div>
                                    <div class="price">
                                        <span class="onsale"></span>
                                        <span class="text-price">$450 <span class="unit">/night</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="item-loop ">
                            <div class="thumb-image ">
                                <a href="https://www.bookingcore.org/en/car/vinfast-lux-sa20-plus">
                                    <img class='img-responsive lazy' data-src=https://www.bookingcore.org/uploads/demo/car/car-7.jpg alt='Vinfast Lux SA2.0 Plus'>
                                </a>
                                <div class="service-wishlist " data-id="8" data-type="car">
                                    <i class="fa fa-heart-o"></i>
                                </div>
                            </div>
                            <div class="item-title">
                                <a href="https://www.bookingcore.org/en/car/vinfast-lux-sa20-plus">
Vinfast Lux SA2.0 Plus
</a>
                            </div>
                            <div class="location">
                                Paris
                            </div>
                            <div class="amenities">
                                <span class="amenity total" data-toggle="tooltip" title="Passenger">
<i class="input-icon field-icon icon-passenger  "></i>
<span class="text">
8
</span>
                                </span>
                                <span class="amenity bed" data-toggle="tooltip" title="Gear Shift">
<i class="input-icon field-icon icon-gear"></i>
<span class="text">
Auto
</span>
                                </span>
                                <span class="amenity bath" data-toggle="tooltip" title="Baggage">
<i class="input-icon field-icon icon-baggage"></i>
<span class="text">
6
</span>
                                </span>
                                <span class="amenity size" data-toggle="tooltip" title="Door">
<i class="input-icon field-icon icon-door"></i>
<span class="text">
4
</span>
                                </span>
                            </div>
                            <div class="info">
                                <div class="g-price">
                                    <div class="prefix">
                                        <span class="fr_text">from</span>
                                    </div>
                                    <div class="price">
                                        <span class="onsale"></span>
                                        <span class="text-price">$600 <span class="unit">/night</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="item-loop ">
                            <div class="featured">
                                Featured
                            </div>
                            <div class="thumb-image ">
                                <a href="https://www.bookingcore.org/en/car/mercedes-benz">
                                    <img class='img-responsive lazy' data-src=https://www.bookingcore.org/uploads/demo/car/car-6.jpg alt='Mercedes Benz'>
                                </a>
                                <div class="service-wishlist " data-id="7" data-type="car">
                                    <i class="fa fa-heart-o"></i>
                                </div>
                            </div>
                            <div class="item-title">
                                <a href="https://www.bookingcore.org/en/car/mercedes-benz">
Mercedes Benz
</a>
                            </div>
                            <div class="location">
                                Paris
                            </div>
                            <div class="amenities">
                                <span class="amenity total" data-toggle="tooltip" title="Passenger">
<i class="input-icon field-icon icon-passenger  "></i>
<span class="text">
9
</span>
                                </span>
                                <span class="amenity bed" data-toggle="tooltip" title="Gear Shift">
<i class="input-icon field-icon icon-gear"></i>
<span class="text">
Auto
</span>
                                </span>
                                <span class="amenity bath" data-toggle="tooltip" title="Baggage">
<i class="input-icon field-icon icon-baggage"></i>
<span class="text">
10
</span>
                                </span>
                                <span class="amenity size" data-toggle="tooltip" title="Door">
<i class="input-icon field-icon icon-door"></i>
<span class="text">
4
</span>
                                </span>
                            </div>
                            <div class="info">
                                <div class="g-price">
                                    <div class="prefix">
                                        <span class="fr_text">from</span>
                                    </div>
                                    <div class="price">
                                        <span class="onsale"></span>
                                        <span class="text-price">$200 <span class="unit">/night</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="item-loop ">
                            <div class="thumb-image ">
                                <a href="https://www.bookingcore.org/en/car/vinfast-fadil-plus">
                                    <img class='img-responsive lazy' data-src=https://www.bookingcore.org/uploads/demo/car/car-5.jpg alt='Vinfast Fadil Plus'>
                                </a>
                                <div class="service-wishlist " data-id="6" data-type="car">
                                    <i class="fa fa-heart-o"></i>
                                </div>
                            </div>
                            <div class="item-title">
                                <a href="https://www.bookingcore.org/en/car/vinfast-fadil-plus">
                                    <i class="fa fa-bolt d-none"></i> Vinfast Fadil Plus
                                </a>
                            </div>
                            <div class="location">
                                Paris
                            </div>
                            <div class="amenities">
                                <span class="amenity total" data-toggle="tooltip" title="Passenger">
<i class="input-icon field-icon icon-passenger  "></i>
<span class="text">
6
</span>
                                </span>
                                <span class="amenity bed" data-toggle="tooltip" title="Gear Shift">
<i class="input-icon field-icon icon-gear"></i>
<span class="text">
Auto
</span>
                                </span>
                                <span class="amenity bath" data-toggle="tooltip" title="Baggage">
<i class="input-icon field-icon icon-baggage"></i>
<span class="text">
3
</span>
                                </span>
                                <span class="amenity size" data-toggle="tooltip" title="Door">
<i class="input-icon field-icon icon-door"></i>
<span class="text">
4
</span>
                                </span>
                            </div>
                            <div class="info">
                                <div class="g-price">
                                    <div class="prefix">
                                        <span class="fr_text">from</span>
                                    </div>
                                    <div class="price">
                                        <span class="onsale"></span>
                                        <span class="text-price">$400 <span class="unit">/night</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bravo-list-news">
        <div class="container">
            <div class="title">
                Read the latest from blog
                <div class="sub-title">
                    Contrary to popular belief
                </div>
            </div>
            <div class="list-item">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="item-news">
                            <div class="thumb-image">
                                <a href="https://www.bookingcore.org/en/news/the-day-on-paris">
                                    <img class='img-responsive lazy' data-src=https://www.bookingcore.org/uploads/demo/news/news-1.jpg alt='The day on Paris'>
                                </a>
                            </div>
                            <div class="caption">
                                <div class="item-date">
                                    <ul>
                                        <li>
                                            <a href="https://www.bookingcore.org/en/news/category/sea-travel">
Sea Travel
</a>
                                        </li>
                                        <li class="dot"> 03/20/2020 </li>
                                    </ul>
                                </div>
                                <h3 class="item-title"><a href="https://www.bookingcore.org/en/news/the-day-on-paris"> The day on Paris </a></h3>
                                <div class="item-desc">
                                    From the iconic to the unexpected, the city of San Francisco never ceases to...
                                </div>
                                <div class="item-more">
                                    <a class="btn-readmore" href="https://www.bookingcore.org/en/news/the-day-on-paris">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="item-news">
                            <div class="thumb-image">
                                <a href="https://www.bookingcore.org/en/news/pure-luxe-in-punta-mita">
                                    <img class='img-responsive lazy' data-src=https://www.bookingcore.org/uploads/demo/news/news-2.jpg alt='Pure Luxe in Punta Mita'>
                                </a>
                            </div>
                            <div class="caption">
                                <div class="item-date">
                                    <ul>
                                        <li>
                                            <a href="https://www.bookingcore.org/en/news/category/hosted-tour">
Hosted Tour
</a>
                                        </li>
                                        <li class="dot"> 03/20/2020 </li>
                                    </ul>
                                </div>
                                <h3 class="item-title"><a href="https://www.bookingcore.org/en/news/pure-luxe-in-punta-mita"> Pure Luxe in Punta Mita </a></h3>
                                <div class="item-desc">
                                    From the iconic to the unexpected, the city of San Francisco never ceases to...
                                </div>
                                <div class="item-more">
                                    <a class="btn-readmore" href="https://www.bookingcore.org/en/news/pure-luxe-in-punta-mita">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="item-news">
                            <div class="thumb-image">
                                <a href="https://www.bookingcore.org/en/news/all-aboard-the-rocky-mountaineer">
                                    <img class='img-responsive lazy' data-src=https://www.bookingcore.org/uploads/demo/news/news-3.jpg alt='All Aboard the Rocky Mountaineer'>
                                </a>
                            </div>
                            <div class="caption">
                                <div class="item-date">
                                    <ul>
                                        <li>
                                            <a href="https://www.bookingcore.org/en/news/category/hosted-tour">
Hosted Tour
</a>
                                        </li>
                                        <li class="dot"> 03/20/2020 </li>
                                    </ul>
                                </div>
                                <h3 class="item-title"><a href="https://www.bookingcore.org/en/news/all-aboard-the-rocky-mountaineer"> All Aboard the Rocky Mountaineer </a></h3>
                                <div class="item-desc">
                                    From the iconic to the unexpected, the city of San Francisco never ceases to...
                                </div>
                                <div class="item-more">
                                    <a class="btn-readmore" href="https://www.bookingcore.org/en/news/all-aboard-the-rocky-mountaineer">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="item-news">
                            <div class="thumb-image">
                                <a href="https://www.bookingcore.org/en/news/city-spotlight-philadelphia">
                                    <img class='img-responsive lazy' data-src=https://www.bookingcore.org/uploads/demo/news/news-4.jpg alt='City Spotlight: Philadelphia'>
                                </a>
                            </div>
                            <div class="caption">
                                <div class="item-date">
                                    <ul>
                                        <li>
                                            <a href="https://www.bookingcore.org/en/news/category/adventure-travel">
Adventure Travel
</a>
                                        </li>
                                        <li class="dot"> 03/20/2020 </li>
                                    </ul>
                                </div>
                                <h3 class="item-title"><a href="https://www.bookingcore.org/en/news/city-spotlight-philadelphia"> City Spotlight: Philadelphia </a></h3>
                                <div class="item-desc">
                                    From the iconic to the unexpected, the city of San Francisco never ceases to...
                                </div>
                                <div class="item-more">
                                    <a class="btn-readmore" href="https://www.bookingcore.org/en/news/city-spotlight-philadelphia">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="item-news">
                            <div class="thumb-image">
                                <a href="https://www.bookingcore.org/en/news/tiptoe-through-the-tulips-of-washington">
                                    <img class='img-responsive lazy' data-src=https://www.bookingcore.org/uploads/demo/news/news-5.jpg alt='Tiptoe through the Tulips of Washington'>
                                </a>
                            </div>
                            <div class="caption">
                                <div class="item-date">
                                    <ul>
                                        <li>
                                            <a href="https://www.bookingcore.org/en/news/category/adventure-travel">
Adventure Travel
</a>
                                        </li>
                                        <li class="dot"> 03/20/2020 </li>
                                    </ul>
                                </div>
                                <h3 class="item-title"><a href="https://www.bookingcore.org/en/news/tiptoe-through-the-tulips-of-washington"> Tiptoe through the Tulips of Washington </a></h3>
                                <div class="item-desc">
                                    From the iconic to the unexpected, the city of San Francisco never ceases to...
                                </div>
                                <div class="item-more">
                                    <a class="btn-readmore" href="https://www.bookingcore.org/en/news/tiptoe-through-the-tulips-of-washington">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="item-news">
                            <div class="thumb-image">
                                <a href="https://www.bookingcore.org/en/news/a-seaside-reset-in-laguna-beach">
                                    <img class='img-responsive lazy' data-src=https://www.bookingcore.org/uploads/demo/news/news-6.jpg alt='A Seaside Reset in Laguna Beach'>
                                </a>
                            </div>
                            <div class="caption">
                                <div class="item-date">
                                    <ul>
                                        <li>
                                            <a href="https://www.bookingcore.org/en/news/category/sea-travel">
Sea Travel
</a>
                                        </li>
                                        <li class="dot"> 03/20/2020 </li>
                                    </ul>
                                </div>
                                <h3 class="item-title"><a href="https://www.bookingcore.org/en/news/a-seaside-reset-in-laguna-beach"> A Seaside Reset in Laguna Beach </a></h3>
                                <div class="item-desc">
                                    From the iconic to the unexpected, the city of San Francisco never ceases to...
                                </div>
                                <div class="item-more">
                                    <a class="btn-readmore" href="https://www.bookingcore.org/en/news/a-seaside-reset-in-laguna-beach">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bravo-call-to-action">
        <div class="container">
            <div class="context">
                <div class="row">
                    <div class="col-md-8">
                        <div class="title">
                            Know your city?
                        </div>
                        <div class="sub_title">
                            Join 2000+ locals &amp; 1200+ contributors from 3000 cities
                        </div>
                    </div>
                    <div class="col-md-4">
                        <a class="btn-more" href="#">
Become Local Expert
</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bravo-testimonial">
        <div class="container">
            <h3>Our happy clients</h3>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="item has-matchHeight">
                        <div class="author">
                            <img src="https://www.bookingcore.org/uploads/demo/general/avatar.jpg" alt="Eva Hicks">
                            <div class="author-meta">
                                <h4>Eva Hicks</h4>
                                <div class="star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <p>
                            Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="item has-matchHeight">
                        <div class="author">
                            <img src="https://www.bookingcore.org/uploads/demo/general/avatar-2.jpg" alt="Donald Wolf">
                            <div class="author-meta">
                                <h4>Donald Wolf</h4>
                                <div class="star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <p>
                            Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="item has-matchHeight">
                        <div class="author">
                            <img src="https://www.bookingcore.org/uploads/demo/general/avatar-3.jpg" alt="Charlie Harrington">
                            <div class="author-meta">
                                <h4>Charlie Harrington</h4>
                                <div class="star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <p>
                            Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection