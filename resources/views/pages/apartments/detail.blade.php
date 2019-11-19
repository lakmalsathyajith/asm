@extends('layouts.main')
@section('content')
    <apartment-details v-bind:id="{{$params}}"></apartment-details>
@stop