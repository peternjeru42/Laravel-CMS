@extends('layouts.app')

@section('content')
<!--BUTTON TO ADD CATEGORY--->

<div class="d-flex justify-content-end mb-2 mt-1">
<a href="{{route('categories.create')}}" class="btn btn-success col-sm-12">Add Category</a>
</div>

<!--CARD TO DISPLAY CATEGORIES--->
<div class="card card-default ">
<div class="card-header">Categories

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

  @foreach ($categories as $category )

<form action="{{url('categories/' .$category->id)}}"  method="POST">
@csrf

 
 @method('DELETE')

<div class="modal fade" id="deleteModal" tabindex="-1" 
   aria-labelledby="deleteModalLabel" aria-hidden="true" >
   <div class="modal-dialog">
    <div class="modal-content">
      
          
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-title">Delete Category</h5>
                        <button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="Close">  </button>   
                    </div>
                    
                  
                    <div class="modal-body">
                        <p>Are you Sure you want to delete this category?</p>
                          <input class="form-control" type="text" name="" value="{{$category->name}}">
                    </div>

                 

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger">Yes, Delete</button>
                           <button type="button" class="btn btn-primary" data-bs-dismiss="modal">No, Go Back</button>
                    </div>

       
    </div>
   </div>
</div>

</form>
 @endforeach



@endsection

@section('scripts')
<script>
$(document).ready(function ()){

  $('.deleteCatBtn').
}
   

    
 </script>
@endsection 