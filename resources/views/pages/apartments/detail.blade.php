@extends('layouts.main')
@section('content')
    {{$lang = app()->getLocale()}}
    <apartment-details v-bind:id="{{$params['id']}}" slug="{{$params['slug']}}" lang="{{$lang}}"></apartment-details>
@stop