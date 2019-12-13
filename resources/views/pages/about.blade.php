@extends('layouts.main')
@section('content')
    
    @if(app()->getLocale()=='en')
    <about></about>
    @elseif(app()->getLocale()=='zh')
    <mandarin-about></mandarin-about>
    @endif
@stop
