<?php

namespace App\Http\Controllers;

use App\Models\Tree;
use App\Models\Tree_Detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class TreeDetailController extends Controller
{
    public function get_root_tree($departmentId)
    {
        $tree = (Tree::select('id')->where('department_id', $departmentId)->get())[0]->id;

        $root_tree = DB::table('tree__details')
        ->where('tree_id', $tree)
        ->join('categories', 'category_id', '=', 'categories.id')
        ->select('tree__details.id', 'emergency', 'tree__details.icon', 'tree__details.name', 'order', 'priority', 'tree__details.slug', 'leaf', 'categories.id', 'categories.name', 'categories.slug', 'categories.icon')
        ->where('parentId', null)
        ->get();

        return $root_tree;
    }

    public function get_children_from_parent($parentId, $departmentId)
    {
        $tree = (Tree::select('id')->where('department_id', $departmentId)->get())[0]->id;

        $child_tree = DB::table('tree__details')
        ->where('tree_id', $tree)
        ->join('categories', 'category_id', '=', 'categories.id')
        ->select('tree__details.id', 'emergency', 'tree__details.icon', 'tree__details.name', 'order', 'priority', 'tree__details.slug', 'leaf', 'categories.id', 'categories.name', 'categories.slug', 'categories.icon')
        ->where('parentId', $parentId)
        ->get();

        return $child_tree;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tree_Detail  $tree_Detail
     * @return \Illuminate\Http\Response
     */
    public function show(Tree_Detail $tree_Detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tree_Detail  $tree_Detail
     * @return \Illuminate\Http\Response
     */
    public function edit(Tree_Detail $tree_Detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tree_Detail  $tree_Detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tree_Detail $tree_Detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tree_Detail  $tree_Detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tree_Detail $tree_Detail)
    {
        //
    }
}
