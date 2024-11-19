<?php

namespace App\Http\Controllers;

use App\Models\allcoursesModel;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\applyCourseModel;

class adminController extends Controller
{


    public function registerButton(Request $req)
    {
        $user = new User;

        $user->userID = $req->input('userId');
        $user->role = $req->input('role');
        $user->firstName = $req->input('firstName');
        $user->lastName = $req->input('lastName');
        $user->email = $req->input('email');
        $user->password = $req->input('password');
        $user->confirmpassword = $req->input('confirmpassword');

        // Save the user to the database
        $user->save();

        // Redirect to the registration form with a success message
        return redirect()->back()->with('success', 'Registration successful!');
    }


    public function adminDash()
    {
        return view('Admin.adminDash');
    }

    public function adminSideTeachers()
    {
        $data = User::where('role', 'teacher')->get();

        return view('Admin.adminSideTeachers', compact('data'));
    }

    public function adminSideStudents()
    {
        $data = User::where('role', 'student')->get();

        return view('Admin.adminSideStudents', compact('data'));
    }

    public function studentsRequest()
    {
        $data = applyCourseModel::where('Status', 'Request')->get();

        return view('Admin.studentsRequest', compact('data'));
    }

    public function approveby($id)
    {
        $request = applyCourseModel::find($id);
        $request->Status = 'Approved';

        $request->save();

        return redirect()->back()->with('success', 'Request approved');
    }

    public function rejectby($id)
    {
        $request = applyCourseModel::find($id);
        $request->Status = 'Rejected';

        $request->save();

        return redirect()->back()->with('success', 'Request Rejected');
    }

    public function adminSidePayments()
    {
        return view('Admin.adminSidePayments');
    }

    public function adminDashCourses()
    {
        $data = AllCoursesModel::all();
        return view('Admin.adminDashCourses', ['data' => $data]);
    }

    public function editCourse($id)
    {
        $course = AllCoursesModel::find($id);

        return view('Admin.editCoursesForm', compact('course'));
    }

    public function editCourseNsave(Request $req)
    {
        $id = $req->input('id');

        $course = AllCoursesModel::find($id);

        // $course->id = $req->input('id');

        $course->courseId = $req->input('courseId');
        $course->courseName = $req->input('courseName');
        $course->duration = $req->input('duration');
        $course->price = $req->input('price');
        $course->teacher = $req->input('teacher');

        $course->save();

        return redirect('/adminDashCourses');
    }

    public function delete($id)
    {
        $data = AllCoursesModel::find($id);
        $data->delete();

        return redirect('/adminDashCourses');
    }



    public function adminDashNotice()
    {
        return view('Admin.adminDashNotice');
    }

    public function adminRegisterForm()
    {
        return view('Admin.registerForm');
    }

    public function newcourseBtn()
    {

        $teachers = User::where('role', 'teacher')->get();

        return view('Admin.addNewCourseForm', compact('teachers'));
    }

    public function addNewCourseSubmitBtn(Request $req)
    {
        $course = new AllCoursesModel;

        $course->courseId = $req->input('courseId');
        $course->courseName = $req->input('courseName');
        $course->duration = $req->input('duration');
        $course->price = $req->input('price');
        $course->teacher = $req->input('teacher');

        $course->save();

        return redirect()->back()->with('success', 'Registration successful!');
    }
}
