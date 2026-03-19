document.addEventListener('DOMContentLoaded', function () {
	var headerInner = document.querySelector('.site-header__inner');
	var toggle = document.querySelector('.site-header__toggle');

	if (!headerInner || !toggle) {
		return;
	}

	toggle.addEventListener('click', function () {
		var isOpen = headerInner.classList.toggle('is-open');
		toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
	});
});
