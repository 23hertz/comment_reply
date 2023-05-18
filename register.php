<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Comment reply system</title>
</head>
<body>
        <div class="container">
            <header>
                <h1>Comment Reply System</h1>
            </header>
            <main>
                <form action="">
                     <div class="row m-3 loginInput">
                        <div class="col-sm-12">
                          <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="username">
                        </div>
                      </div>

                      <div class="row m-3 loginInput">
                        <div class="col-sm-12">
                          <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Email">
                        </div>
                      </div>

                      <div class="row m-3 loginInput">
                        <div class="col-sm-12">
                          <input type="text" class="form-control" id="colFormLabel" placeholder="password">
                        </div>
                      </div>

                      <div class="row m-3 loginInput">
                        <div class="col-sm-12">
                          <input type="text" class="form-control" id="colFormLabel" placeholder="confirm-password">
                        </div>
                      </div>

                      <div class="row mx-4">
                        <label class="gender" for="gender">Gender:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                              Male
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                              Female
                            </label>
                          </div>
                      </div>
                     

                      <div class="col-12 submitLogin">
                        <button type="submit" class="btn btn-primary">Register</button>
                      </div>

                      
                    
                </form>
            </main>
        </div>

    <script src="main/js/bootstrap.min.js"></script>
</body>
</html>