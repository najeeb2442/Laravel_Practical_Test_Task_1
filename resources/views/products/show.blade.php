@extends("welcome")
@section('content')
<div>
    <div class="card">
        <h1>{{$product->name}}</h1>
        <h3>{{$product->description}}</h1>
        <h3>{{$product->price}} BHD</h1>
        <button type="button" onclick="history.back()">Go Back</button>
    </div>
</div>
@endsection
