@extends('layout')

@section('css-asset')
<style type="text/css">
    .mbottom-10 {
        margin-top: 25px;
    }
</style>
@endsection

@section('content')
<div class="ipsechero-full-bar">
    <div class="container">
        <div class="row center-align space-between wrap-flex mobile-center">
            <div class="col-md-8">
                <h3>Holy Nazarene Christian School News & Events</h3>
            </div>
            <div class="col-md-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb n-flex flex-end">
                      <li class="breadcrumb-item"><a href="/home">Home</a></li>
                      <li class="breadcrumb-item"><a href="/news">News & Events</a></li>
                      <li class="breadcrumb-item active" aria-current="page">{{ $blog->title }}</li>
                    </ol>
                  </nav> 
            </div>
        </div>
    </div>
</div>
<section id="content" class="single-blog">
	<div class="container">
		<div class="about">
			<div class="row">
				<div class="col-md-8">
					<img src="{{ asset('img/' . $blog->image) }}" alt="">
					<div class="row singleBlog-heading sm-res-flex sm-wrap-flex">
						<div class="col-md-1 sm-2perc">
							<div class="newsevent-date-highlight">
								<div class="date-highlight-area">
									{{ $blog->created_at->format('d') }}
								</div>
								<div class="month-highlight-area">
									{{ $blog->created_at->format('M') }}
								</div>
							</div>
						</div>	
						<div class="col-md-11 sm-10perc">
							<h3>{{ $blog->title }}</h3>
							<i class="fa fa-calendar"></i> {{ $blog->created_at->format('F m, Y') }}
							&nbsp;&nbsp;
							<i class="fa fa-user"></i> By HNCS Admin
						</div>
					</div>
					
					<p class="mbottom-10">{!! $blog->content !!}</p>
				</div>
				<div class="col-md-4">
					<div class="right-sidebar-area">
						<div class="right-sidebar-heading">
							<p>ARCHIVES</p>
							<hr>	
						</div>
						<div class="right-sidebar-content">
							<ul>
								@if (!$blogsPerMonthYr->isEmpty())
								@foreach ($blogsPerMonthYr as $row)
								<li><a href="/blogsPerMonth/{{ $row[0]->created_at->format('Y-m') }}">{{ $row[0]->created_at->format('F Y') }}</a></li>
								@endforeach
								@else
									<p>No data found</p>
								@endif
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection