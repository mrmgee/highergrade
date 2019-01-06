<?php snippet('header') ?>

<link rel="stylesheet" href="assets/css/default-skin/default-skin.css">
    <!-- Page Wrapper -->
      <div id="page-wrapper">

<?php snippet('nav') ?>

        <!-- Main -->
        <article id="main">

            <header>
              <?= $page->intro()->kirbytext() ?>
            </header>




        <!-- About -->
          <section class="wrapper style1 special">
            <div class="inner">
              <header class="major">
              <?= $page->abouttxt()->kirbytext() ?>
              </header>
              <ul class="icons major">
                <li><span class="icon fa-medkit major style1"><span class="label">Medkit</span></span></li>
                <li><span class="icon fa-heart-o major style2"><span class="label">Heart</span></span></li>
                <li><span class="icon fa-list-alt major style3"><span class="label">List</span></span></li>
              </ul>
            </div>
          </section>

        <!-- Spotlight 1 -->
          <section id="one" class="spotlight">
            <div class="image"><img src="<?= $page->spot1image()->toFile()->url() ?>" alt="" /></div>
            <div id="deals" class="content">
              <?= $page->spot1txt()->kirbytext() ?>
              <a href="<?php echo $page->button1link() ?>" class="button special"><?= $page->button1txt()->kirbytext() ?></a>
            </div>
          </section>
<?php
if (strlen($page->button2txt())==0) {
  } else {
?>
        <!-- Spotlight 2 -->
          <section class="spotlight">
            <div class="image"><img src="<?= $page->spot2image()->toFile()->url() ?>" alt="" /></div>
            <div class="content">
              <?= $page->spot2txt()->kirbytext() ?>
              <a href="<?php echo $page->button2link() ?>" class="button special"><?= $page->button2txt()->kirbytext() ?></a>
            </div>
          </section>
<?php
}
?>

              </div>
            </section>
          </article>

<?php snippet('footer') ?>