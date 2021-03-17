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
                <div class="card-header">{{ __('Content Management - Enrollment Form List') }}</div>
                <div class="card-body">

                @if (session()->has('success'))
                    <div class="alert alert-warning">
                        <strong>{{ session()->get('success') }}</strong>
                    </div>
                @endif
                    <a href="/content-management/createAnnouncement/" class="btn btn-primary btn-sm float-right mbottom-10">Create</a>
                    @if (!$announcementsList->isEmpty())
                    <div class="table-responsive table-sm">
                        <table id="basicTable" class="table table-bordered responsive">
                            <thead class="thead-light">
                                <tr>
                                    <th></th>
                                    <th>Announcement Type</th>
                                    <th>Announcement</th>
                                    <th>File</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <?php $col_count = 0; ?>
                                        @foreach ($announcementsList as $row)
                                        <?php $col_count++; ?>
                                        <td><?php echo $col_count; ?></td>
                                        <td>
                                            @if ($row->announcement_type == 1)
                                                Kinder
                                            @elseif ($row->announcement_type == 2)
                                                Elementary
                                            @elseif ($row->announcement_type == 3)
                                                High School
                                            @endif
                                        </td>
                                        <td>{{ $row->announcement_name }}</td>
                                        <td><a href="{{ asset('announcements') }}/{{ $row->announcement_file }}">{{ $row->announcement_file }}</a></td>
                                        <td>
                                            @if ($row->status == 2)
                                                Draft
                                            @elseif ($row->status == 1)
                                                Active
                                            @endif
                                        </td>
                                        <td>
                                            <a href="/content-management/editAnnouncement/{{ $row->id }}">Edit</a> |
                                             <a href="/content-management/deleteAnnouncement/{{ $row->id }}/{{ $row->announcement_file }}">Delete</a>
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