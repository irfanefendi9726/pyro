<!DOCTYPE html>
html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MyPapanTanda</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        
    </head>
    <body>

        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
               <a class="navbar-brand" href="/">MyPapanTanda</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/dua">About</a>
                        </li>   
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/dua">Pricing</a>
                        </li>                         
                   

                </ul>
                <ul class="navbar-nav ml-auto mb-2 mb-md-0">

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/dashboard">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/register">Register</a>
                        </li>                        
             

                  </ul>                             
              </div>
            </div>
          </nav>
           <br>
           <br> 
           <br>
           <br>
             
          <div class="container" style=" padding=80px; width=30%;">
          <table>      
          <form action="/dua" >
                    <label for="nama">Nama penuh: </label><br>
                        <input type="text" id="nama" name="nama" ><br>
                    <label for="age">Umur: </label><br>
                        <input type="number" id="age" name="age" ><br>
                    <label for="kerja">Pekerjaan: </label><br>
                        <input type="text" id="kerja" name="kerja" ><br><br>
                    <input type="submit" value="Submit" >&nbsp;
                    <input type="reset"><br>
            </form>
            </table>
        </div>
        <div></div>
        <div></div>

        <div class="container" style="min-height: 75rem;padding-top: 4.5rem;">
            @yield('content') 
        </div> 
        <div class>
            Termination processs 
        </div>    
        
           
        
    
    </body>
    

</html>