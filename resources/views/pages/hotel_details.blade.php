@extends('layouts.master')
@section('content')
<div class="bravo_detail_hotel">
    <div class="bravo_banner" style="background-image: url('https://www.bookingcore.org/uploads/demo/hotel/hotel-featured-2.jpg')">
    <div class="container">
    <div class="bravo_gallery">
    <div class="btn-group">
    <a href="#" class="btn btn-transparent has-icon bravo-video-popup" data-toggle="modal" data-src="https://www.youtube.com/embed/bhOiLfkChPo" data-target="#myModal">
    <i class="input-icon field-icon fa">
    <svg height="18px" width="18px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
    <g fill="#FFFFFF">
    <path d="M2.25,24C1.009,24,0,22.991,0,21.75V2.25C0,1.009,1.009,0,2.25,0h19.5C22.991,0,24,1.009,24,2.25v19.5
                                                c0,1.241-1.009,2.25-2.25,2.25H2.25z M2.25,1.5C1.836,1.5,1.5,1.836,1.5,2.25v19.5c0,0.414,0.336,0.75,0.75,0.75h19.5
                                                c0.414,0,0.75-0.336,0.75-0.75V2.25c0-0.414-0.336-0.75-0.75-0.75H2.25z">
    </path>
    <path d="M9.857,16.5c-0.173,0-0.345-0.028-0.511-0.084C8.94,16.281,8.61,15.994,8.419,15.61c-0.11-0.221-0.169-0.469-0.169-0.716
                                                V9.106C8.25,8.22,8.97,7.5,9.856,7.5c0.247,0,0.495,0.058,0.716,0.169l5.79,2.896c0.792,0.395,1.114,1.361,0.719,2.153
                                                c-0.154,0.309-0.41,0.565-0.719,0.719l-5.788,2.895C10.348,16.443,10.107,16.5,9.857,16.5z M9.856,9C9.798,9,9.75,9.047,9.75,9.106
                                                v5.788c0,0.016,0.004,0.033,0.011,0.047c0.013,0.027,0.034,0.044,0.061,0.054C9.834,14.998,9.845,15,9.856,15
                                                c0.016,0,0.032-0.004,0.047-0.011l5.788-2.895c0.02-0.01,0.038-0.027,0.047-0.047c0.026-0.052,0.005-0.115-0.047-0.141l-5.79-2.895
                                                C9.889,9.004,9.872,9,9.856,9z">
    </path>
    </g>
    </svg>
    </i>Hotel Video
    </a>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-body">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">×</span>
    </button>
    <div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item bravo_embed_video" src="" allowscriptaccess="always" allow="autoplay"></iframe>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="bravo_content">
    <div class="container">
    <div class="row">
    <div class="col-md-12 col-lg-9">
    <div class="g-header">
    <div class="left">
    <div class="star-rate">
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    </div>
    <h2>{{$data->name}}</h2>
    <p class="address"><i class="fa fa-map-marker"></i>
    
    </p>
    </div>
    <div class="right">
    <div class="review-score">
    <div class="head">
    <div class="left">
    <span class="head-rating">Excellent</span>
    <span class="text-rating">from 4 reviews</span>
    </div>
    <div class="score">
    5.0<span>/5</span>
    </div>
    </div>
    <div class="foot">
    100% of guests recommend
    </div>
    </div>
    </div>
    </div>
    <div class="g-gallery">
    <style>.fotorama1587437032300 .fotorama__nav--thumbs .fotorama__nav__frame{
    padding:15px;
    height:135px}
    .fotorama1587437032300 .fotorama__thumb-border{
    height:131px;
    border-width:2px;
    margin-top:15px}</style><div class="fotorama--hidden"></div><div class="fotorama fotorama1587437032300" data-width="100%" data-thumbwidth="135" data-thumbheight="135" data-thumbmargin="15" data-nav="thumbs" data-allowfullscreen="true"><div class="fotorama__wrap fotorama__wrap--css3 fotorama__wrap--slide fotorama__wrap--toggle-arrows" style="width: 100%; min-width: 0px; max-width: 100%;"><div class="fotorama__stage" style="width: 825px; height: 387px;"><div class="fotorama__fullscreen-icon" tabindex="0" role="button"></div><div class="fotorama__stage__shaft" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px); width: 825px; margin-left: 0px;"><div class="fotorama__stage__frame fotorama__loaded fotorama__loaded--img fotorama__active" style="left: 0px;"><img src="https://www.bookingcore.org/uploads/demo/hotel/gallery/hotel-gallery-1.jpg" class="fotorama__img" style="width: 825px; height: 386.719px; left: 0px; top: 0.140625px;"></div><div class="fotorama__stage__frame fotorama__loaded fotorama__loaded--img" style="left: 827px;"><img src="https://www.bookingcore.org/uploads/demo/hotel/gallery/hotel-gallery-2.jpg" class="fotorama__img" style="width: 825px; height: 386.719px; left: 0px; top: 0.140625px;"></div></div><div class="fotorama__arr fotorama__arr--prev fotorama__arr--disabled" tabindex="-1" role="button" disabled="disabled"></div><div class="fotorama__arr fotorama__arr--next" tabindex="0" role="button"></div><div class="fotorama__video-close"></div></div><div class="fotorama__nav-wrap"><div class="fotorama__nav fotorama__nav--thumbs fotorama__shadows--right" style="width: 825px;"><div class="fotorama__nav__shaft fotorama__grab" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);"><div class="fotorama__thumb-border" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px); width: 131px;"></div><div class="fotorama__nav__frame fotorama__nav__frame--thumb fotorama__active" tabindex="0" role="button" style="width: 135px;"><div class="fotorama__thumb fotorama__loaded fotorama__loaded--img"><img src="https://www.bookingcore.org/uploads/demo/hotel/gallery/hotel-gallery-1.jpg" class="fotorama__img" style="width: 288px; height: 135px; left: -76.5px; top: 0px;"></div></div><div class="fotorama__nav__frame fotorama__nav__frame--thumb" tabindex="0" role="button" style="width: 135px;"><div class="fotorama__thumb fotorama__loaded fotorama__loaded--img"><img src="https://www.bookingcore.org/uploads/demo/hotel/gallery/hotel-gallery-2.jpg" class="fotorama__img" style="width: 288px; height: 135px; left: -76.5px; top: 0px;"></div></div><div class="fotorama__nav__frame fotorama__nav__frame--thumb" tabindex="0" role="button" style="width: 135px;"><div class="fotorama__thumb fotorama__loaded fotorama__loaded--img"><img src="https://www.bookingcore.org/uploads/demo/hotel/gallery/hotel-gallery-3.jpg" class="fotorama__img" style="width: 288px; height: 135px; left: -76.5px; top: 0px;"></div></div><div class="fotorama__nav__frame fotorama__nav__frame--thumb" tabindex="0" role="button" style="width: 135px;"><div class="fotorama__thumb fotorama__loaded fotorama__loaded--img"><img src="https://www.bookingcore.org/uploads/demo/hotel/gallery/hotel-gallery-4.jpg" class="fotorama__img" style="width: 288px; height: 135px; left: -76.5px; top: 0px;"></div></div><div class="fotorama__nav__frame fotorama__nav__frame--thumb" tabindex="0" role="button" style="width: 135px;"><div class="fotorama__thumb fotorama__loaded fotorama__loaded--img"><img src="https://www.bookingcore.org/uploads/demo/hotel/gallery/hotel-gallery-5.jpg" class="fotorama__img" style="width: 288.481px; height: 135px; left: -76.7404px; top: 0px;"></div></div><div class="fotorama__nav__frame fotorama__nav__frame--thumb" tabindex="0" role="button" style="width: 135px;"><div class="fotorama__thumb fotorama__loaded fotorama__loaded--img"><img src="https://www.bookingcore.org/uploads/demo/hotel/gallery/hotel-gallery-6.jpg" class="fotorama__img" style="width: 288px; height: 135px; left: -76.5px; top: 0px;"></div></div></div></div></div></div></div>
    <div class="social">
    <div class="social-share">
    <span class="social-icon">
    <i class="icofont-share"></i>
    </span>
    <ul class="share-wrapper">
    <li>
    <a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.bookingcore.org/en/hotel/parian-holiday-villas&amp;title=Parian Holiday Villas" target="_blank" rel="noopener" original-title="Facebook">
    <i class="fa fa-facebook fa-lg"></i>
    </a>
    </li>
    <li>
    <a class="twitter" href="https://twitter.com/share?url=https://www.bookingcore.org/en/hotel/parian-holiday-villas&amp;title=Parian Holiday Villas" target="_blank" rel="noopener" original-title="Twitter">
    <i class="fa fa-twitter fa-lg"></i>
    </a>
    </li>
    </ul>
    </div>
    <div class="service-wishlist " data-id="9" data-type="hotel">
    <i class="fa fa-heart-o"></i>
    </div>
    </div>
    </div>
    <div class="g-overview">
    <h3>Description</h3>
    <div class="description">
    <p>{!!$data->description!!}</p>
    </div>
    <div id="hotel-rooms" class="hotel_rooms_form"><h3 class="heading-section">Available Rooms</h3> <div class="form-search-rooms"><div class="d-flex form-search-row"><div class="col-md-4"><div data-format="MM/DD/YYYY" class="form-group form-date-field form-date-search "><i class="fa fa-angle-down arrow"></i> <input type="text" class="start_date" style="height: 1px; visibility: hidden;"> <div class="date-wrapper form-content"><label class="form-label">Check In - Out</label> <div class="render check-in-render">Please select</div></div></div></div> <div class="col-md-4"><div class="form-group"><i class="fa fa-angle-down arrow"></i> <div data-toggle="dropdown" class="form-content dropdown-toggle"><label class="form-label">Guests</label> <div class="render"><span class="adults"><span class="one">1
    <span>Adult</span></span></span>
    -
    <span class="children"><span class="one">0
    <span>Child</span></span></span></div></div> <div class="dropdown-menu select-guests-dropdown"><div class="dropdown-item-row"><div class="label">Adults</div> <div class="val"><span data-input="adults" class="btn-minus2"><i class="icon ion-md-remove"></i></span> <span class="count-display">1</span> <span data-input="adults" class="btn-add2"><i class="icon ion-ios-add"></i></span></div></div> <div class="dropdown-item-row"><div class="label">Children</div> <div class="val"><span data-input="children" class="btn-minus2"><i class="icon ion-md-remove"></i></span> <span class="count-display">0</span> <span data-input="children" class="btn-add2"><i class="icon ion-ios-add"></i></span></div></div></div></div></div> <div class="col-md-4 col-btn"><div class="g-button-submit"><button type="submit" class="btn btn-primary btn-search">
    Check Availability
    <i class="fa fa-spinner fa-spin" style="display: none;"></i></button></div></div></div></div> <div class="start_room_sticky"></div> <div class="hotel_list_rooms"><div class="row"><div class="col-md-12"><div class="room-item"><div class="row"><div class="col-xs-12 col-md-3"><div class="image"><img src="https://www.bookingcore.org/uploads/demo/space/space-5.jpg" alt=""> <div class="count-gallery"><i class="fa fa-picture-o"></i>
    6
    </div></div> <div id="modal_room_33" tabindex="-1" role="dialog" class="modal"><div role="document" class="modal-dialog modal-lg modal-dialog-centered"><div class="modal-content"><div class="modal-header"><h5 class="modal-title">Room Kerama Islands</h5> <span data-dismiss="modal" aria-label="Close" class="c-pointer"><i class="input-icon field-icon fa"><img src="https://www.bookingcore.org/images/ico_close.svg" alt="close"></i></span></div> <div class="modal-body"><div data-nav="thumbs" data-width="100%" data-auto="false" data-allowfullscreen="true" class="fotorama"><a href="https://www.bookingcore.org/uploads/demo/hotel/gallery/hotel-gallery-1.jpg"></a><a href="https://www.bookingcore.org/uploads/demo/hotel/gallery/hotel-gallery-2.jpg"></a><a href="https://www.bookingcore.org/uploads/demo/hotel/gallery/hotel-gallery-3.jpg"></a><a href="https://www.bookingcore.org/uploads/demo/hotel/gallery/hotel-gallery-4.jpg"></a><a href="https://www.bookingcore.org/uploads/demo/hotel/gallery/hotel-gallery-5.jpg"></a><a href="https://www.bookingcore.org/uploads/demo/hotel/gallery/hotel-gallery-6.jpg"></a></div></div></div></div></div></div> <div class="col-xs-12 col-md-6"><div class="hotel-info"><h3 class="room-name">Room Kerama Islands</h3> <ul class="room-meta"><li><div data-toggle="tooltip" data-placement="top" title="" data-original-title="Room Footage" class="item"><i class="input-icon field-icon icofont-ruler-compass-alt"></i> <span>200 sqft</span></div></li> <li><div data-toggle="tooltip" data-placement="top" title="" data-original-title="No. Beds" class="item"><i class="input-icon field-icon icofont-hotel"></i> <span>x5</span></div></li> <li><div data-toggle="tooltip" data-placement="top" title="" data-original-title="No. Adults" class="item"><i class="input-icon field-icon icofont-users-alt-4"></i> <span>x9</span></div></li> <li><div data-toggle="tooltip" data-placement="top" title="" data-original-title="No. Children" class="item"><i class="input-icon field-icon fa-child fa"></i> <span>x2</span></div></li></ul></div></div> <!----></div></div><div class="room-item"><div class="row"><div class="col-xs-12 col-md-3"><div class="image"><img src="https://www.bookingcore.org/uploads/demo/space/space-7.jpg" alt=""> <div class="count-gallery"><i class="fa fa-picture-o"></i>
    6
    </div></div> <div id="modal_room_34" tabindex="-1" role="dialog" class="modal"><div role="document" class="modal-dialog modal-lg modal-dialog-centered"><div class="modal-content"><div class="modal-header"><h5 class="modal-title">Room Sheraton Hotel</h5> <span data-dismiss="modal" aria-label="Close" class="c-pointer"><i class="input-icon field-icon fa"><img src="https://www.bookingcore.org/images/ico_close.svg" alt="close"></i></span></div> <div class="modal-body"><div data-nav="thumbs" data-width="100%" data-auto="false" data-allowfullscreen="true" class="fotorama"><a href="https://www.bookingcore.org/uploads/demo/hotel/gallery/hotel-gallery-1.jpg"></a><a href="https://www.bookingcore.org/uploads/demo/hotel/gallery/hotel-gallery-2.jpg"></a><a href="https://www.bookingcore.org/uploads/demo/hotel/gallery/hotel-gallery-3.jpg"></a><a href="https://www.bookingcore.org/uploads/demo/hotel/gallery/hotel-gallery-4.jpg"></a><a href="https://www.bookingcore.org/uploads/demo/hotel/gallery/hotel-gallery-5.jpg"></a><a href="https://www.bookingcore.org/uploads/demo/hotel/gallery/hotel-gallery-6.jpg"></a></div></div></div></div></div></div> <div class="col-xs-12 col-md-6"><div class="hotel-info"><h3 class="room-name">Room Sheraton Hotel</h3> <ul class="room-meta"><li><div data-toggle="tooltip" data-placement="top" title="" data-original-title="Room Footage" class="item"><i class="input-icon field-icon icofont-ruler-compass-alt"></i> <span>200 sqft</span></div></li> <li><div data-toggle="tooltip" data-placement="top" title="" data-original-title="No. Beds" class="item"><i class="input-icon field-icon icofont-hotel"></i> <span>x3</span></div></li> <li><div data-toggle="tooltip" data-placement="top" title="" data-original-title="No. Adults" class="item"><i class="input-icon field-icon icofont-users-alt-4"></i> <span>x7</span></div></li> <li><div data-toggle="tooltip" data-placement="top" title="" data-original-title="No. Children" class="item"><i class="input-icon field-icon fa-child fa"></i> <span>x1</span></div></li></ul></div></div> <!----></div></div><div class="room-item"><div class="row"><div class="col-xs-12 col-md-3"><div class="image"><img src="https://www.bookingcore.org/uploads/demo/space/space-2.jpg" alt=""> <div class="count-gallery"><i class="fa fa-picture-o"></i>
    6
    </div></div> <div id="modal_room_35" tabindex="-1" role="dialog" class="modal"><div role="document" class="modal-dialog modal-lg modal-dialog-centered"><div class="modal-content"><div class="modal-header"><h5 class="modal-title">Double Room With Town View</h5> <span data-dismiss="modal" aria-label="Close" class="c-pointer"><i class="input-icon field-icon fa"><img src="https://www.bookingcore.org/images/ico_close.svg" alt="close"></i></span></div> <div class="modal-body"><div data-nav="thumbs" data-width="100%" data-auto="false" data-allowfullscreen="true" class="fotorama"><a href="https://www.bookingcore.org/uploads/demo/hotel/gallery/hotel-gallery-1.jpg"></a><a href="https://www.bookingcore.org/uploads/demo/hotel/gallery/hotel-gallery-2.jpg"></a><a href="https://www.bookingcore.org/uploads/demo/hotel/gallery/hotel-gallery-3.jpg"></a><a href="https://www.bookingcore.org/uploads/demo/hotel/gallery/hotel-gallery-4.jpg"></a><a href="https://www.bookingcore.org/uploads/demo/hotel/gallery/hotel-gallery-5.jpg"></a><a href="https://www.bookingcore.org/uploads/demo/hotel/gallery/hotel-gallery-6.jpg"></a></div></div></div></div></div></div> <div class="col-xs-12 col-md-6"><div class="hotel-info"><h3 class="room-name">Double Room With Town View</h3> <ul class="room-meta"><li><div data-toggle="tooltip" data-placement="top" title="" data-original-title="Room Footage" class="item"><i class="input-icon field-icon icofont-ruler-compass-alt"></i> <span>200 sqft</span></div></li> <li><div data-toggle="tooltip" data-placement="top" title="" data-original-title="No. Beds" class="item"><i class="input-icon field-icon icofont-hotel"></i> <span>x4</span></div></li> <li><div data-toggle="tooltip" data-placement="top" title="" data-original-title="No. Adults" class="item"><i class="input-icon field-icon icofont-users-alt-4"></i> <span>x10</span></div></li> <li><div data-toggle="tooltip" data-placement="top" title="" data-original-title="No. Children" class="item"><i class="input-icon field-icon fa-child fa"></i> <span>x1</span></div></li></ul></div></div> <!----></div></div><div class="room-item"><div class="row"><div class="col-xs-12 col-md-3"><div class="image"><img src="https://www.bookingcore.org/uploads/demo/space/space-1.jpg" alt=""> <div class="count-gallery"><i class="fa fa-picture-o"></i>
    6
    </div></div> <div id="modal_room_36" tabindex="-1" role="dialog" class="modal"><div role="document" class="modal-dialog modal-lg modal-dialog-centered"><div class="modal-content"><div class="modal-header"><h5 class="modal-title">Standard Double Room</h5> <span data-dismiss="modal" aria-label="Close" class="c-pointer"><i class="input-icon field-icon fa"><img src="https://www.bookingcore.org/images/ico_close.svg" alt="close"></i></span></div> <div class="modal-body"><div data-nav="thumbs" data-width="100%" data-auto="false" data-allowfullscreen="true" class="fotorama"><a href="https://www.bookingcore.org/uploads/demo/hotel/gallery/hotel-gallery-1.jpg"></a><a href="https://www.bookingcore.org/uploads/demo/hotel/gallery/hotel-gallery-2.jpg"></a><a href="https://www.bookingcore.org/uploads/demo/hotel/gallery/hotel-gallery-3.jpg"></a><a href="https://www.bookingcore.org/uploads/demo/hotel/gallery/hotel-gallery-4.jpg"></a><a href="https://www.bookingcore.org/uploads/demo/hotel/gallery/hotel-gallery-5.jpg"></a><a href="https://www.bookingcore.org/uploads/demo/hotel/gallery/hotel-gallery-6.jpg"></a></div></div></div></div></div></div> <div class="col-xs-12 col-md-6"><div class="hotel-info"><h3 class="room-name">Standard Double Room</h3> <ul class="room-meta"><li><div data-toggle="tooltip" data-placement="top" title="" data-original-title="Room Footage" class="item"><i class="input-icon field-icon icofont-ruler-compass-alt"></i> <span>200 sqft</span></div></li> <li><div data-toggle="tooltip" data-placement="top" title="" data-original-title="No. Beds" class="item"><i class="input-icon field-icon icofont-hotel"></i> <span>x2</span></div></li> <li><div data-toggle="tooltip" data-placement="top" title="" data-original-title="No. Adults" class="item"><i class="input-icon field-icon icofont-users-alt-4"></i> <span>x10</span></div></li> <li><div data-toggle="tooltip" data-placement="top" title="" data-original-title="No. Children" class="item"><i class="input-icon field-icon fa-child fa"></i> <span>x5</span></div></li></ul></div></div> <!----></div></div></div></div></div> <!----> <div class="end_room_sticky" style="min-height: auto;"></div> <!----></div>
    <div class="g-all-attribute is_mobile">
    <div class="g-attributes facilities-1 attr-6">
    <h3>Facilities</h3>
    <div class="list-attributes">
    <div class="item wake-up-call term-42">
    <i class="icofont-wall-clock"></i>
    Wake-up call
    </div>
    <div class="item car-hire term-43">
    <i class="icofont-car-alt-3"></i>
    Car hire
    </div>
    <div class="item bicycle-hire term-44">
    <i class="icofont-bicycle-alt-2"></i>
    Bicycle hire
    </div>
    <div class="item flat-tv term-45">
    <i class="icofont-imac"></i>
    Flat Tv
    </div>
    <div class="item laundry-and-dry-cleaning term-46">
    <i class="icofont-recycle-alt"></i>
    Laundry and dry cleaning
    </div>
    <div class="item internet-wifi term-47">
    <i class="icofont-wifi-alt"></i>
    Internet – Wifi
    </div>
    <div class="item coffee-and-tea term-48">
    <i class="icofont-tea"></i>
    Coffee and tea
    </div>
    </div>
    </div>
    <div class="g-attributes hotel-service attr-7">
    <h3>Hotel Service</h3>
    <div class="list-attributes">
    <div class="item havana-lobby-bar term-49">
    <i class="icofont-check-circled icon-default"></i>
    Havana Lobby bar
    </div>
    <div class="item fiesta-restaurant term-50">
    <i class="icofont-check-circled icon-default"></i>
    Fiesta Restaurant
    </div>
    <div class="item hotel-transport-services term-51">
    <i class="icofont-check-circled icon-default"></i>
    Hotel transport services
    </div>
    <div class="item pets-welcome term-54">
    <i class="icofont-check-circled icon-default"></i>
    Pets welcome
    </div>
    </div>
    </div>
    </div>
    <div class="g-rules">
    <h3>Rules</h3>
    <div class="description">
    <div class="row">
    <div class="col-lg-4">
    <div class="key">Check In</div>
    </div>
    <div class="col-lg-8">
    <div class="value"> 12:00AM </div>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-4">
    <div class="key">Check Out</div>
    </div>
    <div class="col-lg-8">
    <div class="value"> 11:00AM </div>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-4">
    <div class="key">Hotel Policies</div>
    </div>
    <div class="col-lg-8">
    <div class="item ">
    <div class="strong">Guarantee Policy</div>
    <div class="context">- A valid credit card will be required upon booking;
    - For credit card reservations, the same card(s) must be presented upon check in at the respective hotels;
    - Management reserves the right to cancel any reservations without notice if we are notified of any fraud or illegal activities associated with the full payments received.</div>
    </div>
    <div class="item ">
    <div class="strong">Children Policy</div>
    <div class="context">- Child under 5-year old: free of charge.
    - Child from 5-year old to under 12-year old: surcharge $10/person/room/night.
    - Child from 12-year old or extra Adult: surcharge $15/person/room/night.</div>
    </div>
    <div class="item  d-none ">
    <div class="strong">Cancellation/Amendment Policy</div>
    <div class="context">- If cancellation/amendment is made 72 hours prior to your arrival date, no fee will be charged.
    - If cancellation/amendment is made within 72 hours, including reservations made within 72 hours of your arrival, 1st night’s room rate and tax will be charged
    - In case of no-show, 100% room rate and tax will be charged.
    - Early Bird/Long Stay/Last Min/Package Rates are Non - changeable &amp; Non - refundable</div>
    </div>
    <div class="item  d-none ">
    <div class="strong">Late check-out policy</div>
    <div class="context">- Late check-out is subject to room availability
    - 12:00 to 17:00 check-out: 50% room rate surcharge
    - After 17:00 check-out: 100% room rate surcharge</div>
    </div>
    <div class="btn-show-all">
    <span class="text">Show All</span>
    <i class="fa fa-caret-down"></i>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="bravo-hr"></div>
    <div class="g-location">
    <div class="location-title">
    <h3>Location</h3>
    <div class="address">
    <i class="icofont-location-arrow"></i>
    Regal Cinemas Battery Park
    </div>
    </div>
    <div class="location-map">
    <div id="map_content" style="position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;"><div tabindex="0" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: pan-x pan-y;"><div style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);"><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; z-index: 988; transform: matrix(1, 0, 0, 1, -141, -205);"><div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -512px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -512px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -512px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 512px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 512px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 512px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"><div style="width: 27px; height: 43px; overflow: hidden; position: absolute; left: -14px; top: -43px; z-index: 0;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi2.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 27px; height: 43px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"><div style="position: absolute; z-index: 988; transform: matrix(1, 0, 0, 1, -141, -205);"><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 0px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 0px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: -256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: -256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: -256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 0px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -512px; top: 256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -512px; top: 0px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -512px; top: -256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 512px; top: -256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 512px; top: 0px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 512px; top: 256px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; z-index: 988; transform: matrix(1, 0, 0, 1, -141, -205);"><div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i2878!3i1825!4i256!2m3!1e0!2sm!3i508224372!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=60191" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i2877!3i1825!4i256!2m3!1e0!2sm!3i508224384!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=117250" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i2878!3i1824!4i256!2m3!1e0!2sm!3i508224360!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=99572" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i2877!3i1824!4i256!2m3!1e0!2sm!3i508224384!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=81556" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i2879!3i1825!4i256!2m3!1e0!2sm!3i508224384!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=115124" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i2879!3i1824!4i256!2m3!1e0!2sm!3i508224384!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=79430" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i2879!3i1826!4i256!2m3!1e0!2sm!3i508224372!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=94822" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i2878!3i1826!4i256!2m3!1e0!2sm!3i508224372!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=95885" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i2877!3i1826!4i256!2m3!1e0!2sm!3i508224372!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=96948" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -512px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i2876!3i1826!4i256!2m3!1e0!2sm!3i508224360!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=42015" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -512px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i2876!3i1825!4i256!2m3!1e0!2sm!3i508224384!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=118313" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -512px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i2876!3i1824!4i256!2m3!1e0!2sm!3i508224384!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=82619" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 512px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i2880!3i1825!4i256!2m3!1e0!2sm!3i508224384!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=121758" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 512px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i2880!3i1824!4i256!2m3!1e0!2sm!3i508224384!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=86064" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 512px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i2880!3i1826!4i256!2m3!1e0!2sm!3i508224360!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=45460" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div></div><div class="gm-style-pbc" style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;"><p class="gm-style-pbt"></p></div><div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;"><div style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"><div style="width: 27px; height: 43px; overflow: hidden; position: absolute; opacity: 0; left: -14px; top: -43px; z-index: 0;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi2.png" draggable="false" usemap="#gmimap0" style="position: absolute; left: 0px; top: 0px; width: 27px; height: 43px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"><map name="gmimap0" id="gmimap0"><area log="miw" coords="13.5,0,4,3.75,0,13.5,13.5,43,27,13.5,23,3.75" shape="poly" title="" style="cursor: pointer; touch-action: none;"></map></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div></div></div><iframe aria-hidden="true" frameborder="0" tabindex="-1" style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;"></iframe><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a target="_blank" rel="noopener" href="https://maps.google.com/maps?ll=19.161637,72.99751&amp;z=12&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3" title="Open this area in Google Maps (opens a new window)" style="position: static; overflow: visible; float: none; display: inline;"><div style="width: 66px; height: 26px; cursor: pointer;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/google4.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></a></div><div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-sizing: border-box; box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 300px; height: 180px; position: absolute; left: 263px; top: 135px;"><div style="padding: 0px 0px 10px; font-size: 16px; box-sizing: border-box;">Map Data</div><div style="font-size: 13px;">Map data ©2020</div><button draggable="false" title="Close" aria-label="Close" type="button" class="gm-ui-hover-effect" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: absolute; cursor: pointer; user-select: none; top: 0px; right: 0px; width: 37px; height: 37px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224px%22%20height%3D%2224px%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22%23000000%22%3E%0A%20%20%20%20%3Cpath%20d%3D%22M19%206.41L17.59%205%2012%2010.59%206.41%205%205%206.41%2010.59%2012%205%2017.59%206.41%2019%2012%2013.41%2017.59%2019%2019%2017.59%2013.41%2012z%22%2F%3E%0A%20%20%20%20%3Cpath%20d%3D%22M0%200h24v24H0z%22%20fill%3D%22none%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="pointer-events: none; display: block; width: 13px; height: 13px; margin: 12px;"></button></div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 166px; bottom: 0px; width: 87px;"><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="text-decoration: none; cursor: pointer; display: none;">Map Data</a><span>Map data ©2020</span></div></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Map data ©2020</div></div><div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 95px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/en-US_US/help/terms_maps.html" target="_blank" rel="noopener" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Terms of Use</a></div></div><button draggable="false" title="Toggle fullscreen view" aria-label="Toggle fullscreen view" type="button" class="gm-control-active gm-fullscreen-control" style="background: none rgb(255, 255, 255); border: 0px; margin: 10px; padding: 0px; position: absolute; cursor: pointer; user-select: none; border-radius: 2px; height: 40px; width: 40px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; overflow: hidden; top: 0px; right: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%20018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"></button><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_blank" rel="noopener" title="Report errors in the road map or imagery to Google" href="https://www.google.com/maps/@19.161637,72.99751,12z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Report a map error</a></div></div><div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false" controlwidth="40" controlheight="81" style="margin: 10px; user-select: none; position: absolute; bottom: 95px; right: 40px;"><div class="gmnoprint" controlwidth="40" controlheight="81" style="position: absolute; left: 0px; top: 0px;"><div draggable="false" style="user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 40px; height: 81px;"><button draggable="false" title="Zoom in" aria-label="Zoom in" type="button" class="gm-control-active" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23666%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23333%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23111%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"></button><div style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); top: 0px;"></div><button draggable="false" title="Zoom out" aria-label="Zoom out" type="button" class="gm-control-active" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"></button></div></div><div class="gmnoprint" controlwidth="40" controlheight="40" style="display: none; position: absolute;"><div style="width: 40px; height: 40px;"><button draggable="false" title="Rotate map 90 degrees" aria-label="Rotate map 90 degrees" type="button" class="gm-control-active" style="background: none rgb(255, 255, 255); display: none; border: 0px; margin: 0px 0px 32px; padding: 0px; position: relative; cursor: pointer; user-select: none; width: 40px; height: 40px; top: 0px; left: 0px; overflow: hidden; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"></button><button draggable="false" title="Tilt map" aria-label="Tilt map" type="button" class="gm-tilt gm-control-active" style="background: none rgb(255, 255, 255); display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; width: 40px; height: 40px; top: 0px; left: 0px; overflow: hidden; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="width: 18px;"></button></div></div></div></div></div><div style="background-color: white; font-weight: 500; font-family: Roboto, sans-serif; padding: 15px 25px; box-sizing: border-box; top: 5px; border: 1px solid rgba(0, 0, 0, 0.12); border-radius: 5px; left: 50%; max-width: 375px; position: absolute; transform: translateX(-50%); width: calc(100% - 10px); z-index: 1;"><div><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/google_gray.svg" draggable="false" style="padding: 0px; margin: 0px; border: 0px; height: 17px; vertical-align: middle; width: 52px; user-select: none;"></div><div style="line-height: 20px; margin: 15px 0px;"><span style="color: rgba(0, 0, 0, 0.87); font-size: 14px;">This page can't load Google Maps correctly.</span></div><table style="width: 100%;"><tr><td style="line-height: 16px; vertical-align: middle;"><a href="https://developers.google.com/maps/documentation/javascript/error-messages?utm_source=maps_js&amp;utm_medium=degraded&amp;utm_campaign=billing#api-key-and-billing-errors" target="_blank" rel="noopener" style="color: rgba(0, 0, 0, 0.54); font-size: 12px;">Do you own this website?</a></td><td style="text-align: right;"><button class="dismissButton">OK</button></td></tr></table></div></div>
    </div>
    </div>
    <div class="bravo-reviews" id="bravo-reviews">
    <h3>Reviews</h3>
    <div class="review-box">
    <div class="row">
    <div class="col-lg-5">
    <div class="review-box-score">
    <div class="review-score">
    5.0<span class="per-total">/5</span>
    </div>
    <div class="review-score-text">
    Excellent
    </div>
    <div class="review-score-base">
    Based on
    <span>
    4 reviews
    </span>
    </div>
    </div>
    </div>
    <div class="col-lg-7">
    <div class="review-sumary">
    <div class="item">
    <div class="label">
    Excellent
    </div>
    <div class="progress">
    <div class="percent green" style="width: 100%"></div>
    </div>
    <div class="number">4</div>
    </div>
    <div class="item">
    <div class="label">
    Very Good
    </div>
    <div class="progress">
    <div class="percent green" style="width: 0%"></div>
    </div>
    <div class="number">0</div>
    </div>
    <div class="item">
    <div class="label">
    Average
    </div>
    <div class="progress">
    <div class="percent green" style="width: 0%"></div>
    </div>
    <div class="number">0</div>
    </div>
    <div class="item">
    <div class="label">
    Poor
    </div>
    <div class="progress">
    <div class="percent green" style="width: 0%"></div>
    </div>
    <div class="number">0</div>
    </div>
    <div class="item">
    <div class="label">
    Terrible
    </div>
    <div class="progress">
    <div class="percent green" style="width: 0%"></div>
    </div>
    <div class="number">0</div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="review-list">
    <div class="review-item">
    <div class="review-item-head">
    <div class="media">
    <div class="media-left">
    <span class="avatar-text">J</span>
    </div>
    <div class="media-body">
    <h4 class="media-heading">James Alia</h4>
    <div class="date">04/21/2020 02:30</div>
    </div>
    </div>
    </div>
    <div class="review-item-body">
    <h4 class="title"> Good location, quality should be better </h4>
    <ul class="review-star">
    <li><i class="fa fa-star"></i></li>
    <li><i class="fa fa-star"></i></li>
    <li><i class="fa fa-star"></i></li>
    <li><i class="fa fa-star"></i></li>
    <li><i class="fa fa-star"></i></li>
    </ul>
    <div class="detail">
    Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te
    </div>
    </div>
    </div>
    <div class="review-item">
    <div class="review-item-head">
    <div class="media">
    <div class="media-left">
    <span class="avatar-text">W</span>
    </div>
    <div class="media-body">
    <h4 class="media-heading">William Diana</h4>
    <div class="date">04/21/2020 02:30</div>
    </div>
    </div>
    </div>
    <div class="review-item-body">
    <h4 class="title"> Good location, quality should be better </h4>
    <ul class="review-star">
    <li><i class="fa fa-star"></i></li>
    <li><i class="fa fa-star"></i></li>
    <li><i class="fa fa-star"></i></li>
    <li><i class="fa fa-star"></i></li>
    <li><i class="fa fa-star"></i></li>
    </ul>
    <div class="detail">
    Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te
    </div>
    </div>
    </div>
    <div class="review-item">
    <div class="review-item-head">
    <div class="media">
    <div class="media-left">
    <span class="avatar-text">W</span>
    </div>
    <div class="media-body">
    <h4 class="media-heading">William Diana</h4>
    <div class="date">04/21/2020 02:30</div>
    </div>
    </div>
    </div>
    <div class="review-item-body">
    <h4 class="title"> Nothing good this time </h4>
    <ul class="review-star">
    <li><i class="fa fa-star"></i></li>
    <li><i class="fa fa-star"></i></li>
    <li><i class="fa fa-star"></i></li>
    <li><i class="fa fa-star"></i></li>
    <li><i class="fa fa-star"></i></li>
    </ul>
    <div class="detail">
    Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te
    </div>
    </div>
    </div>
    <div class="review-item">
    <div class="review-item-head">
    <div class="media">
    <div class="media-left">
    <span class="avatar-text">B</span>
    </div>
    <div class="media-body">
    <h4 class="media-heading">Bush Elise</h4>
    <div class="date">04/21/2020 02:30</div>
    </div>
    </div>
    </div>
    <div class="review-item-body">
    <h4 class="title"> Beautiful spot with a lovely view </h4>
    <ul class="review-star">
    <li><i class="fa fa-star"></i></li>
    <li><i class="fa fa-star"></i></li>
    <li><i class="fa fa-star"></i></li>
    <li><i class="fa fa-star"></i></li>
    <li><i class="fa fa-star"></i></li>
    </ul>
    <div class="detail">
    Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te
    </div>
    </div>
    </div>
    </div>
    <div class="review-pag-wrapper">
    <div class="bravo-pagination">
    </div>
    <div class="review-pag-text">
    Showing 1 - 4 of 4 total
    </div>
    </div>
    <div class="review-message">
    You must <a href="#login" data-toggle="modal" data-target="#login">log in</a> to write review
    </div>
    </div>
    </div>
    <div class="col-md-12 col-lg-3">
    <div class="owner-info widget-box">
    <div class="media">
    <div class="media-left">
    <a href="https://www.bookingcore.org/en/profile/1" target="_blank">
    <span class="avatar-text">S</span>
    </a>
    </div>
    <div class="media-body">
    <h4 class="media-heading"><a class="author-link" href="https://www.bookingcore.org/en/profile/1" target="_blank">System Admin</a>
    <img data-toggle="tooltip" data-placement="top" src="https://www.bookingcore.org/icon/ico-not-vefified-1.svg" title="" alt="ico-vefified-1" data-original-title="Not verified">
    </h4>
    <p>Member Since Apr 2020</p>
    </div>
    </div>
    </div>
    <div class="bravo-list-hotel-related-widget">
    <h3 class="heading">Related Hotel</h3>
    <div class="list-item">
    <div class="item">
    <div class="media">
    <div class="media-left">
    <a href="https://www.bookingcore.org/en/hotel/hotel-stanford">
    <img class="img-responsive lazy loaded" data-src="https://www.bookingcore.org/uploads/demo/space/space-5.jpg" alt="Hotel Stanford" src="https://www.bookingcore.org/uploads/demo/space/space-5.jpg" data-was-processed="true">
    </a>
    </div>
    <div class="media-body">
    <div class="star-rate">
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    </div>
    <h4 class="media-heading">
    <a href="https://www.bookingcore.org/en/hotel/hotel-stanford">
    Hotel Stanford
    </a>
    </h4>
    <div class="price-wrapper">
    from
    <span class="price">$300</span>
    <span class="unit">/night</span>
    </div>
    </div>
    </div>
    </div>
    <div class="item">
    <div class="media">
    <div class="media-left">
    <a href="https://www.bookingcore.org/en/hotel/hotel-wbf-homachi">
    <img class="img-responsive lazy loaded" data-src="https://www.bookingcore.org/uploads/demo/space/space-6.jpg" alt="Hotel WBF Hommachi" src="https://www.bookingcore.org/uploads/demo/space/space-6.jpg" data-was-processed="true">
    </a>
    </div>
    <div class="media-body">
    <div class="star-rate">
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    </div>
    <h4 class="media-heading">
    <a href="https://www.bookingcore.org/en/hotel/hotel-wbf-homachi">
    Hotel WBF Hommachi
    </a>
    </h4>
    <div class="price-wrapper">
    from
    <span class="price">$350</span>
    <span class="unit">/night</span>
    </div>
    </div>
    </div>
    </div>
    <div class="item">
    <div class="media">
    <div class="media-left">
    <a href="https://www.bookingcore.org/en/hotel/castello-casole-hotel">
    <img class="img-responsive lazy loaded" data-src="https://www.bookingcore.org/uploads/demo/space/space-7.jpg" alt="Castello Casole Hotel" src="https://www.bookingcore.org/uploads/demo/space/space-7.jpg" data-was-processed="true">
    </a>
    </div>
    <div class="media-body">
    <div class="star-rate">
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    </div>
    <h4 class="media-heading">
    <a href="https://www.bookingcore.org/en/hotel/castello-casole-hotel">
    Castello Casole Hotel
    </a>
    </h4>
    <div class="price-wrapper">
    from
    <span class="price">$350</span>
    <span class="unit">/night</span>
    </div>
    </div>
    </div>
    </div>
    <div class="item">
    <div class="media">
    <div class="media-left">
    <a href="https://www.bookingcore.org/en/hotel/redac-gateway-hotel">
    <img class="img-responsive lazy loaded" data-src="https://www.bookingcore.org/uploads/demo/space/space-8.jpg" alt="Redac Gateway Hotel" src="https://www.bookingcore.org/uploads/demo/space/space-8.jpg" data-was-processed="true">
    </a>
    </div>
    <div class="media-body">
    <div class="star-rate">
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    </div>
    <h4 class="media-heading">
    <a href="https://www.bookingcore.org/en/hotel/redac-gateway-hotel">
    Redac Gateway Hotel
    </a>
    </h4>
    <div class="price-wrapper">
    from
    <span class="price">$500</span>
    <span class="unit">/night</span>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="g-all-attribute is_pc">
    <div class="g-attributes facilities-1 attr-6">
    <h3>Facilities</h3>
    <div class="list-attributes">
    <div class="item wake-up-call term-42">
    <i class="icofont-wall-clock"></i>
    Wake-up call
    </div>
    <div class="item car-hire term-43">
    <i class="icofont-car-alt-3"></i>
    Car hire
    </div>
    <div class="item bicycle-hire term-44">
    <i class="icofont-bicycle-alt-2"></i>
    Bicycle hire
    </div>
    <div class="item flat-tv term-45">
    <i class="icofont-imac"></i>
    Flat Tv
    </div>
    <div class="item laundry-and-dry-cleaning term-46">
    <i class="icofont-recycle-alt"></i>
    Laundry and dry cleaning
    </div>
    <div class="item internet-wifi term-47">
    <i class="icofont-wifi-alt"></i>
    Internet – Wifi
    </div>
    <div class="item coffee-and-tea term-48">
    <i class="icofont-tea"></i>
    Coffee and tea
    </div>
    </div>
    </div>
    <div class="g-attributes hotel-service attr-7">
    <h3>Hotel Service</h3>
    <div class="list-attributes">
    <div class="item havana-lobby-bar term-49">
    <i class="icofont-check-circled icon-default"></i>
    Havana Lobby bar
    </div>
    <div class="item fiesta-restaurant term-50">
    <i class="icofont-check-circled icon-default"></i>
    Fiesta Restaurant
    </div>
    <div class="item hotel-transport-services term-51">
    <i class="icofont-check-circled icon-default"></i>
    Hotel transport services
    </div>
    <div class="item pets-welcome term-54">
    <i class="icofont-check-circled icon-default"></i>
    Pets welcome
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="bravo-more-book-mobile d-none">
    <div class="container">
    <div class="left">
    <div class="g-price">
    <div class="prefix">
    <span class="fr_text">from</span>
    </div>
    <div class="price">
    <span class="onsale"></span>
    <span class="text-price">$550</span>
    </div>
    </div>
    <div class="service-review tour-review-5.0">
    <div class="list-star">
    <ul class="booking-item-rating-stars">
    <li><i class="fa fa-star-o"></i></li>
    <li><i class="fa fa-star-o"></i></li>
    <li><i class="fa fa-star-o"></i></li>
    <li><i class="fa fa-star-o"></i></li>
    <li><i class="fa fa-star-o"></i></li>
    </ul>
    <div class="booking-item-rating-stars-active" style="width: 100%">
    <ul class="booking-item-rating-stars">
    <li><i class="fa fa-star"></i></li>
    <li><i class="fa fa-star"></i></li>
    <li><i class="fa fa-star"></i></li>
    <li><i class="fa fa-star"></i></li>
    <li><i class="fa fa-star"></i></li>
    </ul>
    </div>
    </div>
    <span class="review">
    4 Reviews
    </span>
    </div>
    </div>
    <div class="right">
    <a class="btn btn-primary bravo-button-book-mobile">Book Now</a>
    </div>
    </div>
    </div> </div>

@endsection