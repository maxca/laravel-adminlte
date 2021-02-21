@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Students</h1>
@stop

@section('content')
    <div class="row">
      <div class="col-12 text-right">
          <a href="{{url('student/create')}}" type="button" class="btn btn-primary mb-3">Add New Student</a>
      </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">


                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Student ID</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Nickname</th>
                            <th scope="col">Major</th>
                            <th scope="col">Faculty</th>
                            <th scope="col">Year</th>
                            <th scope="col">Updated</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>com sci</td>
                            <td>sci</td>
                            <td>3</td>
                            <td>20/02/2021</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>com sci</td>
                            <td>sci</td>
                            <td>3</td>
                            <td>20/02/2021</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>com sci</td>
                            <td>sci</td>
                            <td>3</td>
                            <td>20/02/2021</td>
                          </tr>
                        </tbody>
                      </table>




                </div>
            </div>
        </div>
    </div>
@stop
