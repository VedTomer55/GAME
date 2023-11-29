<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
       

        .w3-container.w3-teal h1 {
            display: block;
        }
        .card-body{
            height: 200px;
            width: 400px;
        }
    </style>
  </head>
  <body>
    <div class="w3-sidebar w3-light-grey w3-bar-block" style="width:14%">
        <h3 class="w3-bar-item">Dashboard</h3>
        <a href="user" class="w3-bar-item w3-button">Users</a>
        <a href="#" class="w3-bar-item w3-button">Add Number</a>
        <a href="#" class="w3-bar-item w3-button">Result</a>
    </div>

    <div style="margin-left:14%">
        <div class="w3-container w3-teal">
            <h1>My Page</h1>
            {{-- <a href="#" style="float: right; color: #fff; text-decoration: none; margin-right: 10px;">Logout</a> --}}
        </div>

        <div class="container mt-4">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Users</h5>
                            <p class="card-text">This is the content of card 1.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Add Number</h5>
                            <p class="card-text">This is the content of card 2.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Result</h5>
                            <p class="card-text">This is the content of card 3.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>