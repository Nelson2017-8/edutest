function alerta(html, color, funtion_if = null){
    if (funtion_if != null) {
      M.toast({
        html: html,
        displayLength: 2000,
        classes: color,
          completeCallback: funtion_if
      });
    }else{
      M.toast({
        html: html,
        displayLength: 6000,
        classes: color
      // completeCallback: function(){alert('Your toast was dismissed')}
      });
    }
}
$(document).ready(function () {
  $("a[href='#']").click(function (e) {
    e.preventDefault();
  });
  $("select").formSelect();
  $('.slider').slider();
});

// Datepicker
document.addEventListener('DOMContentLoaded', function () {
  var elems = document.querySelectorAll('.dataOpen');
  var instances = M.Datepicker.init(elems, {
      selectMonths: true,
      selectYears: 15,
      i18n:  {
        months: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthsShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Sep', 'Oct', 'Nov', 'Dic'],
        weekdays: ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo']
      }
  });
});

document.addEventListener('DOMContentLoaded', function () {
  // M.AutoInit();
});

// Dropdown
document.addEventListener('DOMContentLoaded', function () {
  var elems = document.querySelectorAll('.dropdown-trigger');
  var instances = M.Dropdown.init(elems, {
    // hover: true,
    inDuration: 460,
    alignment: 'right'
  });
});

// sidenav
document.addEventListener('DOMContentLoaded', function () {
  var elems = document.querySelectorAll('.sidenav');
  var instances = M.Sidenav.init(elems, {
    inDuration: 460
  });
});

// Scrollspy
document.addEventListener('DOMContentLoaded', function () {
  var elems = document.querySelectorAll('.scrollspy');
  var instances = M.ScrollSpy.init(elems, {
    scrollOffset: 100
  });
});


// floping
document.addEventListener('DOMContentLoaded', function () {
  var elems = document.querySelectorAll('.fixed-action-btn');
  var instances = M.FloatingActionButton.init(elems, {
    toolbarEnabled: true
  });
});
// modal
document.addEventListener('DOMContentLoaded', function () {
  var elems = document.querySelectorAll('.modal');
  var instances = M.Modal.init(elems, {
    opacity: 0.8,
  });
});
// tooltips
document.addEventListener('DOMContentLoaded', function () {
  var elems = document.querySelectorAll('.tooltipped');
  var instances = M.Tooltip.init(elems, {
    position: "top"
  });
});
