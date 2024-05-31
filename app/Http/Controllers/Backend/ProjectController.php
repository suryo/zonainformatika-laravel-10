<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('backend.project.index', compact('projects'));
    }

    public function create()
    {
        return view('backend.project.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            // 'project' => 'required|string|max:191',
            // 'author' => 'required|string|max:191',
            // 'price' => 'nullable|integer',
            'file_project' => 'nullable|file|mimes:pdf,doc,docx,zip', // Validate the file
            // 'slug' => 'required|string|max:191|unique:article_projects',
            // 'status' => 'nullable|string|max:191',
        ]);

        $fileName = time().'.'.$request->file_project->extension(); 
        $request->file_project->move(public_path('assets/file_uploads'), $fileName);
        

        Project::create([
            'project' => $request->project,
            'author' => $request->author,
            'price' => $request->price,
            'file_project' => $fileName,
            'slug' => $request->slug,
            'status' => $request->status,
        ]);

        return redirect()->route('project.index')->with('success', 'Project created successfully.');
    }

    public function show(Project $Project)
    {
        //dd($Project->desc);
        $lexer = new \nadar\quill\Lexer($Project->desc);
//dump($lexer->render());
$htmldesc = ($lexer->render());
        return view('backend.project.show', compact('Project', 'htmldesc'));
    }

    public function edit(Project $Project)
    {
       
        return view('backend.project.edit', compact('Project'));
    }

    public function update(Request $request, Project $Project)
    {
        $request->validate([
            // 'project' => 'required|string|max:191',
            // 'author' => 'required|string|max:191',
            // 'price' => 'nullable|integer',
            // 'file_project' => 'nullable|file|mimes:pdf,doc,docx,zip', // Validate the file
            // 'file_project' => 'required|mimes:zip,pdf,xlx,csv|max:2048',
            // 'slug' => 'required|string|max:191|unique:article_projects,slug,' . $Project->id,
            // 'status' => 'nullable|string|max:191',
        ]);

        
        if(($request->name_file_project) == null)
        {
        $fileName = time().'.'.$request->file_project->extension(); 
        $request->file_project->move(public_path('assets/file_uploads'), $fileName);
        }
        else
        {
        $fileName = $request->name_file_project;
        }

        $Project->update([
            'project' => $request->project,
            'author' => $request->author,
            'price' => $request->price,
            'file_project' => $fileName,
            'slug' => $request->slug,
            'status' => $request->status,
            'short_desc' => $request->short_desc,
            'desc' => $request->desc,
            
        ]);

        return redirect()->route('project.index')->with('success', 'Project updated successfully.');

    }

    public function destroy(Project $Project)
    {
        $Project->delete();

        return redirect()->route('backend.project.index')->with('success', 'Article Project deleted successfully.');
    }
}
