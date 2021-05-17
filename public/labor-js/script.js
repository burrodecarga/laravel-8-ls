// id / class
let btnRecruit = document.querySelector('.btns');
let btnRecruit2 = document.querySelector('.btns-2');
let btnRecruit3 = document.querySelector('.btns-3');
let tabOne = document.querySelector('.tabOne');
let tabTwo = document.querySelector('.tabTwo');
let tabThree = document.querySelector('.tabThree');
let wholeTabOne = document.querySelector('.whole-tabOne')
let wholeTabTwo = document.querySelector('.whole-tabTwo')
let videobg =document.querySelector('.bg-video')

var UID = {
	_current: 0,
	getNew: function(){
		this._current++;
		return this._current;
	}
};

HTMLElement.prototype.pseudoStyle = function(element,prop,value){
	var _this = this;
	var _sheetId = "pseudoStyles";
	var _head = document.head || document.getElementsByTagName('head')[0];
	var _sheet = document.getElementById(_sheetId) || document.createElement('style');
	_sheet.id = _sheetId;
	var className = "pseudoStyle" + UID.getNew();
	
	_this.className +=  " "+className; 
	
	_sheet.innerHTML += " ."+className+":"+element+"{"+prop+":"+value+"}";
	_head.appendChild(_sheet);
	return this;
};


    
btnRecruit2.addEventListener('click', () => {

	if (true) {
		btnRecruit2.pseudoStyle('after', 'border-style', 'solid')
		btnRecruit2.pseudoStyle('after', 'border-color', 'var(--orange-color) transparent transparent transparent')
		btnRecruit2.style.backgroundColor = 'var(--orange-color)';
		tabTwo.style.display = 'flex';

		btnRecruit.pseudoStyle('after', 'border-style', 'none')
		btnRecruit.style.backgroundColor = 'var(--btn-blue)';
		tabOne.style.display = 'none';

		btnRecruit3.pseudoStyle('after', 'border-style', 'none')
		btnRecruit3.style.backgroundColor = 'var(--btn-blue)';
		tabThree.style.display = 'none';

		wholeTabTwo.style.display = 'initial'
		wholeTabOne.style.display = 'none'
	}
})

btnRecruit3.addEventListener('click', () => {

	if (true) {
		btnRecruit3.pseudoStyle('after', 'border-style', 'solid')
		btnRecruit3.pseudoStyle('after', 'border-color', 'var(--orange-color) transparent transparent transparent')
		btnRecruit3.style.backgroundColor = 'var(--orange-color)';
		tabThree.style.display = 'flex';

		btnRecruit2.pseudoStyle('after', 'border-style', 'none')
		btnRecruit2.style.backgroundColor = 'var(--btn-blue)';
		tabTwo.style.display = 'none';

		btnRecruit.pseudoStyle('after', 'border-style', 'none')
		btnRecruit.style.backgroundColor = 'var(--btn-blue)';
		tabOne.style.display = 'none'
	}
});

btnRecruit.addEventListener('click', () => {

	if (true) {
		btnRecruit.pseudoStyle('after', 'border-style', 'solid')
		btnRecruit.pseudoStyle('after', 'border-color', 'var(--orange-color) transparent transparent transparent')
		btnRecruit.style.backgroundColor = 'var(--orange-color)';
		tabOne.style.display = 'flex';

		btnRecruit2.pseudoStyle('after', 'border-style', 'none')
		btnRecruit2.style.backgroundColor = 'var(--btn-blue)';
		tabTwo.style.display = 'none';

		btnRecruit3.pseudoStyle('after', 'border-style', 'none')
		btnRecruit3.style.backgroundColor = 'var(--btn-blue)';
		tabThree.style.display = 'none';


   }
})



// slider

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}


// ios detected and plugin vd bg

function iOS() {
	return [
		'iPad Simulator',
		'iPhone Simulator',
		'iPod Simulator',
		'iPad',
		'iPhone',
		'iPod'
	].includes(navigator.platform)
		// iPad on iOS 13 detection
		|| (navigator.userAgent.includes("Mac") && "ontouchend" in document)
}

if (iOS() === true) {

    window.addEventListener('load', async () => {
    let video = videobg;
  try {
    await video.play();
  } catch (err) {
    video.controls = false;
  }}); 
}

