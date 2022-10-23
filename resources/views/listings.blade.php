@extends('layout')

@section('content')

{{-- Show hero just on home screen --}}
@include('partials._hero')

{{-- Show search on Home Screen --}}
@include('partials._search')


{{-- All listings --}}
<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

  @unless(count($listings)== 0)
      <p>No listings found.</p>

  @foreach($listings as $listing)
    {{-- Passing listing as prop. ':' allows us to pass a variable as a prop. Without you can just pass a string         --}}
    <x-listing-card :listing="$listing" />
  @endforeach

  @else
  <p>No listings found</p>
  @endunless
  </div>

@endsection