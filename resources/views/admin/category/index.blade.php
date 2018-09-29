@extends('admin.layout.admin')

@section('content')

    <div class="navbar">
        <a class="navbar brand" href="">Categories => </a>
        <ul class="nav navbar-nav">
            @if(!empty($categories))
                @forelse($categories as $category)
                <li><a href="{{route('category.show',$category)}}">{{$category->name}}</a></li>
                @empty
                <li>No date</li>
                @endforelse
            @endif
        </ul>
    </div>

    <a class="btn btn-primary" data-toggle="modal" href="#modelid">Add Category</a>
    <div class="modal face" id="modelid" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
        {!! Form::open(['route'=>'category.store', 'method'=>'post', 'files'=>true]) !!}
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        
                    <div class="form-group">
                        {{ Form::label('name','Name') }}
                        {{ Form::text('name', null, array('class' => 'form-control')) }}
                    </div>
                    
                <div class="modal-footer">
                    {{ Form::submit('store', array('class'=>'btn btn-primary'))}}
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        {!! Form::close() !!}
        </div>
    </div>

    @if(!empty($products))
    <section>
        <h3>Products</h3>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Products</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $pro => $product)
                <tr>
                    <td>{{$product->name}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
    @endif

@endsection