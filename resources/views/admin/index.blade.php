@extends('admin.layout.admin')
@section('content')
    <h3>Admin</h3>
    <div class="row">
        <div class="col-sm-3">
            <h4>Total Products</h4>
            {{$allproduct}}
        </div>
        <div class="col-sm-3">
            {{$men}}
        </div>
        <div class="col-sm-3">
            {{$allproduct}}
        </div>
    </div>
@endsection