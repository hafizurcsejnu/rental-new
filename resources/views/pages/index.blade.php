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
                                <form action="{{url('/')}}/hotel" class="form bravo_form" method="get">
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
                                <form action="{{url('/')}}/space" class="form bravo_form" method="get">
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
                                <form action="{{url('/')}}/tour" class="form bravo_form" method="get">
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
                                <form action="{{url('/')}}/car" class="form bravo_form" method="get">
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
    <div class="bravo-offer" >
        <div class="container" style="display:none">
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
    <div class="container" style="display:none">
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
                                <a href="{{url('/')}}hotel/hotel-stanford">
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
                                <a href="{{url('/')}}hotel/hotel-stanford">
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
                                <a href="{{url('/')}}hotel/hotel-wbf-homachi">
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
                                <a href="{{url('/')}}hotel/hotel-wbf-homachi">
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
                                <a href="{{url('/')}}hotel/castello-casole-hotel">
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
                                <a href="{{url('/')}}hotel/castello-casole-hotel">
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
                                <a href="{{url('/')}}hotel/redac-gateway-hotel">
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
                                <a href="{{url('/')}}hotel/redac-gateway-hotel">
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
                                        <a href="{{url('/')}}space?location_id=1" target="_blank">
7 Spaces
</a>
                                        <a href="{{url('/')}}hotel?location_id=1" target="_blank">
6 Hotels
</a>
                                        <a href="{{url('/')}}tour?location_id=1" target="_blank">
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
                                        <a href="{{url('/')}}space?location_id=2" target="_blank">
1 Space
</a>
                                        <a href="{{url('/')}}hotel?location_id=2" target="_blank">
2 Hotels
</a>
                                        <a href="{{url('/')}}tour?location_id=2" target="_blank">
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
                                        <a href="{{url('/')}}/space?location_id=3" target="_blank">
2 Spaces
</a>
                                        <a href="{{url('/')}}/hotel?location_id=3" target="_blank">
1 Hotel
</a>
                                        <a href="{{url('/')}}/tour?location_id=3" target="_blank">
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
                                        <a href="{{url('/')}}/space?location_id=4" target="_blank">
1 Space
</a>
                                        <a href="{{url('/')}}/tour?location_id=4" target="_blank">
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
                                        <a href="{{url('/')}}/hotel?location_id=5" target="_blank">
2 Hotels
</a>
                                        <a href="{{url('/')}}/tour?location_id=5" target="_blank">
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
                                        <a href="{{url('/')}}/tour?location_id=6" target="_blank">
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
    
    <div class="bravo-list-news">
        <div class="container">
            <div class="title">
                Read the latest from news
                <div class="sub-title">
                    Contrary to popular belief
                </div>
            </div>
            <div class="list-item">
                <div class="row">

                    <?php
						$news = DB::table('posts')->get();
						$i=0;
						?>
                    @foreach($news as $row)
                        
                    <div class="col-lg-4 col-md-6">
                        <div class="item-news">
                            <div class="thumb-image">
                                <a href="/news-detail/{{ $row->slug }}">
                                    <img class='img-responsive lazy' data-src={{Voyager::image($row->image)}} alt='The day on Paris'>
                                </a>
                            </div>
                            <div class="caption">
                                <div class="item-date">
                                    <ul>
                                        <li>
                                            <a href="/news-detail/{{ $row->slug }}">
Sea Travel
</a>
                                        </li>
                                        <li class="dot">{{ $row->created_at}} </li>
                                    </ul>
                                </div>
                                <h3 class="item-title"><a href="/news-detail/{{ $row->slug }}"> {{$row->title}}</a></h3>
                                <div class="item-desc">
                                    {{$row->excerpt}}
                                </div>
                                <div class="item-more">
                                    <a class="btn-readmore" href="/news-detail/{{ $row->slug }}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

               
                </div>
            </div>
        </div>
    </div>
    <div class="bravo-call-to-action" style="display:none">
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