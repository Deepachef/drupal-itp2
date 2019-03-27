(function ($, Drupal) {
   Drupal.behaviors.backend = {
      attach: function (context, settings) {
    jQuery('#edit-taxonomy-level1').change(function() {
        var test = $(this).val();
        console.log(test)
    });
      }
   };

}(jQuery, Drupal));