<!DOCTYPE html>
<html>
<head>

<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}


.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.input-field {
  width: 100%;
  padding: 15px;
  outline: none;
  border: 1px solid black;
  border-radius: 6px;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 20px 20px;
  border: 2px solid dodgerblue;
  border-radius: 6px;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
.upload-btn-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-block;
}

.btna {
  border: 1px solid dodgerblue;
  color: gray;
  background-color: white;
  padding: 8px 20px;
  border-radius: 6px;
  font-size: 20px;
  font-weight: bold;
}

.upload-btn-wrapper input[type=file] {
  font-size: 70px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}

.demo{
  margin: 1em 0 0.5em 0;
  font-weight: normal;
  position: relative;
  text-shadow: 0 -1px rgba(0,0,0,0.6);
  font-size: 40px;
  line-height: 40px;
  background: #355681;
  background: rgba(53,86,129, 0.8);
  border: 1px solid #fff;
  padding: 15px 15px;
  color: white;
  border-radius: 0 10px 0 10px;
  box-shadow: inset 0 0 5px rgba(53,86,129, 0.5);
  font-family: 'Muli', sans-serif;
}
</style>


</head>
<body>

<form action="/log" style="max-width:500px;margin:auto" method="post">
<?php echo csrf_field(); ?>
  <h2><div class="demo"><center>Student Register Form</center></div></h2>
  <div class="input-container">
  <input class="input-field" type="text" placeholder="First Name" name="fname" required>&nbsp
  <input class="input-field" type="text" placeholder="Last Name" name="lname" required>
  </div>
 
  <div class="input-container">
    <input class="input-field" type="text" placeholder="Email" name="email" required>
  </div>
  
  <div class="input-container">
    <input class="input-field" type="number" placeholder="Phone Number" name="no" required>
  </div>
 
  <div class="input-container">
  <div class="upload-btn-wrapper">
  Select Your Picture:&nbsp<button class="btna">Upload a file</button>
  <input type="file" name="myfile" required/>
  </div></div>

 
  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <li> <font color='red'> <?php echo e($error); ?> </font> </li> 
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
  <button type="submit" class="btn">Register</button>
</form>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\blog\resources\views/reg.blade.php ENDPATH**/ ?>