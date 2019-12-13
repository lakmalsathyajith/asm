@extends('layouts.main')
@section('content')
    
    @if(app()->getLocale()=='en')
    <two-bed-room-apartments></two-bed-room-apartments>
    @elseif(app()->getLocale()=='zh')
    <mandarin-two-bed-room-apartments></mandarin-two-bed-room-apartments>
    @endif
@stop