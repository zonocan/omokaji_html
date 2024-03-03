
const side_nav_btn = document.querySelector('.side-nav-btn');
const side_nav = document.querySelector('.side-nav');
const aside_close_btn = document.querySelector('.aside-close-btn');

side_nav_btn.addEventListener('click', () => {
  side_nav.classList.toggle('active');
});

aside_close_btn.addEventListener('click', () => {
  side_nav.classList.remove('active');
});


window.addEventListener('scroll', function(){
    if (document.body.scrollTop > 3000 || document.documentElement.scrollTop > 3000) {
        side_nav_btn.classList.add('active');
    } else {
        side_nav_btn.classList.remove('active');
    }
});

// aside