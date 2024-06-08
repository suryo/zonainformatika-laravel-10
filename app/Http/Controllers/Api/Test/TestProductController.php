<?php

namespace App\Http\Controllers\Api\Test;

use App\Http\Controllers\Controller;
use App\Models\TestProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TestProductController extends Controller
{
    public function index()
    {
        $testProducts = TestProduct::where('status', 'active')
                           ->where('deleted', 'false')
                           ->orderByDesc('id')
                           ->limit(5)
                           ->get();
                           
        return response()->json($testProducts, 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:191',
            'desc' => 'required|string|max:191',
            'price' => 'nullable|integer',
            'status' => 'nullable|string|max:191',
        ]);


        $testProduct = TestProduct::create([
            'name' => $request->name,
            'desc' => $request->desc,
            'price' => $request->price,
            'image_url' => $request->image_url,
            'slug' => $request->slug,
            'status' => $request->status,
        ]);

        return response()->json($testProduct, 200);
    }

    public function show($id)
    {
        $testProduct = TestProduct::find($id);

        if (!$testProduct) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        return response()->json($testProduct, 200);
    }

    public function update(Request $request, $id)
    {
        $testProduct = TestProduct::find($id);
        

        if (!$testProduct) {
            return response()->json(['message' => 'Product not found'], 404);
        }


        $testProduct->update([
            'name' => $request->name,
            'desc' => $request->desc,
            'price' => $request->price,
            'image_url' => $request->image_url,
            'slug' => $request->slug,
            'status' => $request->status,
        ]);

        return response()->json($testProduct, 200);
    }

    public function destroy($id)
    {
        $testProduct = TestProduct::find($id);

        if (!$testProduct) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        $testProduct->delete();

        return response()->json(['message' => 'Product deleted successfully'], 200);
    }
}
