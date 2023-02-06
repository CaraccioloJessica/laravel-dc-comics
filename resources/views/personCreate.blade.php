@extends('layout.main-layout')

@section('content')
    <main>
      <h1>New Person</h1>
      <form method="POST" action="{{ route('person.store') }}">
        @csrf
        <label for="firstName">Name</label>
        <input type="text" name="firstName">
        <br>
        <label for="lastName">Last Name</label>
        <input type="text" name="lastName">
        <br>
        <label for="dateOfBirth">Date of birth</label>
        <input type="date" name="dateOfBirth">
        <br>
        <label for="height">Height</label>
        <input type="number" name="height">
        
        <input type="submit" value="CREATE NEW PERSON">
      </form>
    </main>

@endsection