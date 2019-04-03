@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Courses</div>

                    <div class="card-body">
                        {!! Form::open(array('route' => 'course.store')) !!}
                            <div class="form-group">
                                {!! Form::label('title', 'Informe o título') !!}
                                {!! Form::text('title', null, ['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('category', 'Informe a categoria título') !!}
                                {!! Form::text('category', null, ['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('instructor', 'Informe o instrutor') !!}
                                {!! Form::text('instructor', null, ['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('keywords', 'Informe as palavras-chave') !!}
                                {!! Form::textarea('keywords', null, ['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::button('Adicionar', ['type'=>'summit', 'class'=>'btn btn-primary']) !!}
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
                @if ($errors->has('card-body'))
                    <ul class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
@endsection