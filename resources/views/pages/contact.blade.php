@extends('layouts.main')
@section('content')
    
    @if(app()->getLocale()=='en')
    <contact></contact>
    @elseif(app()->getLocale()=='zh')
    <mandarin-contact></mandarin-contact>
    @endif
@stop
