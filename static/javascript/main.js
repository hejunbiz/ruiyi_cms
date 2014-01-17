document.createElement('header');
document.createElement('nav');
document.createElement('footer');
document.createElement('article');
document.createElement('section');
document.createElement('aside');

var state = "fresh";
var textNoInput = "Wir erwarten ja keinen Roman, aber ...";
var textNoContact = "Kein Telefon, keine Mail-Adresse, ...?";
var textNoContactLink = "Egal, abschicken!";
var isiPad = navigator.userAgent.match(/iPad/i) !== null;

function timeStamp() {
	var now = new Date();
	function addZero(value) {
		if(value<10) { value = "0"+value; }
		return value;
	}
	var time = addZero(now.getHours())+":"+addZero(now.getMinutes())+":"+addZero(now.getSeconds());
	return time;
}

$(document).ready(function(){
	$("form.form").submit(function(){
		var formID = '#' + $(this).attr("id");
		if(state == "unfilled") {
			state = "fresh";
		}

		// prüfe ob alle wichtigen felder ausgefüllt sind
		$("form .required").each(function(){
			if($(this).val().length >= 1 && $(this).val() != $(this).attr('placeholder')) {
				$(this).removeClass("empty");
				$('p#hint-' + $(this).attr("name")).remove();
			} else {
				if(!$(this).hasClass("empty")) {
					$(this).addClass("empty");
					$('<p>').addClass('hint').text(textNoInput).attr({'id':'hint-' + $(this).attr("name")}).insertAfter(this);
				}
				state = "unfilled";
			};
		});
		
		if(state == "fresh") {
			state = "filled";
		}
		
		// plausibilitätsprüfung
		if (state == "nocontact") {
			state = "ready";
		}
		if (state == "filled") {
			state = "ready";
			$("form .check").each(function(){
				var fieldName = $(this).attr("name");
				var type = "none"
				var value = $(this).val();
				if(
					value.match(/^([\w\!\#$\%\&\'\*\+\-\/\=\?\^\`{\|\}\~]+\.)*[\w\!\#$\%\&\'\*\+\-\/\=\?\^\`{\|\}\~]+@((((([a-z0-9]{1}[a-z0-9\-]{0,62}[a-z0-9]{1})|[a-z])\.)+[a-z]{2,6})|(\d{1,3}\.){3}\d{1,3}(\:\d{1,5})?)$/i) 
					|| value.match(/ ?@[a-zA-Z0-9_]/) 
					|| value.match(/https?:\/\/|www./) 
					|| value.match(/[0-9]{3,5}[ ]?[ |\-|\/|\)]?[ ]?[0-9 ]{3,}/) 
				) {
						$(this).removeClass("nocontact");
				} else {
					state = "nocontact";
					if(!$(this).hasClass("nocontact")) {
						$(this).addClass("nocontact");
						$('<p class="hint" id="hint-' + $(this).attr("name") + '">' + textNoContact + ' <a href="#submit" onclick="$(\'' + formID + '\').submit(); return false;">' + textNoContactLink + '</a></p>').insertAfter(this).hide().fadeIn(400);
					}
				}
			});
		}

		// versand
		if(state == "ready") {
			$(this).addClass("sending");
			$.post("", $(this).serialize(), function(data) {
				if(data) {
					if (formID == "#quickcontact") {
						$("#plate").slideUp(300).delay(200).slideDown(400);
						setTimeout(function () { $("#plate").html('<p class="danke">Danke – wir melden uns!</a>'); }, 300);
					}
					if (formID == "#contact") {
						$(formID).fadeOut(300);
						setTimeout(function () {
							$("h1").text("Vielen Dank");
							$(formID).html('<p>Versprechen wollen wir es nicht - innerhalb der nächsten 24 Stunden sollten Sie aber von uns gehört haben. Soll es schneller gehen? Kein Problem:<br/><br/><span class="tel">Tel +49 (511) 700 208 0</span><br/><a href="mailto:kontakt@neoskop.de">kontakt@neoskop.de</a></p>').fadeIn(300);
						}, 400);
					};
				}
				if(!data) {
					
				}
			});
			$(formID + " .enabled").attr({'disabled': true});
			$(formID + " button").text("Versende ...");
		} else {
		}
		return false;
	});
	
	$(".required").each(function(){
		var $this = $(this);
		if ($this.val() === '') {
			$this.attr('value', $this.attr('placeholder')).addClass("placeholder");
		}
		$this.focus(function(){
			if ($this.val() === $this.attr("placeholder")) {
				$this.val("").removeClass("placeholder");
			}
		}).blur(function(){
			if ($this.val() === "") {
				$this.val($this.attr("placeholder")).addClass("placeholder");
			}
		});
	});
});

$(window).load(function() {
	$('.flexslider').flexslider({
		animation: 'slide',
		slideDirection: 'horizontal',
		slideshow: false,
		directionNav: true,
		controlNav: false,
		animationLoop: false,
		nextText: "",
		prevText: ""
	});
});
