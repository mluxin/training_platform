@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Trainee List</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {!! Form::open(['url' => 'add_trainee']) !!}
                      Name : {!! Form::text('name') !!}
                      Surname : {!! Form::text('surname') !!}
                        {!! Form::submit('Create a new trainee') !!}
                    {!! Form::close() !!}
                    <br/>
                    Trainees recorded :
                    <ul>
                      @foreach ($trainees as $trainee)
                      <li>
                          {{ $trainee->name }} {{ $trainee->surname }}
                      </li>
                      @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
