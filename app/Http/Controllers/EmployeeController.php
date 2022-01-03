<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use DB;
Use Auth;

class EmployeeController extends Controller
{     
 public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
      {
     //  return $request->file('image','name');
     // die();
        $this->validate($request,[

            'proName'=>'required',
            'taskName'=>'required',
            'startTime'=>'required|date',
            'starttime'=>'required',

            'endTime'=>'required|date',
            'endtime'=>'required',
            'image'=>'mimes:jpeg,jpg,png,gif|required',

        ]);
         $id= Auth::id();

   $fileName = time().'.'.$request->image->extension();  

    $request->image->move(public_path('image'), $fileName);

   $user =New Employee();
   
   $user->Pro_name=$request['proName'];
   $user->Employee_task=$request['taskName'];
   $user->start_time=$request['startTime'].' '.$request['starttime'];
   $user->end_time=$request['endTime'].' '.$request['endtime'];
   $user->employee_id=$id;


     $user->screenshot=('/public/image/'. $fileName) ;

     $user->save();

   return redirect()->back()->with('addedrec','Record Added Successfully');

      
    }
    public function viewdata()
     {
         $data=DB::select("select * from employees");
        return view('admin-panel.view',['users'=>$data]);
        
    }
     public function chart()
   {

     $data=DB::select("select * from employees where start_time > now() - INTERVAL 7 day");
        return view('admin-panel.weekly_chart',['users'=>$data]);
        
   // return view('admin-panel.weekly_chart');
    }
    
}
