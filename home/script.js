// script.js

function toggleTheme() {
    const body = document.body;
    const currentTheme = body.classList.contains('light-mode') ? 'light-mode' : 'dark-mode';
    const newTheme = currentTheme === 'light-mode' ? 'dark-mode' : 'light-mode';
    body.classList.remove(currentTheme);
    body.classList.add(newTheme);
    // Guardar el tema seleccionado en localStorage
    localStorage.setItem('theme', newTheme);
}

// Aplicar el tema guardado en localStorage al cargar la página
document.addEventListener('DOMContentLoaded', () => {
    const savedTheme = localStorage.getItem('theme') || 'light-mode';
    document.body.classList.add(savedTheme);
});
