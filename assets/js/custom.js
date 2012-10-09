$(function() {
  $('#raw-input-submit').click(function(submit) {
    submit.preventDefault();
    $.ajax({
      url: 'http://closure-compiler.appspot.com/compile',
      type: 'post',
      data: $('form#raw-input').serialize(),
      success: function(data) {
        $('#optimized-code').html(data);
        $('a#download').show();
      }
    })
  });
  $('a#download').click(function(e) {
    $('#optimized-code-form').submit();
  });
});
