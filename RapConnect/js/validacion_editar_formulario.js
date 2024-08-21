document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');

    form.addEventListener('submit', function (event) {
        let isValid = true;

        // Limpiar mensajes de error anteriores
        document.querySelectorAll('.error-message').forEach(el => {
            el.textContent = '';
            el.style.display = 'none';
        });

        // Validar el nombre
        const nombre = document.getElementById('nombre').value.trim();
        const nombreError = document.getElementById('nombreError');
        if (nombre === '') {
            isValid = false;
            nombreError.textContent = 'El nombre es obligatorio';
            nombreError.style.display = 'block'; // Muestra el recuadro
        }

        // Validar la descripción
        const descripcion = document.getElementById('descripcion').value.trim();
        const descripcionError = document.getElementById('descripcionError');
        if (descripcion === '') {
            isValid = false;
            descripcionError.textContent = 'La descripción es obligatoria.';
            descripcionError.style.display = 'block'; // Muestra el recuadro
        }

        // Validar el link de Spotify
        const spotify = document.getElementById('spotify').value.trim();
        const spotifyError = document.getElementById('spotifyError');
        if (!/^https:\/\/open\.spotify\.com\//.test(spotify)) {
            isValid = false;
            spotifyError.textContent = 'El link de Spotify no es válido.';
            spotifyError.style.display = 'block'; // Muestra el recuadro
        }

        // Validar el link de YouTube
        const youtube = document.getElementById('youtube').value.trim();
        const youtubeError = document.getElementById('youtubeError');
        if (!/^https:\/\/(www\.)?youtube\.com\//.test(youtube)) {
            isValid = false;
            youtubeError.textContent = 'El link de YouTube no es válido.';
            youtubeError.style.display = 'block'; // Muestra el recuadro
        }

        // Validar la nueva imagen (si se ha seleccionado)
        const newImage = document.getElementById('new_image').files[0];
        const newImageError = document.getElementById('newImageError');
        if (newImage && !['image/jpeg', 'image/png', 'image/gif'].includes(newImage.type)) {
            isValid = false;
            newImageError.textContent = 'El formato de la imagen no es válido. Solo se permiten JPG, PNG y GIF.';
            newImageError.style.display = 'block'; // Muestra el recuadro
        }

        // Si no es válido, evitar el envío del formulario
        if (!isValid) {
            event.preventDefault(); // Evita el envío del formulario
        }
    });
});

