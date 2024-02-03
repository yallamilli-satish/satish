// huburger button close fix ---------------------------------------------
$('.navbar-nav li a').click(function() {
  console.log('clicked');
  $('.navbar-collapse').attr('aria-collapsed', false);
  return $('.navbar-collapse').collapse('hide');
});

$(document).on('click', function() {
  return $('.collapse').collapse('hide');
});

// Not working!
$('.navbar-toggle').click(function() {
  var expandedMenu;
  expandedMenu = $('.navbar-collapse');
  if (expandedMenu.hasClass('in')) {
    console.log(expandedMenu.hasClass('in'));
    expandedMenu.collapse('hide');
    return expandedMenu.removeClass('in');
  }
});