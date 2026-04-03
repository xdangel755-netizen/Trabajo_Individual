document.addEventListener('DOMContentLoaded', () => {
    const btnAlternarVista = document.getElementById('btnAlternarVista');
    const btnVolverRegistro = document.getElementById('btnVolverRegistro');
    const formRegistro = document.getElementById('formRegistro');
    const formLogin = document.getElementById('formLogin');

    if (btnAlternarVista && formRegistro && formLogin) {
        btnAlternarVista.addEventListener('click', () => {
            formRegistro.style.display = 'none';
            formLogin.style.display = 'flex';
        });
    }

    if (btnVolverRegistro && formRegistro && formLogin) {
        btnVolverRegistro.addEventListener('click', () => {
            formLogin.style.display = 'none';
            formRegistro.style.display = 'flex';
        });
    }

    // Validación básica para mostrar feedback visual
    if (formRegistro) {
        formRegistro.addEventListener('submit', (e) => {
            e.preventDefault();
            const msg = document.getElementById('mensajeRegistro');
            if (msg) {
                msg.textContent = '¡Procesando registro...!';
                msg.className = 'mensaje success';
                setTimeout(() => {
                    msg.textContent = 'Registro completado con éxito.';
                    // En un caso real, aquí iría el envío al servidor
                }, 1500);
            }
        });
    }
});
