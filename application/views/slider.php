<style>
        /* Make the image fully responsive */
        .carousel-inner img {
    width: 100%;
    height: 100%;
}
</style>

<div id="demo" class="carousel slide" data-ride="carousel">

<!-- Indicators -->
<ul class="carousel-indicators">
  <li data-target="#demo" data-slide-to="0" class="active"></li>
  <li data-target="#demo" data-slide-to="1"></li>
  <li data-target="#demo" data-slide-to="2"></li>
  <li data-target="#demo" data-slide-to="3"></li>
  <li data-target="#demo" data-slide-to="4"></li>
</ul>

<!-- The slideshow -->
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="<?= base_url('smsbook\img\1.jpg'); ?>"  style="width:100%;height:400px">
  </div>
  <div class="carousel-item">
    <img src="<?= base_url('smsbook\img\2.jpg'); ?>"  style="width:100%;height:400px">
  </div>
  <div class="carousel-item">
    <img src="<?= base_url('smsbook\img\3.jpg'); ?>"  style="width:100%;height:400px">
  </div>
  <div class="carousel-item">
    <img src="<?= base_url('smsbook\img\4.jpg'); ?>"  style="width:100%;height:400px">
  </div>
  <div class="carousel-item">
    <img src="<?= base_url('smsbook\img\5.jpg'); ?>"  style="width:100%;height:400px">
  </div>
</div>
<!-- Left and right controls -->
<a class="carousel-control-prev" href="#demo" data-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
  <span class="carousel-control-next-icon"></span>
</a>

</div>
<br><br>
<script src="<?= base_url('smsbook\js\slider1.js'); ?>"></script>
<script src="<?= base_url('smsbook\js\slider2.js'); ?>"></script>
<script src="<?= base_url('smsbook\js\slider3.js'); ?>"></script>






