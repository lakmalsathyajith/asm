@extends('layouts.main')
@section('content')
        {{$lang = app()->getLocale()}}
        <blog-detail id={{$params['slug']}} slug="{{$params['slug']}}" lang="{{$lang}}"></blog-detail>
@stop