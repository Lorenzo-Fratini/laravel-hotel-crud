@extends('layouts.main-layout')

@section('content')
    <main>
        <h1>Employees</h1>
        <ul>
            @foreach ($employees as $employee)
                <li>
                   <span class="green">
                       {{ $employee -> firstname }} {{ $employee -> lastname }}
                    </span> 
                    <div>
                        <a href="{{ route('edit', $employee -> id) }}">
                            <i class="far fa-edit white"></i>
                        </a>
                        <a href="{{ route('destroy', $employee -> id) }}">
                            <i class="fas fa-times red"></i>
                        </a>
                    </div>
                </li>
            @endforeach
        </ul>
    </main>
@endsection