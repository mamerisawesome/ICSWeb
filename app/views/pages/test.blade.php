@extends('layouts.default')
@section('content')
    <div class="container">
        <div class="row">
            <h1>This is a test page</h1>
        </div>
        <?php for($i = 0; $i < 20; $i += 1){ ?>
            <p>Hello</p>
        <?php } ?>
    </div>
@stop