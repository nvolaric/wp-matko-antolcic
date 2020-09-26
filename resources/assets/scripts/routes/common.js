export default {
  init() {
    // JavaScript to be fired on all pages
      $('.third-button').on('click', function () {
        $('.animated-icon').toggleClass('open');
      });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
