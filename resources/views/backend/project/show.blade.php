@extends('layouts.frontend-metronic-template')

@section('content')
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<style>
    #quill-editor-area {
        border: none;
        overflow: hidden;
    }
    .ql-container.ql-snow{ border: none !important;}

</style>
<div class="wrapper d-flex flex-column flex-row-fluid mt-5 mt-lg-10" id="kt_wrapper">
    <h1>Project Details</h1>
    <p><strong>ID:</strong> {{ $Project->id }}</p>
    <p><strong>Project:</strong> {{ $Project->project }}</p>
    <p><strong>Author:</strong> {{ $Project->author }}</p>
    <p><strong>Price:</strong> {{ $Project->price }}</p>
    @if($Project->file_project)
        <p><strong>File:</strong>  <a href="{{ asset('assets/file_uploads/' . $Project->file_project) }}" target="_blank">View File</a></p>
    @endif
    <p><strong>Slug:</strong> {{ $Project->slug }}</p>
    <p><strong>Status:</strong> {{ $Project->status }}</p>
    <p><strong>Short Desc:</strong> {{ $Project->short_desc }}</p>
    <div id="quill-editor" class="mb-3"></div>
    <textarea class="mb-3 d-none" style="min-height:100%; height:auto;"  name="desc" id="quill-editor-area">{{ $Project->desc }}</textarea>
    
    <a href="{{ route('project.index') }}" class="btn btn-secondary">Back</a>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const options = {
            debug: 'info',
            modules: {
                toolbar: false,
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

        editor.enable(false); // Disable the editor for view-only mode
    });
</script>
@endsection
