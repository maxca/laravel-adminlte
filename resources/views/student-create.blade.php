@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Add Student</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">


                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">student_id</label>
                            <input type="text" class="form-control" name="student_id" id="student_id" placeholder="student_id">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">full_name</label>
                            <input type="text" class="form-control" name="full_name" id="full_name" placeholder="full_name">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">nickname</label>
                            <input type="text" class="form-control" name="nickname"  id="nickname" placeholder="nickname">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">major</label>
                            <input type="text" class="form-control" name="major"  id="major" placeholder="major">
                        </div>


                        <div class="form-group">
                            <label for="exampleFormControlInput1">faculty</label>
                            <input type="text" class="form-control" name="faculty"  id="faculty" placeholder="faculty">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">faculty</label>
                            <select class="form-control" name="year"  id="year" placeholder="year">
                                <option value="">:: เลือกชั้นปี ::</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <div class="text-right">
                                <button type="reset" class="btn btn-warning">Clear</button>
                                <button type="submit" class="btn btn-primary ml-4">Add Student</button>
                            </div>
                        </div>
                    </form>




                </div>
            </div>
        </div>
    </div>
@stop
