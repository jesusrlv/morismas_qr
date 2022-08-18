function imprimirSeleccion(nombre) {
    var ficha = document.getElementById(nombre);
    var ventimp = window.open(' ', 'popimpr');
    var texto = "<h1 style='font-size: 2.5rem; font-family: 'Aboreto', cursive;'><center><strong>Morismas de Bracho</strong></center></h1>";
    ventimp.document.write(texto);
    ventimp.document.write(ficha.innerHTML);
    ventimp.document.close();
    ventimp.print();
    ventimp.close();
}