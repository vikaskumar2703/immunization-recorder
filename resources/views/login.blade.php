
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
    }
    body{
        background-image: url("https://img.freepik.com/free-photo/girl-receiving-vaccine-medical-office_1098-380.jpg?w=996&t=st=1683750323~exp=1683750923~hmac=f7aa77917ca64ea18c77137c94cad3b3b6f93b05dd24f8a98c328f24f299b0b3");
        background-repeat:no-repeat;
        background-size:cover;
    }
    header {
  background-color: #6c5ce7;
  height: 50px;
  width: 100%;
  color: #fff;
  text-align: center;
  margin-bottom: 40px;
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
.main{
	padding:20px;
	font-family: 'Helvetica', serif;
	box-shadow: 5px 5px 7px 5px #888888;
    width: 400px;
	margin: auto; 
}
.heading{
	display: flex;
	justify-content: center;
	align-items: center;
}
.heading h1{
	font-family: sans-serif;
	font-size: 25px;
	font-weight: 700;
	color: white;
}
.container1{
	display: flex;
	justify-content: center;
	align-items: center;
}
.container1 input{
	height: 35;
	width: 300px;
	border: none;
	margin-top: 10px;
    margin-bottom: 10px;
	padding: 10px 5px;
	border-radius: 7px;
	box-shadow: 5px 5px 5px #b2bec3;
	font-size: 16px;
	font-weight: 600px;
	font-family: sans-serif
}
.container2{
	display: flex;
	justify-content: center;
	align-items: center;
}
button{
	margin-top: 40px;
	text-align: center;
	border: none;
	height: 35px;
    font-size: 18px;
    font-weight: 500;
	width: 300px;
	padding: 10px 5px;
	box-shadow: 5px 5px 5px #fab1a0;
    background-color: white;
	border-radius: 5px;
	cursor: pointer;
}
button:hover{
	background-color: #8c7ae6;
	color: #fff;
}
p{
    color: white;
    margin-top: 10px;
    font-weight: 400;
}
p a{
    text-decoration: none;
    color: #ff3838;
}
</style>
<body>
    <header>
        <h1>IMMUNISATION RECORD</h1>
    </header>
   <div class="main">
    <div class="heading">
        <h1>
           Doctor Login
        </h1>
    </div>
    <form action="<?php echo url('/auth-check')?>" method="post">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <div class="container1">
        <input type="email" name="email" placeholder="Enter Your Email"> 
    </div>
    <div class="container1">
        <input type="password" name='password' placeholder="Enter Your Password">
    </div>
    <div class="container2">
        <button type="submit">Login</button>
    </div>
    </form>
    @if(session('error'))
    <span style="color:red"> {{ session('error') }}</span>
    @endif
    
    <p style="margin-left:50px;margin-top:20px">New Doctor Registration <a href="<?php echo url('/doctor-register')?>">Create an account</a></p>
   </div>
</body>
</html>