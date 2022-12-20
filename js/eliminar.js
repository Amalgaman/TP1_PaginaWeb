const eliminar = document.querySelectorAll('.eliminar');

eliminar.forEach ( (item) => {
    item.addEventListener('click', (e) =>{
        e.preventDefault();
        let confirmacion = confirm('Estás seguro?');
        if (confirmacion){
            location.href = item.href;
        }
    });
});
