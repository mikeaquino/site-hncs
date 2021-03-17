@extends('layouts.app')

@section('css-asset')
<style type="text/css">
    .mbottom-10 {
        margin-bottom: 10px;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="dropdown">
        <button type="button" class="btn btn-danger dropdown-toggle btn-sm" data-toggle="dropdown">
            Choose What Action
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ route('cover-photos') }}">Manage Cover Photos</a>
            <a class="dropdown-item" href="{{ route('f-vid') }}">Change Featured Video</a>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Content Management - Home Page > Manage Cover Photos') }}</div>
                <div class="card-body">
                    @if (!$images->isEmpty())
                        @foreach ($images as $image)
                            <a href="/content-management/cover-photos/edit/{{ $image->id }}">
                                <button type="button" class="btn btn-success btn-sm mbottom-10">Change Photo</button>
                            </a>
                            <img src="{{ asset('img/slides/' . $image->image_name) }}" class="img-thumbnail" alt="image">
                            <br>
                            <br>
                        @endforeach
                    @else
                        <p>No Image found</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection