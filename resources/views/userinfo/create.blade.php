@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Add New Data</div>
                <div class="card-body">
                  <form action="/userinfo" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="">User Name</label>
                      <input type="text" name="user_id" id="" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="">Address</label>
                      <textarea name="user_address" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="">Phone Number</label>
                      <input type="text" name="user_phone" id="" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="">City</label>
                      <input type="text" name="user_city" id="" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="">Township</label>
                      <input type="text" name="user_township" id="" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success ">Save</button>
                    <a href="/userinfo" class="btn btn-light ">Cancel</a>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection