<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReportModel;

class ReportdataController extends Controller
{
    public function index(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => 'required|date',
            'priority' => 'required|in:Low,Medium,High',
        ]);
        

        $task = ReportModel::create($request->all());
         return response()->json($task, 201);
    }
}
