@extends('layouts.frontend-metronic-template')

@section('content')
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<div class="wrapper d-flex flex-column flex-row-fluid mt-5 mt-lg-10" id="kt_wrapper">
    <h1>Edit Project</h1>
    <form action="{{ route('project.update', $Project->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="project" class="form-label">Project</label>
            <input type="text" class="form-control" id="project" name="project" value="{{ $Project->project }}" required>
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" class="form-control" id="author" name="author" value="{{ $Project->author }}" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $Project->price }}">
        </div>
        <div class="mb-3">
            <label for="file_project" class="form-label">File Project</label>
            <input type="file" class="form-control" id="file_project" name="file_project">
            @if($Project->file_project)
                <p>Current file: <a href="{{ asset('assets/file_uploads/' . $Project->file_project) }}" target="_blank">View File</a></p>
            @endif
        </div>
        <input type="hidden" name="name_file_project" value="{{ $Project->file_project }}">
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" value="{{ $Project->slug }}" required>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="text" class="form-control" id="status" name="status" value="{{ $Project->status }}">
        </div>
        <div class="mb-3">
            <label for="short_desc" class="form-label">Short Desc</label>
            <input type="text" class="form-control" id="short_desc" name="short_desc" value="{{ $Project->short_desc }}">
        </div>
      
        <div id="quill-editor" class="mb-3" style="height: 400px;"></div>
        <textarea rows="3" class="mb-3 d-none" name="desc" id="quill-editor-area">{{ $Project->desc }}</textarea>

        <button type="submit" class="btn btn-primary">Update Project</button>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toolbarOptions = [
            ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
            ['blockquote', 'code-block'],
            ['link', 'image', 'video', 'formula'],
            [{ 'header': 1 }, { 'header': 2 }],               // custom button values
            [{ 'list': 'ordered'}, { 'list': 'bullet' }, { 'list': 'check' }],
            [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
            [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
            [{ 'direction': 'rtl' }],                         // text direction
            [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
            [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
            [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
            [{ 'font': [] }],
            [{ 'align': [] }],
            ['clean']                                         // remove formatting button
        ];

        const options = {
            debug: 'info',
            modules: {
                toolbar: toolbarOptions,
            },
            placeholder: 'Compose an epic...',
            theme: 'snow'
        };

        var editor = new Quill('#quill-editor', options);

        var quillEditor = document.getElementById('quill-editor-area');

        // Inisialisasi editor dengan konten dari textarea
        if (quillEditor.value) {
            editor.setContents(JSON.parse(quillEditor.value));
        }

        editor.on('text-change', function() {
            quillEditor.value = JSON.stringify(editor.getContents());
        });

        quillEditor.addEventListener('input', function() {
            editor.setContents(JSON.parse(quillEditor.value));
        });
    });
</script>
@endsection
