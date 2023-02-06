@extends('layout.main-layout')

@section('content')
<main>
  <div class="container">
    <h1>People</h1>
    <ul class="p-0 m-0">
      @foreach ($people as $person)
      <li class="py-2">
        {{ $person -> firstName }} {{ $person -> lastName }} - 
        {{ $person -> dateOfBirth }} - 
        {{ $person -> height }} cm - 
        <a href="{{route('person.delete', $person) }}">&cross;</a>
      </li>
      @endforeach
    </ul>  
  </div>
</main>
@endsection