@extends('layouts.main')
@section('content')
    {{$lang = app()->getLocale()}}
    <apartment-list lang="{{$lang}}"></apartment-list>
@stop
