@extends('layout')

@section('content')
<div class="ipsechero-full-bar">
    <div class="container">
        <div class="row center-align space-between wrap-flex mobile-center">
            <div class="col-md-8">
                <h3>Contact Holy Nazarene Christian School</h3>
            </div>
            <div class="col-md-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb n-flex flex-end">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">contact</li>
                    </ol>
                  </nav> 
            </div>
        </div>
    </div>
</div>

<section id="featured">
    <!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
                    <li>
                        <img src="img/slides/2.jpg" alt="" />
                        <div class="flex-caption">
                            <div class="item_introtext"> 
                                <strong>Your Kids Buddy </strong>
                                <p>The best educational template</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="img/slides/1.jpg" alt="" />
                        <div class="flex-caption">
                            <div class="item_introtext"> 
                                <strong>Your Kids Buddy </strong>
                                <p>The best educational template</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="img/slides/3.jpg" alt="" />
                        <div class="flex-caption">
                            <div class="item_introtext"> 
                                <strong>Your Kids Buddy </strong>
                                <p>The best educational template</p>
                            </div>
                        </div>
                    </li>
            </ul>
        </div>
    <!-- end slider -->
</section>
<section id="map-area">
  <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=cavite&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
</section>
<section id="ipAboutSect1" class="sm-padding">
    <div class="container">
        <div class="row ">
            <div class="col-md-7">
                <div class="contact-form">
                    <form id="contact-form" role="form" novalidate="novalidate">
                      <div class="form-group has-feedback">
                        <label for="name">Name*</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="">
                        <i class="fa fa-user form-control-feedback"></i>
                      </div>
                      <div class="form-group has-feedback">
                        <label for="email">Email*</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="">
                        <i class="fa fa-envelope form-control-feedback"></i>
                      </div>
                      <div class="form-group has-feedback">
                        <label for="subject">Subject*</label>
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="">
                        <i class="fa fa-navicon form-control-feedback"></i>
                      </div>
                      <div class="form-group has-feedback">
                        <label for="message">Message*</label>
                        <textarea class="form-control" rows="6" id="message" name="message" placeholder=""></textarea>
                        <i class="fa fa-pencil form-control-feedback"></i>
                      </div>
                      <input type="submit" value="Submit" class="btn btn-default">
                    </form>
                  </div>
            </div>
            <div class="col-md-5">
                <h3 class="heading-color">Contact Us</h3>
                <div class="xm-mrgn">
                    <i class="fa fa-user"></i> <a href="#" class="heading-color">Lorem ipsum dolor sit amet</a><br>
                    <i class="fa fa-user"></i> <a href="#" class="heading-color">repellendus nulla nemo</a><br>
                    <i class="fa fa-envelope"></i> <a href="#" class="heading-color">admin@admin.com</a><br>
                    <i class="fa fa-envelope"></i> <a href="#" class="heading-color">admin@admin.com</a><br>
                    <i class="fa fa-phone"></i> Line#1 <a href="tel:+63923928423" class="heading-color">+639 (54) 542.1532</a><br>
                    <i class="fa fa-phone"></i> Line#2 <a href="#" class="heading-color">+639 (54) 542.1587</a><br>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection