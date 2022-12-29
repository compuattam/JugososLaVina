function abrirformulario(dato){
    if(dato=="abrir"){
        document.getElementById('formulario').style.display = "block";
    }

    if(dato=="cerrar"){
        document.getElementById('formulario').style.display = "none";
    }
}

function eliminarEmpleado(eid){
    var mensaje = confirm("¿Está seguro de eliminar el empleado?");

    if (mensaje == true) {
        window.location = "bloques/empleados/eliminar.php?id_empleado=" + eid;
    }
}

function eliminarCliente(cid){
    var mensaje = confirm("¿Está seguro de eliminar el cliente?");

    if (mensaje==true) {
        window.location = "bloques/clientes/eliminar.php?id_clientes=" + cid;
    }
}

function eliminarProveedor(pid){
    var mensaje = confirm("¿Está seguro de eliminar el proveedor?");

    if (mensaje==true) {
        window.location = "bloques/proveedores/eliminar.php?id_proveedor=" + pid;
    }
}

function eliminarProducto(iid){
    var mensaje = confirm("¿Está seguro de eliminar el producto?");

    if (mensaje==true) {
        window.location = "bloques/inventario/eliminar.php?id_producto=" + iid;
    }
}

function eliminarNomina(nid){
    var mensaje = confirm("¿Está seguro de eliminar la nómina?");

    if (mensaje==true) {
        window.location = "bloques/nominas/eliminar.php?id_nomina=" + nid;
    }
}

function eliminarCuentaxCobrar($cxcid){
    var mensaje = confirm("¿Está seguro de eliminar la cuenta por cobrar?");

    if (mensaje==true) {
        window.location = "bloques/cuentasxcobrar/eliminar.php?id_cobrar=" + $cxcid;
    }
}

function eliminarCuentaxPagar($cxpid){
    var mensaje = confirm("¿Está seguro de eliminar la cuenta por pagar?");

    if (mensaje==true) {
        window.location = "bloques/cuentasxpagar/eliminar.php?id_pagar=" + $cxpid;
    }
}

function eliminarFacturacionReportes($facid){
    var mensaje = confirm("¿Está seguro de eliminar el reporte facturación?");

    if (mensaje==true) {
        window.location = "bloques/facturacion/eliminar.php?id_facturacion=" + $facid;
    }
}

function eliminarUsuario($userid){
    var mensaje = confirm("¿Está seguro de eliminar el usuario?");

    if (mensaje==true) {
        window.location = "bloques/usuarios/eliminar.php?id_usuario=" + $userid;
    }
}

function MostrarMunicipio(datos){
    divResultado = document.getElementById('municipio');
    ajax=objetoAjax();
    ajax.open("GET", datos);
    ajax.onreadystatechange=function() {
        if (ajax.readyState==4) {
            divResultado.innerHTML = ajax.responseText
        }
    }
    ajax.send(null)
}

function MostrarNit(datos){
    divResultado = document.getElementById('nit');
    ajax=objetoAjax();
    ajax.open("GET", datos);
    ajax.onreadystatechange=function() {
        if (ajax.readyState==4) {
            divResultado.innerHTML = ajax.responseText
        }
    }
    ajax.send(null)
}

function MostrarDir(datos){
    divResultado = document.getElementById('dir');
    ajax=objetoAjax();
    ajax.open("GET", datos);
    ajax.onreadystatechange=function() {
        if (ajax.readyState==4) {
            divResultado.innerHTML = ajax.responseText
        }
    }
    ajax.send(null)
}

function mostrarPassword() {
    document.getElementById('contrasenna').type = "text";
}

function ocultarPassword() {
    document.getElementById('contrasenna').type = "password";
}
