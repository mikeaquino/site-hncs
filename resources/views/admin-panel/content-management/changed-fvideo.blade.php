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
                <div class="card-header">{{ __('Content Management - Home Page > Changed Featured Video') }}</div>
                <div class="card-body">
                    @if ($errors->has('videolink'))
                        <div class="alert alert-warning">
                            <strong>{{ $errors->first('videolink') }}</strong>
                        </div>
                    @endif

                    @if (session()->has('success'))
                        <div class="alert alert-warning">
                            <strong>{{ session()->get('success') }}</strong>
                        </div>
                    @endif

                    <iframe width="560" height="315" src="{{ $video->video_link }}" class="mbottom-10"></iframe>

                    <form method="POST" action="/content-management/change-featured-video/{{ $video->id }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label><strong>Video Link:</strong></label>
                            <input type="text" class="form-control" name="videolink" id="videolink" value="{{ $video->video_link }}">
                        </div>
                        <button type="submit" class="btn btn-secondary btn-sm">Update Featured Video</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection