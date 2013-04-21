/**
 * @file
 * Auto resize text-areas.
 */
(function ($) {
  Drupal.behaviors.kaveretOfferForm = {
    attach: function (context) {
      var $this = this;
      var $textarea = $('#edit-body-und-0-value', context);

      // Set the height once on page load, and then whenever the text-area is
      // edited.
      $this.setTextareaHeight($textarea);

      $textarea.keyup(function(event) {
        $this.setTextareaHeight($textarea);
      });
    },

    setTextareaHeight: function(textarea) {
      // Calculate the text-area's amount of written rows by copying its
      // contents to an empty div, and then dividing the div's height by the
      // line height.
      var $dummyDiv = $('<div/>').attr('id','dummy-textarea')
        .text(textarea.val())
        .css('display', 'none')
        .css('width', textarea.width())
        .css('padding', textarea.css('padding'))
        .css('font', textarea.css('font'))
        .appendTo($('body'));

      var $rows = $dummyDiv.height() / parseInt($dummyDiv.css('line-height'));

      if ($rows > 2) {
        textarea.attr('rows', 12);
      }

      $dummyDiv.remove();
    }
  };
})(jQuery);
