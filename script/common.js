$(function(){
    //navigation 
    let winScroll;
    let lastScrollTop = 0;
    const delta = 5;
    const navHi = $("nav").outerHeight();
   
    $(window).scroll(function(){
        winScroll = true;
    }); 

    setInterval(function() {
        if (winScroll) {
            hasScrolled();
            winScroll = false;
        }

    }, 200);

    function hasScrolled() {
        const st = $(this).scrollTop();

        if(Math.abs(lastScrollTop - st) <= delta)
            return;

        if (st > lastScrollTop && st > navHi){
            // 스크롤을 내렸을 때
            $("nav").slideUp("fast");
        } else {
            // 스크롤을 올렸을 때
            if(st + $(window).height() < $(document).height()) {
                $("nav").slideDown("fast");
            }
        }
        lastScrollTop = st;
    }
    
});