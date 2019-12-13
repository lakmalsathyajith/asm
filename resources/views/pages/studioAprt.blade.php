@extends('layouts.main')
@section('content')
    
    @if(app()->getLocale()=='en')
    <studio-apartments></studio-apartments>
    @elseif(app()->getLocale()=='zh')
    <mandarin-studio-apartments></mandarin-studio-apartments>
    @endif
@stop