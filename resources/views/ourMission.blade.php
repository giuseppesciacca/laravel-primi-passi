<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Mission</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <header class="bg-dark text-center text-white py-5">
        <h1>{{$title}}</h1>

        <nav class="navbar navbar-expand-sm navbar-light bg-dark pt-3">
            <div class="container-fluid d-flex justify-content-center">

                <div class="navbar-nav">
                    <a class="nav-link active text-white" aria-current="page" href="/">Home</a>

                    <a class="nav-link active text-white" aria-current="page" href="{{'about'}}">About</a>

                    <a class="nav-link active text-white" aria-current="page" href="{{'ourMission'}}">Our Mission</a>
                </div>

            </div>
        </nav>

    </header>



    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>