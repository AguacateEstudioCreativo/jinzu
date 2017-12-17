@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (Auth::check())

                    <div class="row">
                        <div class="col-md-3">
                            <img class="img-responsive" src="https://www.gravatar.com/avatar/{{ md5 (strtolower (trim (Auth::user()->email))) }}.jpg?s=200&r=pg&d=retro" />
                        </div>
                        <div class="col-md-9">
                            <h1>{{ Auth::user()->name }}</h1>
                            <p>{{ Auth::user()->email }}</p>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
