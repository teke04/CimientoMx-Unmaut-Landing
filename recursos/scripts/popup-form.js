function openModal() {
    const modal = document.getElementById('contactModal');
    modal.classList.remove('hidden');
    modal.classList.add('flex');
    document.body.style.overflow = 'hidden';
}

function closeModal() {
    const modal = document.getElementById('contactModal');
    modal.classList.add('hidden');
    modal.classList.remove('flex');
    document.body.style.overflow = '';
}

// Cerrar modal al hacer clic fuera del formulario
document.getElementById('contactModal')?.addEventListener('click', function(e) {
    if (e.target === this) {
        closeModal();
    }
});

// Cerrar modal con tecla Escape
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeModal();
    }
});
