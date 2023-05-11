<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SEARCH RECORD</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<style>
    *{
        margin: 0;
        padding: 0;
    }
    header{
  background-color: #6c5ce7;
  height: 70px;
  width: 100%;
  color: #fff;
  text-align: center;
  margin-bottom: 10px;
  padding: 10px 0;
}
header h1 {
  font-size: 30px;
  padding-top: 5px;
  text-transform: uppercase;
  letter-spacing: 1px;
  color: #dfe6e9;
  margin: 0;
  font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  font-weight: 600;
  text-shadow: 2px 2px 0 #000;
}
.first-heading{
    text-transform: uppercase;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-weight: 600;
}
</style>
<body>
    <header>
        <h1>IMMUNISATION RECORD</h1>
    </header> 
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6">
        <h1 class="text-center mt-5 mb-4 first-heading">Search Child Card</h1>
        <form class="form-inline mb-5" action="<?php echo url('find-child')?>" method="post">
        @csrf
          <div class="input-group w-100">
            <input class="form-control form-control-lg  border-right-0" name="phone" type="text" placeholder="Enter Registered Phone Number" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-lg btn-primary rounded-0" type="submit">Search</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap JavaScript -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>