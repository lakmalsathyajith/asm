@extends('layouts.main')
@section('content')
    {{$lang = app()->getLocale()}}
    <apartment-details v-bind:id="{{$params['id']}}" slug="{{$params['slug']}}" type_id="{{$params['type_id']}}" area_id="{{$params['area_id']}}" lang="{{$lang}}"></apartment-details>
@stop