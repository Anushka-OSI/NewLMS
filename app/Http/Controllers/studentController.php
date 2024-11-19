<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\allcoursesModel;
use App\Models\answers;
use Illuminate\Support\Facades\Auth;
use App\Models\applyCourseModel;
use App\Models\uploadAssignmentModel;

class studentController extends Controller
{
    public function studentDash()
    {
        return view('Student.studentDash');
    }

    public function studentDashCourses()
    {
        $data = applyCourseModel::where('studentID', Auth::user()->id)->where('Status', 'Approved')->get();


        return view('Student.studentDashCourses', compact('data'));
    }

    public function studentDashNotice()
    {
        return view('Student.studentDashNotice');
    }

    public function studentAllCourses()
    {
        $data = AllCoursesModel::all();

        return view('Student.studentAllCourses', compact('data'));
    }

    public function applycz($id)
    {
        if (Auth::check()) { // Ensure the user is logged in
            $appcz = new applyCourseModel;

            $appcz->StudentID = Auth::user()->id;
            $appcz->CourseID = $id;
            $appcz->Status = 'Request';


            $appcz->save();

            return redirect('/studentAllCourses')->with('success', 'Application submitted successfully!');
        } else {
            return redirect('/loginButton')->with('error', 'You need to be logged in to apply.');
        }
    }

    public function studentViewEachCourse($id)
    {

        $data  = uploadAssignmentModel::where('courseId', $id)->get();

        return view('Student.studentViewEachCourse', compact('data'));
    }

    public function submitAssignment(Request $request, $courseId)
    {
        $request->validate([
            'assignment_answer' => 'required|file'
        ]);

        // Store the file in the 'public/answers' directory
        $fileName = $request->file('assignment_answer')->getClientOriginalName();
        $filePath = $request->file('assignment_answer')->move(public_path('answers'), $fileName);

        // Save file path in the database
        $answers = new answers();
        $answers->courseID = $courseId;
        $answers->studentID = Auth::user()->id;
        $answers->path = 'answers/' . $fileName; // Save relative path to the 'answers' directory

        $answers->save(); // Save the new record to the database

        return redirect()->back()->with('success', 'Assignment submitted successfully!');
    }

    public function studentanswer($id) {

        $data  = answers::where('courseId', $id)->get();


        return view('student.viewanswer', compact('data'));
    }

}
