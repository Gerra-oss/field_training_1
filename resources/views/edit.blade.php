@extends('layout')
@section('edit')
<div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        
    <ul class="nav justify-content-center">
        
        <li class="nav-item">
          <a class="nav-link " href="{{ url('/') }}">View post</a>
        </li>
      </ul>  
        
    
</div>

<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">


<div class="container">
    <h1>Edit your Post</h1>
  </div>
  <br><br>

<div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
    
</div>

    

<form class="row g-3" action="{{url('update-post')}}" method="post" enctype="multipart/form-data">
    @csrf
    
    <div class="col-md-4">
      <label for="inputEmail4" class="form-label">Edit Registration Number</label>
      <input type="text"  name="registration" value="{{$data->registrationNumber}}" class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-4">
      <label for="inputPassword4" class="form-label">Edit Company Name</label>
      <input type="text" name="name" value="{{$data->companyName}}" class="form-control" id="inputPassword4">
    </div>
    <div class="col-md-4">
        <label for="formFile" class="form-label">Edit file</label>
        <input class="form-control" value="{{$data->photo}}" required name="image" type="file" id="inputCity">
      </div>  
      
      <div class="form-floating">
        <textarea class="form-control" value="{{$data->Description}}" required name="text" placeholder="Leave a comment here"  style="height: 100px"></textarea>
        
      </div>
    
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </form>
  
    
@endsection
                

                