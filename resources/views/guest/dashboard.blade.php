@extends('guest.master', [
    'hidekategorievent' => true,
    'hideevent' => true,
    'hideabout' => true,
])

@section('title', 'Dashboard Welcome')
@section('content')
  @include('guest.navbar')
  @include('guest.kategorievent')
  @include('guest.kontenumum')
  @include('guest.about')
@endsection