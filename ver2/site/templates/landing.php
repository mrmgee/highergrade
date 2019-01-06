<?php snippet('header') ?>

<link rel="stylesheet" href="assets/css/default-skin/default-skin.css">
    <!-- Page Wrapper -->
      <div id="page-wrapper">

<?php snippet('nav') ?>

        <!-- Main -->
        <article id="main">

            <header>
              <?= $page->intro()->kirbytext() ?>
              

            <a href="#deals" class="more scrolly">See the Specials</a>
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
              <div class="feature">
                  <h2>Recreational Holiday Deals!</h2>
                  <ul>
                    <li>$35 Olio Cartridges</li>
                    <li>$25 Olio Live Resin</li>
                    <li>$12 Craft Cured</li>
                    <li>Gold and Silver Shelf Strains</br>
                      $20 1/8ths & $125/oz</li>
                    <li>Featured Strains</br>
                    $15 1/8ths  & $99/oz out the door</li>
                  </ul>
                  <h6>*Now until January 5th at both stores (while supplies last)</br>
Additional discounts will not apply</h6>
              </div>


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
              <div class="feature">
                  <h2>Medical Specials</h2>
                  <ul>
                    <li>$25 Olio Live Resin / $700 oz</li>
                    <li>$13 Apothecary Cured / $360 oz</li>
                    <li>$10 GDL & Olio Cured Concentrates / $280 oz</li>
                    <li>$35 Olio & Harmony Live Res Cartridges</li>
                    <li>*All Featured Strains</br>
                      $15 1/8ths  & $95 oz</li>
                  </ul>
                  <h6>*Now until January 5th at both stores (while supplies last)</br>
Additional discounts will not apply</h6>
              </div>

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