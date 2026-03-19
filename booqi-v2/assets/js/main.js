(() => {
  const button = document.querySelector('.menu-toggle');
  const navShell = document.querySelector('.site-header__nav-shell');

  if (!button || !navShell) {
    return;
  }

  button.addEventListener('click', () => {
    const isOpen = navShell.classList.toggle('is-open');
    button.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
  });
})();
