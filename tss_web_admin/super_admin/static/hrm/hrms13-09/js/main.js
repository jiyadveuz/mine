var contentBar = $('.context-bar'),
  dropdown = $('.dropdown-content'),
  more = $('a.grouped-link'),
  selected = '';

$(window).resize(update);
more.click(function() { dropdown.slideToggle(200); });
contentBar.on('click', 'a.context-bar-link', function() { linkClick.call(this, 'More') });
dropdown.on('click', 'a.context-bar-link', function() { linkClick.call(this) });
update();

function linkClick(val) {
  contentBar.children().removeClass('active');
  this.classList.add("active");
  selected = this.innerHTML;
  more.html(val || selected)[val ? 'removeClass' : 'addClass']('active');
  dropdown.slideUp(200);
  update()
}

function update() {
  var offsetTop = contentBar.offset().top;
  dropdown.empty();
  contentBar.children().each(function(i, a) {
    if ($(a).offset().top > offsetTop) {
    console.log('yy');
      if (a.innerHTML == selected) {
        a.classList.add("active");
        more.html(a.innerHTML).addClass('active').siblings().removeClass('active');
      }
      dropdown.append($(a).clone());
    } else if (a.innerHTML == more.html()) {
      more.html('More').removeClass('active');
      return false;
    }
  });
}
