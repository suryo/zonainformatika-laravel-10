<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::where('status', 'active')
                           ->where('deleted', 'false')
                           ->orderByDesc('id')
                           ->limit(5)
                           ->get();
                           
        return response()->json($projects, 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'project' => 'required|string|max:191',
            'author' => 'required|string|max:191',
            'price' => 'nullable|integer',
            'file_project' => 'nullable|file|mimes:pdf,doc,docx,zip|max:2048',
            'status' => 'nullable|string|max:191',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if ($request->hasFile('file_project')) {
            $fileName = time().'.'.$request->file_project->extension();
            $request->file_project->move(public_path('assets/file_uploads'), $fileName);
        } else {
            $fileName = null;
        }

        $project = Project::create([
            'project' => $request->project,
            'author' => $request->author,
            'price' => $request->price,
            'file_project' => $fileName,
            'slug' => $request->slug,
            'status' => $request->status,
        ]);

        return response()->json($project, 201);
    }

    public function show($id)
    {
        $project = Project::find($id);

        if (!$project) {
            return response()->json(['message' => 'Project not found'], 404);
        }

        return response()->json($project, 200);
    }

    public function update(Request $request, $id)
    {
        $project = Project::find($id);

        if (!$project) {
            return response()->json(['message' => 'Project not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'project' => 'required|string|max:191',
            'author' => 'required|string|max:191',
            'price' => 'nullable|integer',
            'file_project' => 'nullable|file|mimes:pdf,doc,docx,zip|max:2048',
            'slug' => 'required|string|max:191|unique:projects,slug,' . $project->id,
            'status' => 'nullable|string|max:191',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if ($request->hasFile('file_project')) {
            $fileName = time().'.'.$request->file_project->extension();
            $request->file_project->move(public_path('assets/file_uploads'), $fileName);
        } else {
            $fileName = $project->file_project;
        }

        $project->update([
            'project' => $request->project,
            'author' => $request->author,
            'price' => $request->price,
            'file_project' => $fileName,
            'slug' => $request->slug,
            'status' => $request->status,
        ]);

        return response()->json($project, 200);
    }

    public function destroy($id)
    {
        $project = Project::find($id);

        if (!$project) {
            return response()->json(['message' => 'Project not found'], 404);
        }

        $project->delete();

        return response()->json(['message' => 'Project deleted successfully'], 200);
    }
}
