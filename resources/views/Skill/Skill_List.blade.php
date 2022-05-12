@extends('home')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Skill List</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Skill Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($list as $list)
                        <tr>

                                <td>{{ $list->idSkill }}</td>
                                <td>{{ $list->skillName }}</td>
                                @if($list->idSkill == 1)
                                    <td><span class="tag tag-success">Open</span></td>
                                @else
                                <td><span class="tag tag-success">Close</span></td>
                                @endif

                                <td>
                                    <a href="/skill/delete/{{$list->idSkill}}" class="btn btn-danger">Delete</a>
                                </td>
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
