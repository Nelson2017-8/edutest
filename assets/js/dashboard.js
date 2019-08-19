$(document).ready(function() {
	$("a[href='#'").click(function(e) {
		e.preventDefault();
	});
	$(function () {
          $('[data-toggle="tooltip"]').tooltip()
        })
    $(function () {
      $('[data-toggle="popover"]').popover()
    })
});