(function ($, Drupal) {
   Drupal.behaviors.backend = {
      attach: function (context, settings) {
    jQuery('#edit-taxonomy-level1').change(function() {
        console.log('sfsf')
    });
      }
   };

}(jQuery, Drupal));;
