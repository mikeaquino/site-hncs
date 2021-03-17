@extends('layout')

@section('content')
<section id="featured">
    <!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
                @foreach ($images as $image)
                    <li>
                        <img src="{{ asset('img/slides/' . $image->image_name) }}" alt="" />
                        <div class="flex-caption">
                            <div class="item_introtext"> 
                                <strong>Your Kids Buddy </strong>
                                <p>The best educational template</p>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    <!-- end slider -->
</section>
<section class="hero-text">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="aligncenter">
                    <h1 class="aligncenter">Holy Nazarene Christian School</h1>
                    <span class="clear spacer_responsive_hide_mobile " style="height:13px;display:block;"></span>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus temporibus perferendis nesciunt quam repellendus nulla nemo ipsum odit corrupti consequuntur possimus, vero mollitia velit ad consectetur. Alias, laborum excepturi nihil autem nemo numquam, ipsa architecto non, magni consequuntur quam.
                </div>
            </div>
        </div>
    </div>
</section>
<section id="content">
    <div class="container">
        <div class="row">
            <div class="skill-home">
                <div class="skill-home-solid clearfix"> 
                    <div class="col-md-3 text-center">
                        <span class="icons c1"><i class="fa fa-trophy"></i></span>
                        <div class="box-area">
                            <h3>Web Development</h3> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p>
                        </div>
                    </div>
                    <div class="col-md-3 text-center"> 
                        <span class="icons c2"><i class="fa fa-picture-o"></i></span>
                        <div class="box-area">
                            <h3>UI Design</h3> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p>
                        </div>
                    </div>
                    <div class="col-md-3 text-center"> 
                        <span class="icons c3"><i class="fa fa-desktop"></i></span>
                        <div class="box-area">
                            <h3>Interaction</h3> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p>
                        </div>
                    </div>
                    <div class="col-md-3 text-center"> 
                        <span class="icons c4"><i class="fa fa-globe"></i></span>
                        <div class="box-area">
                            <h3>User Experiance</h3> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="testimonial-area">
    <div class="testimonial-solid">
        <div class="container">
            <div class="testi-icon-area">
                <div class="quote">
                    <i class="fa fa-microphone"></i>
                </div>
            </div>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="">
                        <a href="#"></a>
                    </li>
                    <li data-target="#carousel-example-generic" data-slide-to="1" class="">
                        <a href="#"></a>
                    </li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" class="active">
                        <a href="#"></a>
                    </li>
                    <li data-target="#carousel-example-generic" data-slide-to="3" class="">
                        <a href="#"></a>
                    </li>
                </ol>
                <div class="carousel-inner">
                    <div class="item">
                        <p>I studied here from kinder until High School, all I can say is that HNCS is like a home!</p>
                        <p>
                            <b>- Mark John -</b>
                        </p>
                    </div>
                    <div class="item">
                        <p>The most exciting and best school in Tanza as far as I know. Recommending this!!</p>
                        <p>
                            <b>- Jaison Warner -</b>
                        </p>
                    </div>
                    <div class="item active">
                        <p>You might want to check out this school and enroll your children. I assure you that securing your children here is the best decision ever you will make.</p>
                        <p>
                            <b>- Tony Antonio -</b>
                        </p>
                    </div>
                    <div class="item">
                        <p>They are helping the children to strive and find their passion in life. This is what I love about HNCS!</p>
                        <p>
                            <b>- Leena Doe -</b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="courses">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>Latest @ Holy Nazarene Christian School</h3>
                <span class="clear spacer_responsive_hide_mobile " style="display: block"></span>
                <a class="anchornews-color" href="/news">Check out the latest news, events, and announcements.</a>
            </div>
        </div>
        <div class="row">
            @foreach ($blogs as $blog)
                <div class="col-md-3 topbotspace">
                    <img class="img-responsive" src="{{ asset('img/' . $blog->image) }}" alt="">
                    <h3>{{ $blog->title }}</h3>
                    <i class="fa fa-calendar"></i> <small>{{ $blog->created_at->format('F m, Y') }}</small>
                    <p>{!! substr(strip_tags($blog->content), 0, 100) !!} ...</p>
                    <a href="/news/blog/{{ $blog->id }}" target="_blank" class="btn">Read More</a>
                </div>
            @endforeach
        </div>
    </div>
</section>
<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Announcements</h3>
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">Kinder</a></li>
                    <li><a data-toggle="tab" href="#menu1">Elementary</a></li>
                    <li><a data-toggle="tab" href="#menu2">High School</a></li>
                    <li><a data-toggle="tab" href="#menu3">News & Events</a></li>
                </ul>

                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <br>
                        @foreach ($announcementsListKinder as $row)
                        <a href="{{ asset('announcements') }}/{{ $row->announcement_file }}">
                            <p><i class="fa fa-sign-in"></i> {{ $row->announcement_name }}</p>
                        </a>
                        @endforeach
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <br>
                        @foreach ($announcementsListElementary as $row)
                        <a href="{{ asset('announcements') }}/{{ $row->announcement_file }}">
                            <p><i class="fa fa-sign-in"></i> {{ $row->announcement_name }}</p>
                        </a>
                        @endforeach
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <br>
                        @foreach ($announcementsListHS as $row)
                        <a href="{{ asset('announcements') }}/{{ $row->announcement_file }}">
                            <p><i class="fa fa-sign-in"></i> {{ $row->announcement_name }}</p>
                        </a>
                        @endforeach
                    </div>
                    <div id="menu3" class="tab-pane fade">
                        <br>
                        @foreach ($blogsAll as $row)
                        <a href="/news/blog/{{ $row->id }}" target="_blank">
                            <p><i class="fa fa-sign-in"></i> {{ $row->title }}</p>
                        </a>
                        @endforeach
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <h3>Featured Video</h3>
                <div class="iframe-holder">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/lh9ssHEeXM8"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="courses">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="aligncenter">
                    <h3 class="aligncenter">Gallery</h3>
                    <ul class="nav nav-pills nav-pills-center">
                        <li class="active"><a data-toggle="pill" href="#all">All</a></li>
                        <li><a data-toggle="pill" href="#events">Events</a></li>
                        <li><a data-toggle="pill" href="#faculties">Faculties</a></li>
                        <li><a data-toggle="pill" href="#banner">Banner</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="all" class="tab-pane fade in active gallery">
                            <div class="row mtop-20 sm-res-flex">
                                <div class="col-md-3 tablet-half">
                                    <img class="img-responsive" src="img/service1.jpg" alt="">
                                </div>
                                <div class="col-md-3 tablet-half">
                                    <img class="img-responsive" src="img/service2.jpg" alt="">
                                </div>
                                <div class="col-md-3 tablet-half">
                                    <img class="img-responsive" src="img/service3.jpg" alt="">
                                </div>
                                <div class="col-md-3 tablet-half">
                                    <img class="img-responsive" src="img/works/5.jpg" alt="">
                                </div>
                            </div>
                            <div class="row sm-res-flex">
                                <div class="col-md-3 tablet-half">
                                    <img class="img-responsive" src="img/works/2.jpg" alt="">
                                </div>
                                <div class="col-md-3 tablet-half">
                                    <img class="img-responsive" src="img/works/3.jpg" alt="">
                                </div>
                                <div class="col-md-3 tablet-half">
                                    <img class="img-responsive" src="img/works/6.jpg" alt="">
                                </div>
                                <div class="col-md-3 tablet-half">
                                    <img class="img-responsive" src="img/works/8.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div id="events" class="tab-pane fade">
                            <div class="row mtop-20">
                                <div class="col-md-3">
                                    <img class="img-responsive" src="img/service1.jpg" alt="">
                                </div>
                                <div class="col-md-3">
                                    <img class="img-responsive" src="img/service2.jpg" alt="">
                                </div>
                                <div class="col-md-3">
                                    <img class="img-responsive" src="img/service3.jpg" alt="">
                                </div>
                                <div class="col-md-3">
                                    <img class="img-responsive" src="img/works/5.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div id="faculties" class="tab-pane fade">
                            <div class="row mtop-20">
                                <div class="col-md-3">
                                    <img class="img-responsive" src="img/works/2.jpg" alt="">
                                </div>
                                <div class="col-md-3">
                                    <img class="img-responsive" src="img/works/3.jpg" alt="">
                                </div>
                                <div class="col-md-3">
                                    <img class="img-responsive" src="img/works/6.jpg" alt="">
                                </div>
                                <div class="col-md-3">
                                    <img class="img-responsive" src="img/works/8.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div id="banner" class="tab-pane fade">
                            <div class="row mtop-20">
                                <div class="col-md-6">
                                    <img class="img-responsive" src="img/works/3.jpg" alt="">
                                </div>
                                <div class="col-md-6">
                                    <img class="img-responsive" src="img/works/5.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection