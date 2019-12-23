@extends('layouts.main')
@section('content')
    {{$lang = app()->getLocale()}}
    <apartment-details v-bind:id="{{$params}}" slug="{{$params}}" lang="{{$lang}}"></apartment-details>
@stop