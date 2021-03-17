@extends('layout')

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
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item"><a href="/news">News & Events</a></li>
                      <li class="breadcrumb-item active" aria-current="page">{{ $thisMonthPosts[0]->created_at->format('F m, Y') }}</li>
                    </ol>
                  </nav> 
            </div>
        </div>
    </div>
</div>
<section id="content" class="newsBlade">
	<div class="container">
		<div class="about">
			<div class="row">
				<div class="col-md-10">
					@if (!$thisMonthPosts->isEmpty())
					@foreach ($thisMonthPosts as $blogThisMonth)
						<div class="row sm-res-flex sm-wrap-flex">
							<div class="col-md-1 sm-2perc">
								<div class="newsevent-date-highlight">
									<div class="date-highlight-area">
										{{ $blogThisMonth->created_at->format('d') }}
									</div>
									<div class="month-highlight-area">
										{{ $blogThisMonth->created_at->format('M') }}
									</div>
								</div>
							</div>
							<div class="col-md-4 sm-10perc">
								<a href="news/blog/{!! $blogThisMonth->id !!}">
									<img src="{{ asset('img/' . $blogThisMonth->image) }}" alt="">
								</a>
							</div>
							<div class="col-md-5 sm-100perc">
								<h3>{{ $blogThisMonth->title }}</h3>
								<i class="fa fa-calendar"></i> <small>{{ $blogThisMonth->created_at->format('F m, Y') }}</small>
								&nbsp;&nbsp;
								<i class="fa fa-user"></i> By HNCS Admin
								<br><br>
								<p>{!! substr(strip_tags($blogThisMonth->content), 0, 100) !!} ...</p>
								<a href="../news/blog/{!! $blogThisMonth->id !!}" class="btn">Read More</a>
							</div>
						</div>
					@endforeach
					@else
						<p>No data found</p>
					@endif
				</div>
				<div class="col-md-2">
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