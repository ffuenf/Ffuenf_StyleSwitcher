jQuery(document).ready(function() {
  jQuery('#styleswitcher').on('change', function() {
    jQuery('#styleswitcher option').each(function(){
      jQuery('body').removeClass(this.value);
    });
    jQuery('body').addClass(this.value);
  });
});