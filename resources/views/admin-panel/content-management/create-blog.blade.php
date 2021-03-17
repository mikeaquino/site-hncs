@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Content Management - News & Events > Create New') }}</div>
                <div class="card-body">
                    <a href="/content-management/blog">
                        <button type="button" class="btn btn-primary btn-sm float-right">Go Back</button>
                    </a>
                    <br>
                    <br>

                    @foreach ($errors->all() as $error)
                        <div class="alert alert-warning">
                            <strong>{{ $error }}<br></strong>
                        </div>
                    @endforeach

                    @if (session()->has('success'))
                        <div class="alert alert-warning">
                            <strong>{{ session()->get('success') }}</strong>
                        </div>
                    @endif

                    <form method="POST" action="/content-management/blog" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <h4>Title</h4>
                            <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
                        </div>
                        <div class="form-group">
                            <h4>Image</h4>
                            <input type="file" class="form-control-file border" name="image" id="image" value="{{ old('image') }}">
                        </div>
                        <div class="form-group">
                            <h4>Content</h4>
                            <textarea rows="5" cols="40" class="form-control tinymce-editor" name="content" id="content" value="{{ old('content') }}"></textarea>
                        </div>
                        <button type="submit" class="btn btn-secondary btn-sm">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js-asset')
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script type="text/javascript">
    tinymce.init({
        selector: 'textarea.tinymce-editor',
        height: 300,
        menubar: true,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table paste code help wordcount'
        ],
        toolbar: 'undo redo | formatselect | ' +
            'bold italic backcolor | alignleft aligncenter ' +
            'alignright alignjustify | bullist numlist outdent indent | ' +
            'removeformat | help',
        content_css: '//www.tiny.cloud/css/codepen.min.css'
    });
</script>
@endsection