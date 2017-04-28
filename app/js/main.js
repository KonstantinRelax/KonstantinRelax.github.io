var d = document;

var btnMobile = d.getElementsByClassName('head-hamburg')[0],
	mobileMenu = d.getElementsByClassName('mobile-menu')[0];

btnMobile.addEventListener('click', function(){
	var cl = mobileMenu.classList;

	if (cl.length == 2) {
		mobileMenu.classList.remove('mobile-menu');
		mobileMenu.classList.remove('hidden');
		mobileMenu.classList.add('mobile-menu');
	} else{
		mobileMenu.classList.add('hidden');
	}
});