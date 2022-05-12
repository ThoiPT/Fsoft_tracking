@extends('home')
@section('content')
    @foreach($data as $re)
    <div class="col-md-6" style="max-width: 100%">
        <!-- general form elements disabled -->
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Update Status: {{$re->title}}</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="/request/update/{{$re->id}}" method="POST">
                    @csrf
                    <div class="form-group">
                        Note: -------
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="inputSuccess">
                            Status
                        </label>
                        <input type="number" class="form-control success" name="status_re" id="inputSuccess" placeholder="0:OFF - 1:ON">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-danger"style="color: white">ADD REQUEST</button>
                    </div>

                </form>

            </div>
            <!-- /.card-body -->
        </div>
    </div>
    @endforeach
@endsection
