<!DOCTYPE html>
<html>
<head>
  <title>Contact Us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  
</head>

<body style="background: url(img/desktop.jpg); background-size: cover;">

 <?php  include "header.php" ?>


<div class="w-50 m-auto">
  <form action="contact.php" method="post">
    <div class="form-group">
     <br><br> <label>Username</label>
      <input type="text" name="user" autocomplete="off" class="form-control">
    </div>
    <div class="form-group">
      <label>Email ID</label>
      <input type="text" name="email" autocomplete="off" class="form-control">
    </div>
    <div class="form-group">
      <label>Mobile Number</label>
      <input type="text" name="Mobile" autocomplete="off" class="form-control">
    </div>
    <div class="form-group">
      <label>What Products,Bussiness you want to promote?</label>
      <textarea class="form-control" name="comment">
        
      </textarea>
    </div>
    <button type="submit" class="btn btn-primary mb-2">Submit</button>
  </form>
   <footer>
     <p class="p-3 bg-dark text-white text-center"> @digitalnepal<br>05-23408</p>
   </footer>
</body>
</html>
