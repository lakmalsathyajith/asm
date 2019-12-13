@extends('layouts.main')
@section('content')
@if(app()->getLocale()=='en')
<typical-apartment></typical-apartment>
@elseif(app()->getLocale()=='zh')
<mandarin-typical-apartment></mandarin-typical-apartment>
@endif
@stop