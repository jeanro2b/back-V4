<?php

namespace App\Http\Controllers;

use App\Models\Tree;
use Illuminate\Http\Request;

class TreeController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $trees = Tree::latest()->first();

        $tree = json_decode($trees->tree, true)["tree"];


        // foreach($tree as $key => $value) {
        //     if($value["id"] === '1469') {
        //         dd($value);
        //     }
        // };

        // dd($tree["tree"][0]);
        dd($tree);
    }
}
