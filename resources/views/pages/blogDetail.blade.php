@extends('layouts.main')
@section('content')
        <blog-detail id={{$params['slug']}} slug="{{$params['slug']}}" ></blog-detail>
@stop