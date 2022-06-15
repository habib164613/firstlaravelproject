<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="{{asset('backend/css/styles.css')}}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <title>@yield('page_title') |tech blog</title>
</head>
<body>
    <div class="container-fluid login-container">
      
       
                <div class="card login-card">
                 <div class="card-header">
                     <h1 class="mb-0">@yield('page_title')</h1>
                 </div>
                 <div class="card-body">
                   @yield('content')
                 </div>
             
            
    </div>
    
</body>
</html>