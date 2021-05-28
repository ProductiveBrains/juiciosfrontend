<!-- MODAL -->
<div id="id_modal_CD_EM_READ" class="modal fade cl_modal_CD_EM_READ" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="max-width: 90%!important;margin-top:2px!important;" role="document">
        <div class="modal-content caja">
            <div class="modal-header-Ver-pb pb-bg-ver pb-CardHeader">
                <h5 style="margin:0;color: rgb(255, 255, 255)"><i class="fas fa-file-upload"></i> DETALLE CARTA DOCUMENTO - EMITIDA - C.U.I.L. :
                    <span class="demo-class-cuil">xxx</span> - <span class="demo-class-apenom">yyy</span>
                </h5>
            </div>
            <br>
            <div class="modal-body-Ver-pb  card-content">
                <div class="container">
                    <div class="row" style="flex-wrap:wrap;">
                        <div class="col s12 m6 l6 x6">
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <i class="material-icons prefix text-danger">flag</i>
                                    <label for="id_CD_EM_Read_DataBase">ID</label>
                                    <input type="text" class="form-control" id="id_CD_EM_Read_DataBase" disabled>
                                </div>
                                <div class="form-group col-md-5">
                                    <i class="material-icons prefix text-danger">today</i>
                                    <label for="id_CD_EM_Read_FechaSistema">Ingresado en Sistema</label>
                                    <input type="text" class="form-control" id="id_CD_EM_Read_FechaSistema" disabled>
                                </div>

                                <div class="form-group col-md-5">
                                    <i class="material-icons prefix text-success">today</i>
                                    <label for="id_CD_EM_Read_FechaEmision">Fecha Emision</label>
                                    <input type="text" class="form-control" id="id_CD_EM_Read_FechaEmision" disabled>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-5">
                                    <i class="material-icons prefix text-success">event_note</i>
                                    <label for="id_CD_EM_Read_TipoReclamo">Tipo de Reclamo</label>
                                    <input id="id_CD_EM_Read_TipoReclamo" name="idTipoReclamo" type="text"
                                        class="form-control" disabled>
                                    <p id="test"></p>
                                </div>
                                <div class="form-group col-md-7">
                                    <i class="material-icons prefix text-success">event_note</i>
                                    <label for="id_CD_EM_Read_EstudioJuridico">Estudio Juridico</label>
                                    <input id="id_CD_EM_Read_EstudioJuridico" name="idEstudioJuridico" type="text"
                                        class="form-control" disabled>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <i class="material-icons prefix text-warning">mode_edit</i>
                                    <label for="id_CD_EM_Read_Comentario">Comentario</label>
                                    <textarea id="id_CD_EM_Read_Comentario" name="idComentario" class="form-control" rows="4"
                                        placeholder="Descripcion detallada optativa" disabled></textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <i class="material-icons prefix text-warning">cloud</i>
                                    <label for="id_CD_EM_Read_Cartellone">Cartellone Cloud
                                        <span style="font-size: 12px;color:rgb(12, 9, 211)">(Ingrese el link de
                                            sus hosting en la nube)</span> </label>
                                    <input type="text" class="form-control" id="id_CD_EM_Read_Cartellone" name="idCartellone"
                                        disabled>
                                </div>
                            </div>
                        </div>

                        <div class="col s12 m6 l6 x6">
                            <div class="form-row">                                
                                <div class="form-group col-md-12">
                                    <div class="card">
                                        <div class="card-image">
                                            <div id="PDF_CONTESTACIONES_READ" class=""></div>
                                            <span class="botonFullscreen" onclick="fullscreenFUNCTION(document.getElementById('PDF_CONTESTACIONES_READ'))">Vista Maximizada &nbsp</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer-Ver-pb d-flex align-items-center justify-content-end"
                style="text-align: right;background-color: #212121;height:55px;border-radius: 0 0 10px 10px ;">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"
                    style="background-color: #0D47A1;color:white;margin-left:10px;">
                    <i class="material-icons right  pbicon1">cancel</i>
                    CERRAR
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Funcion Consultar API y traer los datos del Registro consultado -->
<script>
    function ShowMODAL_CDEM(rowregistro) {
        $('.cl_modal_CD_EM_READ').modal('show');

        fila = $(rowregistro).closest("tr");
        send_ID = fila.find("td:eq(0)").text();
        const parametros = JSON.stringify({
            id: send_ID
        })
        fetch('http://sotano.digital/utjuicios/DB/CD_EM_CUIL/' + parametros + '')
            .then(res => res.json())
            .then(json => {
                console.log(json);
                console.log(json[0].ID);
                console.log(json[0].CUIL);
                console.log(json[0].FECHAING);
                console.log(json[0].FECHADOC);
                console.log(json[0].RECLAMO);
                console.log(json[0].ESTUDIO);
                console.log(json[0].COMENTARIO);
                console.log(json[0].LINK1);
                console.log(json[0].LINK2);

                $("#id_CD_EM_Read_DataBase").val(json[0].ID);
                // $("#id_CD_EM_Read_FechaSistema").val(FechaConvertString(fecha1 = new Date(json[0].FECHAING)));
                // $("#id_CD_EM_Read_FechaEmision").val(FechaConvertString(fecha2 = new Date(json[0].FECHADOC)));
                $("#id_CD_EM_Read_FechaSistema").val(json[0].FECHAING);
                $("#id_CD_EM_Read_FechaEmision").val(json[0].FECHADOC);
                $("#id_CD_EM_Read_TipoReclamo").val(json[0].RECLAMO);
                $("#id_CD_EM_Read_EstudioJuridico").val(json[0].ESTUDIO);
                $("#id_CD_EM_Read_Comentario").val(json[0].COMENTARIO);
                $("#id_CD_EM_Read_Cartellone").val(json[0].LINK1);
                
                const RutaPDF="http://sotano.digital/utpdf/"+json[0].LINK2;
                PDFObject.embed(RutaPDF, "#PDF_CONTESTACIONES_READ", { pdfOpenParams: { view: 'Fit' } });
                
            })
    };
</script>


<!-- CSS CONTENEDOR MODAL -->
<style>
    /* Modal Content */
    .modal-content-Ver-pb {
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

    .pb-bg-ver {
        background: rgb(123, 123, 11);
        background: linear-gradient(0deg, rgba(123, 123, 11) 0%, rgb(157, 148, 17) 67%rgb(204, 217, 66) 100%);
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

    .modal-header-Ver-pb {
        padding-left: 20px;
        padding-bottom: 10px;
    }

    .modal-body-Ver-pb {
        padding: 2px 16px;
    }

    .modal-footer-Ver-pb {
        padding-top: 10px;
        padding-bottom: 10px;
        padding-right: 20px;
    }

</style>


<!-- Contenedor DIV PDF -->
<style>
    #PDF_CONTESTACIONES_READ {
        background-color: #DDDDDD;
        height: 450px;
        border-radius: 5px;
        display: flex;
    }
</style>


<style>
    .botonFullscreen {
        color: #fff;
        background-color: rgb(49, 45, 45);
        font-weight: bold;
        position: absolute;
        bottom: 0;
        left: 0;
        max-width: 100%;
        padding-left: 5px;
        margin-left: 25px;
        margin-bottom: 10px;
        padding-bottom: 2px;
        border-radius: 5px 5px 5px 5px;
        box-shadow: 3px 3px 6px 0px rgba(105, 202, 72, 0.44);
        -webkit-box-shadow: 3px 3px 6px 0px rgba(105, 202, 72, 0.44);
        -moz-box-shadow: 3px 3px 6px 0px rgba(105, 202, 72, 0.44);
        cursor: pointer;

    }
    .botonFullscreen:hover {
        border-radius: 5px 5px 5px 5px;
        box-shadow: 5px 5px 6px 0px rgba(105, 202, 72, 0.95);
        -webkit-box-shadow: 5px 5px 6px 0px rgba(105, 202, 72, 0.95);
        -moz-box-shadow: 5px 5px 6px 0px rgba(105, 202, 72, 0.95);
    }
</style>