<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\employee;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
  //home url
    public function index()
    {
        $title = 'Home Page';
        $data = employee::get();
        return view('welcome',compact('data', 'title'));
    }
    //add link 
    public function create()
    {
        $title = 'Add post';
        return view('add',compact('title'));
    }

    //insert data into database
    public function store(Request $request)
    {
        $registration = $request->registration;
        $name = $request->name;
        $description = $request->text;
        $image = $request->image;

        $data = new employee();
        $data->registrationNumber = $registration;
        $data->companyName=$name;
        $data->Description = $description;
        
        if ($request->hasfile('image')) {

        Storage::disk('local')->put('public/images/',$data->photo=$image);

        }
        $data->save();
        return $this->index();
    }

    //display data from database
    public function show()
    
    {
        $data = employee::get();
        return view('welcome', compact('data'));
        
    }

    //pull data from database to the edit page
    public function edit($id)
    
    {
        
        $title = 'Edit infomation';
        $data = DB::select('select * from employees');
        foreach ($data as $data) {
           $data->companyName; $data->Description; $data->photo;    
        }

        //$data = employee::where('id','=',$id)->first();
        
        //return view('stud_view',['users'=>$users]);
        return view('edit',compact('title','data'));
        
    }

   // update data from database
    public function update(Request $request, employee $employee)
    {
        $id = $request->id;
        $registration = $request->registration;
        $name = $request->name;
        $description = $request->text;
        $image = $request->image;

  
      $id = $request->id;
      $registration = $request->registration;
      $compName = $request->compName;

      employee::where('id','=',$id)->update([
        'registrationNumber' => $registration,
        'companyName'=>$name,
        'Description'=>$description,
        'photo'=>$image

      ]);
      return $this->index();
    }
    

    //delete data from database
    public function destroy(employee $employee, $id)
    {
        employee::where('id','=',$id)->delete();
        return $this->index();
    }
}