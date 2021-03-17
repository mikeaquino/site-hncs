@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Content Management - Announcements > Create') }}</div>
                <div class="card-body">
                    <div class="float-right">
                        <a href="/content-management/announcements">
                            <button type="button" class="btn btn-secondary btn-sm">Go Back</button>
                        </a>
                    </div>
                    <h3>Create Announcement</h3>
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

                    <form method="POST" action="{{ route('insertAnnouncement') }}" enctype="multipart/form-data" class="admin-panel-form" >
                        {{ csrf_field() }}
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group">
                              <label>Announcement Type</label>
                              <select name="announcements_type" class="form-control" required>
                                <option value="1">Kinder</option>
                                <option value="2">Elementary</option>
                                <option value="3">High School</option>
                              </select>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Announcement</label>
                              <input type="text" class="form-control" name="announcement_name" placeholder="Announcement" required>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Upload File</label>
                              <input type="file" class="form-control" name="file" required>
                            </div>
                          </div>
                        </div>

                        <div class="row text-right">
                          <div class="col-md-12">
                              <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                          </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js-asset')
@endsection