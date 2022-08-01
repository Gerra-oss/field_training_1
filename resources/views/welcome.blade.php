@extends('layout')
@section('Home')

<div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
    <ul class="nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('add-post') }}">Add post</a>
        </li>
        
         </ul>
                 
</div>


<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
<div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
    <p class="h1">Home page</p>

</div>

<div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
    <div class="grid grid-cols-1 md:grid-cols-2">
        @foreach ($data as $data)
            
        
        <div class="p-6 order-t border-gray-200 dark:border-gray-700 md:border-t-0  border-bottom md:border-l">
            <div class="flex items-center">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                
                <div class="ml-4 text-lg leading-7 font-semibold"><p class="h1">{{$data->companyName}}</p>
                    
                    <img src="{{$data->photo}}" class="img-fluid" alt="No image to show up">
                </div>
                
            </div>

            <div class="ml-12">
                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                    <p class="lead">
                        {{$data->Description}}
                      </p>
                    
                    
                </div>
                <a href="{{url('edit/'.$data->id)}}" class="btn link-primary">Edit</a>
                <a href="{{url('delete-post/'.$data->id)}}" class="btn link-danger">Delete</a>
            </div>
        </div>
        @endforeach

    </div>
</div>

@endsection