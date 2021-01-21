<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front Page</title>
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="wrapper fadeInDown">
            <div class="d-flex justify-content-center h-100">
                <div class="card">

                    <div class="card-header">
                        <h3>Login Form</h3>
                    </div>

                    <div class="card-body">
                        <!-- diisi dengan form-->
                        <form method="POST" action="/loginauth">
                            @csrf
                            <div class="form-group">
                                <label>ID</label>
                                <input type="text" class="form-control" name="username">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <button type="submit" class="btn btn-primary">LOGIN</button><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>
