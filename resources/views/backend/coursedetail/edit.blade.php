@extends('layouts.frontend-metronic-template')

@section('content')
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<div class="wrapper d-flex flex-column flex-row-fluid mt-5 mt-lg-10" id="kt_wrapper">
    <h1>Edit Course Detail</h1>
    <form action="{{ route('coursedetail.update', $courseDetail->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $courseDetail->title }}">
        </div>
        <div class="form-group">
            <label >Short Desc:</label>
            <textarea class="form-control" id="short_desc" name="short_desc" rows="4">{{ $courseDetail->short_desc }}</textarea>
        </div>
        <div class="form-group">
            <label>Description:</label>
           
            <div id="quill-editor" class="mb-3" style="height: 400px;"></div>
            <textarea rows="3" class="mb-3 d-none" name="desc" id="quill-editor-area">{{ $courseDetail->text  }}</textarea>
    
        </div>
        <div class="form-group">
            <label for="video">Video:</label>
          
            <textarea class="form-control" id="video" name="video" rows="4">{{ $courseDetail->video }}</textarea>
            <label for="" class=""></label>add this code into iframe : <code>class="embed-responsive-item" width=100% height=320px</code></label>
        </div>
        <div class="form-group">
            <label for="type">Type:</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ $courseDetail->type }}">
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <select class="form-control" id="status" name="status">
                <option value="active" {{ $courseDetail->status == 'active' ? 'selected' : '' }}>Active</option>
                <option value="inactive" {{ $courseDetail->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>
        <div class="form-group">
            <label for="deleted">Deleted:</label>
            <select class="form-control" id="deleted" name="deleted">
                <option value="false" {{ $courseDetail->deleted == "false" ? 'selected' : '' }}>False</option>
                <option value="true" {{ $courseDetail->deleted == "true" ? 'selected' : '' }}>True</option>
               
            </select>
        </div>
        <input type="hidden" name="course_id" id="course_id" value={{ $course_id }}>
        <input type="hidden" name="course_detail_id" id="course_detail_id" value={{ $course_detail_id }}>
        
        <button type="submit" class="btn btn-primary">Update Course Detail</button>
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

