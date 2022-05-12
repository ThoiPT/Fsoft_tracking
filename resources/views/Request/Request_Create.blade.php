@extends('home')
@section('content')
    <div class="col-md-6" style="max-width: 100%">
        <!-- general form elements disabled -->
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">General Elements</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i>
                            Request Title
                        </label>
                        <input type="text" class="form-control success" name="title" id="inputSuccess" placeholder="Request Title">
                    </div>


                    <div class="form-group" data-select2-id="74">
                        <label>Select Skill</label>

                        <select name="skill" class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true">
                            @foreach($listSkill as $list)
                                <option selected="selected" value="{{$list->idSkill}}">{{$list->idSkill}} - {{ $list->skillName }}</option>
                            @endforeach
                        </select>

                    </div>

                    <div class="form-group" data-select2-id="120">
                        <label>Other Skill</label>
                        <div class="select2-purple" data-select2-id="119">
                            <select name="other[]" class="select2 select2-hidden-accessible" multiple data-placeholder="Select a State" data-dropdown-css-class="select2-purple" style="width: 100%;" aria-hidden="true">
                                @foreach($listSkill as $list)
                                    <option value="{{$list->idSkill}}">{{ $list->skillName }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-form-label" for="inputSuccess">
                            Experience
                        </label>
                        <input type="text" class="form-control success" name="experience" id="inputSuccess" placeholder="Request Title">
                    </div>

                    <div class="form-group">
                        <label class="col-form-label" for="inputSuccess">
                            Slot Recruits
                        </label>
                        <input type="number" class="form-control success" name="recruits" id="inputSuccess" placeholder="Request Title">
                    </div>

                    <div class="form-group">
                        <label class="col-form-label" for="inputSuccess">
                            Level
                        </label>
                        <input type="text" class="form-control success" name="level" id="inputSuccess" placeholder="EX: Internship, Junior">
                    </div>

                    <div class="form-group">
                        <label class="col-form-label" for="inputSuccess">
                            Open Date
                        </label>
                        <input type="date" class="form-control success" name="open" id="inputSuccess" placeholder="EX: Internship, Junior">
                    </div>

                    <div class="form-group">
                        <label class="col-form-label" for="inputSuccess">
                            Close Date
                        </label>
                        <input type="date" class="form-control success" name="close" id="inputSuccess" placeholder="EX: Internship, Junior">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="inputSuccess">
                            Description
                        </label>
                        <textarea name="editor" id="editor"></textarea>
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
@endsection
