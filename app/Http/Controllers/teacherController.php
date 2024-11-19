<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\allcoursesModel;
use App\Models\zoomlinksModel;
use App\Models\courseMaterialModel;
use App\Models\uploadAssignmentModel;
use App\Models\examResultsModel;
use App\Models\applyCourseModel;


class teacherController extends Controller
{
    public function teacherDash()
    {
        return view('Teacher/teacherDash');
    }

    public function teacherDashCourses()
    {
        $teachers = allcoursesModel::where('teacher', Auth::user()->id)->get();

        return view('Teacher.teacherDashCourses', compact('teachers'));
    }

    public function teacherEachCourse($id)
    {

        return view('Teacher.teacherEachCourse', compact('id'));
    }


    public function teacherZoomLinks($id)
{
    // Retrieve the data with get()
    $data = ZoomlinksModel::where('courseId', $id)->get();

    // dd($data);

    return view('Teacher.teacherZoomLinks', compact('data', 'id'));
}

public function deleteZoomLink($id)
{
    $data = ZoomlinksModel::find($id);
    if ($data) {
        $data->delete();
    }

    return redirect()->back();
}


    public function createZoomLinkForm($id)
    {
        $data = allcoursesModel::find($id);

        return view('Teacher.createZoomLinkForm', compact('data'));
    }

    public function uploadZoomLink(Request $req)
{
    $id = $req->input('id');
    $link = new ZoomlinksModel;

    $link->courseId = $req->input('courseId');
    $link->courseName = $req->input('courseName');
    $link->zoomLink = $req->input('zoomlink');
    $link->description = $req->input('description');

    $link->save();

    return redirect("/teacherZoomLinks/$id");  // Corrected redirection URL
}

public function uploadCourseMaterials($id)
{
    return view('Teacher.uploadCourseMaterials', compact('id'));
}

public function submitCourseMaterials(Request $req)
{
    // Validate the incoming data
    $validated = $req->validate([
        'courseId' => 'required|string',
        'courseName' => 'required|string',
        'document' => 'required|file|mimes:pdf,doc,docx,ppt,pptx,zip|max:10240', // 10MB max size
        'description' => 'required|string|max:1000',
    ]);

    $id = $req->input('id');



    // Create a new course material model instance
    $doc = new courseMaterialModel;

    // Get the input values
    $doc->courseId = $id;
    $doc->courseName = $req->input('courseName');
    $doc->description = $req->input('description');

    // Handle file upload
    if ($req->hasFile('document') && $req->file('document')->isValid()) {
        // Store the file and get the file path
        $filePath = $req->file('document')->store('course_materials', 'public'); // 'public' disk for public access
        $doc->document = $filePath; // Save the file path in the database
    }

    // Save the record in the database
    $doc->save();

    // Redirect back with success message
    return redirect("/uploadCourseMaterials/$id")->with('success', 'Course material uploaded successfully!');
}

public function deleteDocument($id)
{
    $data = courseMaterialModel::find($id);

    if ($data) {
        $data->delete();
    }

    return redirect()->back();
}

public function uploadAssignment($id)
{
    return view('Teacher.uploadAssignment', compact('id'));
}

public function assignmentUploadBtn(Request $req)
{
     // Validate the incoming data
     $validated = $req->validate([
        'courseId' => 'required|string',
        'courseName' => 'required|string',
        'assignment' => 'required|file|mimes:pdf,doc,docx,ppt,pptx,zip|max:10240', // 10MB max size
        'description' => 'required|string|max:1000',
    ]);

    $id = $req->input('id');



    // Create a new course material model instance
    $doc = new uploadAssignmentModel;

    // Get the input values
    $doc->courseId = $id;
    $doc->courseName = $req->input('courseName');
    $doc->description = $req->input('description');

    // Handle file upload
    if ($req->hasFile('assignment') && $req->file('assignment')->isValid()) {
        // Store the file and get the file path
        $filePath = $req->file('assignment')->store('assignments', 'public'); // 'public' disk for public access
        $doc->assignment = $filePath; // Save the file path in the database
    }

    // Save the record in the database
    $doc->save();

    // Redirect back with success message
    return redirect("/uploadAssignment/$id")->with('success', 'Course material uploaded successfully!');

}

public function deleteAssignment($id)
{
    $data = uploadAssignmentModel::find($id);

    if ($data) {
        $data->delete();
    }

    return redirect()->back();
}

public function uploadExamResults($id)
{
    return view('Teacher.uploadExamResults', compact('id'));
}

public function examResultsUploadBtn(Request $req)
{
    // Validate the incoming data
    $validated = $req->validate([
        'courseName' => 'required|string',
        'results' => 'required|file|mimes:pdf,doc,docx,ppt,pptx,zip|max:10240', // 10MB max size
        'description' => 'required|string|max:1000',
    ]);

    $id = $req->input('id');

    // Create a new course material model instance
    $doc = new examResultsModel;

    $doc->courseId = $id;

    $doc->courseName = $req->input('courseName');
    $doc->description = $req->input('description');

    // Handle file upload
    if ($req->hasFile('results') && $req->file('results')->isValid()) {
        // Store the file and get the file path
        $filePath = $req->file('results')->store('results', 'public'); // 'public' disk for public access
        $doc->result = $filePath; // Save the file path in the database
    }

    // Save the record in the database
    $doc->save();


    // Redirect back with success message
    return redirect()->back()->with('success', 'Course material uploaded successfully!');
}

public function deleteResult($id)
{
    $data = examResultsModel::find($id);

    if ($data) {
        $data->delete();
    }

    return redirect()->back();
}

public function teacherViewStudents($id)
{
    $data = applyCourseModel::where('status', 'approved')->where('courseID', $id)->get();


    return view('Teacher.teacherViewStudents', compact('data'));
}


    public function teacherDashNotice()
    {

        return view('Teacher.teacherDashNotice');
    }
}
