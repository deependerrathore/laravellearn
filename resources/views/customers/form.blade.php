<div class="form-group">
    <label for="name">Name</label>
    <input type="text"  class="form-control {{$errors->first('name') ? 'is-invalid':''}}" id="name" name="name" placeholder="Name" value="{{old('name') ?? $customer->name}}">
    <div class="invalid-feedback">{{$errors->first('name')}}</div>
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control {{$errors->first('email') ? 'is-invalid':''}}" id="email" name="email" value="{{old('email') ?? $customer->email}}" placeholder="Email">
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

<div class="form-group">
    <label for="company">Company</label>
    <select class="form-control" name="company_id" id="company">
        @foreach($companies as $company)
            <option value="{{$company->id}}">{{$company->name}}</option>
        @endforeach
    </select>
</div>
@csrf