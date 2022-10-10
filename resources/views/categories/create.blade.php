@extends('layouts.app')

@section('content')
<!--BUTTON TO ADD CATEGORY--->



<!--CARD TO DISPLAY CATEGORIES--->
<div class="card card-default ">
<!--CREATE CATEGORIES CARD HEADER--->
<div class="card-header">
@if (isset($category)) <h4>Edit Category</h4>

@else 
<h4>Create Category</h4>

@endif
</div>
<!--CREATE CATEGORIES CARD BODY--->
<div class="card-body">
<!--CHECKING ERRORS--->

 @if (count($errors) > 0)
         <div class = "alert alert-danger " rows="1">
            <ul class="list-group ">
               @foreach ($errors->all() as $error)
                  <li >{{ $error }}</li>
               @endforeach
            </ul>
         </div>
      @endif
      <!--CREATE CATEGORIES FORM--->
<form action="{{isset($category)? route('categories.update', $category->id) : route('categories.store')}}" method="POST">
@csrf
   @if (isset($category)) 
 @method("PUT")
      @endif

  <div class="form-group">
    <label for="name" class="form-label" required>Name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ isset($category) ? $category->name :'' }}">

    <div class="form-group my-2">
    @if (isset($category)) 
 <button  class="btn btn-success">Update Category</button>
      @else 
 <button  class="btn btn-success">Add Category</button>

      @endif
   
    </div>
<form>

</div>
</div>



@endsection