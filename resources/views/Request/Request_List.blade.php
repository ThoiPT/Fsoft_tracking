@extends('home')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Expandable Table</h3>
                </div>
                <!-- ./card-header -->
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th style="width: 95px">Status</th>
                            <th>Title</th>
                            <th>Skill - Job</th>
                            <th>Other</th>
                            <th>Account</th>
                            <th style="width: 165px">Action</th>
                            <th style="width: 100px">ADD CV</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($request as $re)
                        <tr data-widget="expandable-table" aria-expanded="false">
                            <td>{{$re -> id}}</td>
                            @if($re ->status == 1)
                                <td>
                                    <small class="badge badge-success">
                                        <i class="far fa-check-square"></i>Open
                                    </small>
                                </td>
                            @elseif($re ->status == 2)
                                <td>
                                    <small class="badge badge-danger"> Close</small>
                                </td>
                            @else
                                <td>
                                    <small class="badge badge-warning">
                                        <i class="fa flag-icon-er"></i>Status Error
                                    </small>
                                </td>
                            @endif
                            <td>{{ $re->title }}</td>
                            <td>{{ $re -> skillName }}</td>
                            <td>{{ $re -> other_id }}</td>
                            <td>{{ $re -> email }}</td>
                            <td><a class="btn btn-danger">UPDATE STATUS</a></td>
                            <td><a class="btn btn-success">ADD CV</a></td>
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
