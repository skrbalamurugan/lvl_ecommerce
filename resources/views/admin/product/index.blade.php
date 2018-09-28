@extends('admin.layout.admin')

@section('content')
    <h3>Products</h3>
        <ul>
        
            @forelse($products as $product)
            <li><h4>Name of the product : {{$product->name}}</h4></li>
                @empty
                <h3>No Products</h3>
            @endforelse
        
        </ul>

    
@endsection
