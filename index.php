<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="赵金添的前端收藏夹,福州软件外包,前端网址大全,前端网址导航,前端资源索引,HTML/CSS/JS资源索引">
  <meta name="description" content="赵金添的前端收藏夹，是一个专注于 WEB 前端的程序员网址导航，及时收录本人在学习和工作过程中遇到的好的 WEB 前端技术、资讯、工具和HTML/CSS/JS相关的网址。">
  <title>前端收藏夹</title>
  <link rel="stylesheet" href="//cdn.liruan.cn/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="//cdn.liruan.cn/bootswatch/3.3.7/flatly/bootstrap.min.css">
  <link rel="stylesheet" href="themes/styles/main.css">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="/" title="前端收藏夹">前端收藏夹</a>
    </div>
  </div>
</nav>
<div class="container">
  <?php
  $dataString = file_get_contents('src/data.json');
  $dataArray = json_decode($dataString);
  ?>
  <?php
  foreach ($dataArray as $data) {
  ?>
  <div class="panel panel-default">
    <div class="panel-heading">
      <?php echo $data->title; ?>
    </div>
    <div class="panel-body lh-220">
      <?php
      foreach ($data->items as $dataItem) {
      ?>
      <div class="col-sm-4 col-md-3 ui-ellipsis">
        <a href="<?php echo $dataItem->url; ?>" target="_blank" title="<?php echo $dataItem->title; ?>">
          <?php
          echo $dataItem->title;
          ?>
        </a>
      </div>
      <?php
      }
      ?>
    </div>
  </div>
  <?php
  }
  ?>
</div>
<a href="https://github.com/zhaotoday" class="github-corner"><svg width="80" height="80" viewBox="0 0 250 250" style="z-index: 10000; fill:#70B7FD; color:#fff; position: absolute; top: 0; border: 0; left: 0; transform: scale(-1, 1);"><path d="M0,0 L115,115 L130,115 L142,142 L250,250 L250,0 Z"></path><path d="M128.3,109.0 C113.8,99.7 119.0,89.6 119.0,89.6 C122.0,82.7 120.5,78.6 120.5,78.6 C119.2,72.0 123.4,76.3 123.4,76.3 C127.3,80.9 125.5,87.3 125.5,87.3 C122.9,97.6 130.6,101.9 134.4,103.2" fill="currentColor" style="transform-origin: 130px 106px;" class="octo-arm"></path><path d="M115.0,115.0 C114.9,115.1 118.7,116.5 119.8,115.4 L133.7,101.6 C136.9,99.2 139.9,98.4 142.2,98.6 C133.8,88.0 127.5,74.4 143.8,58.0 C148.5,53.4 154.0,51.2 159.7,51.0 C160.3,49.4 163.2,43.6 171.4,40.1 C171.4,40.1 176.1,42.5 178.8,56.2 C183.1,58.6 187.2,61.8 190.9,65.4 C194.5,69.0 197.7,73.2 200.1,77.6 C213.8,80.2 216.3,84.9 216.3,84.9 C212.7,93.1 206.9,96.0 205.4,96.6 C205.1,102.4 203.0,107.8 198.3,112.5 C181.9,128.9 168.3,122.5 157.7,114.1 C157.9,116.9 156.7,120.9 152.7,124.9 L141.0,136.5 C139.8,137.7 141.6,141.9 141.8,141.8 Z" fill="currentColor" class="octo-body"></path></svg></a><style>.github-corner:hover .octo-arm{animation:octocat-wave 560ms ease-in-out}@keyframes octocat-wave{0%,100%{transform:rotate(0)}20%,60%{transform:rotate(-25deg)}40%,80%{transform:rotate(10deg)}}@media (max-width:500px){.github-corner:hover .octo-arm{animation:none}.github-corner .octo-arm{animation:octocat-wave 560ms ease-in-out}}</style>
</body>
</html>