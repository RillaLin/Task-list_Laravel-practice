<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;  //使用Task model

class TasksController extends Controller
{
    public function index(){
        //Retrieve all of the tasks when we visit the homepage
        //$tasks = Task::all();  //獲得tasks資料表的所有資料
        $tasks = Task::orderBy('completed_at') -> orderBy('id','DESC') -> get(); //獲得tasks資料表的所有資料(沒有完成的資料牌上面->較新的task放最上)
        //return dd($tasks);     //測試是否有讀取到資料庫的資料
        
        //pass the data to our index view
        return view('tasks.index',[
            'tasks' => $tasks,         //將$tasks夾帶到index頁面
        ]);
    } 

    public function create(){
        return view('tasks.create');
    } 

    public function store(){ 
        request()->validate([          //驗證新建是否有輸入&驗證大於255
            'description' => 'required|max:255',
        ]);

        Task::create([ //使用Task model
            'description' => request('description'),   //把資料存進資料庫欄位

        ]);

        //Return to the homepage when a task is created
        return redirect('/');
        
        //return dd($task);  //dd可以把資料變成json格式
    } 


    //Handle the tasks submission data
    //create a task
    //display a list of tasks

    //mark a task  as completed
    public function update($id){
        $task = Task::where('id',$id)->first();  //用傳過來的id找資料
        
        $task->completed_at = now();  
        $task->save();    //更新

        //return dd($task);
        return redirect('/');  //重新載入這一頁
    }

    //devide the tasks into completed and uncompleted section

    //delete a task permanently
    public function delete($id){
        $task = Task::where('id',$id)->first();

        $task->delete();

        return redirect('/');
    }

    
}
