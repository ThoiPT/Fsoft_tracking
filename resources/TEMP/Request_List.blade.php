
<!-- SHOW TRANG REQUEST LIST THEO DẠNG PHÂN CẤP - GỘP CỘT-->

<!-- CODE PHẦN VIEW -->
@extends('home')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Request List</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6"></div>
                                    <div class="col-sm-12 col-md-6"></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example2"
                                               class="table table-bordered table-hover dataTable dtr-inline"
                                               aria-describedby="example2_info">
                                            <thead>
                                            <tr>
                                                <th class="sorting sorting_asc" tabindex="0" aria-controls="example2"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Rendering engine: activate to sort column descending"
                                                    aria-sort="ascending">ID
                                                </th>

                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                    colspan="1" aria-label="Browser: activate to sort column ascending">
                                                    Title
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Platform(s): activate to sort column ascending">Skill -
                                                    Job
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Platform(s): activate to sort column ascending">Status
                                                </th>

                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Engine version: activate to sort column ascending">Type
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Engine version: activate to sort column ascending">
                                                    Account
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                    colspan="1"
                                                    aria-label="CSS grade: activate to sort column ascending">
                                                    Description
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                    colspan="1"
                                                    aria-label="CSS grade: activate to sort column ascending">Action
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php($stt = 1)
                                            @foreach($data as $key => $skills)
                                                <tr>
                                                    <td rowspan="{{ count($skills['countData']) }}">{{ $stt }}</td>
                                                    <td rowspan="{{ count($skills['countData']) }}">{{ $key }}</td>
                                                    <?php unset($skills['countData']) ?>
                                                    @foreach($skills as $s_key => $skill)
                                                        <td rowspan="{{ count($skill) }}">{{$s_key}}</td>
                                                        @php($first = reset($skill))
                                                        <td>
                                                            @if($first->status == 1)
                                                                <small class="badge badge-success">
                                                                    <i class="far fa-check-square"></i> Open</small>
                                                            @elseif($first->status == 2)
                                                                <small class="badge badge-danger"> Close</small>
                                                            @else
                                                                <small class="badge badge-warning">
                                                                    <i class="fa flag-icon-er"></i>Status Error</small>
                                                            @endif
                                                        </td>
                                                        <td>{{ $first->other_id }}</td>
                                                        <td>{{ $first -> email }}</td>
                                                        <td>{!! $first -> description !!}</td>
                                                        <td>
                                                            <a href="/request/edit/{{ $first->id }}"
                                                               class="btn btn-success">Update</a>
                                                        </td>
                                                        <td></td>
                                                        @break
                                                    @endforeach
                                                </tr>
                                                <?php
                                                $skill_key_fist = array_key_first($skill);
                                                unset($skill[$skill_key_fist]);
                                                ?>
                                                @foreach($skill as $s_item => $item)
                                                    <tr>
                                                        <td>
                                                            @if($item->status == 1)
                                                                <small class="badge badge-success">
                                                                    <i class="far fa-check-square"></i> Open</small>
                                                            @elseif($item->status == 2)
                                                                <small class="badge badge-danger"> Close</small>
                                                            @else
                                                                <small class="badge badge-warning">
                                                                    <i class="fa flag-icon-er"></i>Status Error</small>
                                                            @endif
                                                        </td>
                                                        <td>{{ $item->other_id }}</td>
                                                        <td>{{ $item -> email }}</td>
                                                        <td>{!! $item -> description !!}</td>
                                                        <td>
                                                            <a href="/request/edit/{{ $item->id }}"
                                                               class="btn btn-success">Update</a>
                                                        </td>
                                                        <td></td>
                                                    </tr>
                                                @endforeach
                                                <?php
                                                $skills_key_fist = array_key_first($skills);
                                                unset($skills[$skills_key_fist]);
                                                ?>
                                                @foreach($skills as $s_key => $skill)
                                                    <tr>
                                                        <?php unset($skills['countData']) ?>
                                                        @foreach($skills as $s_key => $skill)
                                                            <td rowspan="{{ count($skill) }}">{{$s_key}}</td>
                                                            @php($first = reset($skill))
                                                            <td>
                                                                @if($item->status == 1)
                                                                    <small class="badge badge-success">
                                                                        <i class="far fa-check-square"></i> Open</small>
                                                                @elseif($item->status == 2)
                                                                    <small class="badge badge-danger"> Close</small>
                                                                @else
                                                                    <small class="badge badge-warning">
                                                                        <i class="fa flag-icon-er"></i>Status Error</small>
                                                                @endif
                                                            </td>
                                                            <td>{{ $first->other_id }}</td>
                                                            <td>{{ $first -> email }}</td>
                                                            <td>{!! $first -> description !!}</td>
                                                            <td>
                                                                <a href="/request/edit/{{ $first->id }}"
                                                                   class="btn btn-success">Update</a>
                                                            </td>
                                                            <td></td>
                                                            @break
                                                        @endforeach
                                                    </tr>
                                                    <?php
                                                    $skill_key_fist = array_key_first($skill);
                                                    unset($skill[$skill_key_fist]);
                                                    ?>
                                                    @foreach($skill as $s_item => $item)
                                                        <tr>
                                                            <td>
                                                                @if($item->status == 1)
                                                                    <small class="badge badge-success">
                                                                        <i class="far fa-check-square"></i> Open</small>
                                                                @elseif($item->status == 2)
                                                                    <small class="badge badge-danger"> Close</small>
                                                                @else
                                                                    <small class="badge badge-warning">
                                                                        <i class="fa flag-icon-er"></i>Status Error</small>
                                                                @endif
                                                            </td>
                                                            <td>{{ $item->other_id }}</td>
                                                            <td>{{ $item -> email }}</td>
                                                            <td>{!! $item -> description !!}</td>
                                                            <td>
                                                                <a href="/request/edit/{{ $item->id }}"
                                                                   class="btn btn-success">Update</a>
                                                            </td>
                                                            <td></td>
                                                        </tr>
                                                    @endforeach
                                                @endforeach
                                                @php($stt++)
                                            @endforeach


                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th rowspan="1" colspan="1">ID</th>
                                                <th rowspan="1" colspan="1">Status</th>
                                                <th rowspan="1" colspan="1">Title</th>
                                                <th rowspan="1" colspan="1">Skill - Job</th>

                                                <th rowspan="1" colspan="1">Type</th>
                                                <th rowspan="1" colspan="1">Account</th>
                                                <th rowspan="1" colspan="1">Description</th>
                                                <th rowspan="1" colspan="1">Action</th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="example2_info" role="status"
                                             aria-live="polite">Showing 1 to 10 of 57 entries
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled"
                                                    id="example2_previous">
                                                    <a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0"
                                                       class="page-link">Previous</a>
                                                </li>
                                                <li class="paginate_button page-item active">
                                                    <a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0"
                                                       class="page-link">1</a>
                                                </li>
                                                <li class="paginate_button page-item ">
                                                    <a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0"
                                                       class="page-link">2</a>
                                                </li>
                                                <li class="paginate_button page-item "><a href="#"
                                                                                          aria-controls="example2"
                                                                                          data-dt-idx="3" tabindex="0"
                                                                                          class="page-link">3</a>
                                                </li>
                                                <li class="paginate_button page-item "><a href="#"
                                                                                          aria-controls="example2"
                                                                                          data-dt-idx="4" tabindex="0"
                                                                                          class="page-link">4</a>
                                                </li>
                                                <li class="paginate_button page-item "><a href="#"
                                                                                          aria-controls="example2"
                                                                                          data-dt-idx="5" tabindex="0"
                                                                                          class="page-link">5</a>
                                                </li>
                                                <li class="paginate_button page-item "><a href="#"
                                                                                          aria-controls="example2"
                                                                                          data-dt-idx="6" tabindex="0"
                                                                                          class="page-link">6</a>
                                                </li>
                                                <li class="paginate_button page-item next" id="example2_next"><a
                                                        href="#" aria-controls="example2" data-dt-idx="7" tabindex="0"
                                                        class="page-link">Next</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <!-- /.col -->
            </div>

            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
@endsection

<!-- CODE PHẦN REQUEST CONTROLLER -> function list() -->

{{--
public function list()
{
$request = DB::select('SELECT requests.id, requests.title, request_skill.request_id
,request_skill.skill_id,skills.skillName, request_skill.other_id
, users.email, requests.`status`, requests.description
FROM requests
JOIN request_skill ON request_skill.request_id = requests.id
JOIN skills ON skills.idSkill = request_skill.skill_id
JOIN users ON users.id = request_skill.user_id');
$getIDSkill = DB::table('skills')->get()->all();


$data = [];
foreach($request as $re){
$data[$re->title][$re -> skillName][] = $re;
$data[$re->title]['countData'][] = $re;
}

return view("Request/Request_List",compact('request', 'getIDSkill', 'data'));
}--}}
