@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Data</div>
                <div class="card-body">
                  <form action="/userinfo/{{$userinfodata->id}}" method="post">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                      <label for="">User Name</label>
                      <input type="text" name="user_id" id="" class="form-control" value={{$userinfodata->user_id}}>
                    </div>
                    <div class="form-group">
                      <label for="">Address</label>
                      <textarea name="user_address" id="" cols="30" rows="5" class="form-control">
                        {{$userinfodata->user_address}}
                      </textarea>
                    </div>
                    <div class="form-group">
                      <label for="">Phone Number</label>
                      <input type="text" name="user_phone" id="" class="form-control" value={{$userinfodata->user_phone}}>
                    </div>
                    <div class="form-group">
                      <label for="">City</label>
                      <input type="text" name="user_city" id="" class="form-control" value={{$userinfodata->user_city}}>
                    </div>
                    <div class="form-group">
                      <label for="">Township</label>
                      <input type="text" name="user_township" id="" class="form-control" value={{$userinfodata->user_township}}>
                    </div>
                    <button type="submit" class="btn btn-success ">Update</button>
                    <a href="/userinfo" class="btn btn-light ">Cancel</a>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection