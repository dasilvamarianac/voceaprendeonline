@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{$course->title}}</div>
                    < class="card-body">
                        {{$course->category}}    <br/>
                        {{$course->instructor}}    <br/>
                        {{$course->keywords}}
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection