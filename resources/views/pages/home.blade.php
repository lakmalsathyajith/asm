@extends('layouts.main')
@section('content')
    {{$lang = app()->getLocale()}}
@if($lang=='en')
<home lang="{{$lang}}"></home>
@elseif($lang=='zh')
<mandarin-home lang="{{$lang}}"></mandarin-home>
@endif

@stop