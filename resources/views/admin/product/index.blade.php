@extends('admin.layout.admin')

@section('content')
    <h3>Products</h3>
    <div class="text-left">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Size</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php $i=1; ?>
            @forelse($products as $product)        
            <tr>
                <td>{{$i++}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->category_id}}</td>
                <td>{{$product->size}}</td>
                <td>{{$product->price}}</td>
                <td><a href="{{route('admin.product.show',$product->id)}}" class="btn btn-sm btn-primary" ><i class="glyphicon glyphicon-edit"></i></a> <a href="{{route('admin.product.delete',$product->id)}}" class="btn btn-sm btn-danger" ><i class="glyphicon glyphicon-trash"></i></a></td>
            </tr>
            @empty
            <tr><td>No Products</td></tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
