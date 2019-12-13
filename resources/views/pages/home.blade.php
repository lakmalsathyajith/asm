@extends('layouts.main')
@section('content')
@if(app()->getLocale()=='en')
<home></home>
@elseif(app()->getLocale()=='zh')
<mandarin-home></mandarin-home>
@endif

@stop