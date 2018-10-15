window.jQuery(function tnmDomReady ($) {
  var $head = {}
  $head.container = $('.tnm-head-container')
  $head.header = $('.tnm-header', $head.container)
  $head.logo = $('.site-logo img', $head.container)

  /* 메뉴 토글 */
  $('._tnm-menu-open', $head.header).on('click', function tnmMenuToggle () {
    if (!$head.container.hasClass('open')) {
      $head.container.trigger('tnm.openMenu')
    } else {
      $head.container.trigger('tnm.closeMenu')
    }
  })
  $head.container.on('tnm.openMenu', function () {
    $head.container.addClass('open')
    $('html').addClass('tnm-covered')
    $('._tnm-menu-open i', $head.header).attr('class', 'xi-close-thin')

    if ($head.logo.length) {
      var logoWithBg = $head.logo.data('logo-with-bg')
      if (logoWithBg) {
        if (!$head.logo.data('logo-origin')) {
          $head.logo.data('logo-origin', $head.logo.attr('src'))
        }
        $head.logo.attr('src', $head.logo.data('logo-with-bg'))
      }
    }
  })
  $head.container.on('tnm.closeMenu', function () {
    $head.container.removeClass('open')
    $('html').removeClass('tnm-covered')
    $('._tnm-menu-open i', $head.header).attr('class', 'xi-bars')

    if ($head.logo.length && $head.logo.data('logo-origin')) {
      $head.logo.attr('src', $head.logo.data('logo-origin'))
    }
  })

  /* xe-content 영역의 table */
  $('xe-content').find('table').each(function (idx, el) {
    $(el).wrap('<div class="table-overflow">')
  })

  // 이미지 메뉴 hover  토글
  $('.__xe_menu_image').hover(function () {
    $(this).data('basic', $(this).attr('src'))
    $(this).attr('src', $(this).data('hover'))
  }, function () {
    $(this).attr('src', $(this).data('basic'))
  })
})

window.XE.$$on('content.render', function (eventName, dom) {
  window.jQuery(dom).find('>table').each(function (idx, el) {
    window.jQuery(el).wrap('<div class="table-overflow">')
  })
})
