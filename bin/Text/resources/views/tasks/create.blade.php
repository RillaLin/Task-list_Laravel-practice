
  @extends('layouts.app')  <!--延伸這個檔的bootstrate-->
  
  @section('content')
    <h1>New Task</h1>

    @if($errors->any())
      <!-- {{ print_r($errors->all())}} -->  <!--印出完整錯誤資訊-->
      <div class="alert alert-danger" role="alert">
        <ul>
          @foreach($errors->all() as $error)   <!--印出錯誤資訊-->
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      
    @endif

    <form method="POST" action="/tasks">
      <div class="form-group">  <!--這是bootstrate的class-->
          @csrf
          <label for="description">Task Description</label>
          <input class="form-control" name="description" />
      </div>

      <!--第二種顯示錯誤的方式-->
      @error('description')
        <div class="alert alert-danger" role="alert">
          {{ $message }}
        </div>
      @enderror
      <!--第二種顯示錯誤的方式-->

      <div class="form-group">
          <button type="submit" class="btn btn-primary">Create Task</button>
      </div>
    </form>
  @endsection

  
