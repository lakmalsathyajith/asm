@extends('layouts.main')
@section('content')
    @if(app()->getLocale()=='en')
        <blog></blog>
    @elseif(app()->getLocale()=='zh')
        <mandarin-blog></mandarin-blog>
    @endif
@stop