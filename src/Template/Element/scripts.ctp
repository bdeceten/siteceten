

<?= $this->Html->script('jquery-3.1.0.min.js'); ?>
<?= $this->Html->script('jquery-ui.min.js'); ?>
<?= $this->Html->script('bootstrap.min.js'); ?>

<script>
  /* ----- Navbar Affixed ----- */
  $(function() {
    $('#nav-wrapper').height($("#nav").height());

    $('#nav').affix({
        offset: { top: $('#nav').offset().top }
    });
});
</script>
<script>
  /* ----- Smooth Scroll ----- */
  $(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000, 'easeInOutCubic');
          return false;
        }
      }
    });
  });
</script>
