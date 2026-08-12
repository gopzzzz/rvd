<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Admission;

class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $course=DB::table('courses')->get();
        $events = DB::table('news')->orderByDesc('id')->limit(3)->get();
        $photos=DB::table('uploads')->where('status','Active')->limit(6)->get();
        return view('web.index',compact('course','events','photos'));
    }
    public function aboutus()
    {
        $aboutus=DB::table('aboutus')->first();
        return view('web.aboutus',compact('aboutus'));
    }
     public function programs()
    {
        $course=DB::table('courses')->get();
        return view('web.programs',compact('course'));
    }
     public function admission()
    {
         $aboutus=DB::table('aboutus')->first();
          $course=DB::table('courses')->get();
        return view('web.admission',compact('aboutus','course'));
    }

    public function faculty()
    {
        $principal=DB::table('faculties')
          ->leftJoin('department', 'faculties.department_id', '=', 'department.id')
        ->where('faculties.department_id',1)
        ->select('faculties.*','department.name as department_name')
        ->first();
       

            $department = DB::table('department')
            ->where('id', '!=', 1)
            ->get();

             $faculty_count = DB::table('faculties')->count();

           $phd_count = DB::table('faculties')
                ->where('qualification', 'LIKE', '%Ph.D%')
                 ->count();

            $experience = DB::table('faculties')->avg('experiance');
        
        return view('web.faculty',compact('principal','department','faculty_count','phd_count','experience'));
    }
     public function studentlife()
    {
        $facilities=DB::table('studentlifes')->where('type',1)->get();
         $club=DB::table('studentlifes')->where('type',2)->get();
          $sports=DB::table('studentlifes')->where('type',3)->get();
           $nss=DB::table('studentlifes')->where('type',4)->get();
        return view('web.studentlife',compact('facilities','club','sports','nss'));
    }
      public function news()
    {
        return view('web.news');
    }
      public function gallary()
    {
        return view('web.gallary');
    }
      public function contact()
    {
        return view('web.contact');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         try {

        $request->validate([
            'name' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'adharcard' => 'required',
            'email' => 'required|email',
            'phonenumber' => 'required',
            'tenth_school_name' => 'required',
            'tenthpercentage' => 'required',
            'higherschoolname' => 'required',
            'higherpercentage' => 'required',
            'higherdepartment' => 'required',
            'program' => 'required',
            'hearabout' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'pincode' => 'required',
            'declaration' => 'required',
        ]);

        Admission::create([
            'name' => $request->name,
            'dob' => $request->dob,
            'gender' => $request->gender,
            'adharcard' => $request->adharcard,
            'email' => $request->email,
            'phonenumber' => $request->phonenumber,
            'tenth_school_name' => $request->tenth_school_name,
            'tenthpercentage' => $request->tenthpercentage,
            'higherschoolname' => $request->higherschoolname,
            'higherpercentage' => $request->higherpercentage,
            'higherdepartment' => $request->higherdepartment,
            'program' => $request->program,
            'hearabout' => $request->hearabout,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'pincode' => $request->pincode,
            'declaration' => $request->declaration,
        ]);

        $to = $request->email;

$subject = "Application Received Successfully";

$message = "
<html>
<body>

<h2>Application Received Successfully</h2>

<p>Dear {$request->name},</p>

<p>
Thank you for submitting your admission application.
We have successfully received your application.
</p>

<p><strong>Application Details:</strong></p>

<p><strong>Name:</strong> {$request->name}</p>
<p><strong>Program:</strong> {$request->program}</p>
<p><strong>Email:</strong> {$request->email}</p>
<p><strong>Phone:</strong> {$request->phonenumber}</p>

<p>
Our admission team will review your application and contact you
if any additional information or documents are required.
</p>

<p>
Thank you for choosing us.
</p>

<p>
Regards,<br>
Admission Team
</p>

</body>
</html>
";

$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$headers .= "From: Admission Team <noreply@rvd.com>\r\n";

mail($to, $subject, $message, $headers);

        return redirect()->back()->with(
            'success',
            'Application submitted successfully.'
        );

    } catch (\Exception $e) {

        return redirect()->back()
            ->withInput()
            ->with('error', 'Something went wrong: ' . $e->getMessage());
    }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
