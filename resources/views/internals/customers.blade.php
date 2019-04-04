@extends('layouts.app')

@section('content')
    <h1>Customers</h1>
    <form action="customers" method="POST">
        {{csrf_field()}}
        <div class="input-group">
            <input type="text" name="name" >
        </div>
        <button type="submit" class="btn btn-primary">Add Customer</button>
    </form>
    <ul>
        @foreach($customers as $customer)
            <li>{{$customer->name}}</li>
        @endforeach
    </ul>
@endsection
