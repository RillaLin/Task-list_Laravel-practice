<html>
  <head>
    <title>Todo App Demo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  </head>
  <body>
    <!--bootstrate - navbar code-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">Stackcasts Todo App Demo</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">All Task</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/tasks/create">New Task</a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>

    <div class="container"> <!--間隔出一些空間-->
        @yield('content')   <!--從呼叫延伸的檔中找到section名為'content'的-->
    </div>
  </body>


</html>
