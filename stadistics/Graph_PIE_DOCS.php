<!-- TOTAL DE CARTAS DOCUMENTO y TIPO -->
<!-- Graph_DOCS_TOT -->
<script>
    var Estilo1 = {
        // colors: ['#2b908f', '#90ee7e', '#f45b5b', '#7798BF', '#aaeeee', '#ff0066',
        //     '#eeaaee', '#55BF3B', '#DF5353', '#7798BF', '#aaeeee'
        // ],
        chart: {
            backgroundColor: {
                linearGradient: {
                    x1: 0,
                    y1: 0,
                    x2: 1,
                    y2: 1
                },
                stops: [
                    [0, '#1D2552'],
                    [1, '#3e3e40']
                ]
            },
            style: {
                fontFamily: '\'Unica One\', sans-serif'
            },
            plotBorderColor: '#606063'
        },
        title: {
            style: {
                color: '#E0E0E3',
                textTransform: 'uppercase',
                fontSize: '20px'
            }
        },
        subtitle: {
            style: {
                color: '#E0E0E3',
                textTransform: 'uppercase'
            }
        },
        xAxis: {
            gridLineColor: '#707073',
            labels: {
                style: {
                    color: '#E0E0E3'
                }
            },
            lineColor: '#707073',
            minorGridLineColor: '#505053',
            tickColor: '#707073',
            title: {
                style: {
                    color: '#A0A0A3'

                }
            }
        },
        yAxis: {
            gridLineColor: '#707073',
            labels: {
                style: {
                    color: '#E0E0E3'
                }
            },
            lineColor: '#707073',
            minorGridLineColor: '#505053',
            tickColor: '#707073',
            tickWidth: 1,
            title: {
                style: {
                    color: '#A0A0A3'
                }
            }
        },
        tooltip: {
            backgroundColor: 'rgba(0, 0, 0, 0.85)',
            style: {
                color: '#F0F0F0'
            }
        },
        plotOptions: {
            series: {
                dataLabels: {
                    color: '#F0F0F3',
                    style: {
                        fontSize: '13px'
                    }
                },
                marker: {
                    lineColor: '#333'
                }
            },
            boxplot: {
                fillColor: '#505053'
            },
            candlestick: {
                lineColor: 'white'
            },
            errorbar: {
                color: 'white'
            }
        },
        legend: {
            backgroundColor: 'rgba(0, 0, 0, 0.5)',
            itemStyle: {
                color: '#E0E0E3'
            },
            itemHoverStyle: {
                color: '#FFF'
            },
            itemHiddenStyle: {
                color: '#606063'
            },
            title: {
                style: {
                    color: '#C0C0C0'
                }
            }
        },
        credits: {
            style: {
                color: '#666'
            }
        },
        labels: {
            style: {
                color: '#707073'
            }
        },
        drilldown: {
            activeAxisLabelStyle: {
                color: '#F0F0F3'
            },
            activeDataLabelStyle: {
                color: '#F0F0F3'
            }
        },
        navigation: {
            buttonOptions: {
                symbolStroke: '#DDDDDD',
                theme: {
                    fill: '#505053'
                }
            }
        },
        // scroll charts
        rangeSelector: {
            buttonTheme: {
                fill: '#505053',
                stroke: '#000000',
                style: {
                    color: '#CCC'
                },
                states: {
                    hover: {
                        fill: '#707073',
                        stroke: '#000000',
                        style: {
                            color: 'white'
                        }
                    },
                    select: {
                        fill: '#000003',
                        stroke: '#000000',
                        style: {
                            color: 'white'
                        }
                    }
                }
            },
            inputBoxBorderColor: '#505053',
            inputStyle: {
                backgroundColor: '#333',
                color: 'silver'
            },
            labelStyle: {
                color: 'silver'
            }
        },
        navigator: {
            handles: {
                backgroundColor: '#666',
                borderColor: '#AAA'
            },
            outlineColor: '#CCC',
            maskFill: 'rgba(255,255,255,0.1)',
            series: {
                color: '#7798BF',
                lineColor: '#A6C7ED'
            },
            xAxis: {
                gridLineColor: '#505053'
            }
        },
        scrollbar: {
            barBackgroundColor: '#808083',
            barBorderColor: '#808083',
            buttonArrowColor: '#CCC',
            buttonBackgroundColor: '#606063',
            buttonBorderColor: '#606063',
            rifleColor: '#FFF',
            trackBackgroundColor: '#404043',
            trackBorderColor: '#404043'
        }
    };
</script>


<!-- // Estilo Charts -->
<style>
    #Graph_DOCS_TOT {
        height: 412px;
    }

    #Graph_RECL_TOT {
        height: 412px;
    }
</style>


<script>
    function CargoGrafico1() {
        // Declaration  of  variables for change  dinamic the graph
        var TOT_CD;
        var TOT_CO;
        var TOT_AU;
        var TOT_JU;

        // Extract the  data  from  DataBase
        fetch('https://ut.sotano.digital/utjuicios/DB/RES_DOCS')
            .then(response => response.json())
            .then(data => {
                TOT_CD = data[0].TOTAL;
                TOT_CO = data[1].TOTAL;
                TOT_AU = data[2].TOTAL;
                TOT_JU = data[3].TOTAL;

                var Opciones_Graph_DOCS_TOT = {
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false,
                        type: 'pie'
                    },
                    title: {
                        text: 'TOTAL CARTAS DOCUMENTO'
                    },
                    subtitle: {
                        text: 'Desarrollado por: productivebrains.com'
                    },
                    tooltip: {
                        pointFormat: ' <br>Total: {point.y}</br>'
                    },
                    accessibility: {
                        point: {
                            valueSuffix: '%'
                        }
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: true,
                                format: '<b>{point.name}</b>:<br>{point.percentage:.1f} %<br>TOTAL: {point.y}',
                            }
                        }
                    },
                    series: [{
                        // name: 'cantidad',
                        colorByPoint: true,
                        data: [{
                            name: 'RECIBIDAS',
                            y: TOT_CD,
                            sliced: true,
                            selected: true,
                            color: '#F7A35C', //rosa
                        }, {
                            name: 'CONTESTACIONES',
                            sliced: true,
                            y: TOT_CO,
                            color: '#90ED7D',
                        }, {
                            name: 'AUDIENCIAS',
                            sliced: true,
                            y: TOT_AU,
                            color: '#ff6eb4', //rosa
                        }, {
                            name: 'JUICIOS',
                            sliced: true,
                            y: TOT_JU,
                            color: '#ff004c',
                        }]
                    }],

                    colors: [
                        // '#28A745',
                        // '#DC3545',
                        // '#4caccf' //celeste
                    ]
                }

                Torta1 = Highcharts.chart('Graph_DOCS_TOT', Highcharts.merge(Opciones_Graph_DOCS_TOT, Estilo1));
            });

    }
</script>


<!-- ************************************************************** -->
<!-- TOTAL Y TIPO DE RECLAMOS -->
<!-- Graph_RECL_TOT -->
<script>
    var Estilo2 = {
        // colors: ['#2b908f', '#90ee7e', '#f45b5b', '#7798BF', '#aaeeee', '#ff0066',
        //     '#eeaaee', '#55BF3B', '#DF5353', '#7798BF', '#aaeeee'
        // ],
        chart: {
            backgroundColor: {
                linearGradient: {
                    x1: 0,
                    y1: 0,
                    x2: 1,
                    y2: 1
                },
                stops: [
                    [0, '#1D2552'],
                    [1, '#3e3e40']
                ]
            },
            style: {
                fontFamily: '\'Unica One\', sans-serif'
            },
            plotBorderColor: '#606063'
        },
        title: {
            style: {
                color: '#E0E0E3',
                textTransform: 'uppercase',
                fontSize: '20px'
            }
        },
        subtitle: {
            style: {
                color: '#E0E0E3',
                textTransform: 'uppercase'
            }
        },
        xAxis: {
            gridLineColor: '#707073',
            labels: {
                style: {
                    color: '#E0E0E3'
                }
            },
            lineColor: '#707073',
            minorGridLineColor: '#505053',
            tickColor: '#707073',
            title: {
                style: {
                    color: '#A0A0A3'

                }
            }
        },
        yAxis: {
            gridLineColor: '#707073',
            labels: {
                style: {
                    color: '#E0E0E3'
                }
            },
            lineColor: '#707073',
            minorGridLineColor: '#505053',
            tickColor: '#707073',
            tickWidth: 1,
            title: {
                style: {
                    color: '#A0A0A3'
                }
            }
        },
        tooltip: {
            backgroundColor: 'rgba(0, 0, 0, 0.85)',
            style: {
                color: '#F0F0F0'
            }
        },
        plotOptions: {
            series: {
                dataLabels: {
                    color: '#F0F0F3',
                    style: {
                        fontSize: '13px'
                    }
                },
                marker: {
                    lineColor: '#333'
                }
            },
            boxplot: {
                fillColor: '#505053'
            },
            candlestick: {
                lineColor: 'white'
            },
            errorbar: {
                color: 'white'
            }
        },
        legend: {
            backgroundColor: 'rgba(0, 0, 0, 0.5)',
            itemStyle: {
                color: '#E0E0E3'
            },
            itemHoverStyle: {
                color: '#FFF'
            },
            itemHiddenStyle: {
                color: '#606063'
            },
            title: {
                style: {
                    color: '#C0C0C0'
                }
            }
        },
        credits: {
            style: {
                color: '#666'
            }
        },
        labels: {
            style: {
                color: '#707073'
            }
        },
        drilldown: {
            activeAxisLabelStyle: {
                color: '#F0F0F3'
            },
            activeDataLabelStyle: {
                color: '#F0F0F3'
            }
        },
        navigation: {
            buttonOptions: {
                symbolStroke: '#DDDDDD',
                theme: {
                    fill: '#505053'
                }
            }
        },
        // scroll charts
        rangeSelector: {
            buttonTheme: {
                fill: '#505053',
                stroke: '#000000',
                style: {
                    color: '#CCC'
                },
                states: {
                    hover: {
                        fill: '#707073',
                        stroke: '#000000',
                        style: {
                            color: 'white'
                        }
                    },
                    select: {
                        fill: '#000003',
                        stroke: '#000000',
                        style: {
                            color: 'white'
                        }
                    }
                }
            },
            inputBoxBorderColor: '#505053',
            inputStyle: {
                backgroundColor: '#333',
                color: 'silver'
            },
            labelStyle: {
                color: 'silver'
            }
        },
        navigator: {
            handles: {
                backgroundColor: '#666',
                borderColor: '#AAA'
            },
            outlineColor: '#CCC',
            maskFill: 'rgba(255,255,255,0.1)',
            series: {
                color: '#7798BF',
                lineColor: '#A6C7ED'
            },
            xAxis: {
                gridLineColor: '#505053'
            }
        },
        scrollbar: {
            barBackgroundColor: '#808083',
            barBorderColor: '#808083',
            buttonArrowColor: '#CCC',
            buttonBackgroundColor: '#606063',
            buttonBorderColor: '#606063',
            rifleColor: '#FFF',
            trackBackgroundColor: '#404043',
            trackBorderColor: '#404043'
        }
    };
</script>


<script>
    function CargoGrafico2() {
        fetch('https://ut.sotano.digital/utjuicios/DB/RES_RECLAMOS')
            .then(response => response.json())
            .then(data => {
                var processed_json = new Array();
                for (i = 0; i < data.length; i++) {
                    processed_json.push([data[i].RECLAMO, parseInt(data[i].TOTAL)]);
                }
                var Opciones_Graph_RECL_TOT = {
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false,
                        type: 'pie'
                    },
                    title: {
                        text: 'TIPOS DE RECLAMOS'
                    },
                    subtitle: {
                        text: 'Desarrollado por: productivebrains.com'
                    },
                    tooltip: {
                        pointFormat: ' <br>Total: {point.y}</br>'
                    },
                    accessibility: {
                        point: {
                            valueSuffix: '%'
                        }
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: true,
                                format: '<b>{point.name}</b>:<br>{point.percentage:.1f} %<br>TOTAL: {point.y}',
                            }
                        }
                    },
                    series: [{
                        name: 'TOTAL',
                        colorByPoint: true,
                        data: processed_json
                    }]
                }

                Torta2 = Highcharts.chart('Graph_RECL_TOT', Highcharts.merge(Opciones_Graph_RECL_TOT, Estilo2));
            });
    }


    function CargoGrafico3() {

        // Declaration  of  variables for change  dinamic the graph
        var TOT_LITIGANTE;
        var TOT_NOLITIGANTE;

        // Extract the  data  from  DataBase
        fetch('https://ut.sotano.digital/utjuicios/DB/TOTAL_LitVsNoLit')
            .then(response => response.json())
            .then(data => {
                TOT_NOLITIGANTE = data[0].TOTAL;
                TOT_LITIGANTE = data[1].TOTAL;

                var Opciones_Graph_DOCS_TOT = {
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false,
                        type: 'pie'
                    },
                    title: {
                        text: 'TOTAL LITIGANTES vs No LITIGANTES'
                    },
                    subtitle: {
                        text: 'Desarrollado por: productivebrains.com'
                    },
                    tooltip: {
                        pointFormat: ' <br>Total: {point.y}</br>'
                    },
                    accessibility: {
                        point: {
                            valueSuffix: '%'
                        }
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: true,
                                format: '<b>{point.name}</b>:<br>{point.percentage:.1f} %<br>TOTAL: {point.y}',
                            }
                        }
                    },
                    series: [{
                        // name: 'cantidad',
                        colorByPoint: true,
                        data: [{
                            name: 'Litigantes',
                            y: TOT_LITIGANTE,
                            sliced: true,
                            selected: true,
                            color: '#F7A35C', //rosa
                        }, {
                            name: 'No Litigantes',
                            sliced: true,
                            y: TOT_NOLITIGANTE,
                            color: '#90ED7D',
                        }]
                    }],

                    colors: [
                        // '#28A745',
                        // '#DC3545',
                        // '#4caccf' //celeste
                    ]
                }

                Torta1 = Highcharts.chart('TOTAL_LitVsNoLit', Highcharts.merge(Opciones_Graph_DOCS_TOT, Estilo1));
            });

    }

    function CargoGrafico4() {



        // Extract the  data  from  DataBase
        fetch('https://ut.sotano.digital/utjuicios/DB/TOTAL_ActvsNoAct')
            .then(response => response.json())
            .then(data => {
                var ACT_JUD_NO = data[0].TOTAL;
                var ACT_JUD_SI = data[1].TOTAL;
                var NO_ACT_JUD_NO = data[2].TOTAL;
                var NO_ACT_JUD_SI = data[3].TOTAL;

                var Opciones_Graph_DOCS_TOT = {
                    chart: {
                        type: 'column',
                        options3d: {
                            enabled: true,
                            alpha: 15,
                            beta: 15,
                            viewDistance: 25,
                            depth: 40
                        }
                    },

                    title: {
                        text: 'Activos vs Baja (Litigantes vs NoLitigantes)'
                    },

                    xAxis: {
                        categories: ['Activos', 'Baja'],
                        labels: {
                            skew3d: true,
                            style: {
                                fontSize: '16px'
                            }
                        }
                    },

                    yAxis: {
                        allowDecimals: false,
                        min: 0,
                        title: {
                            text: 'Cantidad',
                            skew3d: true
                        }
                    },

                    tooltip: {
                        headerFormat: '<b>{point.key}</b><br>',
                        pointFormat: '<span style="color:{series.color}">\u25CF</span> {series.name}: {point.y} '
                    },

                    plotOptions: {
                        column: {
                            stacking: 'normal',
                            depth: 40
                        }
                    },

                    series: [{
                        name: 'No Litigantes',
                        data: [ACT_JUD_NO, NO_ACT_JUD_NO],
                        stack: 'activo'
                    }, {
                        name: 'Litigante',
                        data: [ACT_JUD_SI, NO_ACT_JUD_SI],
                        stack: 'Litigante'
                    }, {
                        name: 'Total',
                        data: [ACT_JUD_NO + ACT_JUD_SI, NO_ACT_JUD_NO + NO_ACT_JUD_SI],
                        stack: 'total'
                    }],

                    colors: [
                        '#28A745', //verde
                        '#ff004c', // rojo                        
                        '#ffb300' //naranja
                    ]
                }

                Torta1 = Highcharts.chart('TOTAL_ActVsNoAct', Highcharts.merge(Opciones_Graph_DOCS_TOT, Estilo1));
            });

    }


    function CargoGrafico5() {



        // Extract the  data  from  DataBase
        fetch('https://ut.sotano.digital/utjuicios/DB/ACT_FORANEOLOCAL')
            .then(response => response.json())
            .then(data => {
                var LOCAL = data[0].TOTAL;
                var FORANEO = data[1].TOTAL;

                var Opciones_FORANEOSLOCAL = {
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: 0,
                        plotShadow: false
                    },
                    title: {
                        text: 'Personal<br>Activo',
                        align: 'center',
                        verticalAlign: 'middle',
                        y: 60
                    },
                    tooltip: {
                        pointFormat: '<span style="color:{series.color}">\u25CF</span> {series.name}: {point.y} '
                    },
                    accessibility: {
                        point: {
                            valueSuffix: '%'
                        }
                    },
                    plotOptions: {
                        pie: {
                            dataLabels: {
                                enabled: true,
                                distance: -50,
                                style: {
                                    fontWeight: 'bold',
                                    color: 'white'
                                }
                            },
                            startAngle: -90,
                            endAngle: 90,
                            center: ['50%', '75%'],
                            size: '110%'
                        }
                    },
                    series: [{
                        type: 'pie',
                        name: 'Personal Activo',
                        innerSize: '50%',
                        data: [
                            ['LOCALES', LOCAL],
                            ['FORANEOS', FORANEO]
                        ]
                    }],

                    colors: [
                        '#28A745', //verde
                        '#ff004c', // rojo                        
                        '#ffb300' //naranja
                    ]
                }

                Torta5 = Highcharts.chart('ACT_FORANEOLOCAL', Highcharts.merge(Opciones_FORANEOSLOCAL, Estilo1));
            });

    }

    function CargoGrafico6() {

        // Extract the  data  from  DataBase
        fetch('https://ut.sotano.digital/utjuicios/DB/BAJA_FORANEOLOCAL')
            .then(response => response.json())
            .then(data => {
                var LOCAL = data[0].TOTAL;
                var FORANEO = data[1].TOTAL;

                var Opciones_FORANEOSLOCAL_BAJA = {
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: 0,
                        plotShadow: false
                    },
                    title: {
                        text: 'Personal<br>de Baja',
                        align: 'center',
                        verticalAlign: 'middle',
                        y: 60
                    },
                    tooltip: {
                        pointFormat: '<span style="color:{series.color}">\u25CF</span> {series.name}: {point.y} '
                    },
                    accessibility: {
                        point: {
                            valueSuffix: '%'
                        }
                    },
                    plotOptions: {
                        pie: {
                            dataLabels: {
                                enabled: true,
                                distance: -50,
                                style: {
                                    fontWeight: 'bold',
                                    color: 'white'
                                }
                            },
                            startAngle: -90,
                            endAngle: 90,
                            center: ['50%', '75%'],
                            size: '110%'
                        }
                    },
                    series: [{
                        type: 'pie',
                        name: 'Personal Activo',
                        innerSize: '50%',
                        data: [
                            ['LOCALES', LOCAL],
                            ['FORANEOS', FORANEO]
                        ]
                    }],

                    colors: [
                        '#28A745', //verde
                        '#ff004c', // rojo                        
                        '#ffb300' //naranja
                    ]
                }

                Torta5 = Highcharts.chart('BAJA_FORANEOLOCAL', Highcharts.merge(Opciones_FORANEOSLOCAL_BAJA, Estilo1));
            });

    }
</script>