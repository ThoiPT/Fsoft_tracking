@extends('home')
@section('content')
    <div class="col-md-6" style="max-width: 100%">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">New Skill</h3>
            </div>

            <!-- form start -->
            <form action="/skill/create" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Skill Name</label>
                        <input type="text" class="form-control" name="skill" id="exampleInputSkill" placeholder="Enter Skill">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Status</label>
                        <input type="number" class="form-control" name="status" id="exampleInputSkill" placeholder="0:OFF - 1:ON">
                    </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
@endsection


