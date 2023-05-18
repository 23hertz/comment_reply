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
          <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            </a>
      
            <ul class="nav nav-pills">
              <li class="nav-item"><a href="#" class="nav-link" aria-current="page">Home</a></li>      
              <li class="nav-item"><a href="#" class="nav-link">View Profile</a></li>
              <li class="nav-item"><a href="#" class="nav-link">Logout</a></li>
            </ul>
          </header>

           
            <main>
              <header>
                <h1>Comment Reply System</h1>
              </header> 

                <form action="">
                     <div class="row m-3 loginInput">
                        <div class="col-sm-12">
                          <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="username">
                        </div>
                      </div>                  

                      <div class="row m-3 loginInput">
                        <div class="col-sm-12">
                            <textarea class="form-control" aria-label="With textarea" placeholder="Write Your Comment Here"></textarea>
                          </div>
                      </div>
                  
                      <div class="col-12 submitLogin">
                        <button type="submit" class="btn btn-primary">Post Comment Here</button>
                      </div>
    
                </form>

                <hr/>
                 
                <div class="row comments mt-3">
                  <div class="col-md-12 bg-primary py-2 cmh">
                    Posted by: Ola
                  </div>
                  <div class="col-md-12 py-3 mc">
                    qqq qqqq
                  </div>
                  <div class="col-md-12 bg-primary py-2 px-0 cb">
                    <div class="row">
                      <div class="col-md-8 x-0">2023-05-16 04:36:07</div>
                      <div class="col-md-4 x-0">
                        <a href="#" class="text-black">Like</a>
                        <a href="#" class="text-black">Unlike</a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row comments mt-3">
                  <div class="col-md-12 bg-primary py-2 cmh">
                    Posted by: Ola
                  </div>
                  <div class="col-md-12 py-3 mc">
                    qqq qqqq
                  </div>
                  <div class="col-md-12 bg-primary py-2 px-0 cb">
                    <div class="row">
                      <div class="col-md-8 x-0">2023-05-16 04:36:07</div>
                      <div class="col-md-4 x-0">
                        <a href="#" class="text-black">Like</a>
                        <a href="#" class="text-black">Unlike</a>
                      </div>
                    </div>
                  </div>
                </div>

            </main>
        </div>

    <script src="main/js/bootstrap.min.js"></script>
</body>
</html>