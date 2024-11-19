@extends('layouts.teacher')
@section('content')
    <form action="/submitCourseMaterials" method="POST" enctype="multipart/form-data">
        @csrf

        @php
            $data = App\Models\allcoursesModel::find($id);
        @endphp

        <!-- Course ID Field (Hidden) -->
        <input type="hidden" value="{{ $id }}" name="id" class="form-control" id="id">
        <input type="hidden" value="{{ $data->courseId }}" name="courseId" class="form-control" id="courseId">

        <!-- Course Name Field (Hidden) -->
        <input type="hidden" value="{{ $data->courseName }}" name="courseName" class="form-control" id="courseName">

        <!-- File Upload Field for Document -->
        <div class="form-group">
            <label for="document">Upload Document</label>
            <input type="file" name="document" class="form-control-file" id="document" required>
            <small class="form-text text-muted">Allowed file types: PDF, DOC, DOCX, PPT, PPTX, ZIP</small>
        </div>

        <!-- Description Field -->
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" id="description" rows="3" required></textarea>
        </div>

        <input type="submit" class="btn btn-primary mt-3" value="Upload">
    </form>



    {{-- Table Section --}}
    <section class="bg-light p-4 mt-4 rounded shadow-sm"> <!-- Bootstrap classes for styling -->

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark"> <!-- Bootstrap dark header style -->
                    <tr>
                        <th class="text-center">Course Name</th>
                        <th class="text-center">Document</th>
                        <th class="text-center">Description</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>

                @php
                    $data = App\Models\courseMaterialModel::where('courseId', $id)->get();
                @endphp
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td class="text-center">{{ $item->courseName }}</td>

                        <td class="text-center">
                            <a href="{{ asset('storage/' . $item->document) }}" target="_blank" class="btn btn-link">View</a>
                        </td>

                        <td class="text-center">{{ $item->description }}</td>

                        <td class="text-center">
                            <a onclick="return confirm('Are You Sure to Delete')" href="/deleteDocument/delete/{{$item->id}}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
