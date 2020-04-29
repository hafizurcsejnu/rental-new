@extends('layouts.master')
@section('content')

<div class="bravo_search_hotel">
    <div class="bravo_banner" style="background-image: url(https://www.bookingcore.org/uploads/demo/hotel/banner-search-hotel.jpg)">
        <div class="container">
            <h1>
Search for hotel
</h1>
        </div>
    </div>
    <div class="bravo_form_search">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <form action="https://www.bookingcore.org/en/hotel" class="form bravo_form" method="get">
                        <div class="g-field-search">
                            <div class="row">
                                <div class="col-md-4 border-right">
                                    <div class="form-group">
                                        <i class="field-icon fa icofont-map"></i>
                                        <div class="form-content">
                                            <label>Location</label>
                                            <div class="smart-search">
                                                <input type="text" class="smart-search-location parent_text form-control" readonly="" placeholder="Where are you going?" value="" data-onload="Loading..." data-default="[{&quot;id&quot;:1,&quot;title&quot;:&quot; Paris&quot;},{&quot;id&quot;:2,&quot;title&quot;:&quot; New York, United States&quot;},{&quot;id&quot;:3,&quot;title&quot;:&quot; California&quot;},{&quot;id&quot;:4,&quot;title&quot;:&quot; United States&quot;},{&quot;id&quot;:5,&quot;title&quot;:&quot; Los Angeles&quot;},{&quot;id&quot;:6,&quot;title&quot;:&quot; New Jersey&quot;},{&quot;id&quot;:7,&quot;title&quot;:&quot; San Francisco&quot;},{&quot;id&quot;:8,&quot;title&quot;:&quot; Virginia&quot;}]">
                                                <input type="hidden" class="child_id" name="location_id" value="">
                                                <div class="bravo-autocomplete">
                                                    <div class="list-item">
                                                        <div class="item" data-id="1" data-text=" Paris"> <i class="icofont-location-pin"></i> Paris </div>
                                                        <div class="item" data-id="2" data-text=" New York, United States"> <i class="icofont-location-pin"></i> New York, United States </div>
                                                        <div class="item" data-id="3" data-text=" California"> <i class="icofont-location-pin"></i> California </div>
                                                        <div class="item" data-id="4" data-text=" United States"> <i class="icofont-location-pin"></i> United States </div>
                                                        <div class="item" data-id="5" data-text=" Los Angeles"> <i class="icofont-location-pin"></i> Los Angeles </div>
                                                        <div class="item" data-id="6" data-text=" New Jersey"> <i class="icofont-location-pin"></i> New Jersey </div>
                                                        <div class="item" data-id="7" data-text=" San Francisco"> <i class="icofont-location-pin"></i> San Francisco </div>
                                                        <div class="item" data-id="8" data-text=" Virginia"> <i class="icofont-location-pin"></i> Virginia </div>
                                                    </div>
                                                    <div class="message">Loading...</div>
                                                </div>
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
                                                        <div class="render check-in-render">04/19/2020</div>
                                                        <span> - </span>
                                                        <div class="render check-out-render">04/20/2020</div>
                                                    </div>
                                                </div>
                                                <input type="hidden" class="check-in-input" value="04/19/2020" name="start">
                                                <input type="hidden" class="check-out-input" value="04/20/2020" name="end">
                                                <input type="text" class="check-in-out" name="date" value="2020-04-19 - 2020-04-20">
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
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="bravo_filter">
                    <form action="https://www.bookingcore.org/en/hotel" class="bravo_form_filter">
                        <div class="filter-title">
                            FILTER BY
                        </div>
                        <div class="g-filter-item">
                            <div class="item-title">
                                <h4>Filter Price</h4>
                                <i class="fa fa-angle-up" aria-hidden="true"></i>
                            </div>
                            <div class="item-content">
                                <div class="bravo-filter-price">
                                    <span class="irs irs--flat js-irs-0 irs-with-grid"><span class="irs"><span class="irs-line" tabindex="0"></span><span class="irs-min" style="visibility: hidden;"> $300</span><span class="irs-max" style="visibility: visible;"> $900</span><span class="irs-from" style="visibility: visible; left: -4.33906%;"> $300</span><span class="irs-to" style="visibility: visible; left: 68.4184%;"> $772</span><span class="irs-single" style="visibility: hidden; left: 22.2795%;"> $300 —  $772</span></span><span class="irs-grid" style="width: 92.4883%; left: 3.65587%;"><span class="irs-grid-pol" style="left: 0%"></span><span class="irs-grid-text js-grid-text-0" style="left: 0%; margin-left: -4.93692%;">300</span><span class="irs-grid-pol small" style="left: 20%"></span><span class="irs-grid-pol small" style="left: 15%"></span><span class="irs-grid-pol small" style="left: 10%"></span><span class="irs-grid-pol small" style="left: 5%"></span><span class="irs-grid-pol" style="left: 25%"></span><span class="irs-grid-text js-grid-text-1" style="left: 25%; visibility: visible; margin-left: -4.93692%;">450</span><span class="irs-grid-pol small" style="left: 45%"></span><span class="irs-grid-pol small" style="left: 40%"></span><span class="irs-grid-pol small" style="left: 35%"></span><span class="irs-grid-pol small" style="left: 30%"></span><span class="irs-grid-pol" style="left: 50%"></span><span class="irs-grid-text js-grid-text-2" style="left: 50%; visibility: visible; margin-left: -4.93692%;">600</span><span class="irs-grid-pol small" style="left: 70%"></span><span class="irs-grid-pol small" style="left: 65%"></span><span class="irs-grid-pol small" style="left: 60%"></span><span class="irs-grid-pol small" style="left: 55%"></span><span class="irs-grid-pol" style="left: 75%"></span><span class="irs-grid-text js-grid-text-3" style="left: 75%; visibility: visible; margin-left: -4.93692%;">750</span><span class="irs-grid-pol small" style="left: 95%"></span><span class="irs-grid-pol small" style="left: 90%"></span><span class="irs-grid-pol small" style="left: 85%"></span><span class="irs-grid-pol small" style="left: 80%"></span><span class="irs-grid-pol" style="left: 100%"></span><span class="irs-grid-text js-grid-text-4" style="left: 100%; margin-left: -4.93692%;">900</span></span><span class="irs-bar" style="left: 3.75587%; width: 72.7574%;"></span><span class="irs-shadow shadow-from" style="display: none;"></span><span class="irs-shadow shadow-to" style="display: none;"></span><span class="irs-handle from" style="left: 0%;"><i></i><i></i><i></i></span><span class="irs-handle to type_last" style="left: 72.7574%;"><i></i><i></i><i></i></span></span>
                                    <input type="hidden" class="filter-price" name="price_range" data-symbol=" $" data-min="300" data-max="900" data-from="300" data-to="900" readonly="" value="300;772" tabindex="-1">
                                    <button type="submit" class="btn btn-link btn-apply-price-range">APPLY</button>
                                </div>
                            </div>
                        </div>
                        <div class="g-filter-item">
                            <div class="item-title e-close">
                                <h4>Hotel Star</h4>
                                <i class="fa fa-angle-up" aria-hidden="true"></i>
                            </div>
                            <div class="item-content" style="display: none;">
                                <ul>
                                    <li>
                                        <div class="bravo-checkbox">
                                            <label>
                                                <input name="star_rate[]" type="checkbox" value="5">
                                                <span class="checkmark"></span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bravo-checkbox">
                                            <label>
                                                <input name="star_rate[]" type="checkbox" value="4">
                                                <span class="checkmark"></span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bravo-checkbox">
                                            <label>
                                                <input name="star_rate[]" type="checkbox" value="3">
                                                <span class="checkmark"></span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bravo-checkbox">
                                            <label>
                                                <input name="star_rate[]" type="checkbox" value="2">
                                                <span class="checkmark"></span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bravo-checkbox">
                                            <label>
                                                <input name="star_rate[]" type="checkbox" value="1">
                                                <span class="checkmark"></span>
                                                <i class="fa fa-star"></i>
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="g-filter-item">
                            <div class="item-title e-close">
                                <h4>Review Score</h4>
                                <i class="fa fa-angle-up" aria-hidden="true"></i>
                            </div>
                            <div class="item-content" style="display: none;">
                                <ul>
                                    <li>
                                        <div class="bravo-checkbox">
                                            <label>
                                                <input name="review_score[]" type="checkbox" value="5">
                                                <span class="checkmark"></span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bravo-checkbox">
                                            <label>
                                                <input name="review_score[]" type="checkbox" value="4">
                                                <span class="checkmark"></span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bravo-checkbox">
                                            <label>
                                                <input name="review_score[]" type="checkbox" value="3">
                                                <span class="checkmark"></span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bravo-checkbox">
                                            <label>
                                                <input name="review_score[]" type="checkbox" value="2">
                                                <span class="checkmark"></span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bravo-checkbox">
                                            <label>
                                                <input name="review_score[]" type="checkbox" value="1">
                                                <span class="checkmark"></span>
                                                <i class="fa fa-star"></i>
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="g-filter-item">
                            <div class="item-title e-close">
                                <h4> Property type </h4>
                                <i class="fa fa-angle-up" aria-hidden="true"></i>
                            </div>
                            <div class="item-content" style="display: none;">
                                <ul>
                                    <li>
                                        <div class="bravo-checkbox">
                                            <label>
                                                <input type="checkbox" name="terms[]" value="32"> Apartments
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bravo-checkbox">
                                            <label>
                                                <input type="checkbox" name="terms[]" value="33"> Hotels
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bravo-checkbox">
                                            <label>
                                                <input type="checkbox" name="terms[]" value="34"> Homestays
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </li>
                                    <li class="hide">
                                        <div class="bravo-checkbox">
                                            <label>
                                                <input type="checkbox" name="terms[]" value="35"> Villas
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </li>
                                    <li class="hide">
                                        <div class="bravo-checkbox">
                                            <label>
                                                <input type="checkbox" name="terms[]" value="36"> Boats
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </li>
                                    <li class="hide">
                                        <div class="bravo-checkbox">
                                            <label>
                                                <input type="checkbox" name="terms[]" value="37"> Motels
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </li>
                                    <li class="hide">
                                        <div class="bravo-checkbox">
                                            <label>
                                                <input type="checkbox" name="terms[]" value="38"> Resorts
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </li>
                                    <li class="hide">
                                        <div class="bravo-checkbox">
                                            <label>
                                                <input type="checkbox" name="terms[]" value="39"> Lodges
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </li>
                                    <li class="hide">
                                        <div class="bravo-checkbox">
                                            <label>
                                                <input type="checkbox" name="terms[]" value="40"> Holiday homes
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </li>
                                    <li class="hide">
                                        <div class="bravo-checkbox">
                                            <label>
                                                <input type="checkbox" name="terms[]" value="41"> Cruises
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                                <button type="button" class="btn btn-link btn-more-item">More <i class="fa fa-caret-down"></i></button>
                            </div>
                        </div>
                        <div class="g-filter-item">
                            <div class="item-title e-close">
                                <h4> Facilities </h4>
                                <i class="fa fa-angle-up" aria-hidden="true"></i>
                            </div>
                            <div class="item-content" style="display: none;">
                                <ul>
                                    <li>
                                        <div class="bravo-checkbox">
                                            <label>
                                                <input type="checkbox" name="terms[]" value="42"> Wake-up call
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bravo-checkbox">
                                            <label>
                                                <input type="checkbox" name="terms[]" value="43"> Car hire
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bravo-checkbox">
                                            <label>
                                                <input type="checkbox" name="terms[]" value="44"> Bicycle hire
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </li>
                                    <li class="hide">
                                        <div class="bravo-checkbox">
                                            <label>
                                                <input type="checkbox" name="terms[]" value="45"> Flat Tv
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </li>
                                    <li class="hide">
                                        <div class="bravo-checkbox">
                                            <label>
                                                <input type="checkbox" name="terms[]" value="46"> Laundry and dry cleaning
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </li>
                                    <li class="hide">
                                        <div class="bravo-checkbox">
                                            <label>
                                                <input type="checkbox" name="terms[]" value="47"> Internet – Wifi
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </li>
                                    <li class="hide">
                                        <div class="bravo-checkbox">
                                            <label>
                                                <input type="checkbox" name="terms[]" value="48"> Coffee and tea
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                                <button type="button" class="btn btn-link btn-more-item">More <i class="fa fa-caret-down"></i></button>
                            </div>
                        </div>
                        <div class="g-filter-item">
                            <div class="item-title">
                                <h4> Hotel Service </h4>
                                <i class="fa fa-angle-up" aria-hidden="true"></i>
                            </div>
                            <div class="item-content">
                                <ul>
                                    <li>
                                        <div class="bravo-checkbox">
                                            <label>
                                                <input type="checkbox" name="terms[]" value="49"> Havana Lobby bar
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bravo-checkbox">
                                            <label>
                                                <input type="checkbox" name="terms[]" value="50"> Fiesta Restaurant
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bravo-checkbox">
                                            <label>
                                                <input type="checkbox" name="terms[]" value="51"> Hotel transport services
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </li>
                                    <li class="hide">
                                        <div class="bravo-checkbox">
                                            <label>
                                                <input type="checkbox" name="terms[]" value="52"> Free luggage deposit
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </li>
                                    <li class="hide">
                                        <div class="bravo-checkbox">
                                            <label>
                                                <input type="checkbox" name="terms[]" value="53"> Laundry Services
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </li>
                                    <li class="hide">
                                        <div class="bravo-checkbox">
                                            <label>
                                                <input type="checkbox" name="terms[]" value="54"> Pets welcome
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </li>
                                    <li class="hide">
                                        <div class="bravo-checkbox">
                                            <label>
                                                <input type="checkbox" name="terms[]" value="55"> Tickets
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                                <button type="button" class="btn btn-link btn-more-item">More <i class="fa fa-caret-down"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-9 col-md-12">
                <div class="bravo-list-item">
                    <div class="topbar-search">
                        <div class="text">
                            {{-- 11 hotels found --}}
                        </div>
                        <div class="control">
                        </div>
                    </div>
                    <div class="list-item">
                        <div class="row">
                           
                            @foreach ($data as $row)
                            
                            <div class="col-lg-12 col-md-12">
                                <div class="item-loop-list ">
                                    <div class="thumb-image">
                                        <a target="_blank" href="/hotel-detail/{{ $row->id }}">
                                            <img class="img-responsive lazy loaded" data-src="https://www.bookingcore.org/uploads/demo/space/space-7.jpg" alt="Castello Casole Hotel" src="{{Voyager::image($row->images)}}" data-was-processed="true">
                                        </a>
                                        <div class="service-wishlist " data-id="3" data-type="hotel">
                                            <i class="fa fa-heart"></i>
                                        </div>
                                    </div>
                                    <div class="g-info">
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
                                        <div class="item-title">
                                        <a target="_blank" href="/hotel-detail/{{ $row->id }}">{{$row->name}}
</a>
                                        </div>
                                        <div class="terms">
                                            <div class="g-attributes">
                                                <span class="attr-title"><i class="icofont-medal"></i> {!!$row->facilities !!}</span>
                                                
                                            </div>
                                        </div>
                                        {{-- <div class="location">
                                            <i class="icofont-paper-plane"></i> Paris
                                        </div> --}}
                                    </div>
                                    <div class="g-rate-price">
                                        <div class="service-review-pc">
                                            <div class="head">
                                                <div class="left">
                                                    <span class="head-rating">Very Good</span>
                                                    <span class="text-rating">3 reviews</span>
                                                </div>
                                                <div class="score">
                                                    4.3<span>/5</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="g-price">
                                            <div class="prefix">
                                                <span class="fr_text">from</span>
                                            </div>
                                            <div class="price">
                                                <span class="text-price">$350 <span class="unit">/night</span></span>
                                            </div>
                                            <div class="text-review">
                                                3 reviews
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endforeach  
                        </div>
                    </div>
                    <div class="bravo-pagination">
                        <ul class="pagination" role="navigation">
                            <li class="page-item disabled" aria-disabled="true" aria-label="« Previous">
                                <span class="page-link" aria-hidden="true">‹</span>
                            </li>
                            <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                            <li class="page-item"><a class="page-link" href="https://www.bookingcore.org/hotel?page=2">2</a></li>
                            <li class="page-item">
                                <a class="page-link" href="https://www.bookingcore.org/hotel?page=2" rel="next" aria-label="Next »">›</a>
                            </li>
                        </ul>
                        <span class="count-string">Showing 1 - 9 of 11 Hotels</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection