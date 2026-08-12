(() => {
  const backdrop = document.querySelector('[data-modal-backdrop]');
  const openButtons = document.querySelectorAll('[data-modal-open]');
  const closeButtons = document.querySelectorAll('[data-modal-close]');
  let activeModal = null;

  const openModal = (id) => {
    const modal = document.getElementById(id);
    if (!modal || !backdrop) return;

    activeModal = modal;
    backdrop.hidden = false;
    modal.hidden = false;
    document.body.classList.add('modal-open');

    requestAnimationFrame(() => {
      backdrop.classList.add('is-visible');
      modal.classList.add('is-visible');
      const firstInput = modal.querySelector('input, select, textarea, button[type="submit"]');
      if (firstInput) firstInput.focus({ preventScroll: true });
    });
  };

  const closeModal = () => {
    if (!activeModal || !backdrop) return;

    const modal = activeModal;
    backdrop.classList.remove('is-visible');
    modal.classList.remove('is-visible');
    document.body.classList.remove('modal-open');
    activeModal = null;

    setTimeout(() => {
      modal.hidden = true;
      if (!activeModal) backdrop.hidden = true;
    }, 220);
  };

  openButtons.forEach((button) => {
    button.addEventListener('click', () => openModal(button.dataset.modalOpen));
  });

  closeButtons.forEach((button) => {
    button.addEventListener('click', closeModal);
  });

  if (backdrop) {
    backdrop.addEventListener('click', closeModal);
  }

  document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') closeModal();
  });


  const profileMenu = document.querySelector('.profile-menu');
  const profileTrigger = document.querySelector('.profile-trigger');

  if (profileMenu && profileTrigger) {
    const setProfileExpanded = (expanded) => {
      profileTrigger.setAttribute('aria-expanded', expanded ? 'true' : 'false');
    };

    profileMenu.addEventListener('mouseenter', () => setProfileExpanded(true));
    profileMenu.addEventListener('mouseleave', () => setProfileExpanded(false));
    profileMenu.addEventListener('focusin', () => setProfileExpanded(true));
    profileMenu.addEventListener('focusout', (event) => {
      if (!profileMenu.contains(event.relatedTarget)) setProfileExpanded(false);
    });
  }


function bindUkPhoneMasks(root = document) {
  const formatUkPhone = (rawValue) => {
    let digits = String(rawValue || '').replace(/\D/g, '');

    if (digits.startsWith('0044')) digits = digits.slice(4);
    else if (digits.startsWith('44')) digits = digits.slice(2);
    else if (digits.startsWith('0')) digits = digits.slice(1);

    digits = digits.slice(0, 10);
    if (!digits) return '';

    const first = digits.slice(0, 4);
    const second = digits.slice(4, 10);

    return `+44 ${first}${second ? ` ${second}` : ''}`;
  };

  root.querySelectorAll('[data-phone-mask="uk"]').forEach(input => {
    if (input.dataset.phoneMaskBound === 'true') return;
    input.dataset.phoneMaskBound = 'true';

    const applyMask = () => {
      input.value = formatUkPhone(input.value);
    };

    input.addEventListener('input', applyMask);
    input.addEventListener('blur', applyMask);
    applyMask();
  });
}

bindUkPhoneMasks();
  document.querySelectorAll('[data-auto-dismiss], .flash-message').forEach((message) => {
    if (message.dataset.dismissBound === 'true') return;
    message.dataset.dismissBound = 'true';
    window.setTimeout(() => {
      message.classList.add('is-hiding');
      window.setTimeout(() => message.remove(), 360);
    }, 4200);
  });
  document.querySelectorAll('[data-confirm-delete]').forEach((button) => {
    button.addEventListener('click', (event) => {
      if (!window.confirm('Are you sure you want to delete this record?')) {
        event.preventDefault();
      }
    });
  });

  document.querySelectorAll('.animated-row').forEach((row, index) => {
    row.style.animationDelay = `${Math.min(index * 35, 280)}ms`;
  });
})();