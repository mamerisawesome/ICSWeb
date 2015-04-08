@extends('layouts.default')
@section('content')
    <div class="container">
        <div class="row">
            <h1>This is a test page</h1>
        </div>
        <?php for($i = 1; $i < 10; $i += 1){ ?>
            <h3>Hello</h3>
            <p>
                <?php for($j = 1; $j < $i*(100^$j); $j += 1) echo 'This is a long message.' ?>
            </p>
        <?php } ?>
    </div>
@stop