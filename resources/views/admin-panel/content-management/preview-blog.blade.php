@extends('layout')

@section('css-asset')
<style type="text/css">
    .mbottom-10 {
        margin-top: 25px;
    }
</style>
@endsection

@section('content')
<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">News & Events</h2>
			</div>
		</div>
	</div>
</section>
<section id="content">
	<div class="container">
		<div class="about">
			<div class="row">
				<div class="col-md-8">
					<img src="{{ asset('img/' . $blog->image) }}" alt="">
					<h3>{{ $blog->title }}</h3>
					<i class="fa fa-calendar"></i> {{ $blog->created_at->format('F m, Y') }}
					&nbsp;&nbsp;
					<i class="fa fa-user"></i> By HNCS Admin
					<p class="mbottom-10">{!! $blog->content !!}</p>
				</div>
				<div class="col-md-4">
					<h3>Apply for Home Based Learing Mode until September 15</h3>
					<p>As one of Microsoft Philippines’ partner schools, Lasallian students are entitled to free Microsoft Office 365 accounts.</p>
					<button type="button" class="btn">Read More</button>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection