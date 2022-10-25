<?php require_once"includes/header.php"; ?>

<style>
    .ph{
        width: 200px;
        height: 100px;
    }
</style>

<section class="section first-section">
            <div class="container-fluid">
                <div class="masonry-blog clearfix">


  <?php 
  
   foreach($news as $cat){ 
    
    ?>                  


                    <div class="left-side">
                        <div class="masonry-box post-media">
                             <img src="<?=  DOMAIN_NAME;?>images/<?= $cat['img'];?>" alt="" class="img-fluid">
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        <span class="bg-aqua"><a href="" title="">Lifestyle</a></span>
                                        <h4><a href="<?= DOMAIN_NAME;?>home/details/<?= $cat['id'];?>" title="">good The golden rules you need to know for a positive life</a></h4>
                                        <small><a href="" title="">24 July, 2017</a></small>
                                        <small><a href="" title="">by Amanda</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                            </div><!-- end shadow -->
                        </div><!-- end post-media -->
                    </div><!-- end left-side -->
  <?php } ?>                  
                </div><!-- end masonry -->
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="section-title">
                            <h3 class="color-aqua"><a href="blog-category-01.html" title="">Lifestyle</a></h3>
                        </div><!-- end title -->

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <?php foreach($news as $allNewsByLimit){ ?>                              
                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="" title="">
                                            <img src="<?= DOMAIN_NAME; ?>images/<?= $allNewsByLimit['img'];?>" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta big-meta">
                                        <h4><a href="<?= DOMAIN_NAME;?>home/details/<?= $allNewsByLimit['id'];?>" title="">The golden rules you need to know for a positive life</a></h4>
                                        <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.</p>
                                        <small><a href="" title="">Lifestyle</a></small>
                                        <small><a href="" title="">24 July, 2017</a></small>
                                        <small><a href="" title="">by Amanda</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
  <?php } ?>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end col -->





                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="section-title">
                            <h3 class="color-pink"><a href="blog-category-01.html" title="">Fashion</a></h3>
                        </div><!-- end title -->
                        <div class="row">
  <?php foreach($news2 as $smallDiv){ ?>                                                
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="<?= DOMAIN_NAME;?>home/details/<?= $smallDiv['id'];?>" title="">
                                            <img src="<?= DOMAIN_NAME; ?>images/<?=$smallDiv['img']; ?>" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta">
                                        <h4><a href="<?= DOMAIN_NAME;?>home/details/<?= $smallDiv['id'];?>" title="">What is your favorite leather jacket color</a></h4>
                                        <small><a href="" title="">Fashion</a></small>
                                        <small><a href="" title="">21 July, 2017</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->


                            </div><!-- end col -->

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="" title="">
                                            <img src="<?= DOMAIN_NAME; ?>images/<?=$smallDiv['img']; ?>" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta">
                                        <h4><a href="<?= DOMAIN_NAME;?>home/details/<?= $smallDiv['id'];?>" title="">This year's fashionable long beard</a></h4>
                                        <small><a href="" title="">Fashion</a>, <a href="" title="">Man</a></small>
                                        <small><a href="" title="">08 July, 2017</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->

                   
                            </div><!-- end col -->
  <?php } ?>                            
                        </div><!-- end row -->
                    </div><!-- end col -->
                </div><!-- end row -->

                <hr class="invis1">

                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="banner-spot clearfix">
                            <div class="banner-img">
                                <img class="ph" src="<?= DOMAIN_NAME;?>front/upload/ph2.jpg" alt="" class="img-fluid">
                            </div><!-- end banner-img -->
                        </div><!-- end banner -->
                    </div><!-- end col -->
                </div><!-- end row -->

                <hr class="invis1">

                <div class="row">


                    <div class="col-lg-9">
                        <div class="blog-list clearfix">
                            <div class="section-title">
                                <h3 class="color-green"><a href="blog-category-01.html" title="">Travel</a></h3>
                            </div><!-- end title -->
<?php
foreach ($news2 as $allnews) {
    ?>
                            <div class="blog-box row">
                                <div class="col-md-4">
                                    <div class="post-media">
                                        <a href="" title="">
                                            <img src="<?= DOMAIN_NAME;?>images/<?= $allnews["img"];?>" alt="" class="img-fluid">
                                            <div class="hovereffect"></div>
                                        </a>
                                    </div><!-- end media -->
                                </div><!-- end col -->

                                <div class="blog-meta big-meta col-md-8">
                                    <h4><a href="<?= DOMAIN_NAME;?>home/details/<?= $allnews['id'];?>" title="">5 Beautiful buildings you need to visit without dying</a></h4>
                                    <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.</p>
                                    <small><a href="" title="">Travel</a></small>
                                    <small><a href="" title="">21 July, 2017</a></small>
                                    <small><a href="" title="">by Boby</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->
                            <hr class="invis">
<?php } ?> 
                            <hr class="invis">
                        </div><!-- end blog-list -->
                    </div><!-- end col -->





                    <div class="col-lg-3">
                        <div class="section-title">
                            <h3 class="color-yellow"><a href="" title="">Vlogs</a></h3>
                        </div><!-- end title -->
<?php 
foreach ($news2 as $lastnews) {
    ?>
                        <div class="blog-box">
                            <div class="post-media">
                                <a href="" title="">
                                    <img src="<?= DOMAIN_NAME;?>images/<?= $lastnews['img'];?>" alt="" class="img-fluid">
                                    <div class="hovereffect">
                                        <span class="videohover"></span>
                                    </div><!-- end hover -->
                                </a>
                            </div><!-- end media -->
                            <div class="blog-meta">
                                <h4><a href="<?= DOMAIN_NAME;?>home/details/<?= $lastnews['id'];?>" title="">We are guests of ABC Design Studio - Vlog</a></h4>
                                <small><a href="" title="">Videos</a></small>
                                <small><a href="" title="">21 July, 2017</a></small>
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->
<?php  } ?>
                        <hr class="invis">

                    </div><!-- end col -->
                </div><!-- end row -->

                <hr class="invis1">

                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="banner-spot clearfix">
                            <div class="banner-img">
                                <img class="ph" src="<?= DOMAIN_NAME;?>front/upload/ph.jpg" alt="" class="img-fluid">
                            </div><!-- end banner-img -->
                        </div><!-- end banner -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>

<?php require_once"includes/footer.php"; ?>