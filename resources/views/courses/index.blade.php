@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Courses</div>

                    <div class="card-body">
                        <table class="table">
                            @foreach($courses as $course)
                               <tr>
                                   <td>
                                       {{$course->title}}
                                   </td>
                                   <td>
                                       edit
                                       |
                                       delete
                                   </td>
                               </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
                {{link_to_route('course.create', 'Add new Course', null, ['class'=>'btn btn-primary'])}}
            </div>
        </div>
    </div>
@endsection