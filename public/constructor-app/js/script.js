$('.constructor__end').fadeOut();
$('.constructor__user_form').fadeOut();

// init
$('.constructor__popup-model').magnificPopup({
    type: 'inline'
});
$( function() {
    $('#constructorTabs').tabs();
} );
// отслеживание выбора дизайна
$(document).ready(function() {
    $(".constructor__design").click( function() {
        $(".constructor__design").removeClass('click');
        $(this).addClass('click');
        $('.constructor__user_form-dis').text('Дизайн '+$('.constructor__design.click .constructor__design-name').text());
    });
});
// 2 tabs
$('#materialBaseSlider').fadeOut('slow');
$('#materialBaseSelect').click(function() {
    $('#materialBaseSlider').fadeIn('slow');
});
$('#materialBaseBtnBack').click(function() {
    $('#materialBaseSlider').fadeOut('slow');
});

$('#headrestFrontSlider').fadeOut('slow');
$('#headrestFrontSelect').click(function() {
    $('#headrestFrontSlider').fadeIn('slow');
});
$('#headrestFrontBtnBack').click(function() {
    $('#headrestFrontSlider').fadeOut('slow');
});

$('#headrestBackSlider').fadeOut('slow');
$('#headrestBackSelect').click(function() {
    $('#headrestBackSlider').fadeIn('slow');
});
$('#headrestBackBtnBack').click(function() {
    $('#headrestBackSlider').fadeOut('slow');
});

$('#headrestSidesSlider').fadeOut('slow');
$('#headrestSidesSelect').click(function() {
    $('#headrestSidesSlider').fadeIn('slow');
});
$('#headrestSidesBtnBack').click(function() {
    $('#headrestSidesSlider').fadeOut('slow');
});

$('#backTopSlider').fadeOut('slow');
$('#backTopSelect').click(function() {
    $('#backTopSlider').fadeIn('slow');
});
$('#backTopBtnBack').click(function() {
    $('#backTopSlider').fadeOut('slow');
});

$('#backBaseSlider').fadeOut('slow');
$('#backBaseSelect').click(function() {
    $('#backBaseSlider').fadeIn('slow');
});
$('#backBaseBtnBack').click(function() {
    $('#backBaseSlider').fadeOut('slow');
});

$('#sidewallSlider').fadeOut('slow');
$('#sidewallSelect').click(function() {
    $('#sidewallSlider').fadeIn('slow');
});
$('#sidewallBtnBack').click(function() {
    $('#sidewallSlider').fadeOut('slow');
});

$('#seatBaseSlider').fadeOut('slow');
$('#seatBaseSelect').click(function() {
    $('#seatBaseSlider').fadeIn('slow');
});
$('#seatBaseBtnBack').click(function() {
    $('#seatBaseSlider').fadeOut('slow');
});

/* 3 */
$('#stitchSlider').fadeOut('slow');
$('#stitchSelect').click(function() {
    $('#stitchSlider').fadeIn('slow');
});
$('#stitchBtnBack').click(function() {
    $('#stitchSlider').fadeOut('slow');
});

/* 4 */
$('#patternSlider').fadeOut('slow');
$('#patternSelect').click(function() {
    $('#patternSlider').fadeIn('slow');
});
$('#patternBtnBack').click(function() {
    $('#patternSlider').fadeOut('slow');
});
$('#patternColorSlider').fadeOut('slow');
$('#patternColorSelect').click(function() {
    $('#patternColorSlider').fadeIn('slow');
});
$('#patternColorBtnBack').click(function() {
    $('#patternColorSlider').fadeOut('slow');
});

// отслеживание выбора материала
$(document).ready(function() {
	//$(".constructor__selection-item").click( function() {
        $("#materialBaseSlider .constructor__selection-item").click( function() {
            let val1 = $(this).data('value');
            $("#materialBase").val(val1);
            change_Base(val1);
            $('#materialBaseSelect .constructor__selection-choice').attr('style', $(this).find(".constructor__selection-img").attr('style'));
            $('#materialBaseSelect .constructor__selection-choice span').html($(this).data('name')+"<br>"+$(this).data('color'));
            $("#materialBaseSlider .constructor__selection-item").removeClass('select');
            $(this).addClass('select');
        });

        $("#headrestFrontSlider .constructor__selection-item").click( function() {
            let val2 = $(this).data('value');
            $("#headrestFront").val(val2);
            change_Podgolovnik_Front(val2);
            $('#headrestFrontSelect .constructor__selection-choice').attr('style', $(this).find(".constructor__selection-img").attr('style'));
            $('#headrestFrontSelect .constructor__selection-choice span').html($(this).data('name')+"<br>"+$(this).data('color'));
            $("#headrestFrontSlider .constructor__selection-item").removeClass('select');
            $(this).addClass('select');
        }); 

        $("#headrestBackSlider .constructor__selection-item").click( function() {
            let val3 = $(this).data('value');
            $("#headrestBack").val(val3);
            change_Podgolovik_Back(val3);
            $('#headrestBackSelect .constructor__selection-choice').attr('style', $(this).find(".constructor__selection-img").attr('style'));
            $('#headrestBackSelect .constructor__selection-choice span').html($(this).data('name')+"<br>"+$(this).data('color'));
            $("#headrestBackSlider .constructor__selection-item").removeClass('select');
            $(this).addClass('select');
        }); 

        $("#headrestSidesSlider .constructor__selection-item").click( function() {
            let val4 = $(this).data('value');
            $("#headrestSides").val(val4);
            change_Podgolovnik_Sides(val4);
            $('#headrestSidesSelect .constructor__selection-choice').attr('style', $(this).find(".constructor__selection-img").attr('style'));
            $('#headrestSidesSelect .constructor__selection-choice span').html($(this).data('name')+"<br>"+$(this).data('color'));
            $("#headrestSidesSlider .constructor__selection-item").removeClass('select');
            $(this).addClass('select');
        }); 

        $("#backTopSlider .constructor__selection-item").click( function() {
            let val5 = $(this).data('value');
            $("#backTop").val(val5);
            change_spinkaTop(val5);
            $('#backTopSelect .constructor__selection-choice').attr('style', $(this).find(".constructor__selection-img").attr('style'));
            $('#backTopSelect .constructor__selection-choice span').html($(this).data('name')+"<br>"+$(this).data('color'));
            $("#backTopSlider .constructor__selection-item").removeClass('select');
            $(this).addClass('select');
        });

        $("#backBaseSlider .constructor__selection-item").click( function() {
            let val6 = $(this).data('value');
            $("#backBase").val(val6);
            change_spinka(val6);
            $('#backBaseSelect .constructor__selection-choice').attr('style', $(this).find(".constructor__selection-img").attr('style'));
            $('#backBaseSelect .constructor__selection-choice span').html($(this).data('name')+"<br>"+$(this).data('color'));
            $("#backBaseSlider .constructor__selection-item").removeClass('select');
            $(this).addClass('select');
        });

        $("#sidewallSlider .constructor__selection-item").click( function() {
            let val7 = $(this).data('value');
            $("#SideWall").val(val7);
            change_SideWall1(val7);
            $('#sidewallSelect .constructor__selection-choice').attr('style', $(this).find(".constructor__selection-img").attr('style'));
            $('#sidewallSelect .constructor__selection-choice span').html($(this).data('name')+"<br>"+$(this).data('color'));
            $("#sidewallSlider .constructor__selection-item").removeClass('select');
            $(this).addClass('select');
        });

        $("#seatBaseSlider .constructor__selection-item").click( function() {
            let val8 = $(this).data('value');
            $("#seatBase").val(val8);
            change_sidenie(val8);
            $('#seatBaseSelect .constructor__selection-choice').attr('style', $(this).find(".constructor__selection-img").attr('style'));
            $('#seatBaseSelect .constructor__selection-choice span').html($(this).data('name')+"<br>"+$(this).data('color'));
            $("#seatBaseSlider .constructor__selection-item").removeClass('select');
            $(this).addClass('select');
        });

        price();
   // });
}); 
//отслеживание выбора строчки
$(document).ready(function() {
    $("#stitchSlider .constructor__selection-item").click( function() {
        let stitch_val = $(this).data('value');
        if (stitch_val == "StitchOn") { 
            $("#StitchOn").prop('checked', false); 
            change_StitchOn("StitchOn"); 
            $('#stitchSelect .constructor__selection-choice').attr('style', $(this).find(".constructor__selection-img").attr('style'));
            $('#stitchSelect .constructor__selection-choice span').html($(this).data('name')+"<br>"+$(this).data('color'));
            return;
        }
            else { $("#StitchOn").prop('checked', true); change_StitchOn("StitchOn"); };
        $("#stitchBase").val(stitch_val);
        change_Stitch(stitch_val);
        $('#stitchSelect .constructor__selection-choice').attr('style', $(this).find(".constructor__selection-img").attr('style'));
        $('#stitchSelect .constructor__selection-choice span').html($(this).data('name')+"<br>"+$(this).data('color'));
        price();
    });
    /*$(".constructor__stitch-item").click( function() {
        $(".constructor__stitch-item").removeClass('click');
        $(this).addClass('click');
        let stitch_val = $(this).data('value');
        if (stitch_val == "StitchOn") { $("#StitchOn").prop('checked', false); change_StitchOn("StitchOn"); return;}
            else { $("#StitchOn").prop('checked', true); change_StitchOn("StitchOn"); };
        $("#stitchBase").val(stitch_val);
        change_Stitch(stitch_val);
        price();
    });*/
});
//отслеживание выбора стёжки
$(document).ready(function() {
    $("#pattern3d").change( function() {
        if($('#pattern3d').prop('checked')){
            let pattern_val = $("#PatternBase").val();
            $("#Pattern3dBase").val(pattern_val);
            change_PatternOn_3d(pattern_val);
        } else { 
            //let pattern_val = $(".constructor__pattern-item.click").data('value');
            //$("#PatternBase").val(pattern_val);
            //change_Pattern(pattern_val);
            let pattern_val = $("#PatternBase").val();
            change_PatternOn(false);
            change_PatternOn(true);
            change_Pattern(pattern_val);
        }
        //if ($('#patternHeadrest').prop('checked')) change_PatternOnpodgolovnik("PatternOnpodgolovnik");
        price();
    });
    $("#patternHeadrest").change( function() {
        if($('#patternHeadrest').prop('checked')){
            $('#PatternOnHeadrest').prop('checked', true);
            change_PatternOnpodgolovnik("PatternOnpodgolovnik");
        } else { 
            $('#PatternOnHeadrest').prop('checked', false);
            change_PatternOnpodgolovnik("PatternOnpodgolovnik");
            change_PatternOn("PatternOn");
            change_Pattern( $("#PatternBase").val());
            if($('#pattern3d').prop('checked')){
                let pattern_val = $("#PatternBase").val();
                $("#Pattern3dBase").val(pattern_val);
                change_PatternOn_3d(pattern_val);
            };
        };
        price();
    });
    $("#patternSlider .constructor__selection-item").click( function() {
        /*$(".constructor__pattern-item").removeClass('click');
        $(this).addClass('click');*/
        let pattern_val = $(this).data('value');
        if (pattern_val == "PatternOn") { 
            $("#PatternOn").prop('checked', false); 
            change_PatternOn("PatternOn"); 
            //объёмная
            $('#pattern3d').prop('checked',false); 
            $('#pattern3d').prop('disabled', true);
            //подголовник
            $('#patternHeadrest').prop('checked',false); 
            $('#patternHeadrest').prop('disabled', true);
            $('#patternSelect .constructor__selection-choice').attr('style', $(this).find(".constructor__selection-img").attr('style'));
            $('#patternSelect .constructor__selection-choice span').html($(this).data('name')+"<br>"+$(this).data('color'));
            return;
        }
        else { 
            $("#PatternOn").prop('checked', true); 
            change_PatternOn("PatternOn");
            //объёмная
            $('#pattern3d').prop('disabled', false);
            //подголовник
            $('#patternHeadrest').prop('disabled', false);
         };
        $("#PatternBase").val(pattern_val);
        change_Pattern(pattern_val);
        if ($('#pattern3d').prop('checked')) change_PatternOn_3d(pattern_val);
        if ($('#patternHeadrest').prop('checked')) change_PatternOnpodgolovnik("PatternOnpodgolovnik");
        $('#patternSelect .constructor__selection-choice').attr('style', $(this).find(".constructor__selection-img").attr('style'));
        $('#patternSelect .constructor__selection-choice span').html($(this).data('name')+"<br>"+$(this).data('color'));
        price();
    });
    $("#patternColorSlider .constructor__selection-item").click( function() {
        /*$(".constructor__pattern-color-item").removeClass('click');
        $(this).addClass('click');*/
        let patterncolor_val = $(this).data('value');
        $("#PatternColorBase").val(patterncolor_val);
        change_PatternColor(patterncolor_val);
        $('#patternColorSelect .constructor__selection-choice').attr('style', $(this).find(".constructor__selection-img").attr('style'));
        $('#patternColorSelect .constructor__selection-choice span').html($(this).data('name')+"<br>"+$(this).data('color'));
        console.log($(this).find(".constructor__selection-img").attr('style'));
        price();
    });  
});

//Бренды автомобилей
let model = [];
let dataRequest = [];
let dataConstructor;
$.ajax({
    type: 'GET',
    url: "https://modelscan.ru/api/brands",
    dataType: "json",
    success: function(data) {
        displayInformation(data);
    }
});

function getDataInfo(name){
    $.ajax({
        type: 'GET',
        url: "https://modelscan.ru/api/"+name+"",
        dataType: "json",
        success: function(data) {
            displayInformation(data);
        }
    });
}
function displayInformation(data){
    model = data;
    $("div.marka_popup-item").remove();
    $.each(data, function( key, value ) {
        let img = value.photo !== undefined ? value.photo : '/img/stub.webp';
        $('.marka_popup').append('<div class="marka_popup-item"><button class="'+key+'"><img src="https://modelscan.ru'+img+'" alt=""><p>'+value.name+'</p></button></div>');
    })
}
function modelTypeRequest( active){
    let text = $(active).find('p').text();
    dataRequest.push(model.find( item =>  item.name === text));
    console.log(dataRequest);
    console.log(dataRequest.length);
    switch (dataRequest.length) {
        case 1:{
            setTimeout( function() {getDataInfo('models/'+dataRequest[0].name);}, 500);
            setTimeout( function() {$('.marka_popup').addClass('marka_popup1');}, 500);
            setTimeout( function() {$('.mfp-wrap').addClass('loading');}, 500);
            setTimeout( function() {$('.mfp-wrap').removeClass('loading')}, 2000);
            break;
        }
        case 2:{
            setTimeout( function() {getDataInfo('generations/'+dataRequest[0].name+'/'+dataRequest[1]._id);}, 500);
            break;
        }
        case 3:{
            //setTimeout( function() {getDataInfo('gen_quest/'+dataRequest[0].name+'/'+dataRequest[1]._id+'/'+dataRequest[2]._id);}, 500);
            //break;
        }
        case 4:{
            //setTimeout( function() {getDataInfo('answers/'+dataRequest[0].name+'/'+dataRequest[1]._id+'/'+dataRequest[2]._id+'/'+dataRequest[3]._id);}, 500);
            //break;
        }
        case 5:{
            /*$('.marka_popup').removeClass('marka_popup1');
            $('.mfp-content').hide();
            let information = dataRequest[0].name+' '+dataRequest[1].name+' '+dataRequest[2].name+' '+dataRequest[3].name+' '+dataRequest[4].name;
            $("[data-name='informationAvto']").text(information.substr(0, 40)+'...');
            getDataInfo('brands');
            model.splice(0, model.length);
            dataConstructor = JSON.parse(JSON.stringify(dataRequest))
            console.log(dataRequest);
            dataRequest.splice(0, dataRequest.length);
            $.magnificPopup.close();
            price();
            break;*/
        }
    }
}

let arrayQuest = [];
let arrayQuestText = [];
let arrayAnswer = [];
let numbQuest = 0;
let numbAnswer = 0;
let arrayReturnAnswer = [];

$('.marka_popup').on('click', '.answ', function () {
    let text = $(this).find('p').text();
    arrayReturnAnswer.push(text);
});
$('.marka_popup').on('click', '.marka_popup-item', function () {
    if (dataRequest.length < 1) {
        arrayQuest = [];
        arrayAnswer = [];
        arrayQuestID = [];
        numbQuest = 0;
        numbAnswer = 0;
        arrayReturnAnswer = [];
    };
   if(dataRequest.length < 2) modelTypeRequest(this)
    else{
        if ( numbQuest == 0 ) { 
            let text = $(this).find('p').text();
            dataRequest.push(model.find( item =>  item.name === text));
            console.log(dataRequest);
            getQuests();
            return;
         };
          
        $("div.marka_popup-item").remove();
        /*if (arrayReturnAnswer.length == numbQuest) {*/
        if (arrayQuest.length <= numbAnswer) {
            console.log('arrayQuest',arrayQuest);
            console.log('arrayAnswer',arrayAnswer);
            $('.marka_popup').removeClass('marka_popup1');
            $('.mfp-content').hide();
            let information = dataRequest[0].name+' '+dataRequest[1].name+' '+dataRequest[2].name;
            $("[data-name='informationAvto']").text(information.substr(0, 40)+'...');
            //input auto
            /*$("#auto1").val(dataRequest[0].name);
            $("#auto2").val(dataRequest[1].name);
            $("#auto3").val(dataRequest[2].name);
            $("#auto4").val(arrayQuest);
            $("#auto5").val(arrayAnswer);*/
            $('.constructor__user_form-auto').text(information);

            getDataInfo('brands');
            model.splice(0, model.length);
            dataConstructor = JSON.parse(JSON.stringify(dataRequest))
            //console.log(dataRequest);
            dataRequest.splice(0, dataRequest.length);
            $.magnificPopup.close();
            price();
            return;
        };

        getAnsw(arrayQuestID[numbQuest]);
        numbQuest++; 
        /*if (numbQuest == numbAnswer) { 
            //$('.marka_popup').append(arrayQuest[numbQuest]);  
            numbQuest++; 
        }   else { getAnsw(this); };*/
    };
});




function getQuests() {
    let name = 'gen_quest/'+dataRequest[0].name+'/'+dataRequest[1]._id+'/'+dataRequest[2]._id;
        $.ajax({
            type: 'GET',
            url: "https://modelscan.ru/api/"+name+"",
            dataType: "json",
            success: function(data) {
                displayQuest(data);
                model = data;
                console.log('getQuests',data);
            }
        });
    };
function getAnsw(e) {
                //let ans = model.find( item =>  item.name === $(e).find('p').text());
                //let ans = e;
                name = 'answers/'+dataRequest[0].name+'/'+dataRequest[1]._id+'/'+dataRequest[2]._id+'/'+e;
                $.ajax({
                    type: 'GET',
                    url: "https://modelscan.ru/api/"+name+"",
                    dataType: "json",
                    success: function(data) {
                        displayAnsw(data);
                        console.log('getAnsw',data);
                    }
                });
};
function displayQuest(data){
    $.each(data, function( key, value ) {
        let img = value.photo !== undefined ? value.photo : '/img/stub.webp';
        let push = '<div class="marka_popup-item"><button class="'+key+'"><img src="https://modelscan.ru'+img+'" alt=""><p>'+value.name+'</p></button></div>';
        arrayQuestText.push(value.name);
        arrayQuestID.push(value._id);
        arrayQuest.push(push);
    })
    $("div.marka_popup-item").remove();
    //$('.marka_popup').append(arrayQuest[numbQuest]); 
    $('.mfp-content .open_popup h2').html(arrayQuestText[numbQuest]);
    console.log('arrayQuest[numbQuest]',arrayQuest[numbQuest]);
    //$('.marka_popup .marka_popup-item').click();
    console.log('arrayQuestID',arrayQuestID[numbQuest]);
    getAnsw(arrayQuestID[numbQuest]);
    numbQuest++;
}
function displayAnsw(data){
    let answer = '';
    $.each(data, function( key, value ) {
        let img = value.photo !== undefined ? value.photo : '/img/stub.webp';
        answer = answer + '<div class="marka_popup-item answ"><button class="'+key+'"><img src="https://modelscan.ru'+img+'" alt=""><p>'+value.name+'</p></button></div>';
    });
    arrayAnswer.push(answer);

    $("div.marka_popup-item").remove();
    $('.marka_popup').append(arrayAnswer[numbAnswer]);
    numbAnswer++;

}

$('.open_popup').on('click', '.mfp-close',  function () {
    $('.marka_popup').removeClass('marka_popup1');
    $('.marka_popup').removeClass('marka_popup4');  
    $('.mfp-content').hide();
    getDataInfo('brands');
    model.splice(0, model.length);
    dataRequest.splice(0, dataRequest.length);
});

//price 
function price() {
    let priceValue = 5000; //расчёт 
    console.log(priceValue);
    priceValue = priceValue.toString().replace(/(\d)(?=(\d{3})+(\D|$))/g, '$1 ') + " ";
    $('.constructor__price').html(priceValue+"<small>руб.</small>");
};

// laravel
$('#complect').on( "click", function() {
    $('#input_complect').val($('#complect').val());
});


/* help btn */
$(document).ready(function() {
    $('#ui-id-1').click(function() {
        $('.help .tooltiptext').html('Вкладка 1');
    });
    $('#ui-id-2').click(function() {
        $('.help .tooltiptext').html('Вкладка 2');
    });
    $('#ui-id-3').click(function() {
        $('.help .tooltiptext').html('Вкладка 3');
    });
    $('#ui-id-4').click(function() {
        $('.help .tooltiptext').html('Вкладка 4');
    });
});

/* animate */
var element, circle, d, x, y;
$(".constructor__submit-btn").click(function(e){
  
	element = $(this);
  
	if(element.find(".circle").length == 0)
		element.prepend("<span class='circle'></span>");
		
	circle = element.find(".circle");
	circle.removeClass("animate");
	
	if(!circle.height() && !circle.width())
  {
		d = Math.max(element.outerWidth(), element.outerHeight());
		circle.css({height: d, width: d});
	}
	
	x = e.pageX - element.offset().left - circle.width()/2;
	y = e.pageY - element.offset().top - circle.height()/2;
	
	circle.css({top: y+'px', left: x+'px'}).addClass("animate");
});
/*$(".constructor__select-box").click(function(e){
  
	element = $(this);
  
	if(element.find(".circle").length == 0)
		element.prepend("<span class='circle'></span>");
		
	circle = element.find(".circle");
	circle.removeClass("animate");
	
	if(!circle.height() && !circle.width())
  {
		d = Math.max(element.outerWidth(), element.outerHeight());
		circle.css({height: d, width: d});
	}
	
	x = e.pageX - element.offset().left - circle.width()/2;
	y = e.pageY - element.offset().top - circle.height()/2;
	
	circle.css({top: y+'px', left: x+'px'}).addClass("animate");
});*/

$("body").on('click', '.marka_popup-item',function(e){
	element = $(this);
  
	if(element.find(".circle").length == 0)
		element.prepend("<span class='circle'></span>");
		
	circle = element.find(".circle");
	circle.removeClass("animate");
	
	if(!circle.height() && !circle.width())
  {
		d = Math.max(element.outerWidth(), element.outerHeight());
		circle.css({height: d, width: d});
	}
	
	x = e.pageX - element.offset().left - circle.width()/2;
	y = e.pageY - element.offset().top - circle.height()/2;
	
	circle.css({top: y+'px', left: x+'px'}).addClass("animate");
});

$(".constructor__end-btn").on('click', function(e){
	element = $(this);
  
	if(element.find(".circle").length == 0)
		element.prepend("<span class='circle'></span>");
		
	circle = element.find(".circle");
	circle.removeClass("animate");
	
	if(!circle.height() && !circle.width())
  {
		d = Math.max(element.outerWidth(), element.outerHeight());
		circle.css({height: d, width: d});
	}
	
	x = e.pageX - element.offset().left - circle.width()/2;
	y = e.pageY - element.offset().top - circle.height()/2;
	
	circle.css({top: y+'px', left: x+'px'}).addClass("animate");
});
$(".constructor__selection-back").on('click', function(e){
	element = $(this);
  
	if(element.find(".circle").length == 0)
		element.prepend("<span class='circle'></span>");
		
	circle = element.find(".circle");
	circle.removeClass("animate");
	
	if(!circle.height() && !circle.width())
  {
		d = Math.max(element.outerWidth(), element.outerHeight());
		circle.css({height: d, width: d});
	}
	
	x = e.pageX - element.offset().left - circle.width()/2;
	y = e.pageY - element.offset().top - circle.height()/2;
	
	circle.css({top: y+'px', left: x+'px'}).addClass("animate");
});

/* end window */
$('.constructor__end-btn').click(function(){
    setTimeout( function() {$('.constructor__end').fadeOut('slow');}, 500);
});

/* submit btn */
let complectChoice = false;
$('body').click(function(){
    let choice = true;
    $('.constructor__selection-choice .tooltiptext').each(function() {
        if ($(this).text() == 'Нет') choice = false;
    });
    if ($('.constructor__popup-model').text() == "Ваш автомобиль") choice = false;
    if (!complectChoice) choice = false;
    if (choice) $('.constructor__submit-btn').removeClass('grey')
        else $('.constructor__submit-btn').addClass('grey');
    console.log(choice);
});
$('#complect').change(function() {
    complectChoice = true;
});

/* slider back btn */
/*$('.constructor__selection-back').click(function() {
    $(this).parent().addClass("closing");
    setTimeout( function() { $(this).parent().removeClass("closing"); }, 1000);
});*/