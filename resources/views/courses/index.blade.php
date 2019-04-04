@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if(Session::has('message'))
                    <div class="alert alert-success">{{Session::get('message')}}</div>
                @endif

                <div class="card">
                    <div class="card-header">Courses</div>

                    <div class="card-body">
                        <table class="table">
                            @foreach($courses as $course)
                               <tr>
                                   <td>
                                       {{link_to_route('course.show', $course->title, [$course->id])}}
                                   </td>
                                   <td>
                                        {!! Form::open(array('route'=>['course.destroy', $course->id], 'method'=>'DELETE')) !!}
                                            {{link_to_route('course.edit', 'Edit', [$course->id], ['class'=>'btn btn-primary'])}}
                                        |
                                            {!! Form::button('Delete', ['class'=>'btn btn-danger', 'type'=>'submit']) !!}
                                       {!! Form::close() !!}
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