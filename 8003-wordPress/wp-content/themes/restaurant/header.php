<!DOCTYPE html>
<html lang="ja">
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CBC | レスポンシブ2</title>
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/slick.css"/>
<link rel="stylesheet" href="./css/slick-theme.css"/>
<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
<script src="./js/slick.min.js"></script>
<script>
  $(document).on('ready', function() {
  $(".regular").slick({
    dots: true,
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 4
  });
});
  </script>
</head>

<body>
  <header class="header">
    <ul class="header__sns">
      <li><a href="#"><img src="./img/sns01.png" alt=""></a></li>
      <li><a href="#"><img src="./img/sns02.png" alt=""></a></li>
    </ul>
    <ul class="header__navi">
      <li><a href="#">PHILOSOPHY</a></li>
      <li><a href="#">NEWS</a></li>
      <li><a href="#">MENU</a></li>
      <li><a href="#">ACCESS</a></li>
      <li><a href="#">CONTACT</a></li>
    </ul>
  </header>