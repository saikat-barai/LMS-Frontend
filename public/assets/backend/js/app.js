/**
 * Z Academy Backend Admin Panel Scripts
 * Handles: Lucide icons, mobile sidebar drawer, profile dropdown, password visibility toggle, and reusable global Toaster.
 */

// Global Reusable Toaster Function — Call window.showToast(message, type, title) from anywhere
window.showToast = function (message, type = 'success', title = null) {
    let container = document.getElementById('global-toast-container');
    if (!container) {
        container = document.createElement('div');
        container.id = 'global-toast-container';
        container.className = 'pointer-events-none fixed right-4 top-4 z-[9999] flex w-full max-w-sm flex-col gap-2.5 sm:right-6 sm:top-5';
        document.body.appendChild(container);
    }

    const styles = {
        success: {
            defaultTitle: 'Success',
            iconBg: 'bg-emerald-50 text-emerald-600 ring-1 ring-emerald-200',
            barColor: 'bg-emerald-500',
            svg: '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><path d="m9 11 3 3L22 4"/></svg>',
        },
        error: {
            defaultTitle: 'Error',
            iconBg: 'bg-rose-50 text-rose-600 ring-1 ring-rose-200',
            barColor: 'bg-rose-500',
            svg: '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" x2="12" y1="8" y2="12"/><line x1="12" x2="12.01" y1="16" y2="16"/></svg>',
        },
        warning: {
            defaultTitle: 'Warning',
            iconBg: 'bg-amber-50 text-amber-600 ring-1 ring-amber-200',
            barColor: 'bg-amber-500',
            svg: '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"/><path d="M12 9v4"/><path d="M12 17h.01"/></svg>',
        },
        info: {
            defaultTitle: 'Notice',
            iconBg: 'bg-[#f4f0ff] text-[#3b2670] ring-1 ring-[#3b2670]/20',
            barColor: 'bg-[#6d28d9]',
            svg: '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>',
        },
    };

    const config = styles[type] || styles.success;
    const toastTitle = title || config.defaultTitle;

    const toastEl = document.createElement('div');
    toastEl.className = 'lms-toast-item p-4';
    toastEl.innerHTML = `
        <div class="flex items-start gap-3">
            <span class="grid h-9 w-9 shrink-0 place-items-center rounded-lg ${config.iconBg}">
                ${config.svg}
            </span>
            <div class="min-w-0 flex-1 pt-0.5">
                <div class="font-display text-xs font-bold text-slate-900 sm:text-sm">${toastTitle}</div>
                <p class="mt-0.5 text-xs leading-relaxed text-slate-600">${message}</p>
            </div>
            <button type="button" aria-label="Close notification" class="toast-close-btn grid h-7 w-7 shrink-0 place-items-center rounded-md text-slate-400 transition-colors hover:bg-slate-100 hover:text-slate-700">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
            </button>
        </div>
        <div class="lms-toast-progress ${config.barColor}"></div>
    `;

    const dismissToast = () => {
        if (toastEl.classList.contains('is-leaving')) return;
        toastEl.classList.add('is-leaving');
        setTimeout(() => {
            toastEl.remove();
        }, 180);
    };

    const closeBtn = toastEl.querySelector('.toast-close-btn');
    if (closeBtn) {
        closeBtn.addEventListener('click', dismissToast);
    }

    container.appendChild(toastEl);
    setTimeout(dismissToast, 4000);
};

document.addEventListener('DOMContentLoaded', () => {
    // 1. Initialize Lucide Icons
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }

    // 2. Render Any Initial Session Flash Toasts
    const toastContainer = document.getElementById('global-toast-container');
    if (toastContainer) {
        try {
            const initialToasts = JSON.parse(toastContainer.getAttribute('data-initial-toasts') || '[]');
            initialToasts.forEach((t) => {
                window.showToast(t.message, t.type || 'success', t.title || null);
            });
        } catch (e) {
            // Ignore malformed JSON
        }
    }

    // 3. Mobile Sidebar Drawer Toggle
    const sidebar = document.getElementById('admin-sidebar');
    const backdrop = document.getElementById('admin-sidebar-backdrop');
    const openBtn = document.getElementById('admin-sidebar-open');
    const closeBtn = document.getElementById('admin-sidebar-close');

    const openSidebar = () => {
        if (!sidebar || !backdrop) return;
        sidebar.classList.add('is-open');
        backdrop.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    };

    const closeSidebar = () => {
        if (!sidebar || !backdrop) return;
        sidebar.classList.remove('is-open');
        backdrop.classList.add('hidden');
        document.body.style.overflow = '';
    };

    if (openBtn) {
        openBtn.addEventListener('click', openSidebar);
    }

    if (closeBtn) {
        closeBtn.addEventListener('click', closeSidebar);
    }

    if (backdrop) {
        backdrop.addEventListener('click', closeSidebar);
    }

    // 4. Header Profile Dropdown Toggle
    const profileBtn = document.getElementById('admin-profile-btn');
    const profileMenu = document.getElementById('admin-profile-menu');

    if (profileBtn && profileMenu) {
        profileBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            profileMenu.classList.toggle('hidden');
        });

        document.addEventListener('click', (e) => {
            if (!profileMenu.contains(e.target) && !profileBtn.contains(e.target)) {
                profileMenu.classList.add('hidden');
            }
        });
    }

    // 5. Password Visibility Toggle (Eye / Eye-Off Icon)
    document.querySelectorAll('[data-toggle-password]').forEach((btn) => {
        btn.addEventListener('click', () => {
            const inputId = btn.getAttribute('data-toggle-password');
            const input = document.getElementById(inputId);
            if (!input) return;

            const isPassword = input.type === 'password';
            input.type = isPassword ? 'text' : 'password';

            const eyeOpen = btn.querySelector('.eye-open');
            const eyeClosed = btn.querySelector('.eye-closed');
            if (eyeOpen && eyeClosed) {
                eyeOpen.classList.toggle('hidden', isPassword);
                eyeClosed.classList.toggle('hidden', !isPassword);
            }
        });
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            closeSidebar();
            if (profileMenu) {
                profileMenu.classList.add('hidden');
            }
        }
    });

    // 6. Classes & Subjects Module: Live Image Preview & Dynamic Add/Edit Form Mode
    const classFormCard = document.getElementById('class-form-card');
    const classForm = document.getElementById('class-Quick-form');
    const classFormMethod = document.getElementById('class-form-method');
    const classFormTitle = document.getElementById('class-form-title');
    const classFormSubtitle = document.getElementById('class-form-subtitle');
    const classFormSubmitText = document.getElementById('class-form-submit-text');
    const classFormCancel = document.getElementById('class-form-cancel');
    const classNameInput = document.getElementById('class_name');
    const classStatusInput = document.getElementById('class_status');
    const classImageInput = document.getElementById('class_image');
    const classImagePreview = document.getElementById('class-image-preview');
    const classImagePlaceholder = document.getElementById('class-image-placeholder');
    const classImageLabel = document.getElementById('class-image-label');
    const entityLabel = (classForm && classForm.getAttribute('data-entity-label')) || 'Class';

    const resetClassForm = () => {
        if (!classForm) return;
        classForm.reset();
        const storeUrl = classForm.getAttribute('data-store-url');
        if (storeUrl) {
            classForm.setAttribute('action', storeUrl);
        }
        if (classFormMethod) {
            classFormMethod.value = 'POST';
        }
        if (classFormTitle) classFormTitle.textContent = `Add New ${entityLabel}`;
        if (classFormSubtitle) classFormSubtitle.textContent = `Create a new academic ${entityLabel.toLowerCase()}`;
        if (classFormSubmitText) classFormSubmitText.textContent = `Save ${entityLabel}`;
        if (classFormCancel) classFormCancel.classList.add('hidden');
        if (classImagePreview) {
            classImagePreview.src = '';
            classImagePreview.classList.add('hidden');
        }
        if (classImagePlaceholder) {
            classImagePlaceholder.classList.remove('hidden');
        }
        if (classImageLabel) {
            classImageLabel.textContent = 'Click to upload image';
        }
    };

    if (classFormCancel) {
        classFormCancel.addEventListener('click', resetClassForm);
    }

    if (classImageInput) {
        classImageInput.addEventListener('change', (e) => {
            const file = e.target.files && e.target.files[0];
            if (!file) return;

            const reader = new FileReader();
            reader.onload = (ev) => {
                if (classImagePreview && ev.target?.result) {
                    classImagePreview.src = ev.target.result;
                    classImagePreview.classList.remove('hidden');
                }
                if (classImagePlaceholder) {
                    classImagePlaceholder.classList.add('hidden');
                }
                if (classImageLabel) {
                    classImageLabel.textContent = file.name;
                }
            };
            reader.readAsDataURL(file);
        });
    }

    document.querySelectorAll('[data-edit-class]').forEach((btn) => {
        btn.addEventListener('click', () => {
            const itemLabel = btn.getAttribute('data-entity-label') || entityLabel;
            const updateUrl = btn.getAttribute('data-update-url') || '';
            const name = btn.getAttribute('data-class-name') || '';
            const status = btn.getAttribute('data-class-status') || 'active';
            const image = btn.getAttribute('data-class-image') || '';

            if (classForm && updateUrl) {
                classForm.setAttribute('action', updateUrl);
            }
            if (classFormMethod) {
                classFormMethod.value = 'PUT';
            }
            if (classNameInput) classNameInput.value = name;
            if (classStatusInput) classStatusInput.value = status;
            if (classFormTitle) classFormTitle.textContent = `Edit ${itemLabel}`;
            if (classFormSubtitle) classFormSubtitle.textContent = `Update selected ${itemLabel.toLowerCase()} details`;
            if (classFormSubmitText) classFormSubmitText.textContent = `Update ${itemLabel}`;
            if (classFormCancel) classFormCancel.classList.remove('hidden');

            if (image && classImagePreview) {
                classImagePreview.src = image;
                classImagePreview.classList.remove('hidden');
                if (classImagePlaceholder) classImagePlaceholder.classList.add('hidden');
                if (classImageLabel) classImageLabel.textContent = 'Change current image';
            } else if (classImagePreview) {
                classImagePreview.src = '';
                classImagePreview.classList.add('hidden');
                if (classImagePlaceholder) classImagePlaceholder.classList.remove('hidden');
                if (classImageLabel) classImageLabel.textContent = 'Click to upload image';
            }

            if (classFormCard && classNameInput) {
                classFormCard.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                setTimeout(() => classNameInput.focus(), 150);
            }
        });
    });

    // 7. Instructor Module: Dynamic Repeatable Social Media Rows
    const socialContainer = document.getElementById('social-links-container');
    const addSocialBtn = document.getElementById('add-social-row-btn');

    if (socialContainer && addSocialBtn) {
        let iconOptions = [];
        try {
            iconOptions = JSON.parse(socialContainer.getAttribute('data-icon-options') || '[]');
        } catch (e) {
            iconOptions = [{ icon: 'facebook', title: 'Facebook', label: 'Facebook (facebook)' }];
        }

        const bindSocialRowEvents = (row) => {
            const selectEl = row.querySelector('[data-social-icon-select]');
            const titleInput = row.querySelector('[data-social-title-input]');
            const removeBtn = row.querySelector('[data-remove-social-row]');

            if (selectEl && titleInput) {
                selectEl.addEventListener('change', () => {
                    const selectedOption = selectEl.options[selectEl.selectedIndex];
                    const defaultTitle = selectedOption ? selectedOption.getAttribute('data-default-title') : '';
                    if (defaultTitle) {
                        titleInput.value = defaultTitle;
                    }
                });
            }

            if (removeBtn) {
                removeBtn.addEventListener('click', () => {
                    const allRows = socialContainer.querySelectorAll('[data-social-row]');
                    if (allRows.length > 1) {
                        row.remove();
                    } else {
                        const urlInput = row.querySelector('input[name$="[url]"]');
                        if (urlInput) urlInput.value = '';
                    }
                });
            }
        };

        socialContainer.querySelectorAll('[data-social-row]').forEach(bindSocialRowEvents);

        addSocialBtn.addEventListener('click', () => {
            const nextIndex = Date.now();
            const defaultOpt = iconOptions[0] || { icon: 'facebook', title: 'Facebook', label: 'Facebook (facebook)' };
            const optionsHtml = iconOptions
                .map(
                    (opt) =>
                        `<option value="${opt.icon}" data-default-title="${opt.title}">${opt.label}</option>`
                )
                .join('');

            const row = document.createElement('div');
            row.setAttribute('data-social-row', '');
            row.className =
                'grid grid-cols-1 gap-3 rounded-xl border border-slate-200/80 bg-slate-50/50 p-3.5 sm:grid-cols-12 sm:items-end';
            row.innerHTML = `
                <div class="sm:col-span-4">
                    <label class="mb-1 block text-[11px] font-bold uppercase tracking-wider text-slate-500">
                        Icon Class
                    </label>
                    <select
                        name="social_links[${nextIndex}][icon]"
                        data-social-icon-select
                        class="admin-input h-10 w-full rounded-xl border border-slate-200 bg-white px-3 text-xs font-medium text-slate-800 sm:text-sm"
                    >
                        ${optionsHtml}
                    </select>
                </div>
                <div class="sm:col-span-3">
                    <label class="mb-1 block text-[11px] font-bold uppercase tracking-wider text-slate-500">
                        Title
                    </label>
                    <input
                        type="text"
                        name="social_links[${nextIndex}][title]"
                        data-social-title-input
                        value="${defaultOpt.title}"
                        placeholder="e.g., Facebook"
                        class="admin-input h-10 w-full rounded-xl border border-slate-200 bg-white px-3 text-xs text-slate-900 sm:text-sm"
                    >
                </div>
                <div class="sm:col-span-4">
                    <label class="mb-1 block text-[11px] font-bold uppercase tracking-wider text-slate-500">
                        Profile Link / URL
                    </label>
                    <input
                        type="text"
                        name="social_links[${nextIndex}][url]"
                        value=""
                        placeholder="https://facebook.com/..."
                        class="admin-input h-10 w-full rounded-xl border border-slate-200 bg-white px-3 text-xs text-slate-900 sm:text-sm"
                    >
                </div>
                <div class="flex justify-end sm:col-span-1">
                    <button
                        type="button"
                        data-remove-social-row
                        title="Remove Link"
                        class="grid h-10 w-10 place-items-center rounded-xl border border-slate-200 bg-white text-slate-400 transition hover:border-rose-200 hover:bg-rose-50 hover:text-rose-600"
                    >
                        <i data-lucide="trash-2" class="h-4 w-4"></i>
                    </button>
                </div>
            `;

            socialContainer.appendChild(row);
            bindSocialRowEvents(row);
            if (typeof lucide !== 'undefined') {
                lucide.createIcons();
            }
        });
    }

    // 8. Real-Time Search for Instructors Table (Instant Filter + Debounced Live Fetch)
    const instructorSearchInput = document.getElementById('instructor-realtime-search');
    const instructorTableWrapper = document.getElementById('instructor-table-wrapper');
    const instructorCountBadge = document.getElementById('instructor-count-badge');
    const instructorSearchSpinner = document.getElementById('instructor-search-spinner');

    if (instructorSearchInput && instructorTableWrapper) {
        let searchTimeout = null;
        let activeController = null;

        instructorSearchInput.addEventListener('input', () => {
            const query = instructorSearchInput.value.trim();
            const lowerQuery = query.toLowerCase();

            // Immediate zero-latency client-side row filter on current page
            const currentRows = instructorTableWrapper.querySelectorAll('[data-instructor-row]');
            if (currentRows.length > 0) {
                currentRows.forEach((row) => {
                    const text = row.getAttribute('data-search-text') || '';
                    row.classList.toggle('hidden', lowerQuery !== '' && !text.includes(lowerQuery));
                });
            }

            if (searchTimeout) {
                clearTimeout(searchTimeout);
            }

            searchTimeout = setTimeout(async () => {
                const baseUrl = instructorSearchInput.getAttribute('data-search-url') || window.location.pathname;
                const url = new URL(baseUrl, window.location.origin);
                if (query !== '') {
                    url.searchParams.set('search', query);
                }

                if (activeController) {
                    activeController.abort();
                }
                activeController = new AbortController();

                if (instructorSearchSpinner) {
                    instructorSearchSpinner.classList.remove('hidden');
                    instructorSearchSpinner.classList.add('flex');
                }

                try {
                    const response = await fetch(url.toString(), {
                        headers: { 'X-Requested-With': 'XMLHttpRequest' },
                        signal: activeController.signal,
                    });

                    if (!response.ok) return;

                    const html = await response.text();
                    const parser = new DOMParser();
                    const doc = parser.parseFromString(html, 'text/html');

                    const newWrapper = doc.getElementById('instructor-table-wrapper');
                    const newBadge = doc.getElementById('instructor-count-badge');

                    if (newWrapper) {
                        instructorTableWrapper.innerHTML = newWrapper.innerHTML;
                    }
                    if (newBadge && instructorCountBadge) {
                        instructorCountBadge.textContent = newBadge.textContent;
                    }

                    window.history.replaceState({}, '', url.toString());

                    if (typeof lucide !== 'undefined') {
                        lucide.createIcons();
                    }
                } catch (err) {
                    // Ignore abort errors
                } finally {
                    if (instructorSearchSpinner) {
                        instructorSearchSpinner.classList.add('hidden');
                        instructorSearchSpinner.classList.remove('flex');
                    }
                }
            }, 220);
        });
    }
});
