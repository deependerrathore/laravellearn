@extends('layouts.app')
@section('title','Customers List')
@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Customers List</h1>
            <p><a href="/customers/create">Add New Customer</a></p>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <h3>Active</h3>
            <ul>
                @foreach($activeCustomers as $customer)
                    <li>{{$customer->name}} ~  <span class="text-muted">{{$customer->company->name}}</span> </li>
                @endforeach
            </ul>
        </div>
        <div class="col-6">
            <h3>Inactive</h3>
            <ul>
                @foreach($inactiveCustomers as $customer)
                    <li>{{$customer->name}} ~  <span class="text-muted">{{$customer->company->name}}</span> </li>
                @endforeach
            </ul>
        </div>
        <hr>
        <div class="row">
            <div class="col-12">
                @foreach($companies as $company)
                    <h3>{{$company->name}}</h3>
                    @foreach($company->customers as $customer)
                        <ul>
                            <li>{{$customer->name}}</li>
                        </ul>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
@endsection
