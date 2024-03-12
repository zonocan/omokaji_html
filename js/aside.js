
const side_nav_btn = document.querySelector('.side-nav-btn');
const side_nav = document.querySelector('.side-nav');
const aside_close_btn = document.querySelector('.aside-close-btn');


side_nav_btn.addEventListener('click', () => {
  side_nav.classList.toggle('active');
  aside_close_btn.classList.toggle('active');
});

aside_close_btn.addEventListener('click', () => {
  side_nav.classList.remove('active');
  aside_close_btn.classList.remove('active');
});


window.addEventListener('scroll', function(){
    //ドキュメントの高さ
    const scrollHeight = document.body.clientHeight;

    //スクロール位置
    const scrollPosition = window.pageYOffset;

    //windowの高さ
    const windowHeignt = window.innerHeight;

    const footer = document.querySelector('.footer');  

    const footerHeight = footer.offsetHeight;
    if(scrollHeight - scrollPosition - windowHeignt <= footerHeight){
      side_nav_btn.classList.add('active');
    } else {
      side_nav_btn.classList.remove('active');
    }    

});
// aside