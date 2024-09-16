<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\Prescriptions;
use PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;

class StudentController extends Controller
{
    public function index(){
      $student=Prescriptions::orderBy('id','desc')->get();
      $student = DB::table('students')
      ->select('*')
      ->join('prescriptions', 'prescriptions.student_id', '=', 'students.id')
      ->orderBy('prescriptions.id','desc')->get();
       return view('student.index',compact('student'));
    }

      public function add()
    {
        $apiUrl = 'http://uatregistration.sdib.in/public/api/sendDataToHms';
        $response = file_get_contents($apiUrl);
    
        if ($response === false) {
            return 'Error making the request';
        } else {
            $data = json_decode($response, true);
    
            if ($data === null) {
                return 'Error decoding JSON response';
            }
            foreach ($data as $value) {
                $existingRecord = Student::where('roll_No','=', $value['sap_roll_no'])->first();
                if ($existingRecord) {
                    $existingRecord->name = $value['first_name'] . ' ' . $value['last_name'];
                    $existingRecord->email = $value['email'];
                    $existingRecord->phone = $value['mobile'];
                    if (isset($value['gender'])) {
                        if ($value['gender'] == "Male") {
                            $gender = "1";
                        } elseif ($value['gender'] == "Female") {
                            $gender = "0";
                        }
                        $existingRecord->gender = $gender;
                    }
                    // $existingRecord->course = $value['course_name'];
                    // $existingRecord->sap_bp_number = $value['sap_bp_number'];
                    $existingRecord->save();
                } else {
                    $newRecord = new Student;
                    $newRecord->name = $value['first_name'] . ' ' . $value['last_name'];
                    $newRecord->email = $value['email'];
                    $newRecord->roll_No = $value['sap_roll_no'];
                    $newRecord->phone = $value['mobile'];
                    if (isset($value['gender'])) {
                        if ($value['gender'] == "Male") {
                            $gender = "1";
                        } elseif ($value['gender'] == "Female") {
                            $gender = "0";
                        }
                        $newRecord->gender = $gender;
                    }
                    // $newRecord->course = $value['course_name'];
                    // $newRecord->sap_bp_number = $value['sap_bp_number'];
                    $newRecord->save();
                }
            }
        }
        $iteam = Student::orderBy('roll_No')->get();
        return view('student.add',compact('iteam'));

    }

       public function store(Request $request)
    {
        date_default_timezone_Set("Asia/Calcutta");
        $data= new Prescriptions;
        if(isset($request->eid)){
            $data->student_id = $request->eid;
        }
        if(isset($request->date)){
            $data->date = $request->date;
        }
       
        if(isset($request->problem)){
            $data->problem = $request->problem;
        }
        if(isset($request->recommend)){
            $data->recommend = $request->recommend;
        }
        if(isset($request->medicine)){
            $data->medicine = $request->medicine;
        }
        $data->save();
        $student = DB::table('students')
        ->select('*')
        ->join('prescriptions', 'prescriptions.student_id', '=', 'students.id')
        ->where('prescriptions.id', $data->id)
        ->get();

        return view('student.print',compact('student'));
    }

        public function edit($id)
    {
        $edit_student = DB::table('students')
        ->select('*')
        ->join('prescriptions', 'prescriptions.student_id', '=', 'students.id')
        ->where('prescriptions.id', $id)
        ->get();
        return view('student.edit',compact('edit_student'));
    }

        public function update(Request $request)
    {
        $update_student= Prescriptions::where('id','=',$request->eid)->first();
        if(isset($request->problem)){
            $update_student->problem = $request->problem;
        }
        if(isset($request->recommend)){
            $update_student->recommend = $request->recommend;
        }
        if(isset($request->medicine)){
            $update_student->medicine = $request->medicine;
        }
        $update_student->save();
        $student = DB::table('students')
        ->select('*')
        ->join('prescriptions', 'prescriptions.student_id', '=', 'students.id')
        ->where('prescriptions.id', $update_student->id)
        ->get();
        return view('student.print',compact('student'));
   }
   
        public function delete($id)
   {
        $delete_student=Prescriptions::find($id);
        $delete_student->delete();
        return redirect()->back()->with('success',' Delete Successfully!');
   }
   
       public function print($id)
    {
       $student = DB::table('students')
       ->select('*')
       ->join('prescriptions', 'prescriptions.student_id', '=', 'students.id')
       ->where('prescriptions.id', $id)
       ->get();
       $pdf = PDF::loadView('student.print',compact('student'));
       return $pdf->download('student.pdf');
    }
 
       public function pdfview($id)
    {
       $student = DB::table('students')
       ->select('*')
       ->join('prescriptions', 'prescriptions.student_id', '=', 'students.id')
       ->where('prescriptions.id', $id)
       ->get();
       $pdf = PDF::loadView('student.print',compact('student'));
    //    return $pdf;
       return view('student.print',compact('student'));
    }

       public function filter_date(Request $request)
    {
       $data = $request->all();
       if ($request->start_date || $request->end_date)
    {
       $start_date = Carbon::parse(request()->start_date)->toDateTimeString();
       $end_date = date('Y-m-d 23:59:59',strtotime(request()->end_date));
       $student = DB::table('students')
      ->select('*')
      ->join('prescriptions', 'prescriptions.student_id', '=', 'students.id')
      ->where('prescriptions.created_at','>=',$start_date)
      ->where('prescriptions.created_at','<=',$end_date)
      ->get();
    }
      else 
    {
       $start_date = date('Y-m-d 00:00:00');
       $end_date = date('Y-m-d 00:00:00');
       
    }
       return view('student.index', compact('student','start_date','end_date'));
       
    }

       public function get_student_name(Request $request)
    {
       $student_name = Student::where('roll_No','=',$request->student)->first();
       return $student_name;
    } 

}



























