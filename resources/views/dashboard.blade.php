<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
    }
    table {
  border-collapse: collapse;
  width: 100%;
  max-width: 800px;
  margin: 0 auto;
}

thead {
  background-color: #a29bfe;
  color: #fff;
}

thead th {
  padding: 10px;
  font-weight: bold;
  font-size: 16px;
}

tbody td {
  border: 1px solid #ccc;
  padding: 10px;
}
tbody tr:nth-child(even) {
  background-color: #f2f2f2;
}

tbody tr:hover {
  background-color: #e2e2e2;
}
/* header-bar */
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
/* asidebar */
aside {
  position: fixed;
  top: 70px;
  left: 20px;
  background-color: #fff;
  border-radius: 5px;
  padding: 10px;
}
aside button {
  background-color: #007bff;
  color: #fff;
  border: none;
  height: 50px;
  width: 120px;
  border-radius: 5px;
  padding: 10px 20px;
  margin-right: 10px;
  cursor: pointer;
  font-size: 15px;
  font-weight: 400;
}

aside button:hover {
  background-color: #0062cc;
}

aside .btn-primary {
  background-color: #007bff;
}
.heading-btn{
  display: flex;
  justify-content: flex-end;
  padding: 20px;
}
.heading-btn button{
  background-color: #ff7675;
  color: #fff;
  font-size: 16px;
  font-weight: 700;
  border: none;
  border-radius: 5px;
  padding: 10px 20px;
  cursor: pointer;
}
.heading-btn button:hover{
    background-color: #d63031;
    color: white;
}
/* search box */
.search-container {
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #fff;
  border-radius: 5px;
  padding: 10px;
}
.search-container input[type="text"] {
  border: none;
  width: 100px;
  padding: 10px;
  font-size: 16px;
  border: 1px solid #d63031;
}
.search-container button{
    border: none;
    width: 100px;
    padding: 10px;
    font-size: 16px;
    margin-left: 15px;
    background-color: black;
    cursor: pointer;
    color: white;
}
@media only screen and (max-width: 768px) {
  aside {
    display: flex;
    flex-wrap: wrap;
  }
  aside button {
    flex-grow: 1;
    margin: 5px 0;
    width: 100%;
  }
  aside button:last-of-type {
    margin-right: 0;
  }
}
</style>
<body>
    <!-- heading -->
    <header>
        <h1>IMMUNISATION RECORD</h1>
        <div class="heading-btn">
        <a href="<?php echo url('logout');?>">
            <button class="btn-primary">Logout</button>
            </a>
        </div>
    </header> 
        <!--asidebar  -->
        <aside >
          <a href="<?php echo url('child-registration');?>">
            <button class="btn-primary">New Child Registration</button>
          </a>
        </aside>
        <!-- search box -->
        <div class="search-container">
        <form action="<?php echo url('dashboard-search')?>" method="post">
            @csrf
            <input type="text" name="phone" placeholder="Search by Phone No ...">
            <button type="submit">Search</button>
        </form>
        </div>
          
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Father Name</th>
            <th scope="col">Mother Name</th>
            <th scope="col">Phone No</th>
            <th scope="col">Details</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($childs as $ch):?>
          <tr>
            <td>1</td>
            <td><?php echo $ch->child_name?></td>
            <td><?php echo $ch->father_name?></td>
            <td><?php echo $ch->mother_name?></td>
            <td><?php echo $ch->phone_no?></td>
            <td><a href="<?php echo url('/view-immunisation-details/'.$ch->id)?>">View Details</td>
            </tr>
          <?php endforeach;?>
        </tbody>
      </table>
</body>
</html>