@extends('layouts.app')

@section('content')
    <h1>Customers</h1>
    <form action="customers" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text"  class="form-control {{$errors->first('name') ? 'is-invalid':''}}" id="name" name="name" placeholder="Name" value="{{old('name')}}">
            <div class="invalid-feedback">{{$errors->first('name')}}</div>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control {{$errors->first('email') ? 'is-invalid':''}}" id="email" name="email" value="{{old('email')}}" placeholder="Email">
            <div class="invalid-feedback">{{$errors->first('email')}}</div>
        </div>
        <div class="mb-2"></div>

        <button type="submit" class="btn btn-primary">Add Customer</button>
    </form>
    <ul>
        @foreach($customers as $customer)
            <li>{{$customer->name}} ~  <span class="text-muted">{{$customer->email}}</span> </li>
        @endforeach
    </ul>
@endsection
