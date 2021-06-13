const $menuButton = document.getElementById('menuButton');
const $nav = document.getElementById('nav');
const $mask = document.getElementById('mask');
const $box1 = document.getElementById('box1');
const $box2 = document.getElementById('box2');
const $box3 = document.getElementById('box3');
const $news = document.getElementById('news');
const $profile = document.getElementById('profile');

// スマホ用のメニューを開く
$menuButton.addEventListener('click', function(e) {
    e.preventDefault();
    $menuButton.classList.toggle('open');
    $nav.classList.toggle('open');
    $mask.classList.toggle('open');
});

// スクロールしたら要素が表示される
document.addEventListener('scroll', function() {
    const $box1Dist = $box1.getBoundingClientRect().top + $box1.clientHeight * 0.5;
    if(window.innerHeight > $box1Dist) {
        $box1.classList.add('show');
    }
});
document.addEventListener('scroll', function() {
    const $box2Dist = $box2.getBoundingClientRect().top + $box2.clientHeight * 0.5;
    if(window.innerHeight > $box2Dist) {
        $box2.classList.add('show');
    }
});
document.addEventListener('scroll', function() {
    const $box3Dist = $box3.getBoundingClientRect().top + $box3.clientHeight * 0.5;
    if(window.innerHeight > $box3Dist) {
        $box3.classList.add('show');
    }
});
document.addEventListener('scroll', function() {
    const $newsDist = $news.getBoundingClientRect().top + $news.clientHeight * 0.5;
    if(window.innerHeight > $newsDist) {
        $news.classList.add('show');
    }
});
document.addEventListener('scroll', function() {
    const $profileDist = $profile.getBoundingClientRect().top + $profile.clientHeight * 0.5;
    if(window.innerHeight > $profileDist) {
        $profile.classList.add('show');
    }
});

