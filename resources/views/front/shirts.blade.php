@extends('layout.main')
@section('title','shirts')
@section('content')
        <!-- Latest SHirts -->
        <div class="row">
            @forelse($shirts as $shirt)    
            <div class="small-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a class="button expanded add-to-cart">
                            Add to Cart
                        </a>
                        <a href="">
                            <img src="{{url('images',$shirt->image)}}"/>
                        </a>
                    </div>
                    <a href="{{route('shirt',$shirt->id)}}">
                        <h3>
                            {{$shirt->name}}
                        </h3>
                    </a>
                    <h5>
                        {{$shirt->price}}
                    </h5>
                    <p>
                        {{$shirt->description}}
                    </p>
                </div>
            </div>
            @empty
            <h3>NO Shirts Found</h3>
            @endforelse
        
        </div>
        <!-- Footer -->
        <br>
@endsection