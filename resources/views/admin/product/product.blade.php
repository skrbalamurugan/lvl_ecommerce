@extends('admin.layout.admin')

@section('content')
    <h3>{{$product->name}} Product</h3>

    <div class="row text-left">
        <div class="col-md-6">
            <img src="{{url('images',$product->image)}}" alt="" style="max-width:100%;" class="resopnsive">
        </div>
        <div class="col-md-6 col-md offset-3 text-left">
            <table class="table">
                <tr>
                    <td>Product Name  </td>
                    <td>{{$product->name}}</td>
                </tr>
                <tr>
                    <td>Product Category</td>
                    <td>{{$product->category_id}}</td>
                </tr>
                <tr>
                    <td>Product Size</td>
                    <td>{{$product->size}}</td>
                </tr>
                <tr>
                    <td>Product Description</td>
                    <td>{{$product->description}}</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="text-center">
        <a href="/admin/product/{{$product->id}}/edit" class="btn btn-primary">Edit</a> &nbsp;&nbsp;&nbsp;<a href="{{route('admin.product.delete',$product->id)}}" class="btn btn-danger">Delete</a>
    </div>
@endsection
