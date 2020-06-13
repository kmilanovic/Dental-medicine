<?php
get_header();
?>
 <header class="masthead">
 <div class="overlay"></div>
 <div class="container">
 <div class="row">
 <div class="col-lg-8 col-md-10 mx-auto">
 <div class="site-heading">
 <h2 style="text-align: center;">Tim</h2>
 </div>
 </div>
 </div>
 </div>
 </header>
 <main>
<?php
echo '<h4 style="margin:20px 0px 10px 90px">Specijalizanti parodontologije</h4>';
echo daj_clanove('specijalizant-parodontologije');
echo '<h4 style="margin:20px 0px 10px 90px">Specijalizanti dentalne protetike</h4>';
echo daj_clanove('specijalizant-dentalne-protetike');
?>
 </main>
<?php
get_footer();
?>
