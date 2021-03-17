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
                    @if ($errors->has('image'))
                    <div class="alert alert-warning">
                        <strong>{{ $errors->first('image') }}</strong>
                    </div>
                    @endif
                    
                    @if (session()->has('success'))
                    <div class="alert alert-warning">
                        <strong>{{ session()->get('success') }}</strong>
                    </div>
                    @endif
                    <img src="{{ asset('img/slides/' . $image->image_name) }}" class="img-thumbnail" alt="image">

                    <form method="POST" action="/content-management/cover-photos/{{ $image->id }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <br>
                        <input type="file" name="image" id="image" value="{{ old('image') }}">
                        <button type="submit" class="btn btn-secondary btn-sm">Upload New Photo</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection