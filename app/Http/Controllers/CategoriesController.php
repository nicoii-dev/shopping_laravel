<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use Illuminate\Support\Facades\DB;


class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $categories = Categories::all();
        $categories = DB::table('categories')->get();
        // echo $categories;
        return view("categories", compact("categories", 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $categories = DB::table('categories')->where('categories.id', $id)->get();
        $categories = DB::table('categories')->get();
        // echo $categories;
        return view("categories/create", compact("categories", 'categories'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $categories = Categories::find($id);
        $categories = DB::table('categories')->where('categories.id', $id)->get();
        echo $categories;
        // return view("categories", compact("categories", 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
