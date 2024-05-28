@extends("welcome")
@section('content')
<div>
    <a href="/products/create"><button>create a product</button></a>

    @foreach ($products as $product)
        <div class="card">
            <h1>{{$product->name}}</h1>
            <h3>{{$product->description}}</h1>
            <h3>{{$product->price}} BHD</h1>
            <a href="/products/{{$product->id}}"><button>view</button></a>
            <a href="/products/{{$product->id}}/edit"><button>edit</button></a>
            <form method="POST" action="/products/{{$product->id}}" style="display:inline">
                @csrf
                @method("DELETE")
                <button class="delete">delete</button>
            </form>
        </div>
    @endforeach
</div>
@endsection
