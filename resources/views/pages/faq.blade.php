@extends('layouts.main')
@section('content')
    @if(app()->getLocale()=='en')
        <faq></faq>
    @elseif(app()->getLocale()=='zh')
        <mandarin-faq></mandarin-faq>
    @endif
@stop