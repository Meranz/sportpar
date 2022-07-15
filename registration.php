<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h3>Using CSS to style an HTML Form</h3>

<div>
  <form action="registrationaction.php" method="post">
    <label for="fname">Name</label>
    <input type="text" id="name" name="name" placeholder="Your name..">

    <label for="fname">IC Number</label>
    <input type="text" id="ic" name="ic" placeholder="Your name..">

    <label for="fname">Phone Number</label>
    <input type="text" id="phone" name="phone" placeholder="Your name..">

    <label for="gender">Gender</label>
    <select id="gender" name="gender">
      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select>
  
    <input type="submit" value="Submit">
    <center><a type="btn btn-light" href="index.html" >Cancel</a></center>
  </form>
</div>

</body>
</html>