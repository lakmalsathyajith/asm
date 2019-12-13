@extends('layouts.main')
@section('content')
    
    @if(app()->getLocale()=='en')
    <one-bed-room-apartments></one-bed-room-apartments>
    @elseif(app()->getLocale()=='zh')
    <mandarin-one-bed-room-apartments></mandarin-one-bed-room-apartments>
    @endif
@stop