(() => {
  const body = document.body;
  const button = document.querySelector('.menu-toggle');
  const navShell = document.querySelector('.primary-nav-shell');
  const navLinks = document.querySelectorAll('.primary-nav a, .header-actions a');
  const desktopBreakpoint = window.matchMedia('(min-width: 921px)');

  if (!body || !button || !navShell) return;

  const setMenuState = (isOpen) => {
    body.classList.toggle('nav-open', isOpen);
    navShell.classList.toggle('is-open', isOpen);
    button.classList.toggle('is-active', isOpen);
    button.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
  };

  button.addEventListener('click', () => {
    setMenuState(!navShell.classList.contains('is-open'));
  });

  navLinks.forEach((link) => {
    link.addEventListener('click', () => {
      if (!desktopBreakpoint.matches) {
        setMenuState(false);
      }
    });
  });

  document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') {
      setMenuState(false);
    }
  });

  document.addEventListener('click', (event) => {
    if (desktopBreakpoint.matches || !navShell.classList.contains('is-open')) return;

    if (!navShell.contains(event.target) && !button.contains(event.target)) {
      setMenuState(false);
    }
  });

  const syncMenuForViewport = (event) => {
    if (event.matches) {
      setMenuState(false);
    }
  };

  if (typeof desktopBreakpoint.addEventListener === 'function') {
    desktopBreakpoint.addEventListener('change', syncMenuForViewport);
  } else if (typeof desktopBreakpoint.addListener === 'function') {
    desktopBreakpoint.addListener(syncMenuForViewport);
  }
})();
