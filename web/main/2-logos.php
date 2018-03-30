<!--

Row with testimonies

-->

<?php
$url = 'data.json' ; // path to your JSON file
$data = file_get_contents($url) ; // put the contents of the file into a variable
$articles = json_decode($data,true) ; // decode the JSON feed
?>

<section id="testimonies" class="row">

  <?php foreach($articles as $article) { ?>
    <div class="col-12 col-md-3 testi">
      <img src="<?php echo $article['image'];  ?>" alt="">
      <p>
        <?php echo $article['review'];  ?>
      </p>


    </div>

  <?php } ?>
</section>
