document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');

    form.addEventListener('submit', function (event) {
        event.preventDefault(); // Previene el envío tradicional del formulario

        let isValid = true;

        // Limpiar mensajes de error anteriores
        document.querySelectorAll('.error-message').forEach(el => {
            el.textContent = '';
            el.style.display = 'none'; // Oculta el recuadro del mensaje de error
        });

        // Limpiar el cuadro de error específico
        const errorBox = document.getElementById('errorBox');
        errorBox.textContent = '';
        errorBox.style.display = 'none'; // Oculta el cuadro de error específico

        // Validar el nombre
        const nombre = document.getElementById('nombre').value.trim();
        const nombreError = document.getElementById('nombreError');
        if (nombre === '') {
            isValid = false;
            nombreError.textContent = 'El nombre es obligatorio';
            nombreError.style.display = 'block'; // Muestra el recuadro del mensaje de error
        }

        // Validar la descripción
        const descripcion = document.getElementById('descripcion').value.trim();
        const descripcionError = document.getElementById('descripcionError');
        if (descripcion === '') {
            isValid = false;
            descripcionError.textContent = 'La descripción es obligatoria.';
            descripcionError.style.display = 'block'; // Muestra el recuadro del mensaje de error
        }

        // Validar el link de Spotify
        const spotify = document.getElementById('spotify').value.trim();
        const spotifyError = document.getElementById('spotifyError');
        if (!/^https:\/\/open\.spotify\.com\//.test(spotify)) {
            isValid = false;
            spotifyError.textContent = 'El link de Spotify no es válido.';
            spotifyError.style.display = 'block'; // Muestra el recuadro del mensaje de error
        }

        // Validar el link de YouTube
        const youtube = document.getElementById('youtube').value.trim();
        const youtubeError = document.getElementById('youtubeError');
        if (!/^https:\/\/(www\.)?youtube\.com\//.test(youtube)) {
            isValid = false;
            youtubeError.textContent = 'El link de YouTube no es válido.';
            youtubeError.style.display = 'block'; // Muestra el recuadro del mensaje de error
        }

        // Validar la imagen
        const image = document.getElementById('image').files[0];
        const imageError = document.getElementById('imageError');
        if (!image) {
            isValid = false;
            imageError.textContent = 'Debe seleccionar una imagen.';
            imageError.style.display = 'block'; // Muestra el recuadro del mensaje de error
        } else if (!['image/jpeg', 'image/png', 'image/gif'].includes(image.type)) {
            isValid = false;
            imageError.textContent = 'El formato de la imagen no es válido. Solo se permiten JPG, PNG y GIF.';
            imageError.style.display = 'block'; // Muestra el recuadro del mensaje de error
        }

        // Si no es válido, evitar el envío del formulario
        if (!isValid) {
            return; // Detiene la ejecución si el formulario no es válido
        }

        // Enviar el formulario usando fetch
        const formData = new FormData(form);
        fetch('procesar_agregar_rapero.php', {
            method: 'POST',
            body: formData
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert(data.message); // Muestra un mensaje de éxito
                    window.location.href = '../index.php'; // Redirige a la página de inicio
                } else {
                    errorBox.textContent = data.message; // Muestra el mensaje de error en el cuadro de error
                    errorBox.style.display = 'block'; // Muestra el cuadro de error
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
    });
});
