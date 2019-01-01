<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\task;
use Faker\Generator;

class ApiController extends Controller
{
    
    public function index()
    {
        return view('task');
    }

    
    public function create()
    {
        return response(task::all()->jsonSerialize(), Response::HTTP_OK);
    }

    
    public function store(Request $request)
    {
        $task = new task($request->all());
        $task->save($task->getAttributes());
        return response(task::all()->jsonSerialize(), Response::HTTP_OK);
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        $task = task::find($id);
        $task->delete();
        return response(task::all()->jsonSerialize(), Response::HTTP_OK);
    }
}
