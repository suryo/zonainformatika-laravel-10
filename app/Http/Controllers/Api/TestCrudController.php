<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\TestCrud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TestCrudController extends Controller
{
    public function index()
    {
        $testcruds = TestCrud::where('status', 'active')
                           ->where('deleted', 'false')
                           ->orderByDesc('id')
                           ->limit(5)
                           ->get();
                           
        return response()->json($testcruds, 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'content' => 'required|string|max:191',
            'author' => 'required|string|max:191',
            'price' => 'nullable|integer',
            'file_content' => 'nullable|file|mimes:pdf,doc,docx,zip|max:2048',
            'status' => 'nullable|string|max:191',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if ($request->hasFile('file_content')) {
            $fileName = time().'.'.$request->file_content->extension();
            $request->file_content->move(public_path('assets/file_uploads'), $fileName);
        } else {
            $fileName = null;
        }

        $testcrud = TestCrud::create([
            'content' => $request->content,
            'author' => $request->author,
            'price' => $request->price,
            'file_content' => $fileName,
            'slug' => $request->slug,
            'status' => $request->status,
        ]);

        return response()->json($testcrud, 200);
    }

    public function show($id)
    {
        $testcrud = TestCrud::find($id);

        if (!$testcrud) {
            return response()->json(['message' => 'Project not found'], 404);
        }

        return response()->json($testcrud, 200);
    }

    public function update(Request $request, $id)
    {
        $testcrud = TestCrud::find($id);

        if (!$testcrud) {
            return response()->json(['message' => 'Content not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'content' => 'required|string|max:191',
            'author' => 'required|string|max:191',
            'price' => 'nullable|integer',
            'file_content' => 'nullable|file|mimes:pdf,doc,docx,zip|max:2048',
            'slug' => 'required|string|max:191|unique:contents,slug,' . $testcrud->id,
            'status' => 'nullable|string|max:191',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if ($request->hasFile('file_content')) {
            $fileName = time().'.'.$request->file_project->extension();
            $request->file_project->move(public_path('assets/file_uploads'), $fileName);
        } else {
            $fileName = $testcrud->file_content;
        }

        $testcrud->update([
            'content' => $request->content,
            'author' => $request->author,
            'price' => $request->price,
            'file_content' => $fileName,
            'slug' => $request->slug,
            'status' => $request->status,
        ]);

        return response()->json($testcrud, 200);
    }

    public function destroy($id)
    {
        $testcrud = TestCrud::find($id);

        if (!$testcrud) {
            return response()->json(['message' => 'Content not found'], 404);
        }

        $testcrud->delete();

        return response()->json(['message' => 'Content deleted successfully'], 200);
    }
}
