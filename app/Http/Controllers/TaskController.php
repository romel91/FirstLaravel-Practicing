<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    private $tasks = [
        [
            'id' => 1,
            'title' => 'Task 1',
            'description' => 'Description 1'
        ],
        [
            'id' => 2,
            'title' => 'Task 2',
            'description' => 'Description 2'
        ],
        [
            'id' => 3,
            'title' => 'Task 3',
            'description' => 'Description 3'
        ],
        [
            'id' => 4,
            'title' => 'Task 4',
            'description' => 'Description 4'
        ],
        [
            'id' => 5,
            'title' => 'Task 5',
            'description' => 'Description 5'
        ]
    ];

    function index() {
        // return response()->json($this->tasks);
        // $name = 'john Doe';
        // $total = count($this->tasks);
        // return view('tasks.alltasks', ['name' => $name, 'total'=> $total]); //ways to show view
        // return view('tasks.alltasks', compact('name', 'total')); //ways to show view
        return view('tasks.alltasks', ['tasks' => $this->tasks]);
        

    }
    function showTasks() {
        $name = 'john Doe';
        $total = count($this->tasks);
        // $newTotal = $total * 100;
        // return view('tasks.alltasks', compact('name', 'total', 'newTotal'));
    }
}
