@extends('layouts.teacher')
@section('content')

    <!-- Assignment Upload Form -->
    <form action="/assignmentUploadBtn" method="POST" enctype="multipart/form-data">
        @csrf

        @php
            $data = App\Models\allcoursesModel::find($id); // Get the course data by ID
        @endphp

        <!-- Course ID Field (Hidden) -->
        <input type="hidden" value="{{ $id }}" name="id" class="form-control" id="id">
        <input type="hidden" value="{{ $data->courseId }}" name="courseId" class="form-control" id="courseId">

        <!-- Course Name Field (Hidden) -->
        <input type="hidden" value="{{ $data->courseName }}" name="courseName" class="form-control" id="courseName">

        <!-- Assignment Upload Field -->
        <div class="form-group">
            <label for="assignment">Upload Assignment</label>
            <input type="file" name="assignment" class="form-control-file" id="assignment" required>
            <small class="form-text text-muted">Allowed file types: PDF, DOC, DOCX, PPT, PPTX, ZIP</small>
        </div>

        <!-- Description Field -->
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" id="description" rows="3" required></textarea>
        </div>

        <!-- Submit Button -->
        <input type="submit" class="btn btn-primary mt-3" value="Upload Assignment">
    </form>

    <!-- Table Section for Viewing Uploaded Assignments -->
    <section class="bg-light p-4 mt-4 rounded shadow-sm">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-center">Course Name</th>
                        <th class="text-center">Assignment</th>
                        <th class="text-center">Description</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        // Fetch the assignments related to the specific course
                        $assignments = App\Models\uploadAssignmentModel::where('courseId', $id)->get();
                    @endphp

                    @foreach ($assignments as $item)
                    <tr>
                        <td class="text-center">{{ $item->courseName }}</td>

                        <td class="text-center">
                            <a href="{{ asset('storage/' . $item->assignment) }}" target="_blank" class="btn btn-link">View</a>
                        </td>

                        <td class="text-center">{{ $item->description }}</td>

                        <td class="text-center">
                            <!-- Delete Action -->
                            <a onclick="return confirm('Are you sure you want to delete this assignment?')" href="/deleteAssignment/delete/{{$item->id}}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

@endsection
