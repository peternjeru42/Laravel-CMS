@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-end mb-2 mt-1">
<a href="{{route('posts.create')}}" class="btn btn-success col-sm-12">Add Post</a>
</div>



<!--CARD TO DISPLAY CATEGORIES--->
<div class="card card-default ">
<div class="card-header">Posts</div>

<div class="card-body">
    <table class="table">
  <thead>
    <th>Name</th>
  </thead>

  <tbody>
  @foreach ($categories as $category )
       <tr>
       
        <td>
        {{$category->name}}
        </td>

        <td>
        <a href="{{route('categories.edit', $category->id)}}" class="btn btn-info btn-sm ms-5">
        Edit</a>

           
         <button  data-bs-toggle="modal" data-bs-target="#deleteModal"
          class="btn btn-danger btn-sm float-right ms-5 deleteCatBtn">
        Delete</button>
      
        </td>
        
       
       </tr>
 
     @endforeach
  </tbody>
  
</table>


@endsection
