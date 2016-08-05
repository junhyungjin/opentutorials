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
      <img src="./img/pathfinder_logo.png" alt="pathfinderlogo">
        <h1><a href="http://localhost:8080/index.php">공릉동교회 패스파인더</a></h1>
  </header>
    <nav>
        <ol>
					<?php
					echo file_get_contents('menu.txt');
					?>
        </ol>
    </nav>
  <div id="btn">
		<input type="button" value="white" onclick="document.getElementById('target').className='white'"/>
		<input type="button" value="black" onclick="document.getElementById('target').className='black'"/>
    <a href="http://localhost:8080/write.php">쓰기</a>
	</div>
  <article>
    <form action="process.php" method="post">
    <p>제목: <input type="text" name="title"></P>
      <p>작성자: <input type="text" name="author"></p>
      <p>내용: <textarea name="description"></textarea>
        <input type="submit" name="name">
  </article>
</body>
</html>
