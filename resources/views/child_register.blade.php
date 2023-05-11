<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Child Registration</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
    }
    body{
        background-image: url("https://as1.ftcdn.net/v2/jpg/00/72/08/68/1000_F_72086830_A8iSfHvbliRGRtHz4VRpuD47BOAhRM7S.jpg");
        background-repeat: no-repeat;
        background-size: cover;
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
.error{
    margin-left:50px;
}
</style>
<body>
    <header>
        <h1>IMMUNISATION RECORD</h1>
    </header>
   <div class="main">
    <div class="heading">
        <h1>
        Child Registration
        </h1>
    </div>
    @if ($errors->any())
        <div class="error" style="color:red">Validatation Error</div>
    @endif
    <form action="<?php echo url('save-immunisation-data')?>" method="post">
    @csrf
    <div class="container1">
        <input type="text" name='child_name' placeholder="Enter Child Name"> 
    </div>
    @if($errors->has('child_name'))
            <div class="error" style="color:red">{{ $errors->first('name') }}</div>
    @endif
    <div class="container1">
        <input type="text" name='father_name' placeholder="Enter Father Name">
    </div>
    @if($errors->has('father_name'))
        <div class="error" style="color:red">{{ $errors->first('father_name') }}</div>
    @endif
    <div class="container1">
        <input type="text" name='mother_name' placeholder="Enter Mother Name">
    </div>
    @if($errors->has('mother_name'))
        <div class="error" style="color:red">{{ $errors->first('mother_name') }}</div>
    @endif
    <div class="container1">
        <input type="date" name='dob' placeholder="Enter Child's DOB">
    </div>
    @if($errors->has('dob'))
        <div class="error" style="color:red">{{ $errors->first('dob') }}</div>
    @endif

    <div class="container1">
        <input type="email" name='email' placeholder="Parent Email">
    </div>

    @if($errors->has('email'))
            <div class="error" style="color:red">{{ $errors->first('email') }}</div>
    @endif
    <div class="container1">
        <input type="text" name='phone_no' placeholder="Parent Phone No">
    </div>
    @if($errors->has('phone_no'))
            <div class="error" style="color:red">{{ $errors->first('phone_no') }}</div>
    @endif
    <div class="container2">
        <button type="submit">Submit</button>
    </div>
    </form>
   </div>
</body>
</html>











