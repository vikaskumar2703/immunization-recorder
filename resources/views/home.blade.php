<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMMUNISATION RECORD</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
    }
    body{
        background-image: url("https://as2.ftcdn.net/v2/jpg/04/42/50/89/1000_F_442508962_WwQGsKAwJkChQh6OMlMbPY90WMDI9fKN.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    }
    header {
  background-color: #6c5ce7;
  height: 50px;
  width: 100%;
  color: #fff;
  text-align: center;
  margin-bottom: 10px;
  padding: 10px 0;
  /* padding: 50px 0; */
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
/* button */
.container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  margin-top: -50px;
}
button {
  padding: 10px 20px;
  background-color: #1dd1a1;
  color: white;
  height: 50px;
  border: none;
  font-weight: 700;
  margin: 10px;
  padding: 15px 10px 10px 15px;
}
button:hover{
    background-color: #10ac84;
    color: #c8d6e5;
}
</style>
<body>
    <header>
        <h1>IMMUNISATION RECORD</h1>
    </header>
    <div class="container">
        
    <a href="<?php echo url('/login')?>">
        <button >DOCTOR LOGIN</button>
    </a>

        <a href="<?php echo url('/search-immunisation-card')?>">
        <button >CHECK IMMUNISATION CARD</button>
        </a>
    </div>      
</body>
</html>