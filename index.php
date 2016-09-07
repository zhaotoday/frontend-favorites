<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="赵金添的前端收藏夹,前端网址大全,前端网址导航,前端资源索引,HTML/CSS/JS资源索引">
  <meta name="description" content="赵金添的前端收藏夹，是一个专注于 WEB 前端的程序员网址导航，及时收录本人在学习和工作过程中遇到的好的 WEB 前端技术、资讯、工具和HTML/CSS/JS相关的网址。">
  <title>赵金添的前端收藏夹_前端网址导航</title>
  <link rel="stylesheet" href="http://libs.cncdn.cn/twitter-bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://cncdn.cn/lib/bootstrap-theme/cosmo/bootstrap.min.css">
  <!--[if lt IE 9]>
  <script src="http://libs.cncdn.cn/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="http://libs.cncdn.cn/respond.js/1.4.2/respond.min.js"></script>
  <link id="respond-proxy" rel="respond-proxy" href="http://libs.cncdn.cn/cross-domain/respond-proxy.html">
  <link id="respond-redirect" rel="respond-redirect" href="cross-domain/respond.proxy.gif">
  <script src="cross-domain/respond.proxy.js"></script>
  <![endif]-->
  <style>
    body {
      padding-top: 70px;
    }

    .lh-220 {
      line-height: 220%;
    }

    .ui-ellipsis {
      white-space:nowrap;
      text-overflow:ellipsis;
      overflow: hidden;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/" title="赵金添的前端收藏夹">赵金添的前端收藏夹</a>
    </div>
    <div class="collapse navbar-collapse" id="navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="http://www.qianduan.org/" title="赵金添的前端博客" target="_blank">博客</a></li>
        <li><a href="https://github.com/zhaotoday" title="赵金添的 github" target="_blank">github</a></li>
        <li><a href="http://www.codefarm.net/" title="前端公共库 CDN" target="_blank">前端公共库 CDN</a></li>
        <li><a href="http://www.liruan.cn/" title="福州力软信息科技有限公司" target="_blank">承接软件外包</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
  <?php
  $dataString = file_get_contents('data.json');
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
<script src="http://libs.cncdn.cn/jquery/1.12.3/jquery.min.js"></script>
<script src="http://libs.cncdn.cn/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>