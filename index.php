<!DOCTYPE html>
<html>
<meta charset="UTF-8">
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
  background-color: #FF8100;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #cc6600;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>
<h1>Ping une machine du réseau</h1>
<div>
  <form action="/index.php" method="$_GET">
    <label for="ip">IP de la machine</label>
    <input type="text" id="ip" name="ip" placeholder="192.168.1.x 172.16.119.x"> 
    <input type="submit" value="Submit">
  </form>
</div>
<div id='res'>
    <?php 
if(isset($_GET['ip'])){
echo exec("ping ".$_GET['ip']); 
}
    ?>
</div>
</body>
</html>


