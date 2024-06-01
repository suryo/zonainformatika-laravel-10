@extends('layouts.frontend-metronic-template')

@section('content')
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<div class="wrapper d-flex flex-column flex-row-fluid mt-5 mt-lg-10" id="kt_wrapper">
    <h1>Add New Article</h1>
    <form action="{{ route('article.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="short_desc" class="form-label">Short Description</label>
            <textarea class="form-control" id="short_desc" name="short_desc"></textarea>
        </div>
        <div class="mb-3">

            <div id="quill-editor" class="mb-3" style="height: 400px;"></div>
            <textarea rows="3" class="mb-3 d-none" name="text" id="quill-editor-area"></textarea>
    

           
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" class="form-control" id="author" name="author" required>
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" required>
        </div>
        <div class="mb-3">
            <label for="article_category_id" class="form-label">Category</label>
            <select class="form-select" id="article_category_id" name="article_category_id" required>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->category }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="text" class="form-control" id="status" name="status">
        </div>
        <button type="submit" class="btn btn-primary">Add Article</button>
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
