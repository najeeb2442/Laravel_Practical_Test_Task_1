@extends("welcome")
@section('content')
<div>
    <h1>Create a product</h1>
    <form method="POST" action="/products">
        @csrf
        <label>product name : </label><input type="text" name="name"><br>
        @error('name')
            <p>{{$message}}</p>
        @enderror
        <br>
        <label>product description : </label><br>
        <textarea name="description"  rows="10" cols="70" ></textarea><br>
        @error('description')
        <p>{{$message}}</p>
        @enderror
        <br>
        <label>product price : </label> <input type="number" name="price"><br>
        @error('price')
        <p>{{$message}}</p>
        @enderror
        <br>
        <button type="submit">submit</button>
        <button type="button" onclick="history.back()">Go Back</button>
    </form>
</div>
@endsection
