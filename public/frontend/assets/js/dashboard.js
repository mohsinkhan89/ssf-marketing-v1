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

  const slugify = (value) => String(value || '')
    .toLowerCase()
    .trim()
    .replace(/[^a-z0-9\s-]/g, '')
    .replace(/[\s_-]+/g, '-')
    .replace(/^-+|-+$/g, '');

  document.querySelectorAll('[data-slug-source]').forEach((source) => {
    const form = source.closest('form');
    const target = form?.querySelector('[data-slug-target]');
    if (!target) return;

    const syncSlug = () => {
      target.value = slugify(source.value);
    };

    source.addEventListener('input', syncSlug);
    syncSlug();
  });


  const initRichTextEditors = () => {
    const saveSelection = (editor) => {
      const selection = window.getSelection();
      if (selection && selection.rangeCount > 0 && editor.contains(selection.anchorNode)) {
        editor._savedRange = selection.getRangeAt(0).cloneRange();
      }
    };

    const restoreSelection = (editor) => {
      editor.focus();
      const selection = window.getSelection();
      if (!selection || !editor._savedRange) return;
      selection.removeAllRanges();
      selection.addRange(editor._savedRange);
    };

    const escapeHtml = (value) => String(value || '')
      .replace(/&/g, '&amp;')
      .replace(/</g, '&lt;')
      .replace(/>/g, '&gt;')
      .replace(/"/g, '&quot;')
      .replace(/'/g, '&#039;');

    const selectedHtml = () => {
      const selection = window.getSelection();
      if (!selection || selection.rangeCount === 0 || selection.isCollapsed) return '';

      const container = document.createElement('div');
      container.appendChild(selection.getRangeAt(0).cloneContents());
      return container.innerHTML || selection.toString();
    };

    const selectedText = () => {
      const selection = window.getSelection();
      return selection ? selection.toString() : '';
    };

    const insertSelectedHtml = (editor, html) => {
      document.execCommand('insertHTML', false, html);
      saveSelection(editor);
      editor.dispatchEvent(new Event('input', { bubbles: true }));
    };

    const applyInlineFormat = (editor, value) => {
      restoreSelection(editor);
      const html = selectedHtml();
      const plainText = selectedText();

      if (!html) {
        document.execCommand('formatBlock', false, value);
        saveSelection(editor);
        editor.dispatchEvent(new Event('input', { bubbles: true }));
        return;
      }

      document.execCommand('removeFormat', false, null);

      if (value === 'P') {
        insertSelectedHtml(editor, html);
        return;
      }

      const className = String(value).toLowerCase();
      insertSelectedHtml(editor, `<span class="rich-inline-heading rich-inline-${className}">${html}</span>`);
    };

    const exec = (editor, command, value = null) => {
      restoreSelection(editor);

      if (command === 'formatBlock' && ['P', 'H1', 'H2', 'H3', 'H4'].includes(value)) {
        applyInlineFormat(editor, value);
        return;
      }

      document.execCommand(command, false, value);
      saveSelection(editor);
      editor.dispatchEvent(new Event('input', { bubbles: true }));
    };

    document.querySelectorAll('[data-rich-text-form]').forEach((form) => {
      const editor = form.querySelector('[data-rich-text-editor]');
      const input = form.querySelector('[data-rich-text-input]');
      if (!editor || !input || form.dataset.richTextBound === 'true') return;
      form.dataset.richTextBound = 'true';

      form.classList.add('rich-text-ready');

      const syncRichText = () => {
        input.value = editor.innerHTML.trim() || '<p></p>';
      };

      ['keyup', 'mouseup', 'mouseleave', 'input', 'focus'].forEach((eventName) => {
        editor.addEventListener(eventName, () => {
          saveSelection(editor);
          syncRichText();
        });
      });

      form.querySelectorAll('button[data-rich-command]').forEach((button) => {
        button.addEventListener('mousedown', (event) => event.preventDefault());
        button.addEventListener('click', () => exec(editor, button.dataset.richCommand));
      });

      form.querySelectorAll('select[data-rich-command]').forEach((select) => {
        select.addEventListener('mousedown', () => saveSelection(editor));
        select.addEventListener('change', () => {
          exec(editor, select.dataset.richCommand, select.value);
          select.selectedIndex = 0;
        });
      });

      form.querySelectorAll('input[type="color"][data-rich-command]').forEach((inputColor) => {
        inputColor.addEventListener('mousedown', () => saveSelection(editor));
        inputColor.addEventListener('input', () => exec(editor, inputColor.dataset.richCommand, inputColor.value));
      });

      form.querySelector('[data-rich-action="link"]')?.addEventListener('click', () => {
        restoreSelection(editor);
        const url = window.prompt('Enter link URL', 'https://');
        if (!url || url === 'https://') return;
        exec(editor, 'createLink', url);
        editor.querySelectorAll(`a[href="${url}"]`).forEach((link) => {
          link.setAttribute('target', '_blank');
          link.setAttribute('rel', 'noopener');
        });
        syncRichText();
      });

      form.querySelector('[data-rich-action="table"]')?.addEventListener('click', () => {
        restoreSelection(editor);
        const tableHtml = '<table><tbody><tr><th>Heading</th><th>Heading</th></tr><tr><td>Text</td><td>Text</td></tr></tbody></table><p></p>';
        document.execCommand('insertHTML', false, tableHtml);
        saveSelection(editor);
        syncRichText();
      });

      form.addEventListener('submit', syncRichText);
      syncRichText();
    });
  };

  initRichTextEditors();
})();
