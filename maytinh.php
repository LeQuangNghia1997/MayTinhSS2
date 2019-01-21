<!DOCTYPE HTML>
<html xmlns:color="http://www.w3.org/1999/xhtml">
<style type="text/css">
    .Calculator {
        height:250px; width:350px;
        margin: auto;
        padding:10px;
        border:3px #00008b solid;
    }
    .Calculator input {
        padding:5px; margin:5px
    }
</style>
<body>
<form  method = "post">
    <div class="Calculator"  id="Resul">
        <h2 color: navy;>Calculator</h2>
        <input type="So thu nhat" name="so1" size="40"  placeholder="Number1"  />
        <input type="So thu hai " name="so2" size="40" placeholder="Number2"   />
        <select name = "tinhtoan">
            <option>+</option>
            <option>-</option>
            <option>/</option>
            <option>*</option>
        </select>
        <input type="submit"  />
    </div>
</form>
<?php
    $so1 = $_POST["so1"];
    $so2 = $_POST["so2"];
  $tinhtoan = $_POST["tinhtoan"];
  switch ($tinhtoan){
      case "+":
          echo $so1 + $so2;
          break;
      case "-":
          echo $so1 - $so2;
          break;
      case "*":
          echo $so1*$so2;
          break;
      case "/":
          echo $so1/$so2;
          break;
      default:
          break;
  }

?>
</body>
</html>