<!-- MODAL -->
<div id="id_Modal_CD_JU_READ" class="modal fade cl_modal_CD_JU_READ" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="max-width: 90%!important;margin-top:2px!important;" role="document">
        <div class="modal-content caja">
            <form id="idMiFormulario_JU_READ" name="myForm">
                <div class="modal-header-Ver-pb pb-bg-ver pb-CardHeader">
                    <h5 style="margin:0;color: rgb(255, 255, 255)"><i class="fas fa-handshake"></i> DETALLE JUICIO -
                        C.U.I.L. :
                        <span class="demo-class-cuil" id="cuilpersona_JU_READ">xxx</span> - <span
                            class="demo-class-apenom">yyy</span>
                    </h5>
                </div>
                <br>
                <div class="modal-body-Alta-pb  card-content">
                    <div class="container">
                        <div class="row" style="flex-wrap:wrap;">
                            <div class="col s12 m6 l6 x6">
                                <div class="form-row">
                                    <div class="form-group col-md-2" >
                                        <i class="material-icons prefix text-danger">flag</i>
                                        <label for="idDataBase_JU_READ">ID</label>
                                        <input type="text" class="form-control" id="idDataBase_JU_READ" disabled>
                                    </div>
                                    <div class="form-group col-md-5" >
                                        <i class="material-icons prefix text-danger">today</i>
                                        <label for="idFechaSistema_JU_READ">Ingresado en Sistema</label>
                                        <input type="text" class="form-control" id="idFechaSistema_JU_READ" disabled>
                                    </div>

                                    <div class="form-group col-md-5">
                                        <i class="material-icons prefix text-success">today</i>
                                        <label for="idFechaEmision_JU_READ">Fecha Emision</label>
                                        <input id="idFechaEmision_JU_READ" name="idFechaEmision_JU_READ" type="text"
                                            class="form-control " disabled>
                                    </div>
                                </div>


                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <i class="material-icons prefix text-warning">mode_edit</i>
                                        <label for="idTipo_JU_READ">Tipo Juicio</label>
                                        <select id="idTipo_JU_READ" class="form-select form-control "
                                            aria-label="Default select example" disabled>
                                            <option value="1" selected>Presencial</option>
                                            <option value="2">Virtual</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <i class="material-icons prefix text-success">today</i>
                                        <label for="idFechaAudiencia_JU_READ">Fecha Juicio</label>
                                        <input id="idFechaAudiencia_JU_READ" name="idFechaAudiencia_JU_READ" type="text"
                                            class="form-control " disabled>
                                        <input type="text" class=" form-control" name="idnamecuil_JU_READ"
                                            id="idnamecuil_JU_READ" hidden>
                                    </div>


                                    <div class="form-group col-md-3">
                                        <i class="material-icons prefix text-warning">mode_edit</i>
                                        <label for="hora">Hora </label>
                                        <input id="hora"  name="hora" type="text" class="form-control " disabled />

                                    </div>


                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <i class="material-icons prefix text-warning">mode_edit</i>
                                        <label for="idComentario_JU_READ">Comentario</label>
                                        <textarea id="idComentario_JU_READ" name="idComentario_JU_READ"
                                            class="form-control" rows="4"
                                            placeholder="En Caso de Audiencia Presencial Especifique Ciudad y Lugar"disabled></textarea>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <i class="material-icons prefix text-warning">cloud</i>
                                        <label for="idCartellone_JU_READ">Cartellone Cloud
                                            <span style="font-size: 12px;color:rgb(12, 9, 211)">(Ingrese el link de
                                                sus hosting en la nube)</span> </label>
                                        <input type="text" class="form-control" id="idCartellone_JU_READ"
                                            name="idCartellone_JU_READ" disabled>
                                    </div>
                                </div>
                            </div>

                            <div class="col s12 m6 l6 x6">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <div class="card">
                                            <div class="card-image">
                                                <div id="PDF_JUICIO_READ" class=""></div>
                                                <span class="botonFullscreen"
                                                    onclick="fullscreenFUNCTION(document.getElementById('PDF_JUICIO_READ'))">Vista
                                                    Maximizada &nbsp</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer-Alta-pb d-flex align-items-center justify-content-end"
                    style="text-align: right;background-color: #212121;height:55px;border-radius: 0 0 10px 10px ;">

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



<script>
    function ShowMODAL_JU(rowregistro) {
        $('.cl_modal_CD_JU_READ').modal('show');

        fila = $(rowregistro).closest("tr");
        send_ID = fila.find("td:eq(0)").text();
        const parametros = JSON.stringify({
            id: send_ID
        })
        fetch('https://ut.sotano.digital/utjuicios/DB/JU_CUIL/' + parametros + '')
            .then(res => res.json())
            .then(json => {
                console.log(json);
                console.log(json[0].ID);
                console.log(json[0].CUIL);
                console.log(json[0].FECHAING);
                console.log(json[0].FECHADOC);
                console.log(json[0].TIPO);
                console.log(json[0].FECHAJUI);
                console.log(json[0].HORAJUI);
                console.log(json[0].COMENTARIO);
                console.log(json[0].LINK1);
                console.log(json[0].LINK2);

                $("#idDataBase_JU_READ").val(json[0].ID);
                $("#idFechaSistema_JU_READ").val(FechaConvertString(fecha1 = new Date(json[0].FECHAING)));
                $("#idFechaEmision_JU_READ").val(FechaConvertString(fecha2 = new Date(json[0].FECHADOC)));
                $("#idTipo_JU_READ option:selected" ).text(json[0].TIPO);
                $("#idFechaAudiencia_JU_READ").val(FechaConvertString(fecha3 = new Date(json[0].FECHAJUI)));
                $("#hora").val(json[0].HORAJUI  );
                $("#idComentario_JU_READ").val(json[0].COMENTARIO);
                $("#idCartellone_JU_READ").val(json[0].LINK1);

                const RutaPDF = "https://ut.sotano.digital/utpdf/" + json[0].LINK2;
                PDFObject.embed(RutaPDF, "#PDF_JUICIO_READ", {
                    pdfOpenParams: {
                        view: 'Fit'
                    }
                });

            });
    }
</script>


<script>
    $('#timepicker').timepicker({
        uiLibrary: 'bootstrap4'
    });
</script>

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