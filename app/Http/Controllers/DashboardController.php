<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class DashboardController extends Controller
{
     public function index()
     {


          // $userData = User::all();

          // $userData = User::all('id', 'name', 'mat_no', 'is_user', 'email', 'bursar', 'faculty')->where('is_user','false');

          $userData = User::where('is_user', 'false')->get();

          // $userData = array_slice($userData, 5);
          
// $array = array_slice($categories->getIterator()->getArrayCopy(), 2);

          // $flight = User::find(11);
 
          // $flight->faculty = 'approved';
 
          // $flight->save();

          // $userDatanew = [];

          // $userDataNew = array_slice($userData, 6);
          
          
          
          if (Auth::user()->hasRole('user')) {
               return view('userdash', ['data' => $userData]);
          } elseif (Auth::user()->hasRole('hostel')) {
               return view('hostelDashboard', ['data' => $userData]);
          } elseif (Auth::user()->hasRole('admin')) {
               return view('dashboard', ['data' => $userData]);
          } elseif (Auth::user()->hasRole('library')) {
               return view('libraryDashboard', ['data' => $userData]);
          } elseif (Auth::user()->hasRole('bursar')) {
               return view('bursarDashboard', ['data' => $userData]);
          } elseif (Auth::user()->hasRole('faculty')) {
               return view('facultyDashboard', ['data' => $userData]);
          } elseif (Auth::user()->hasRole('laboratory')) {
               return view('laboratoryDashboard', ['data' => $userData]);
          }
     }

     public function myprofile()
     {
          return view('myprofile');
     }

     public function updateprofile()
     {
          return view('updateprofile');
     }

     public function updateStatus($id, $department, $status)
     {
          $data = User::find($id);
 
          $data->$department = $status;
 
          $data->save();

          return redirect('/dashboard');

     }


     public function updateMyProfile(Request $request)
     {
          $user = User::findOrFail($request->id);
          $user->phone_no = $request->phone_no;
          $user->CAC_registration = $request->CAC_registration;
          $user->business_description = $request->business_description;
          $user->business_capacity = $request->business_capacity;
          $user->save();
          
          return redirect('dashboard');

     }


     public function singleUser($id)
     {
          // $data = User::find($id);
 

          return redirect('/user');

     }


     public function updateUserMessage(Request $request) {
          $user = User::findOrFail($request->id);
          $user->message = $request->message;
          $user->save();
          
          return redirect('/user/'.$request->id);
      }


     public function user($id)
     {

          $data = User::find($id);

          return view('/user', ['data' => $data]);
     }


     public function postcreate()
     {
          return view('postcreate');
     }
}