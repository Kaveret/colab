/**
 * @file
 * Toggle the secondperson label between "To" and "From".
 */
(function ($) {
  Drupal.behaviors.kaveretAccountingTransfer = {
    attach: function (context) {
      $('#mcapi-forms-form input[name="direction"]', context).change(function(event) {
        // Set the label of the "secondperson" according to direction.
        var direction = $(event.currentTarget).val() == 'incoming' ? Drupal.t('From') : Drupal.t('To');
        var required = '<span class="form-required" title="' + Drupal.t('This field is required.') + '">*</span>';
        $('#mcapi-forms-form label[for="edit-secondperson"]', context).html(direction + ' ' + required);
      });
    }
  };
})(jQuery);
