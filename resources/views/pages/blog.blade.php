@extends('layouts.main')
@section('content')
    {{--@if(app()->getLocale()=='en')--}}
    {{$lang = app()->getLocale()}}
    <blog lang="{{$lang}}"></blog>
    {{--@elseif(app()->getLocale()=='zh')
        <mandarin-blog></mandarin-blog>
    @endif--}}
@stop