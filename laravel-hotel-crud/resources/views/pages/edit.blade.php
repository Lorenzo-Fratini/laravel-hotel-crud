@extends('layouts.main-layout')

@section('content')
    <main>
        <h1>Employee</h1>
        <form method="POST" action="{{ route('update', $employee -> id) }}">

            @csrf
            @method('POST')

            <div class="form">
                <label for="firstname">Firstname: </label>
                <br>
                <input type="text" id="firstname" name="firstname" value="{{ $employee -> firstname }}">
            </div>
            <div class="form">
                <label for="lastname">Lastname: </label>
                <br>
                <input type="text" id="lastname" name="lastname" value="{{ $employee -> lastname }}">
            </div>
            <div class="form">
                <label for="role">Role:</label>
                <br>
                <input type="number" id="role" name="role" value="{{ $employee -> role }}">
            </div>
            <div class="form">
                <label for="ral">Ral:</label>
                <br>
                <input type="number" id="ral" name="ral" value="{{ $employee -> ral }}">
            </div>

            <button type="submit" class="link-button">
                Update
            </button>
        </form>
    </main>
@endsection