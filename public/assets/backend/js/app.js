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

    // 6. Classes Module: Search, Status Filter, Image Preview, and Add/Edit Form Toggle
    const classSearchInput = document.getElementById('class-search-input');
    const classStatusFilter = document.getElementById('class-status-filter');
    const classRows = document.querySelectorAll('[data-class-row]');
    const classEmptyState = document.getElementById('class-empty-state');
    const classCountBadge = document.getElementById('class-count-badge');

    const filterClassTable = () => {
        if (!classRows.length) return;
        const query = (classSearchInput ? classSearchInput.value : '').trim().toLowerCase();
        const status = classStatusFilter ? classStatusFilter.value : 'all';
        let visibleCount = 0;

        classRows.forEach((row) => {
            const rowName = row.getAttribute('data-name') || '';
            const rowStatus = row.getAttribute('data-status') || '';
            const matchesName = !query || rowName.includes(query);
            const matchesStatus = status === 'all' || rowStatus === status;

            if (matchesName && matchesStatus) {
                row.classList.remove('hidden');
                visibleCount++;
            } else {
                row.classList.add('hidden');
            }
        });

        if (classEmptyState) {
            classEmptyState.classList.toggle('hidden', visibleCount > 0);
        }
        if (classCountBadge) {
            classCountBadge.textContent = `${visibleCount} ${visibleCount === 1 ? 'Class' : 'Classes'}`;
        }
    };

    if (classSearchInput) {
        classSearchInput.addEventListener('input', filterClassTable);
    }
    if (classStatusFilter) {
        classStatusFilter.addEventListener('change', filterClassTable);
    }

    // Class Form Elements
    const classFormCard = document.getElementById('class-form-card');
    const classForm = document.getElementById('class-Quick-form');
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
    const topAddClassBtn = document.getElementById('top-add-class-btn');

    const resetClassForm = (focusInput = false) => {
        if (!classForm) return;
        classForm.reset();
        if (classFormTitle) classFormTitle.textContent = 'Add New Class';
        if (classFormSubtitle) classFormSubtitle.textContent = 'Create a new academic class';
        if (classFormSubmitText) classFormSubmitText.textContent = 'Save Class';
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
        if (focusInput && classNameInput && classFormCard) {
            classFormCard.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            setTimeout(() => classNameInput.focus(), 150);
        }
    };

    if (topAddClassBtn) {
        topAddClassBtn.addEventListener('click', () => resetClassForm(true));
    }

    if (classFormCancel) {
        classFormCancel.addEventListener('click', () => resetClassForm(false));
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
            const name = btn.getAttribute('data-class-name') || '';
            const status = btn.getAttribute('data-class-status') || 'active';
            const image = btn.getAttribute('data-class-image') || '';

            if (classNameInput) classNameInput.value = name;
            if (classStatusInput) classStatusInput.value = status;
            if (classFormTitle) classFormTitle.textContent = 'Edit Class';
            if (classFormSubtitle) classFormSubtitle.textContent = 'Update selected class details';
            if (classFormSubmitText) classFormSubmitText.textContent = 'Update Class';
            if (classFormCancel) classFormCancel.classList.remove('hidden');

            if (image && classImagePreview) {
                classImagePreview.src = image;
                classImagePreview.classList.remove('hidden');
                if (classImagePlaceholder) classImagePlaceholder.classList.add('hidden');
                if (classImageLabel) classImageLabel.textContent = 'Change current image';
            }

            if (classFormCard && classNameInput) {
                classFormCard.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                setTimeout(() => classNameInput.focus(), 150);
            }
        });
    });

    if (classForm) {
        classForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const isEditing = classFormSubmitText && classFormSubmitText.textContent === 'Update Class';
            const nameVal = classNameInput ? classNameInput.value.trim() : 'Class';
            window.showToast(
                isEditing ? `"${nameVal}" updated successfully.` : `"${nameVal}" added successfully.`,
                'success'
            );
            resetClassForm(false);
        });
    }

    document.querySelectorAll('[data-delete-class]').forEach((btn) => {
        btn.addEventListener('click', () => {
            const name = btn.getAttribute('data-delete-class') || 'Class';
            window.showToast(`"${name}" removed from class list.`, 'info', 'Deleted');
        });
    });
});
