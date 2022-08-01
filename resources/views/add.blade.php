
@extends('layout')
@section('add')

<div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
    <ul class="nav justify-content-center">
        
        <li class="nav-item">
          <a class="nav-link " href="{{ url('/') }}">View post</a>
        </li>
      </ul>  
        
</div>


<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

<div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
    <p class="h1">Add your Post</p>

</div><br>


<div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
    
</div>

<form class="row g-3" method="post" action="{{url('add-post')}}" enctype="multipart/form-data">
    @csrf
    <div class="col-md-4">
      <label for="inputEmail4" class="form-label">Registration Number</label>
      <input type="text" class="form-control" required name="registration" id="inputEmail4">
    </div>
    <div class="col-md-4">
      <label for="inputPassword4" class="form-label">Company Name</label>
      <input type="text" required name="name" class="form-control" id="inputPassword4">
    </div>
    <div class="col-md-4">
        <label for="formFile" class="form-label">Choose file here</label>
        <input class="form-control" required name="image" type="file" id="inputCity">
      </div> 
      
      <div class="form-floating">
        <textarea class="form-control"  required name="text" placeholder="Leave a comment here" required id="floatingTextarea2" style="height: 100px"></textarea>
        <label for="floatingTextarea2">Add Description</label>
      </div>
    
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
@endsection
               

                