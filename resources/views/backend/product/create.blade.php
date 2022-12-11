@extends('backend.backend-master')

@section('title')
Add Product 
@endsection

@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-9 bg-dark mt-5">
            <h1 class="text-white">Add Product <span class="text-success">{{Session::get('msg')}}</span></h1>
            <form action="" method="post" class="py-5">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label text-white">Category Name :</label>
                  <select name="category_id" class="form-select">
                    <option value="" disabled>---Choose A Category --</option>
                    @foreach ($categories as $category)
                      <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                  </select>
                  @error('category_id')
                    <span class="text-white">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label text-white">Product Title :</label>
                  <input type="text" name="title" class="form-control" placeholder="give a product name">
                  @error('title')
                    <span class="text-white">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label text-white">Product Price :</label>
                  <input type="number" name="price" class="form-control" placeholder="give a product Price">
                  @error('price')
                    <span class="text-white">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label text-white">Product Short Description :</label>
                  <textarea name="short_desc" cols="8" rows="2" class="form-control" placeholder="Give a Short Derscription"></textarea>
                  @error('short_desc')
                    <span class="text-white">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label text-white">Product Image :</label>
                  <input type="file" name="image" class="form-control">
                  @error('image')
                    <span class="text-white">{{ $message }}</span>
                  @enderror
                </div>
                <button type="submit" class="btn btn-primary">Add Product</button>
              </form>
        </div>
    </div>
</div>
    
@endsection