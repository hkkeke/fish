@extends('layouts.default')
@section('title','主页')
@section('content')
    <div class="jumbotron">
        <h1>Hello Laravel</h1>
        <p class="lead">
            你现在看到的是Laravel基础教程
        </p>
        <p>
            一切，从现在开始
        </p>
        <p>
            <a href="{{route('signup')}}" class="btn btn-lg btn-success" role="button">现在注册</a>
        </p>
    </div>
@stop