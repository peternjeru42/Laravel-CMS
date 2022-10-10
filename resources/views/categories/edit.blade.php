@extends('layouts.app')

@section('content')
<!--BUTTON TO ADD CATEGORY--->



<!--CARD TO DISPLAY CATEGORIES--->
<div class="card card-default ">
<!--CREATE CATEGORIES CARD HEADER--->
<div class="card-header">
Edit Category
</div>
<!--CREATE CATEGORIES CARD BODY--->
<div class="card-body">
<!--CHECKING ERRORS--->

 @if (count($errors) > 0)
         <div class = "alert alert-danger " rows="1">
            <ul class="list-group ">
               @foreach ($errors->all() as $error)
                  <li class="text-decoration-none">{{ $error }}</li>
               @endforeach
            </ul>
         </div>
      @endif
      <!--CREATE CATEGORIES FORM--->
<form action="{{route('categories.store/'.$category->id)}}" method="POST">
@csrf
  <div class="form-group">
    <label for="name" class="form-label" required>Name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{$category->name}}">

    <div class="form-group my-2">
    <button type="submit" class="btn btn-success">Update</button>
    </div>
<form>

</div>
</div>



@endsection