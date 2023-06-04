<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>
   {{View::make('header')}}
   @yield('content')
   {{View::make('footer')}}
</body>

<style>
   .custom-login{
    height:400px;
    padding:150px;

   }
</style>
</html>

<!--<script>
    $(document).ready(function() /** jQuery function that waits for the HTML document to be fully loaded before executing the code */
    {
        /**
         * $("button")=> selects all the button elements in the HTML document.
        .click(function() { ... }) is a jQuery method that adds a click event handler to the selected button elements. 
        */ 
        $("button").click(function()
        {
            alert("all set");
        })
    })
</script>
-->