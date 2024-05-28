@extends("welcome")
@section('content')
<div>
    <h1>Edit a product</h1>
    <form method="POST" action="/products/{{$product->id}}">
        @csrf
        @method("PUT")
        <label>product name : </label><input type="text" name="name" value="{{$product->name}}"><br>
        @error('name')
            <p>{{$message}}</p>
        @enderror
        <br>
        <label>product description : </label><br>
        <textarea name="description"  rows="10" cols="70" >{{$product->description}}</textarea><br>
        @error('description')
        <p>{{$message}}</p>
        @enderror
        <br>
        <label>product price : </label> <input type="number" name="price" value="{{$product->price}}"><br>
        @error('price')
        <p>{{$message}}</p>
        @enderror
        <br>
        <button type="submit" >submit</button>
    </form>
    <form method="POST" action="/products/{{$product->id}}" style="display:inline">
        @csrf
        @method("DELETE")
        <button class="delete" >delete</button >
    </form>
    <button type="button" onclick="history.back()">Go Back</button>

</div>
@endsection
