<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin:0;
            padding:0;
            height:100vh;
            position:relative;

        }
        header{
          width:100%;
          top:0;
          position:absolute;
          background-color:black;
          color:white;
          text-align:center;



        }
        footer{
            background-color: black;
            color: white;
            width: 100%;
            text-align: center;
            margin-top: 100%;
            bottom:0;
            position:absolute;
        }
        </style>
        

        
</head>
<body>
    <nav>

   
    <header>
        <h1>This is a dynamic page</h1>
    </header>
    </nav>
    <main>
        @yield('content')
    </main>


<footer><h1>copyright mmc 2024</h1></footer>

    

    
    
</body>
</html>