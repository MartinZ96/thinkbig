<!DOCTYPE html>
<html lang="zxx">
<head>
    @include('layouts.top')
</head>
<body>
    @include('layouts.header')
<?php
  $url = 'https://newsapi.org/v2/everything?q=tesla&from=2021-10-18&sortBy=publishedAt&apiKey=dd3250005b9e45508af8e2ddc44d72bd';
  $response = file_get_contents($url);
  $NewsData = json_decode($response);
?>


<div>
  <?php
      foreach ($NewsData->articles as $News) {
  ?>
  <div class="row">
    <div class="col-md-3" style="margin: 20px">
      <img src="<?php echo $News->urlToImage ?>" alt="News">
        </div>
          <div class="col-md-9 ">
            <h2>Title:<?php echo $News->title ?></h2>
            <h5>Decription:<?php echo $News->description ?></h5>
            <p>Content:<?php echo $News->content ?></p>
            <h6>Author:<?php echo $News->author ?></h6>
            <h6>Published:<?php echo $News->publishedAt ?></h6>
          </div>
        </div>
        <?php
      }
        ?>
</div>

    @include('layouts.footer')

    @include('layouts.bottom')
  </body>
</html>
