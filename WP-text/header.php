<!doctype html>
<html lang="ja">
  <head>
    <meta name="google-site-verification" content="HcbmiELvOqcOknHhhAOrT1NxrukXX-AgtAodWISooeQ" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet">
   <link rel="icon" href="icon2.ico">
    <title>近未来テクノロジー研究所</title>
<?php wp_head(); ?>
  </head>

<body>
<header>
  <!-- News -->
<!-- <div class="alert alert-dark text-center mb-0 rounded-0 alert-dismissible fade show">
  News!News!News!News!News!News!News!
  <button class="close" data-dismiss="alert">
    &times;
  </button>
</div> -->


<!-- Header and Links -->
<section>
<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light py-1 pl-0">
  <a class=" navbar-brand py-0"  href="http://dream-lab.moo.jp/">

  <img class="img-responsive" src="http://dream-lab.moo.jp/wp-content/uploads/2018/09/logo_header.png" width="232"></a>
  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> -->
    <!-- <span class="navbar-toggler-icon"></span> -->
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active pl-3">
        <a class="nav-link"  href="<?php echo home_url('/'); ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="http://dream-lab.moo.jp/our-policy/">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://dream-lab.moo.jp/topics/">Topics</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"href="<?php echo home_url('/'); ?>/editors-blog">Editor's blog</a>
      </li>
    </ul>


  </div>
</nav>
<div class="breadcrumbs panlink" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
<div>
<script>

</script>
</div>

</section>
</header>
