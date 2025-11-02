@extends('layouts.appfront')

@section('title', 'Medicines List')


@section('content')
    @include('medicines.partials.homehero')
    @include('medicines.partials.serviceboxes')
    @include('medicines.partials.mission')

@endsection