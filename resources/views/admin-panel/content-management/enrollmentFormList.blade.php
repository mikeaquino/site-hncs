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

                    @if (!$efList->isEmpty())
                    <a href="/content-management/exportEf" class="btn btn-primary btn-small float-right mbottom-10">Export to Excel</a>
                        <div class="table-responsive table-sm">
                            <table id="basicTable" class="table table-bordered responsive">
                                <thead class="thead-light">
                                    <tr>
                                        <th></th>
                                        <th>Student Status</th>
                                        <th>Student Name</th>
                                        <th>Year/Level</th>
                                        <th>Address</th>
                                        <th>Mode of Payment</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $col_count = 0; ?>
                                    @foreach ($efList as $row)
                                    <?php $col_count++; ?>
                                        <tr>
                                            <td><?php echo $col_count; ?></td>
                                            <td>
                                                 @if ($row->stud_status == 1)
                                                    Old Student
                                                @elseif ($row->stud_status == 2)
                                                    New Student
                                                @endif
                                            </td>
                                            <td>
                                                {{ $row->lastname }}, {{ $row->firstname }} {{ $row->middlename }}
                                            </td>
                                            <td>{{ $row->grade }}</td>
                                            <td>
                                                {{ $row->address_block }}, {{ $row->address_street }} {{ $row->address_brgy }} {{ $row->address_city }}, {{ $row->address_province }} 
                                            </td>
                                            <td>{{ $row->modeOfPayment }}</td>
                                            <td>
                                                @if ($row->status == 1)
                                                    Draft
                                                @elseif ($row->status == 2)
                                                    Active
                                                @endif
                                            </td>
                                            <td>
                                                <a href="/content-management/previewEF/{{ $row->id }}" target="_blank">Preview</a> |
                                                 <a href="/content-management/editEF/{{ $row->id }}">Edit</a>
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