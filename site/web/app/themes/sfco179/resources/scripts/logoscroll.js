document.addEventListener("DOMContentLoaded", function() {
    //hide or show the "back to top" link
    window.onscroll = function() {
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            document.getElementById("banner-nav").classList.add('shrink', 'h-16');
            document.getElementById("logosurnamepage").classList.remove('hidden');
            document.getElementById("logosurnamepage").classList.add('block');
            
        } else {
            document.getElementById("banner-nav").classList.remove('shrink', 'h-auto');
            document.getElementById("logosurnamepage").classList.remove('block');
            document.getElementById("logosurnamepage").classList.add('hidden');
        }
    };
});