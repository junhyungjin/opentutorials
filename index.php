<?php
$conn = mysqli_connect("localhost","root","111111");
mysqli_select_db($conn, 'opentutorials');
$result = mysqli_query($conn, "SELECT * FROM topic");
?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="http://localhost:8080/style.css">
</head>
<body id="target">
    <header>
        <h1><a href="http://localhost:8080/index.php">공릉동교회 패스파인더</a></h1>
  </header>
    <nav>
        <ol>
          <?php
          while($row = mysqli_fetch_assoc($result);){
            echo '<li><a href="http://localhost:8080/index.php?id='.$row['id'].'">'.$row['title'].'</a></li>'."\n";
          }
          ?>
        </ol>
    </nav>
  <div id="btn">
    <input type="button" value="white" onclick="document.getElementById('target').className='white'"/>
    <input type="button" value="black" onclick="document.getElementById('target').className='black'" />
  </div>
  <article>
  <?php
    if( empty($_GET['id']) == false ) {
      echo file_get_contents($_GET['id'].".txt");
    }else {
    	echo "<h2>공릉동교회 패스파인더 입니다.</h2>";
    }
  ?>
  </article>
</body>
</html>
