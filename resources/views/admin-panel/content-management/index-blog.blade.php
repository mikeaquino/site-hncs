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
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Content Management - News & Events') }}</div>
                <div class="card-body">
                    <div class="float-right">
                        <a href="#">
                            <button type="button" class="btn btn-primary btn-sm mbottom-10">Search</button>
                        </a>
                        <a href="/content-management/blog/create">
                            <button type="button" class="btn btn-success btn-sm mbottom-10">Create New</button>
                        </a>
                    </div>
                    <br>
                    <br>

                    @if (session()->has('success'))
                        <div class="alert alert-warning">
                            <strong>{{ session()->get('success') }}</strong>
                        </div>
                    @endif

                    @if (!$blogs->isEmpty())
                        <div class="table-responsive table-sm">
                            <table class="table table-bordered">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Title</th>
                                        <th>Created By</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($blogs as $blog)
                                        <tr>
                                            <td>{{ $blog->title }}</td>
                                            <td>{{ $blog->created_by }}</td>
                                            <td>
                                                @if ($blog->status == 1)
                                                    Draft
                                                @elseif ($blog->status == 2)
                                                    Active
                                                @endif
                                            </td>
                                            <td>
                                                <a href="/blog/preview/{{ $blog->id }}" target="_blank">Preview</a> |
                                                <a href="/content-management/edit/{{ $blog->id }}">Edit</a> |
                                                <a href="/delete/{{ $blog->image }}">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <p>No data found</p>
                    @endif
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection