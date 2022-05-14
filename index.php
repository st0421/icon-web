<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ICON-index</title>
    <link rel="stylesheet" href="/style.css">
  </head>
  <body>
    <h1><a href="index.html" style="color:blue">ICON</a></h1>
    <div id="grid">
      <ol>
        <li><a href="index.php?id=HTML">HTML</a></li>
        <li><a href="index.php?id=CSS">CSS</a></li>
        <li><a href="index.php?id=JavaScript">JavaScript</a></li>
      </ol>
      <div class="">
        <h2><?php echo $_GET['id'] ?></h2>

        <p>
          <a href="https://naver.com" target="_blank" title="네이버">이거</a> 언제만드냐;;
        </p>
      </div>
    </div>
  </body>
</html>
