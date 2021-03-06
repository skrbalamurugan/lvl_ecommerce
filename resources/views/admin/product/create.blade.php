@extends('admin.layout.admin')

@section('content')
    <h3>Add Product</h3>

    <div class="row">
        <div class="col-md-6 col-md offset-3 text-left">
            {!! Form::open(['route'=>'product.store', 'method'=>'post', 'files'=>true]) !!}
                <div class="form-group">
                    {{ Form::label('name','Name') }}
                    {{ Form::text('name', null, array('class' => 'form-control')) }}
                    @if ($errors->has('name'))
                    <div class="has-error">{{ $errors->first('name') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    {{ Form::label('description','Description') }}
                    {{ Form::text('description', null, array('class' => 'form-control')) }}
                    @if ($errors->has('description'))
                    <div class="has-error">{{ $errors->first('description') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    {{ Form::label('size','Size') }}
                    {{ Form::select('size',['select'=>'Select','small'=>'Small', 'medium'=>'Medium', 'large'=>'Large'], null, ['class' => 'form-control']) }}
                    @if ($errors->has('size'))
                    <div class="has-error">{{ $errors->first('size') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    {{ Form::label('price','Price') }}
                    {{ Form::text('price', null, array('class' => 'form-control')) }}
                    @if ($errors->has('price'))
                    <div class="has-error">{{ $errors->first('price') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    {{ Form::label('category_id','Category') }}
                    {{ Form::select('category_id',$categories, null, ['class' => 'form-control', 'placeholder'=> 'Select']) }}
                    @if ($errors->has('category_id'))
                    <div class="has-error">{{ $errors->first('category_id') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    {{ Form::label('image','Product Image') }}
                    {{ Form::file('image', array('class' => 'form-control')) }}
                </div>
                {{ Form::submit('create', array('class'=>'btn btn-primary'))}}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
