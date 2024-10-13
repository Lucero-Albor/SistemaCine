// Función para abrir el modal
function openModal() {
    document.getElementById("registerModal").style.display = "block";
}

// Función para cerrar el modal
function closeModal() {
    document.getElementById("registerModal").style.display = "none";
}


document.getElementById("crearCuentaBtn").addEventListener("click", function(event) {
    event.preventDefault();
    openModal();
});


window.onclick = function(event) {
    const modal = document.getElementById("registerModal");
    if (event.target === modal) {
        closeModal();
    }
};

// Manejar el registro de nuevo usuario
document.getElementById('registerForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const nombre = document.getElementById('nombre').value;
    const apellido = document.getElementById('apellido').value;
    const usuario = document.getElementById('usuario').value;
    const password = document.getElementById('password').value;

 
    if (!nombre || !apellido || !usuario || !password) {
        alert('Por favor, completa todos los campos.');
        return;
    }

    const formData = new FormData();
    formData.append('nombre', nombre);
    formData.append('apellido', apellido);
    formData.append('usuario', usuario);
    formData.append('password', password);

    
    fetch('registro.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        alert(data); 
        closeModal(); 
    })
    .catch(error => {
        console.error('Error:', error);
    });
});

