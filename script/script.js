$(function(){

    const offset = $('#soju').offset().top;

    $('.toCart-ml').click(function(){
        $('.toCart-set').removeClass('on');
        $(this).addClass('on');
        $('.toCart-set-text').hide();
    });
    $('.toCart-set').click(function(){
        $('.toCart-ml').removeClass('on');
        $(this).addClass('on');
        $('.toCart-set-text').show();
    });

    //전체 스크롤 
    $(window).scroll(function(){

        const ab = $(this).scrollTop();
        $('.s-top').text(ab);  

        //Contets01 애니메이션
        if( ab >=418 && ab <= 600){
            $('#circle1').removeClass();
            $('#circle1').addClass('on');

            $('#circle2').removeClass();
            $('#circle2').addClass('on');

        }else if(ab >=601 && ab <= 1100){
            $('#circle1').removeClass();
            $('#circle1').addClass('on2');
            $('#circle2').removeClass();
            $('#circle2').addClass('on2');

        }else if(ab >=901 && ab <= 1873){
            $('#circle1').removeClass();
            $('#circle1').addClass('on3');

            $('#circle2').removeClass();
            $('#circle2').addClass('on3');
        }

        const cd = $(this).scrollTop();

        //3D 모형 스크롤
        if(cd >= 0 && cd <= 600){
            $('#soju').removeClass();

        }else if(cd >= 601 && cd <= 3600){
            $('#soju').removeClass();
            $('#soju').addClass('on');

            let imgs = '';
            for(let i=1; i<=427; i++){
                imgs += "<img src= 'img/img1/ren" +i+ ".png'>"
            }
            $('article').html(imgs);
            
            let value = Math.floor( (cd-600)/7);
            $('article img').hide();
            $('article img').eq(value).show();

        }else{
            $('#soju').removeClass();
        }

         //Process
        if(cd >= 1900){
            $('.contents02-area').removeClass('on');
            $('.contents02-area').addClass('on');
        }else{
            $('.contents02-area').removeClass('on');
        }

        if(cd >= 0 && cd <= 1900){
            $('.process-step').removeClass('on');
            $('.step01').addClass('on');
        }else if(cd >= 2301 && cd <= 2600){
            $('.process-step').removeClass('on');
            $('.step02').addClass('on');
        }else if(cd >= 2601 && cd <= 3100){
            $('.process-step').removeClass('on');
            $('.step03').addClass('on');
        }else if(cd >= 3101 && cd <= 3600){
            $('.process-step').removeClass('on');
            $('.step04').addClass('on');
        }
        
        if(cd <= 300){
            $('.toBotCon').show();
            $('.toTopCon').hide();
        }else if(cd >= 301){
            $('.toBotCon').hide();
            $('.toTopCon').show();
        }
    });

     //상,하단 으로 가는 버튼
     $('.toTopCon').click(function(){
        $('html, body').animate({ scrollTop : 0}, 400);
    });
    
    $(".toBotCon").click(function(){
        $("html, body").animate({ scrollTop: $(document).height() }, 500);
    });

    //메인 수량,값 계산하기
	$('.minus').click(function() {
		const mainPrice = $('.quantity-form').find('.number');
		if (mainPrice.val() <= 0) { return; }
		mainPrice.val(parseInt(mainPrice.val() - 1));
		
		const price = $('.quantity-form').find('.price');
		const cost = $('.product-cart').find('.cost');
		cost.val((parseFloat(price.val()) * mainPrice.val()));
			
	});

	$('.add').click(function() {
		const mainPrice = $('.quantity-form').find('.number');

		if (mainPrice.val() >=20) { return; }
		mainPrice.val(parseInt(mainPrice.val()) + 1);
		
		const price = $('.quantity-form').find('.price');
		const cost = $('.product-cart').find('.cost');
		cost.val((parseFloat(price.val()) * mainPrice.val()));
	});

});