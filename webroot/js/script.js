$(function () {
  /*  Footer Script  */
  const $modal_bg = $('#modal_bg')
  const $modal_window = $('#modal_window')
  const $form_container = $('.form_container')
  const $content_container = $('.content_container')

  $form_container
    .find('.content_post')
    .on('click', locationOwner)

  $form_container
    .find('.email_content')
    .on('click',function(){
      window.location = '/users'
  })

  $content_container
    .find('.content_submit_form')
    .on('click',function(){
        $(this).submit()
  })

  $modal_window
    .find('.fa')
    .on('click',function(){
        $modal_window.find('.file').click()
    })

  $modal_window.find('.close').on('click', window_close)

  function window_close() {
      $modal_bg.fadeOut()
      $modal_window.fadeOut()
      $(window).off('wheel')
  }

  function locationOwner(e) {
      setScreen($modal_window)
      $modal_bg.fadeIn()
      $modal_window.fadeIn()
  }

  function setScreen(e) {
      const top = $(window).height() / 2.2 - $(e).height() / 2
      const left = $(window).width() / 2.2 - $(e).width() / 2
      e.css({ top: top, left: left })
      $(window).on('wheel', function (e) {
          e.preventDefault()
      })
  }

})