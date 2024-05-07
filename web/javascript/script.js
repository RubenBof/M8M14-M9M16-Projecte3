function confir_eliminar() {
    var respuesta = confirm("Quieres eliminar esta energetica de la base de datos?");

    if (respuesta == true) {
        return true;
    }
    else {
        return false;
    }
}