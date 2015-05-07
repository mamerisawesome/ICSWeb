@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="col-md-12" id="reg-form-title">
        <h2>List of accounts</h2>
        </div>

        <div class="col-md-12" id="reg-form-body">
        <ol>
        @foreach($users as $user)
               <li>{{ $user->lastName, ", ", $user->firstName, ": ", $user->username }}</li>
               {{ link_to("/pages/user/{$user->username}", 'view more') }}
        @endforeach
        </ol>
        </div>
    </div>
@stop