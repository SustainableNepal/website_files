
(function(e){var t={topSpacing:0,bottomSpacing:0,className:"is-sticky",wrapperClassName:"sticky-wrapper",center:false,getWidthFrom:""},n=e(window),r=e(document),i=[],s=n.height(),o=function(){var t=n.scrollTop(),o=r.height(),u=o-s,a=t>u?u-t:0;for (var f=0;f<i.length;f++){var l=i[f],c=l.stickyWrapper.offset().top,h=c-l.topSpacing-a;if(t<=h){if(l.currentTop!==null){l.stickyElement.css("position","").css("top","");l.stickyElement.parent().removeClass(l.className);l.currentTop=null}} else {var p=o-l.stickyElement.outerHeight()-l.topSpacing-l.bottomSpacing-t-a;if(p<0){p=p+l.topSpacing} else {p=l.topSpacing}if(l.currentTop!=p){l.stickyElement.css("position","fixed").css("top",p);if(typeof l.getWidthFrom!=="undefined"){l.stickyElement.css("width",e(l.getWidthFrom).width())}l.stickyElement.parent().addClass(l.className);l.currentTop=p}}}},u=function(){s=n.height()},a={init:function(n){var r=e.extend(t,n);return this.each(function(){var t=e(this);var n=t.attr("id");var s=e("<div></div>").attr("id",n+"-sticky-wrapper").addClass(r.wrapperClassName);t.wrapAll(s);if(r.center){t.parent().css({width:t.outerWidth(),marginLeft:"auto",marginRight:"auto"})}if(t.css("float")=="right"){t.css({"float":"none"}).parent().css({"float":"right"})}var o=t.parent();o.css("height",t.outerHeight());i.push({topSpacing:r.topSpacing,bottomSpacing:r.bottomSpacing,stickyElement:t,currentTop:null,stickyWrapper:o,className:r.className,getWidthFrom:r.getWidthFrom})})},update:o,unstick:function(t){return this.each(function(){var t=e(this);removeIdx=-1;for(var n=0;n<i.length;n++){if(i[n].stickyElement.get(0)==t.get(0)){removeIdx=n}}if(removeIdx!=-1){i.splice(removeIdx,1);t.unwrap();t.removeAttr("style")}})}};if(window.addEventListener){window.addEventListener("scroll",o,false);window.addEventListener("resize",u,false)}else if(window.attachEvent){window.attachEvent("onscroll",o);window.attachEvent("onresize",u)}e.fn.sticky=function(t){if(a[t]){return a[t].apply(this,Array.prototype.slice.call(arguments,1))}else if(typeof t==="object"||!t){return a.init.apply(this,arguments)} else {e.error("Method "+t+" does not exist on jQuery.sticky")}};e.fn.unstick=function(t){if(a[t]){return a[t].apply(this,Array.prototype.slice.call(arguments,1))}else if(typeof t==="object"||!t){return a.unstick.apply(this,arguments)} else {e.error("Method "+t+" does not exist on jQuery.sticky")}};e(function() {setTimeout(o,0)})})(jQuery)

!function(a,b,c,d){var e=a(b);a.fn.lazyload=function(f){function g(){var b=0;i.each(function(){var c=a(this);if(!j.skip_invisible||c.is(":visible"))if(a.abovethetop(this,j)||a.leftofbegin(this,j));else if(a.belowthefold(this,j)||a.rightoffold(this,j)){if(++b>j.failure_limit)return!1}else c.trigger("appear"),b=0})}var h,i=this,j={threshold:0,failure_limit:0,event:"scroll",effect:"show",container:b,data_attribute:"original",skip_invisible:!1,appear:null,load:null,placeholder:"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"};return f&&(d!==f.failurelimit&&(f.failure_limit=f.failurelimit,delete f.failurelimit),d!==f.effectspeed&&(f.effect_speed=f.effectspeed,delete f.effectspeed),a.extend(j,f)),h=j.container===d||j.container===b?e:a(j.container),0===j.event.indexOf("scroll")&&h.bind(j.event,function(){return g()}),this.each(function(){var b=this,c=a(b);b.loaded=!1,(c.attr("src")===d||c.attr("src")===!1)&&c.is("img")&&c.attr("src",j.placeholder),c.one("appear",function(){if(!this.loaded){if(j.appear){var d=i.length;j.appear.call(b,d,j)}a("<img />").bind("load",function(){var d=c.attr("data-"+j.data_attribute);c.hide(),c.is("img")?c.attr("src",d):c.css("background-image","url('"+d+"')"),c[j.effect](j.effect_speed),b.loaded=!0;var e=a.grep(i,function(a){return!a.loaded});if(i=a(e),j.load){var f=i.length;j.load.call(b,f,j)}}).attr("src",c.attr("data-"+j.data_attribute))}}),0!==j.event.indexOf("scroll")&&c.bind(j.event,function(){b.loaded||c.trigger("appear")})}),e.bind("resize",function(){g()}),/(?:iphone|ipod|ipad).*os 5/gi.test(navigator.appVersion)&&e.bind("pageshow",function(b){b.originalEvent&&b.originalEvent.persisted&&i.each(function(){a(this).trigger("appear")})}),a(c).ready(function(){g()}),this},a.belowthefold=function(c,f){var g;return g=f.container===d||f.container===b?(b.innerHeight?b.innerHeight:e.height())+e.scrollTop():a(f.container).offset().top+a(f.container).height(),g<=a(c).offset().top-f.threshold},a.rightoffold=function(c,f){var g;return g=f.container===d||f.container===b?e.width()+e.scrollLeft():a(f.container).offset().left+a(f.container).width(),g<=a(c).offset().left-f.threshold},a.abovethetop=function(c,f){var g;return g=f.container===d||f.container===b?e.scrollTop():a(f.container).offset().top,g>=a(c).offset().top+f.threshold+a(c).height()},a.leftofbegin=function(c,f){var g;return g=f.container===d||f.container===b?e.scrollLeft():a(f.container).offset().left,g>=a(c).offset().left+f.threshold+a(c).width()},a.inviewport=function(b,c){return!(a.rightoffold(b,c)||a.leftofbegin(b,c)||a.belowthefold(b,c)||a.abovethetop(b,c))},a.extend(a.expr[":"],{"below-the-fold":function(b){return a.belowthefold(b,{threshold:0})},"above-the-top":function(b){return!a.belowthefold(b,{threshold:0})},"right-of-screen":function(b){return a.rightoffold(b,{threshold:0})},"left-of-screen":function(b){return!a.rightoffold(b,{threshold:0})},"in-viewport":function(b){return a.inviewport(b,{threshold:0})},"above-the-fold":function(b){return!a.belowthefold(b,{threshold:0})},"right-of-fold":function(b){return a.rightoffold(b,{threshold:0})},"left-of-fold":function(b){return!a.rightoffold(b,{threshold:0})}})}(jQuery,window,document);

// Sustainable-Nepal.js
// Author: Sahaj Bajracharya

var $window = $(window),
	$document = $(document),
	$navBarLink = $('.nav li a'),
	$home = $('#home') || {},
	$navBar = $('#navigation .navbar'),
	$eachSlider = $(".each-slider") || {};


//************** Navigation Menu Interaction **********//

$(".navbar").sticky({topSpacing: 0});
$('.scrollto a[href*=#]:not([href=#])').click(function() {
	if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		var target = $(this.hash);
		target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		if (target.length) {
			$('html,body').animate({
				scrollTop: target.offset().top - 10
	        }, 1000);
	        return false;
	    }
	}
});

//************** END Navigation Menu Interaction **********//

//************** Project page Slider **********//

var transfromValue = 0;
	initialValue = 0,
	leftClick = 3,
	rightClick = 0,
	$sliderButton = $('.slider-arrow');

if ($('.view-more').length) {
	$('.view-more').on('click', function(){
		$(this).hide();
		$('.multiple-slider').removeClass('height0').addClass('height100');
		$('.hide-slider').fadeIn(400);
	});

	$('.hide-slider').on('click', function(){
		$(this).fadeOut(300, function(){
			$('.view-more').fadeIn(300);
		});
		$('.multiple-slider').removeClass('height100').addClass('height0');
	});
}

if ($eachSlider.length > 0) {
	var sliderWidth = $eachSlider[0].offsetWidth || {};
}

$sliderButton.on('click', sliderInteraction);

function sliderInteraction() {
	var $this = $(this);

	if ($this.hasClass('right-arrow')) {
		if (rightClick >= 3) {
			return;
		}
		transfromValue = initialValue + sliderWidth;
		initialValue = transfromValue;
		$eachSlider.css("transform","translateX("+ -transfromValue + "px)");
		rightClick++;
		leftClick--;
	} else {
		if (leftClick >= 3) {
			return;
		}
		transfromValue = initialValue - sliderWidth;
		initialValue = transfromValue;
		$eachSlider.css("transform","translateX("+ -transfromValue +"px)");
		rightClick--;
		leftClick++;
	}
}
//************** END Project page Slider **********//

//************** Home Page Contact form **********//
var $contactSubmit = $('#contact-submit'),
	$newsletterSumit = $('#newsletter-button'),
	$nameInput = $('input[name=name]'),
	$emailInput = $('input[name=email]'),
	$messageInput = $('textarea[name=message]'),
	$organizationInput = $('input[name=organization]'),
	$newLetterInput = $('input[name=news-letter-email]');

$contactSubmit.on('click', getContactData);
$newsletterSumit.on('click', getNewsletterData);

function getContactData(event){
	event.preventDefault();
	var post_data = {
        'name' : $('input[name=name]').val(), 
        'email' : $('input[name=email]').val(),
        'organization': $('input[name=organization]').val(),
        'message' : $('textarea[name=message]').val()
    };
    if (validateContactForm()) {
        $.ajax({
	        url: 'http://www.sustainablenepal.com/api/emailcontactform?name='+ post_data.name +'&useremail='+ post_data.email +'&organization='+post_data.organization+'&message='+post_data.message,
	        type: "POST",
	        success: function(){
	           $('#thank-modal').modal('show');
			   $nameInput.val("");
			   $emailInput.val("");
			   $messageInput.val("");
			   $organizationInput.val("");
	        },
	        error: function(){
	       
	        }
	    });
    }
}

function getNewsletterData(event){
	event.preventDefault();
	var post_data = {
        'email' : $('input[name=news-letter-email]').val() 
    };

    if (validateNewsletterForm()) {
        $.ajax({
	        url: "contact.py",
	        type: "post",
	        data: post_data,
	        success: function(){
	            $newLetterInput.val('');
	        },
	        error:function(){
	            alert("Sorry, your message could not be delivered.");
	        }
	    });
    }
}

function validateEmail(email) { 
	var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	return re.test(email);
}

function validateNewsletterForm(){
	var error5 = false,
		$newLetterError = $('#error5'),
		returnValue = true;

	$newLetterInput.keypress(function() {
		$newLetterError.removeClass('display1').addClass('display0');
	});	

	if (!validateEmail($newLetterInput.val())) {
		error5 = true;
		returnValue = false;
	}

	if (error5 === true) {
		$newLetterError.removeClass('display0').addClass('display1');
	} else {
		$newLetterError.removeClass('opacity1').addClass('opacity0trans');
	}
	return returnValue;
}

function validateContactForm() {
	var error1 = false,
		error2 = false,
		error3 = false,
		error4 = false,
		$nameError = $('#error1'),
		$emailError = $('#error2'),
		$msgError = $('#error3'),
		$orgError = $('#error4'),
		returnValue = true,
		errors = false;

	$nameInput.keypress(function() {
		$nameError.removeClass('display1').addClass('display0');
	});

	$emailInput.keypress(function() {
		$emailError.removeClass('display1').addClass('display0');
	});

	$organizationInput.keypress(function() {
		$orgError.removeClass('display1').addClass('display0');
	});

	$messageInput.keypress(function() {
		$msgError.removeClass('display1').addClass('display0');
	});

	if ( $nameInput.val().length == 0 && $emailInput.val().length == 0 && $messageInput.val().length == 0 && $organizationInput.val().length === 0) {
		error1 = true;
		error2 = true;
		error3 = true;
		error4 = true;
		errors = true;
	}
	if ($nameInput.val().length == 0) {
		error1 = true;
		errors = true;
	}
	if ($emailInput.val().length == 0) {
		error2 = true;
		errors = true;
	}
	if ($messageInput.val().length == 0) {
		error3 = true;
		errors = true;
	}
	if ($organizationInput.val().length == 0) {
		error4 = true;
		errors = true;
	}
	if (!validateEmail($emailInput.val())) {
		error2 = true;	
		errors = true;
	}

	if (errors) {
		returnValue = false;
		if (error1 === true) {
			$nameError.removeClass('display0').addClass('display1');
		} else {
			$nameError.removeClass('display1').addClass('display0');
		}
		if (error2 === true) {
			$emailError.removeClass('display0').addClass('display1');
		} else {
			$emailError.removeClass('display1').addClass('display0');
		}
		if (error3 === true) {
			$msgError.removeClass('display0').addClass('display1');
		} else {
			$msgError.removeClass('display1').addClass('display0');
		}
		if (error4 === true) {
			$orgError.removeClass('display0').addClass('display1');
		} else {
			$orgError.removeClass('opacity1').addClass('opacity0trans');
		}

	}
	return returnValue;
}

//************** END Home Page Contact form **********//

//************** About Us Tab Menu **********//

var $tabMenu = $('#tab-menu li'),
	$tabContentContainer = $('#tab-content-container');

$tabMenu.on('click', toggleTabMenu);

function toggleTabMenu(event){
	event.preventDefault();
	var $clickedItem = $(this);
		$clickedContent = $clickedItem.children().data('content');
	$clickedItem.siblings('.tab-current').removeClass('tab-current');
	$clickedItem.addClass('tab-current');
	$('html, body').animate({
        scrollTop: $(".tabs").offset().top - 70
	    }, 150, function(){
			$tabContentContainer.children('.active').removeClass('active').fadeOut(200, function(){
				$('#' + $clickedContent).fadeIn(200).addClass('active');
			});
    });
}

//************** END About Us Tab Menu **********//


//************** Plugin initialization **********//

$(".rotate").textrotator({
	animation: "fade", 
	separator: ",", 
	speed: 1500 
});

$document.ready(function() {
    $('#home .home-content').show();
});

var wow = new WOW ({
    boxClass:     'wow',      
    animateClass: 'animated', 
    offset:       0,          
    mobile:       true,      
    live:         true       
  }
);

wow.init();

//************** END Plugin initialization **********//


//************** Modal **********//

$('#ack').on('click', function(event) {
	event.preventDefault();
	$('#ack-modal').modal('show');
});

$(function() {
    $("img.lazy").lazyload();
});
//************** END Modal **********//
