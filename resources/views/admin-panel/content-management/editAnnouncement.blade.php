@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Content Management - Announcements > Edit') }}</div>
                <div class="card-body">
                    <div class="float-right">
                        <a href="/content-management/announcements">
                            <button type="button" class="btn btn-secondary btn-sm">Go Back</button>
                        </a>
                        @if ($announcement->status == 2)
                            <a href="/content-management/announcementStatus/{{ $announcement->id }}/{{ $announcement->status }}">
                                <button type="button" class="btn btn-success btn-sm">Publish</button>
                            </a>
                        @elseif ($announcement->status == 1)
                            <a href="/content-management/announcementStatus/{{ $announcement->id }}/{{ $announcement->status }}">
                                <button type="button" class="btn btn-success btn-sm">Switch to Draft</button>
                            </a>
                        @endif
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

                    <form method="POST" action="{{ route('updateAnnouncement') }}" enctype="multipart/form-data" class="admin-panel-form" >
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $announcement->id }}">
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group">
                              <label>Announcement Type</label>
                              <select name="announcements_type" class="form-control" required>
                                <option value="1" <?php echo $selected = ($announcement->announcement_type == 1 ) ? 'selected' : '' ?> >Kinder</option>
                                <option value="2" <?php echo $selected = ($announcement->announcement_type == 2 ) ? 'selected' : '' ?>>Elementary</option>
                                <option value="3" <?php echo $selected = ($announcement->announcement_type == 3 ) ? 'selected' : '' ?>>High School</option>
                              </select>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Announcement</label>
                              <input type="text" class="form-control" name="announcement_name" placeholder="Announcement" value="{{ $announcement->announcement_name }}" required>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Upload File</label>
                              <input type="file" class="form-control" name="file" >
                            </div>
                          	<a href="{{ asset('announcements') }}/{{ $announcement->announcement_file }}">{{ $announcement->announcement_file }}</a>
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