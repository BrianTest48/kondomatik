<!DOCTYPE html>
<html class="fixed">

<head>
    <title>Kondomatik - Familiares</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <?php require_once("../Main/mainhead.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="registrardocumento.js"></script>

</head>

<body>
    <section class="body">
        <header class="header">
            <?php require_once("../Main/mainheadpanel.php"); ?>
        </header>
        <div class="page-container">
            <div class="inner-wrapper">
                <aside id="sidebar-left" class="sidebar-left">
                    <?php require_once("../Main/mainleftpanel.php"); ?>
                </aside>
                <section role="main" class="content-body">
                    <header class="page-header">
                        <h2>Registro de Datos del Propietario</h2>
                    </header>
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="nav justify-content-center">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="../Gestionpropietario/propietario.php">Propietario</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="../Gestionpropietario/familiares.php">Familiares</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="../Gestionpropietario/posesiones.php">Posesiones</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="../Gestionpropietario/cierre.php">Cierre</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h3>Nuevo Documento</h3>
                        </div>
                        <div class="border border-secondary  p-2 rounded-2 col-12">
                            <!-- ======= FORMULARIO DATOS DEL PACIENTE ======= -->
                            <h6 class="bg-primary p-2  col-sm-12 text-white rounded"> DATOS 
                            </h6>
                            <div class="form-group row m-t-15">
                                <label for="" class="col-sm-2 col-form-label">Tipo de Documento</label>
                                <div class="col-sm-2">
                                    <select class="form-control select2" name="tipo_doc" id="tipo_doc" data-placeholder="Seleccione" style="width: 100%" onclick="validarInputs()" required>
                                        <option label="Seleccione"></option>
                                        <option value="D.N.I">DNI</option>
                                        <option value="C.E">Carnet de Extranjería</option>
                                    </select>
                                </div>
                                <label for="" class="col-sm-2 col-form-label">Nro de Documento</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="num_doc" placeholder="">
                                </div>
                                <label for="" class="col-sm-2 col-form-label" hidden></label>
                                <div class="col-sm-2" hidden>
                                    <input type="text" class="form-control" id="" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Nombres</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="" placeholder="">
                                </div>
                                <label for="" class="col-sm-2 col-form-label">Apellido Paterno</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="" placeholder="">
                                </div>
                                <label for="" class="col-sm-2 col-form-label">Apellido Materno</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Fecha De Nacimiento</label>
                                <div class="col-sm-2">
                                    <input type="date" class="form-control" id="" placeholder="">
                                </div>
                                <label for="" class="col-sm-2 col-form-label">Edad</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="" placeholder="">
                                </div>
                                <label for="" class="col-sm-2 col-form-label">Sexo</label>
                                <div class="col-sm-2">
                                    <select class="form-control select2" name="" id="" data-placeholder="Seleccione" style="width: 100%" required>
                                        <option label="Seleccione"></option>
                                        <option value="#">Masculino</option>
                                        <option value="#">Femenino</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Direccion</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Departamento</label>
                                <div class="col-sm-2">
                                    <select class="form-control select2" name="" id="cbx_departamento" data-placeholder="Seleccione" style="width: 100%" onchange="ListarDepartamentos()" required>
                                    </select>
                                </div>
                                <label for="" class="col-sm-2 col-form-label">Provincia</label>
                                <div class="col-sm-2">
                                    <select class="form-control select2" name="" id="cbx_provincia" data-placeholder="Seleccione" style="width: 100%" onchange="ListarProvincias()" required>
                                    </select>
                                </div>
                                <label for="" class="col-sm-2 col-form-label">Distrito</label>
                                <div class="col-sm-2">
                                    <select class="form-control select2" name="" id="cbx_distrito" data-placeholder="Seleccione" style="width: 100%" required>
                                        <option label="Seleccione"></option>
                                        <option value="#">.</option>
                                        <option value="#">.</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Telefono</label>
                                <div class="col-sm-2">
                                    <input type="number" class="form-control" id="" placeholder="">
                                </div>
                                <label for="" class="col-sm-2 col-form-label">Correo(Padre/Tutor)</label>
                                <div class="col-sm-2">
                                    <input type="email" class="form-control" id="" placeholder="">
                                </div>
                            </div>


                            <h5 class="">Nivel y grado a postular</h5>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Nivel</label>
                                <div class="col-sm-2">
                                    <select class="form-control select2" name="" id="" data-placeholder="Seleccione" style="width: 100%" required>
                                        <option label="Seleccione"></option>
                                        <option value="#">Inicial</option>
                                        <option value="#">Primaria</option>
                                        <option value="#">Secundaria</option>
                                    </select>
                                </div>
                                <label for="" class="col-sm-2 col-form-label">Grado</label>
                                <div class="col-sm-2">
                                    <select class="form-control select2" name="" id="" data-placeholder="Seleccione" style="width: 100%" required>
                                        <option label="Seleccione"></option>
                                        <option value="#">Primero</option>
                                        <option value="#">Segundo</option>
                                        <option value="#">Tercero</option>
                                        <option value="#">Cuarto</option>
                                        <option value="#">Quinto</option>
                                        <option value="#">Sexto</option>
                                    </select>
                                </div>
                                <label for="" class="col-sm-2 col-form-label" hidden></label>
                                <div class="col-sm-2">
                                    <input type="email" class="form-control" id="" placeholder="" hidden>
                                </div>
                            </div>
                            <br>
                            <h6 class="bg-primary p-2  col-sm-12 text-white rounded"> DATOS DEL TUTOR / PADRE / MADRE
                            </h6>
                            <h5 class="">Padre</h5>
                            <div class="form-group row m-t-15">
                                <label for="" class="col-sm-2 col-form-label">Tipo de Documento</label>
                                <div class="col-sm-2">
                                    <select class="form-control select2" name="" id="" data-placeholder="Seleccione" style="width: 100%" required>
                                        <option label="Seleccione"></option>
                                        <option value="#">DNI</option>
                                        <option value="#">Carnet de Extranjería</option>
                                    </select>
                                </div>
                                <label for="" class="col-sm-2 col-form-label">Nro de Documento</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="" placeholder="">
                                </div>
                                <label for="" class="col-sm-2 col-form-label" hidden></label>
                                <div class="col-sm-2" hidden>
                                    <input type="text" class="form-control" id="" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Nombres</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="" placeholder="">
                                </div>
                                <label for="" class="col-sm-2 col-form-label">Apellido Paterno</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="" placeholder="">
                                </div>
                                <label for="" class="col-sm-2 col-form-label">Apellido Materno</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Fecha De Nacimiento</label>
                                <div class="col-sm-2">
                                    <input type="date" class="form-control" id="" placeholder="">
                                </div>
                                <label for="" class="col-sm-2 col-form-label">Edad</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="" placeholder="">
                                </div>
                                <label for="" class="col-sm-2 col-form-label">Sexo</label>
                                <div class="col-sm-2">
                                    <select class="form-control select2" name="" id="" data-placeholder="Seleccione" style="width: 100%" required>
                                        <option label="Seleccione"></option>
                                        <option value="#">Masculino</option>
                                        <option value="#">Femenino</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row m-t-15">
                                <label for="" class="col-sm-2 col-form-label">Telefono Contacto</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="" placeholder="">
                                </div>
                                <label for="" class="col-sm-2 col-form-label">Correo Contacto</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="" placeholder="">
                                </div>
                                <label for="" class="col-sm-2 col-form-label">Profesión</label>
                                <div class="col-sm-2">
                                    <select class="form-control select2" name="" id="cbx_profesion" data-placeholder="Seleccione" style="width: 100%" required>
                                        <option label="Seleccione"></option>
                                        <option value="#">Ingeniéro</option>
                                        <option value="#">Médico</option>
                                        <option value="#">Abogado</option>
                                        <option value="#">Contador</option>
                                        <option value="#">Otro</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <br>
                            <h5 class="">Tutor/ Madre</h5>
                            <div class="form-group row m-t-15">
                                <label for="" class="col-sm-2 col-form-label">Tipo de Documento</label>
                                <div class="col-sm-2">
                                    <select class="form-control select2" name="" id="" data-placeholder="Seleccione" style="width: 100%" required>
                                        <option label="Seleccione"></option>
                                        <option value="#">DNI</option>
                                        <option value="#">Carnet de Extranjería</option>
                                    </select>
                                </div>
                                <label for="" class="col-sm-2 col-form-label">Nro de Documento</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="" placeholder="">
                                </div>
                                <label for="" class="col-sm-2 col-form-label" hidden></label>
                                <div class="col-sm-2" hidden>
                                    <input type="text" class="form-control" id="" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Nombres</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="" placeholder="">
                                </div>
                                <label for="" class="col-sm-2 col-form-label">Apellido Paterno</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="" placeholder="">
                                </div>
                                <label for="" class="col-sm-2 col-form-label">Apellido Materno</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Fecha De Nacimiento</label>
                                <div class="col-sm-2">
                                    <input type="date" class="form-control" id="" placeholder="">
                                </div>
                                <label for="" class="col-sm-2 col-form-label">Edad</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="" placeholder="">
                                </div>
                                <label for="" class="col-sm-2 col-form-label">Sexo</label>
                                <div class="col-sm-2">
                                    <select class="form-control select2" name="" id="" data-placeholder="Seleccione" style="width: 100%" required>
                                        <option label="Seleccione"></option>
                                        <option value="#">Masculino</option>
                                        <option value="#">Femenino</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row m-t-15">
                                <label for="" class="col-sm-2 col-form-label">Telefono Contacto</label>
                                <div class="col-sm-2">
                                    <input type="number" class="form-control" id="" placeholder="">
                                </div>
                                <label for="" class="col-sm-2 col-form-label">Correo Contacto</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="" placeholder="">
                                </div>
                                <label for="" class="col-sm-2 col-form-label">Profesión</label>
                                <div class="col-sm-2">
                                    <select class="form-control select2" name="" id="cbx_profesion_madre" data-placeholder="Seleccione" style="width: 100%" required>
                                        <option label="Seleccione"></option>
                                        <option value="#">Ingeniéro</option>
                                        <option value="#">Médico</option>
                                        <option value="#">Abogado</option>
                                        <option value="#">Contador</option>
                                        <option value="#">Otro</option>
                                    </select>
                                </div>

                            </div>
                            <br>
                            <h6 class="bg-primary p-2  col-sm-12 text-white rounded"> DOCUMENTOS SUSTENTOS
                            </h6>

                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="">Partida de Nacimiento:</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="file" class="">
                                </div>
                            </div>
                            <div class="row m-t-10">
                                <div class="col-sm-4">
                                    <label for="">DNI Postulante:</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="file">
                                </div>
                            </div>
                            <div class="row m-t-10">
                                <div class="col-sm-4">
                                    <label for="">DNI Tutor:</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="file">
                                </div>
                            </div>
                            <div class="row m-t-10">
                                <div class="col-sm-4">
                                    <label for="">DNI Padre:</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="file">
                                </div>
                            </div>
                            <div class="row m-t-10">
                                <div class="col-sm-4">
                                    <label for="">DNI Madre:</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="file">
                                </div>
                            </div>
                            <div class="row m-t-10">
                                <div class="col-sm-4">
                                    <label for="">Boleta de Pago Tutor:</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="file">
                                </div>
                            </div>
                            <div class="row m-t-10">
                                <div class="col-sm-4">
                                    <label for="">Boleta de Pago Padre:</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="file">
                                </div>
                            </div>
                            <div class="row m-t-10">
                                <div class="col-sm-4">
                                    <label for="">Boleta de Pago Madre:</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="file">
                                </div>
                            </div>
                            <div class="row m-t-10">
                                <div class="col-sm-4">
                                    <label for="">Vacunación:</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="file">
                                </div>
                            </div>
                            <div class="row m-t-10">
                                <div class="col-sm-4">
                                    <label for="">Certificado Médico:</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="file">
                                </div>
                            </div>
                            <div class="row m-t-10">
                                <div class="col-sm-4">
                                    <label for="">Exámen Psicológico:</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="file">
                                </div>
                            </div>
                            <div class="row m-t-10">
                                <div class="col-sm-4">
                                    <label for="">Constancia de EPS:</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="file">
                                </div>
                            </div>
                            <div class="row m-t-10">
                                <div class="col-sm-4">
                                    <label for="">Constancia de Salud:</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="file">
                                </div>
                            </div>
                            <div class="row m-t-10">
                                <div class="col-sm-4">
                                    <label for="">Libreta de Notas:</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="file">
                                </div>
                            </div>
                            <div class="row m-t-10">
                                <div class="col-sm-4">
                                    <label for="">CUI Colegio Anterior:</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="file">
                                </div>
                            </div>
                            <div class="row m-t-10">
                                <div class="col-sm-4">
                                    <label for="">Constancia de No Adeudo:</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="file">
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
    <?php require_once("../Main/mainjs.php"); ?>
</body>

</html>