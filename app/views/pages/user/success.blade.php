@extends('layouts.default')

@section('content')
	<style>
	#success-panel {
		background: url("{{URL::to('res/images/physci.jpg')}}");
		background-size: 100%;
		height: 500px;
	}
	#success-panel h1 {
		color: white;
	}

	#success {
		text-align: center;
	}
	#success-logo {
		margin: auto;
		border-radius: 100%;
		width: 250px;
		height: 250px;
		overflow: hidden;
	}
	#success-logo img {
		height: 100%;
		width: 100%;
	}

	</style>

    <div class="wrapping-panel" id="success-panel">
    	<div class="container">
            <div class="col-md-12" id="success">
                <h1>Sign Up Successful!</h1>
                <div id="success-logo">
                <img  src="{{URL::to('res/images/ics_logo.jpg')}}">
                </div>
            </div>
        </div>
    </div>
@stop