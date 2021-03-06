@extends('layouts.app')

@section('title','Details for '.$customer->name);
@section('content')
    <div class="row">
        <div class="col-12">
            <h1>{{$customer->name}} Detail</h1>
            <p><a href="/customers/{{$customer->id}}/edit">Edit Details</a></p>
            <form action="/customers/{{$customer->id}}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>

        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p>Name: {{$customer->name}}</p>
            <p>Email: {{$customer->email}}</p>
            <p>Company: {{$customer->company->name}}</p>
        </div>
    </div>
@endsection