jQuery(document).ready(function ($) {
  $('#event').countdown(date, function (e) {
    $('#days').html(e.strftime('%D Days'));
    $('#hours').html(e.strftime('%H Hours'));
    $('#minutes').html(e.strftime('%M Min.'));
    $('#seconds').html(e.strftime('%S Sec.'));
  });
});
