<!-- MODAL -->
<div id="id_Modal_CD_RE_CREATE" class="modal fade cl_modal_CD_RE_CREATE" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="max-width: 90%!important;margin-top:2px!important;" role="document">
        <div class="modal-content caja">
            <form id="idMiFormulario" name="myForm">
                <div class="modal-header-Alta-pb pb-bg-alta pb-CardHeader">
                    <h5 style="margin:0;color: rgb(255, 255, 255)"><i class="fas fa-file-download"></i> ALTA CARTA
                        DOCUMENTO - RECIBIDA - C.U.I.L. :
                        <span class="demo-class-cuil" id="cuilpersona">xxx</span> - <span
                            class="demo-class-apenom">yyy</span>
                    </h5>
                </div>
                <br>
                <div class="modal-body-Alta-pb  card-content">
                    <div class="container">
                        <div class="row" style="flex-wrap:wrap;">
                            <div class="col s12 m6 l6 x6">
                                <div class="form-row">
                                    <div class="form-group col-md-2" hidden>
                                        <i class="material-icons prefix text-danger">flag</i>
                                        <label for="idDataBase">ID</label>
                                        <input type="text" class="form-control" id="idDataBase">
                                    </div>
                                    <div class="form-group col-md-5" hidden>
                                        <i class="material-icons prefix text-danger">today</i>
                                        <label for="idFechaSistema">Ingresado en Sistema</label>
                                        <input type="date" class="form-control" id="idFechaSistema">
                                    </div>

                                    <div class="form-group col-md-5">
                                        <i class="material-icons prefix text-success">today</i>
                                        <label for="idFechaEmision">Fecha Emision</label>
                                        <input id="idFechaEmision" name="idFechaEmision" type="date"
                                            class="form-control validate" required="" aria-required="true">
                                        <input type="text" class=" form-control" name="idnamecuil" id="idnamecuil"
                                            hidden>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-5">
                                        <i class="material-icons prefix text-success">event_note</i>
                                        <label for="idTipoReclamo">Tipo de Reclamo</label>
                                        <input id="idTipoReclamo" name="idTipoReclamo" type="text"
                                            class="form-control validate" required="" aria-required="true">
                                    </div>
                                    <div class="form-group col-md-7">
                                        <i class="material-icons prefix text-success">event_note</i>
                                        <label for="idEstudioJuridico">Estudio Juridico</label>
                                        <input id="idEstudioJuridico" name="idEstudioJuridico" type="text"
                                            class="form-control validate" required="" aria-required="true">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <i class="material-icons prefix text-warning">mode_edit</i>
                                        <label for="idComentario">Comentario</label>
                                        <textarea id="idComentario" name="idComentario" class="form-control" rows="4"
                                            placeholder="Descripcion detallada optativa"></textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <i class="material-icons prefix text-warning">cloud</i>
                                        <label for="idCartellone">Cartellone Cloud
                                            <span style="font-size: 12px;color:rgb(12, 9, 211)">(Ingrese el link de
                                                sus hosting en la nube)</span> </label>
                                        <input type="text" class="form-control" id="idCartellone" name="idCartellone">
                                    </div>
                                </div>
                            </div>

                            <div class="col s12 m6 l6 x6">
                                <div class="form-row">
                                    <div class="form-group col-md-12" hidden>
                                        <i class="material-icons prefix text-danger">cloud</i>
                                        <label for="idProductiveBrains">PB Cloud
                                            <span style="font-size: 12px;color:rgb(12, 9, 211)">(Generacion Automatica
                                                al subir el PDF y Confirmar)</span> </label>
                                        <input type=" text" class="form-control" id="idProductiveBrains"
                                            name="idProductiveBrains">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <?php include ("partials/_pbCardPdfPreview.php") ?> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer-Alta-pb d-flex align-items-center justify-content-end"
                    style="text-align: right;background-color: #212121;height:55px;border-radius: 0 0 10px 10px ;">
                    <a class="btn pb-btnFooter" id="botonGrabar" type="submit"
                        style="background-color: #880E4F;color:white">
                        <i class="material-icons right pbicon1">save</i>Grabar
                    </a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                        style="background-color: #0D47A1;color:white;margin-left:10px;">
                        <i class="material-icons right  pbicon1">cancel</i>
                        CERRAR
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- CSS MODAL -->
<style>
    /* Modal Content */
    .modal-content-Alta-pb {
        position: relative;
        /* background-color: #6a946a !important; */
        margin: auto;
        padding: 0;
        border: 1px solid #888;
        width: 80%;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        -webkit-animation-name: animatetop;
        -webkit-animation-duration: 0.4s;
        animation-name: animatetop;
        animation-duration: 0.4s
    }

    .modal-content {
        background-color: #b3b8b3;
    }

    .caja {
        border-radius: 10px;
        box-shadow: 2px 2px 2px 1px rgba(73, 189, 232, 0.9);
    }

    .caja:hover {
        border-radius: 10px;
        box-shadow: 2px 2px 2px 1px rgba(250, 238, 72, 0.9);
    }

    .pb-CardHeader {
        border-radius: 10px 10px 0 0;
        padding-left: 10px;
        padding-top: 5px;
        padding-bottom: 5px
    }

    .pb-bg-alta {
        background: rgb(5, 82, 34);
        background: linear-gradient(0deg, rgba(5, 82, 34, 1) 0%, rgba(9, 96, 25, 1) 67%, rgba(101, 219, 100, 1) 100%);
        color: white;
    }

    .pb-btnFooter {
        border-radius: 5px;
    }

    .pb-btnFooter:hover {
        border-radius: 10px;
        color: rgba(242, 255, 4, 0.9);
        box-shadow: 2px 2px 2px 1px rgba(73, 189, 232, 0.9);
        font-weight: bold;
    }

    .modal-header-Alta-pb {
        padding-left: 20px;
        padding-bottom: 10px;
    }

    .modal-body-Alta-pb {
        padding: 2px 16px;
    }

    .modal-footer-Alta-pb {
        padding-top: 10px;
        padding-bottom: 10px;
        padding-right: 20px;
    }

    /* .modal-footer-Alta-pb {
        padding-top: 10px;
        padding-bottom: 10px;
        padding-right: 20px;
    } */
</style>
<!-- BOTONES MODAL -->

<script>
    $("#botonGrabar").click(function (event) {

        var validaciones = 0;

        if ($("#idFechaEmision").val() == "") {
            alert("Ingrese la Fecha de Emision de la Carta Documento!");
            validaciones = 0;
        } else {
            validaciones = validaciones + 1;
        }

        if ($("#idTipoReclamo").val() == "") {
            alert("Coloque el Tipo de Reclamo");
            validaciones = 0;
        } else {
            validaciones = validaciones + 1;
        }

        if ($("#idEstudioJuridico").val() == "") {
            alert("Coloque el Estudio Juridico del Demandante");
            validaciones = 0;
        } else {
            validaciones = validaciones + 1;
        }

        if ($("#id_file_pdf").val() == "") {
            alert("Debe Seleccionar el PDF del original");
            validaciones = 0;
        } else {
            validaciones = validaciones + 1;
        }

        if (validaciones == 4) {
            // hago invisible el boton grabar para evitar la replicacion de la grabacion
            $('.cl_modal_CD_RE_CREATE').modal('hide');
            event.preventDefault(); //stop submit the form, we will post it manually.
            var form = $('#idMiFormulario')[0]; // Get form
            var data = new FormData(form); // Create an FormData object

            data.append("numerocuil", $("#cuilpersona").text());
            data.append("idFechaEmision", $("#idFechaEmision").val());
            data.append("idTipoReclamo", $("#idTipoReclamo").val());
            data.append("idEstudioJuridico", $("#idEstudioJuridico").val());
            data.append("idComentario", $("#idComentario").val());
            data.append("idCartellone", $("#idCartellone").val());

            $.ajax({
                type: "POST",
                enctype: 'multipart/form-data',
                url: "https://ut.sotano.digital/utjuicios/UPFILE/CD_RE",
                data: data,
                processData: false,
                contentType: false,
                cache: false,
                timeout: 600000,
                success: function (data) {
                    console.log("SUCCESS : ", data);
                    $('#idMiFormulario').trigger("reset");
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Se ha Grabado su Documento',
                        showConfirmButton: false,
                        timer: 1500
                    })
                    // Realizar Reload AJAX del listado de Cartas Documentos Recibidas.Para mustreo del ultimo registro ingresado
                    tablaCartaDocumento.ajax.reload(null, false);
                },
                error: function (e) {
                    console.log("ERROR : ", e);
                }
            });

        }

    });
</script>