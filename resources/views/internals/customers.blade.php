@extends('layouts.app')
@section('title','Customers List')
@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Customers List</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="customers" method="POST">
                @csrf
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
                <div class="form-group">
                    <label for="active">Status</label>
                    <select class="form-control" name="active" id="active">
                        <option value="" disabled>Select the customer status</option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Add Customer</button>
            </form>
        </div>
    </div>

    <hr>
    <div class="row">
        <div class="col-6">
            Active
            <ul>
                @foreach($customers as $customer)
                    @if($customer->active == 1)
                    <li>{{$customer->name}} ~  <span class="text-muted">{{$customer->email}}</span> </li>
                    @endif
                @endforeach
            </ul>
        </div>
        <div class="col-6">
            Inactive
            <ul>
                @foreach($customers as $customer)
                    @if($customer->active == 0)
                    <li>{{$customer->name}} ~  <span class="text-muted">{{$customer->email}}</span> </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
@endsection
