<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\registration;
use App\Models\Department;
use App\Models\DeptList;
use App\Models\Subject;

class StudentController extends Controller
{
    //
    public function index(Request $request)
    {

        $registrations = DB::table('registrations');

        $departments = DB::table('registrations')->get();

        if($request->department !=null)
        {
            $registrations = $registrations->where('registrations.department',$request->department);
        }


        $registrations = $registrations
        ->select('registrations.student_id','registrations.name','registrations.email','registrations.password','registrations.gender','registrations.department')
        ->get();
        return view('admin.student',['registrations'=>$registrations, 'departments'=>$departments]);
    }


    public function deleteUser($student_id)
    {
        $data = registration::find($student_id);
        $data->delete();

        return redirect('admin')->with("status" , "deleted successfully");     
     }


    public function addSubject(Request $request)
    {
        $input = $request->all();
        // dd($input);
        $subject = $input['subject'];
        $input['subject'] = implode(',',$subject);

        DeptList::create($input);

        $request->Session()->flash('message','Department Added Successfully.');
        return redirect('dept-subjects');
        // // $subject =  $data->subjects=$request->subjects;

        // // $sub = json_encode($subject);

        // $data->department=$request->department;
        // $data->subjects=$request->subjects;

        // // $data->$sub;
        // $data->save();

        // return redirect('dept-subjects');

    }

    public function addDept(Request $request)
    {
        $data = new Department;
        
        $data->department=$request->department;
        $data->save();

        $request->Session()->flash('message','Department Added Successfully.');
        return redirect('add-department');
    }

    public function addSub(Request $request)
    {
        $data = new Subject;

        $data->subject=$request->subject;
        $data->save();

        $request->Session()->flash('message','Subject Added Successfully.');
        return redirect('add-department');
    }


    public function department_subject_option()
    {
        $department = Department::all();  
        $subject = Subject::all();  
        return view('admin.addSubject',['department'=>$department , 'subject'=>$subject]);
    }   

    public function deptSubjects()
    {
        
        // $subjects = DeptList::all();  
        $subjects = DB::table('departmentlist')->get()->toArray();
        // foreach($subjects as $sub)
        // {
        //     $department_id[] = $sub->department;
        //     $subject_id[] = $sub->subject;

        // }
        // $department = DB::table('departments')->get()->toArray();

        // echo"<pre>";print_r($subjects);die; 
        return view('admin.deptSubject',['subjects'=>$subjects]);

    }

    public function edit_department_subject($id)
    {
        $department = Department::all();
        $subject = Subject::all();
        // $subject = DB::table('subjects')->get()->toArray();
        $Dept_subjects = DB::table('departmentlist')->find($id);
        $sub = explode(',',$Dept_subjects->subject);
        foreach($subject as $subject)
        {
            $all_subjects[$subject->id] = $subject->subject;
        }
        // echo"<pre>";print_r($all_subjects);die; 

        return view('admin.editSubject',['department'=>$department, 'Dept_subjects'=>$Dept_subjects, 'subject'=>$subject, 'all_subjects'=>$all_subjects, 'sub'=>$sub]);
    }

    public function update_department_subject(Request $request, $id)
    {
        $input = $request->all();

        $subject = $input['subject'];
        $input['subject'] = implode(',',$subject);
                // echo"<pre>";print_r($id);die; 
        DB::table('departmentlist')->where('id',$id)->update(array('subject'=>$input['subject'] , 'department'=>$input['department']));
        $request->Session()->flash('message','Department/Subjects Updated Successfully.');
        return redirect('dept-subjects');

    }

    public function edit_student_info($student_id)
    {
        $department = Department::all();
        $registrations = Registration::all();
        $data = Registration::where('student_id', $student_id)->firstOrFail();

        return view('admin.editStudent',['department'=>$department, 'registrations'=>$registrations, 'data'=>$data]);
    }

    public function update_student_info(Request $request, $student_id)
    {
        // $request->validate([
        //     'name' => '',
        //     'email' => 'required|email|max:255|unique:users',
        //     'adhar' => 'required|min:12',
        //     'password' => 'required|min:8',
        //         ]);

       $data = Registration::where('student_id', $student_id)->firstOrFail();

        $data->email = $request->input('email');
        $data->dob = $request->input('dob');
        $data->adhar = $request->input('adhar');
        $data->mobile = $request->input('mobile');
        $data->address = $request->input('address');
        $data->gender = $request->input('gender');
        $data->department = $request->input('department');
        // dd($data);
        $data->save();

        return redirect('student-info');
    }

    public function reset() 
    {
        return view('admin.resetPassword');
    }

    public function updatePassword(Request $request) 
    {
        
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        $data = $request->all();
        $new_password = $data['new_password'];
        $old_password = $data['old_password'];
        $new_password_confirmation = $data['new_password_confirmation'];

        // dd($old_password);
        // $old_password = $request->old_password;
        // $new_password  = $request->new_password;
    
        DB::table('registrations')->where('password',$old_password)->update(array('password'=>$new_password));

        $request->Session()->flash('message','Password Updated Successfully.');
        return redirect('login');    }

   



   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
    // public function getCleverTapId(Request $request) {
    //     try {
    //         $req = $request->all();
    //         echo"<pre>";print_r($req);die;
    //         session()->forget(['clevertapBrowserId']);
    //         session(['clevertapBrowserId' => $req]);
    //         return response()->json(['error' => false, 'redirect_url' => $url]);
    //     } catch (Exception $e) {
    //         Log::debug(['error_for' => 'NewMembershipController@fullPaymentRedeem', 'message' => $e->getMessage(), 'error' => json_encode($e, TRUE)]);
    //         return array('error' => true, 'msg' => 'Something went wrong');
    //     }
    // }


}

        