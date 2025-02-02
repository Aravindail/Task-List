<?php

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class Task
{
    public function __construct(
        public int     $id,
        public string  $title,
        public string  $description,
        public ?string $long_description,
        public bool    $completed,
        public string  $created_at,
        public string  $updated_at
    )
    {
    }
}

$tasks = [
    new Task(
        1,
        'Buy groceries',
        'Task 1 description',
        'Task 1 long description',
        false,
        '2023-03-01 12:00:00',
        '2023-03-01 12:00:00'
    ),
    new Task(
        2,
        'Sell old stuff',
        'Task 2 description',
        null,
        false,
        '2023-03-02 12:00:00',
        '2023-03-02 12:00:00'
    ),
    new Task(
        3,
        'Learn programming',
        'Task 3 description',
        'Task 3 long description',
        true,
        '2023-03-03 12:00:00',
        '2023-03-03 12:00:00'
    ),
    new Task(
        4,
        'Take dogs for a walk',
        'Task 4 description',
        null,
        false,
        '2023-03-04 12:00:00',
        '2023-03-04 12:00:00'
    ),
];

Route::get('/', function () {
    return view('welcome');
});
//
//Route::get('/test', function () {
//    return 'test';
//});
//
//Route::get('/catalog', function (){
//    return redirect('/');
//});
//
//Route::get('/{product}', function ($product) use($tasks) {
//    return view('index',[
//        'product' => $product,
//        'tasks' => $tasks,
//    ]);
//})->name('testing');
//Route::get('/component', function () {
//    return redirect()->route('testing');
//});

Route::get('/tasks', function () use ($tasks) {
    return view('index', [
        'tasks' => \App\Models\Task::latest()->where('completed', false)->get()
    ]);
})->name('tasks.list');

Route::get('/tasks/{id}', function ($id) {
    return view('task', [
        'task' => \App\Models\Task::findOrFail($id),
    ]);
})->name('tasks.element');


Route::fallback(function () {
    return 'Go fuck yourself!';
});
//GET
//POST
//PUT
//DELETE
