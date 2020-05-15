@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome on your Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ul>
                        <li><a href="{{ route('trainee') }}">Trainee List</a></li>
                        <li><a href="{{ route('teacher') }}">Teacher List</a></li>
                        <li><a href="{{ route('training') }}">See all trainings recorded</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
