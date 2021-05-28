<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Testeando Tabla y fechas</title>


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>

  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Spicy+Rice" rel="stylesheet">
  <!-- ANIMATE.CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">


  <!-- CDN Datatable -->

  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"> -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.bootstrap4.min.css">
  <!-- CDN FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <!-- Material Icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.14.1/sweetalert2.min.css">
  <link rel="stylesheet" href="css/main.css">

  <!-- CDN Datatable -->
  <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.bootstrap4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.colVis.min.js"></script>


  Moment.js:
  <script src="https://momentjs.com/downloads/moment-with-locales.js"></script>
  <!-- Locales for moment.js-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.4/locale/es.js"></script>
  <script src="https://cdn.datatables.net/plug-ins/1.10.15/sorting/datetime-moment.js"></script>
  <script src="https://momentjs.com/downloads/moment-timezone-with-data.min.js"></script>

  <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
  <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css">


  <script src="js/es.js"></script>


</head>

<body>


  <div class="container mt-3" id="cuerpo">
    <div class="row mb-2">
      <div class="col-12">
        <h3 class="text-info   text-uppercase">Formato de Fechas y Ordenamiento </h3>
      </div>
    </div>

    <div class="row animated flipInY">
      <div class="col-12 py-3" style="background-color: #D3D3D5;">
        <!-- <table id="tablaPersonal" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%"> -->
        <table id="tablaCartaDocumento" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
          <thead>
            <tr>
              <th>ID</th>
              <th>CUIL</th>
              <th>Fecha Sistema</th>
              <th>Fecha Documento</th>
              <th>Reclamo</th>
              <th>Estudio Juridico</th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>
    </div>

  </div>

  <!-- DATATABLE LISTA DE PERSONAS -->
  <script>
    $(document).ready(function() {


      CUITparams = '20114411389';
      tablaCartaDocumento = $("#tablaCartaDocumento").DataTable({
        ajax: {
          url: 'https://ut.sotano.digital/utjuicios/DB/litigantesCDxCUIT/' + CUITparams + '',
          dataSrc: "",
          "processing": true,
          "serverSide": true,
          async: true
        },
        "autoWidth": false,
        columnDefs: [{
          //   targets: 2,
          //   render: function(data) {
          //     return moment(data).format('L');
          //   }
          // }, {
          //   targets: 3,
          //   render: function(data) {
          //     return moment(data).format('L');
          //   }
          }, {
            // bSortable: false,
            // targets: [0, 1, 2, 3, 4, ]
          },
          {
            "width": "30px",
            "targets": 0
          },
          {
            "width": "100px",
            "targets": 1
          },
          {
            "width": "110px",
            "targets": 2
          },
          {
            "width": "110px",
            "targets": 3
          },
          {
            "width": "110px",
            "targets": 4
          }
        ],
        "columns": [{
            data: "ID"
          },

          {
            data: "CUIL"
          },
          {
            data: "FECHAING"
          },
          {
            data: "FECHADOC"
          },
          {
            data: "RECLAMO"
          },
          {
            data: "ESTUDIO"
          }
        ],
        pageLength: 10,
        lengthMenu: [
          [10, 20, 50, -1],
          [10, 20, 50, 'Todos']
        ],
        // "pagingType": "full_numbers",
        "dom": "<'row'<'col-md-6'B><'col-md-6 text-right'l>>" +
          "<'row'<'col-md-9 text-left'i><'col-md-3'f>>" +
          "<'row'<'col-md-12't>>" +
          "<'row'<'col-md-12 text-left'p>>",
        buttons: [{
            extend: 'copy',
            text: ' <i class="material-icons text-white align-middle">scanner</i> Copiar al Portapapeles',
            titleAttr: 'Mantene la copia copia de registro en memoria, y pegado donde se te raje',
          },
          {
            extend: 'excel',
            text: ' <i class="fas fa-file-excel  text-success align-middle"></i> Excel',
            titleAttr: 'Descarge un XLS del filtrado realizado',

            orientation: 'landscape',
            pageSize: 'A4',
            // messageTop: nombrearchivo,
            messageBottom: 'PDF created by ProductiveBrains.com - developed by SJAS.',
            // title: TituloPDF,
          },
          {
            extend: 'pdfHtml5',
            text: ' <i class="far fa-file-pdf text-danger align-middle"></i> PDF',
            titleAttr: 'Abre en una nueva Pestaña el PDF del filtrado realizado',
          },
          {
            extend: 'csv',
            text: '<i class="fas fa-file-csv text-warning  align-middle"></i> CSV',
            titleAttr: 'Exporte a Valores separados por Comas',
          },
          {
            text: 'JSON',
            text: '<i class="fab fa-node-js text-warning align-middle"></i> Json',
            action: function(e, dt, button, config) {
              var data = dt.buttons.exportData();

              $.fn.dataTable.fileSave(
                new Blob([JSON.stringify(data)]),
                'Export.json'
              );
            },
            titleAttr: 'Exporte a Formato Json',
          },
        ],
        "language": {
          "url": "/json/lenguajedatatables.json"
        },
      });

    })
  </script>

</body>

</html>