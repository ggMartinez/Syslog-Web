
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="{{ asset('js/color-modes.js') }}"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Gonzalo Martinez">
    <title>Syslog Web Viewer</title>


    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="{{ asset('css/navbar-static.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

    <link rel="apple-touch-icon" href="{{ asset('favicons/apple-touch-icon.png') }}" sizes="180x180">
    <link rel="icon" href="{{ asset('favicons/favicon-32x32.png') }}" sizes="32x32" type="image/png">
    <link rel="icon" href="{{ asset('favicons/favicon-16x16.png') }}" sizes="16x16" type="image/png">
    <link rel="manifest" href="{{ asset('favicons/manifest.json') }}">
    <link rel="mask-icon" href="{{ asset('/favicons/safari-pinned-tab.svg') }}" color="#712cf9">
    <link rel="icon" href="{{ asset('favicons/favicon.ico') }}">
    <meta name="theme-color" content="#712cf9">

    <script
      src="https://code.jquery.com/jquery-3.7.1.slim.js"
      integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc="
      crossorigin="anonymous"></script>

    
  </head>
  <body>
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
              id="bd-theme"
              type="button"
              aria-expanded="false"
              data-bs-toggle="dropdown"
              aria-label="Toggle theme (auto)">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#sun-fill"></use></svg>
            Light
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
            Dark
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#circle-half"></use></svg>
            Auto
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
      </ul>
    </div>

    
<nav  class="navbar navbar-expand-md navbar-dark bg-blue mb-4" style="background-color: {{ $NavbarColor }} !important;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">{{ env('SITE_TITLE') }}</a> <div class="vr"></div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active " href="/"> <i style="font-size: 18px" class="bi bi-bootstrap-reboot"></i> Reset filters</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false"> <i style="font-size: 18px" class="bi bi-hdd-rack"></i> Hosts</a>
          <ul class="dropdown-menu" style="background-color: {{ $NavbarColor }} !important;">
            @if(is_null(Request::get("tag")) && is_null(Request::get("message")))
              <li><a class="dropdown-item" href="/">All hosts</a></li>
            @else
              <li><a class="dropdown-item" href="/?@foreach(Request::except(["host"]) as $key => $value)&{{ $key }}={{ $value }}@endforeach">All hosts</a></li>
            @endif

            <li><hr class="dropdown-divider"></li>
            @foreach($Hosts as $host)
              @if(is_null(Request::get("host")))
                <li><a class="dropdown-item" href="/?@foreach(Request::query() as $key => $value)&{{ $key }}={{ $value }}@endforeach&host={{$host}}">{{ $host }}</a></li>
              @else 
                <li><a class="dropdown-item" href="/?@foreach(Request::except(["host"]) as $key => $value)&{{ $key }}={{ $value }}@endforeach&host={{$host}}">{{ $host }}</a></li>
              @endif 

            @endforeach
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false"> <i style="font-size: 18px" class="bi bi-bookmark-dash"></i> Syslog Tags</a>
          <ul class="dropdown-menu" style="background-color: {{ $NavbarColor }} !important;">
            @if(is_null(Request::get("host")) && is_null(Request::get("message")))
              <li><a class="dropdown-item" href="/">All tags</a></li>
            @else
              <li><a class="dropdown-item" href="/?@foreach(Request::except(["tag"]) as $key => $value)&{{ $key }}={{ $value }}@endforeach">All tags</a></li>
            @endif

            <li><hr class="dropdown-divider"></li>
            @foreach($Tags as $tag)
              @if(is_null(Request::get("tag")))
                <li><a class="dropdown-item" href="/?@foreach(Request::query() as $key => $value)&{{ $key }}={{ $value }}@endforeach&tag={{$tag}}">{{ $tag }}</a></li>
              @else 
                <li><a class="dropdown-item" href="/?@foreach(Request::except(["tag"]) as $key => $value)&{{ $key }}={{ $value }}@endforeach&tag={{$tag}}">{{ $tag }}</a></li>
              @endif 
            @endforeach
          </ul>
        </li>
        <div class="vr"></div>
        <div class="d-flex" role="search">
          <input class="form-control me-2" type="text" placeholder="Message filter" aria-label="Search" value="{{ Request::get('message') }}" id="messageFilter">
          <button class="btn btn-success" type="submit" id="applyMessageFilter">Search</button>
        </div>

        

        
          
      </ul>
      
    </div>
  </div>
</nav>

<main class="container">

  <div id="importCsv" class="modal fade" tabindex="-1">
          <div class="modal-dialog">
              <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title">Import CSV</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <form action="/monitor/import" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="mb-3">
                          <label class="form-label">CSV File</label>
                          <input type="file" class="form-control" name="file">
                      </div>
                      
                      <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
              </div>
              
              </div>
          </div>
      </div>

    