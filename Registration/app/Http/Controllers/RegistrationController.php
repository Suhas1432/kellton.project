<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registration;
use App\Models\Department;
use App\Models\Subject;
use Illuminate\Support\Facades\Session;

class RegistrationController extends Controller
{
    
    public function index(Request $request)
    {
        if($request->session()->has('user_login')){
            return redirect('dashboard');
        }
        else{ 
            return view('admin.login');
        }
        return view('admin.login');
    }
    
    
    public function newUser(Request $request)
    {
        
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|min:8',
                'dob' => 'required',
  
                ]
            );
            $data = new registration;
            
            $data->name=$request->name;
            $data->email=$request->email;
            $data->password=$request->password;
            $data->dob=$request->dob;
            $data->adhar=$request->adhar;
            $data->mobile=$request->mobile;
            $data->address=$request->address;
            $data->gender=$request->gender;
            $data->department=$request->department;            
            // dd($data);
            $data->save();
            
            return redirect('login');
            
            
        }
        
        public function dept_option()
        {
            $data = Department::all();  
            return view('admin.register',['data'=>$data]);
        }   
        
        
        public function userLogin(Request $request)
        {
            // $name = $request->post('name');
            $email = $request->post('email');
            $password = $request->post('password');
            
            $user = registration::where(['email'=>$email , 'password'=>$password])->get()->first();
            
            if(!empty($user))
            {
                Session::put('user_login',$user);   
                Session::put('user_id',$user->student_id);
                Session::put('user_first_name',ucfirst($user->name));
                
                return redirect('dashboard');
            }
            else{
                
                $request->Session()->flash('error','Please enter valid login details.');
                return redirect('login');
            }
            
        }   
        
        public function getUser(Request $request)
        {
            $data = registration::all();
            return view('admin.dashboard',['data'=>$data]);
        }   
        
        public function modifyUser(Request $request)
        {
            
        }
        
        public function logoutUser()
        {
            Session::flush();
            Session::forget('user_login');
            Session::forget('user_id');
            
            return redirect('login');
        }
        
        public function reset(Request $request)
        {

        }
        
    }
    