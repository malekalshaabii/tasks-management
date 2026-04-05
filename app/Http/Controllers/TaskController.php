<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function index()
    {
        $data = Task::all();
        return view('home.task', ['data' => $data]);
    }
    public function store(Request $request)
    {
        $datainseert =
            [
                'title' => $request->title,
                'description' => $request->description,
                'status' => $request->status,
            ];
        Task::create($datainseert);
        return redirect()->route('task_index');
    }
    public function edit($id)
    {
        $task = Task::find($id);
        return view('updatetask.update', ['data' => $task]);
    }

    public function update($id, Request $request)
    {
        $datatoupdate = Task::find($id);

        $datatoupdate->title = $request->title;
        $datatoupdate->description = $request->description;
        $datatoupdate->status = $request->status;
        $datatoupdate->save();
        return redirect()->route('task_index');
        /*
        الطريقة الثانية
         $datatoupdate['title']=$request->title;
         ....
         ....
         ....
         Task ::where("id","=",$id)->update($datatoupdate);
         return redirect()->route('task_index');
        */
    }

    public function delete_task($id)
    {
        $task = Task::where('id', '=', $id)->delete(); // الطريقة الاولى
        return redirect()->route('task_index');
        /*
        الطريقة الثانية
        $task = Task ::find($id);
        $task->delete();
        return redirect()->route('task_index'); */
    }
    public function status_task($id)
    {
        $task = Task::find($id);

        if ($task->status == 'done') {
            $task->status = 'pending';
        } else {
            $task->status = 'done';
        }

        $task->save();

        return redirect()->route('task_index');
    }
}
