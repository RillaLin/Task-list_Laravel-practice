@extends('layouts.app')  <!--延伸這個檔的bootstrate-->
  
@section('content')
    <h1>Task List</h1>
    <!--Display / Render all of the tasks that we have-->

    @foreach($tasks as $task)
        <div class="card @if($task->isCompleted()) border-success @endif" style="margin-bottom:20px;">          <!--bootstrate - card樣式，如果完成改成綠框-->
        <div class="card-body">

            <p>
                {{$task->description}}
            </p>
            @if(!$task->isCompleted()) <!--完成按鈕-->
                <form action="/tasks/{{$task->id}}" method="POST">
                    @method('PATCH')  <!--指定使用patch的route，把post改為patch-->
                    @csrf  <!--form表單會用到-->

                    <!--如果task還沒完成才顯示出complete按鈕-->
                    <button class="btn btn-light btn-block" input="submit">Complete</button>  <!--bootstrate - light按鈕顏色-->
                </form>
            @else  <!--刪除按鈕-->
                <form action="/tasks/{{$task->id}}" method="POST">
                    @method('DELETE')  <!--指定使用patch的route，把post改為patch-->
                    @csrf  <!--form表單會用到-->

                    <!--如果task還沒完成才顯示出complete按鈕-->
                    <button class="btn btn-danger btn-block" input="submit">Delete</button>  <!--bootstrate - light按鈕顏色-->
                </form>
            @endif
            <!-- <a class="btn btn-light" href="#">{{$task->id}}Complete</a> --> <!--bootstrate - light按鈕顏色-->
        </div>
        </div>
    @endforeach

    <a href="/tasks/create" class="btn btn-primary btn-lg btn-block">New Task</a>  <!--btn-lg 放大按鈕;btn-block 按鈕變寬-->

@endsection
 