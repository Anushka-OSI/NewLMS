@extends('layouts.teacher')
@section('content')

    <!-- Assignment Upload Form -->
    <form action="/examResultsUploadBtn" method="POST" enctype="multipart/form-data">
        @csrf

        @php
            $data = App\Models\allcoursesModel::find($id); // Get the course data by ID
        @endphp

        <!-- CourseID Field (Hidden) -->
        <input type="hidden" value="{{ $id }}" name="id" class="form-control" id="courseId">


        <!-- Course Name Field (Hidden) -->
        <input type="hidden" value="{{ $data->courseName }}" name="courseName" class="form-control" id="courseName">

        <!-- Assignment Upload Field -->
        <div class="form-group">
            <label for="results">Upload Results</label>
            <input type="file" name="results" class="form-control-file" id="results" required>
            <small class="form-text text-muted">Allowed file types: PDF, DOC, DOCX, PPT, PPTX, ZIP</small>
        </div>

        <!-- Description Field -->
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" id="description" rows="3" required></textarea>
        </div>

        <!-- Submit Button -->
        <input type="submit" class="btn btn-primary mt-3" value="Upload Results">
    </form>

    <!-- Table Section for Viewing Uploaded Assignments -->
    <section class="bg-light p-4 mt-4 rounded shadow-sm">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-center">Course Name</th>
                        <th class="text-center">Results</th>
                        <th class="text-center">Description</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        // Fetch the assignments related to the specific course
                        $result = App\Models\examResultsModel::where('courseId', $id)->get();

                        // dd($assignments);
                    @endphp

                    @foreach ($result as $item)
                    <tr>
                        <td class="text-center">{{ $item->courseName }}</td>

                        <td class="text-center">
                            <a href="{{ asset('storage/' . $item->result) }}" target="_blank" class="btn btn-link">View</a>
                        </td>

                        <td class="text-center">{{ $item->description }}</td>

                        <td class="text-center">
                            <!-- Delete Action -->
                            <a onclick="return confirm('Are you sure you want to delete this Document?')" href="/deleteResult/delete/{{$item->id}}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

@endsection
