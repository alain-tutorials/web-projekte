<nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">
          	{{ config('app.name', 'LSAPP') }}
          </a>
        </div>
        @php
          $path_01 = 'http://phps.code/laravel/Traversy/';
          $path_02 = '08-Edit.Delete_Data/public';
          $path = $path_01 . $path_02;
        @endphp
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="{{ $path }}/">
              Home 
            </a></li>
            <li><a href="{{ $path }}/about">
              About
            </a></li>
            <li><a href="{{ $path }}/services">Services</a></li>
             <li><a href="{{ $path }}/posts">Blog</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
             <li><a href="{{ $path }}/posts/create">
               Create Post 
             </a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>