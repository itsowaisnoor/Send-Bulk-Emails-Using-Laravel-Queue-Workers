<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/css/bootstrap-tokenfield.min.css" integrity="sha256-4qBzeX420hElp9/FzsuqUNqVobcClz1BjnXoxUDSYQ0=" crossorigin="anonymous" />
      
    </head>
    <body>
     <div class="container">
         <div class="row">
             <div class="col-6">
                <form action="{{route('contact.store')}}" method="post">
                        @csrf
                        <br>
                        <input type="text" class="form-control" placeholder="Enter your Email" name="emails" id="emails">
                        <br>
                        <input type="text" class="form-control" placeholder="Email" required name="name" id="name">
<br>
                        <input type="submit" class="btn btn-primary" value="submit">
                    </form>
             </div>
               
         </div>
         <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/bootstrap-tokenfield.min.js" integrity="sha256-jdwX0QzXB7z7Xc7Vz0ovtIHWO5qIZWg0aLcGv44JDgE=" crossorigin="anonymous"></script>        

    <script type="text/javascript">
    $(document).ready(function() {
    
        $("#emails").tokenfield();
    });
    
    
    </script>
    </body>
</html>
