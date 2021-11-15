<?php if(!class_exists('Rain\Tpl')){exit;}?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  
    <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="info-box bg-gray-light">
                <span class="info-box-icon bg-blue-gradient"><i class="fa fa-user"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text text-bold" id="lbl_Enterprise">Percolore</span>
                    <br />
                    <span class="info-box-text" id="lbl_User">Desenvolvimento</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>

    </div>
  
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Activation</a></li>
    <li class="active">Relatório</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <!-- Your Page Content Here -->
    <div class="row">
        <div class="col-md-12">
            <div class="box ">
                <div class="box-header">
                    <h3 class="box-title" id="lbl_Report"> Relatório</h3>
                    <div class="box-tools pull-right box-solid box-success">
                        <!-- Buttons, labels, and many other things can be placed here! -->
                        <!-- Here is a label for example -->
                        <button type="button" class="btn btn-box-tool" data-widget="collapse">
                            <i class="fa fa-minus"></i>
                        </button>

                    </div><!-- /.box-tools -->


                    <div class="box-body">
                        <div class="row">
                            <div class="box box-solid">
                                <div class="box-body">
                                    <div class="col-xs-12 col-md-3">                                        
                                        <div class="form-group">
                                            <label id="lbl_SearchUser">Usuário</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                                <select class="form-control" style="width:auto;background:#fcfcfc;border:1px solid #e9e9e9"     onchange="dpMUser(this.value)" id="selectUser">
                                                </select>
                                            </div>
                                            <label id="lblDataInicial"> Data Inicio</label>
                                            <div class="input-group date">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text" class="form-control datepicker" id="dataInicio" placeholder="MM/DD/YYYY" value="">
                                            </div>
                                            <label id="lblDataFinal">Data Final</label>
                                            <div class="input-group date">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text" class="form-control datepicker" id="dataFim" placeholder="MM/DD/YYYY" value="">
                                            </div>
                                        </div>                                            
                                    </div>
                                    <div class="col-xs-12 col-md-3">                                          
                                        <div class="form-group">
                                            
                                        </div>                                            
                                    </div>

                                    <div class="col-xs-12 col-md-2">
                                        <div class="form-group">
                                            <button type="button" class="btn btn-primary" onclick="btnPesquisaModalReports()">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- /.box-header -->
                <div class="box-body">
                    <div box>
                        <div class="box-header">
                            <div class="box-tools pull-right">
                                <div class="form-group">
                                    <label>Page Size:</label>
                                    <select style="width:50px;background:#fcfcfc;border:1px solid #e9e9e9" onchange="dpMReport(this.value)" id="SelectPageModalReport">
                                        <option class="info-box-number" value="7">7</option>
                                        <option class="info-box-number" value="15">15</option>
                                        <option class="info-box-number" value="All">All</option>
                                    </select>
                                    <button type="button" class="btn btn-box-tool" id="btnSerchGridReport">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="box-body">
                            <div class="box-body table-responsive no-padding" id="gridModalReport"></div>
                        </div>
                    </div>

                </div><!-- /.box-body -->
                <div class="box-footer">

                </div><!-- box-footer -->
            </div>
        </div>
    </div>  


</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script type="text/javascript">
    var filteringSearchReport = '0';
    var counterPageSizeReport = 0;

    function today() {
        var d = new Date();
        var currDate = d.getDate();
        var currMonth = d.getMonth()+1;
        var currYear = d.getFullYear();
        return ((currMonth<10) ? '0'+currMonth : currMonth ) +  "/" + ((currDate<10) ? '0'+currDate : currDate ) + "/" + currYear  ;
    }

    jQuery(document).ready(function ($) {
        console.log('Report');

        document.getElementById('dataFim').value = today();
        document.getElementById('dataInicio').value = today();

        $.ajax({
            type: "post",           
            url: '/ReportController/ConsultaDadosUser',                      
            dataType: "json",
            success: function (dados) {
                $.each(dados, function (index, dadosResUser) {
                    
                    $('#selectUser').append('<option class="info-box-text" value="' + dadosResUser.id_usuario + '">' + dadosResUser.nomeUser + '</option>');
                    
                });
                btnPesquisaModalReports();
            }
        });
    
    });

     function readCookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }

    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    $("#btnSerchGridReport").click(function () {
        console.log('btnSerchGridReport');
        if (counterPageSizeReport > 0) {
            if (filteringSearchReport == '0') {
                filteringSearchReport = '1';
                $(function () {
                    $("#gridModalReport").jsGrid("option", 'filtering', true);
                });
            }
            else {
                filteringSearchReport = '0';
                $(function () {
                    $("#gridModalReport").jsGrid("option", 'filtering', false);
                    $("#gridModalReport").jsGrid("loadData");
                });
            }
        }
    });

    function dpMReport(periodo) {
        if (counterPageSizeReport > 0) {
            if (periodo == "7") {
                $(function () {
                    $("#gridModalReport").jsGrid("option", 'pageSize', 7);
                });
            }
            else if (periodo == "15") {
                $(function () {
                    $("#gridModalReport").jsGrid("option", 'pageSize', 15);
                });
            }
            else {
                $(function () {
                    $("#gridModalReport").jsGrid("option", 'pageSize', counterPageSizeReport);
                });
            }
        }
    }

    function btnPesquisaModalReports() {
        console.log('btnPesquisaModalReports');

        var dtI = document.getElementById("dataInicio").value.split('/');
        var dtF = document.getElementById("dataFim").value.split('/');

        var dataini = dtI[2] + "-" + dtI[0] + "-" + dtI[1] ;
        var datafim = dtF[2] + "-" + dtF[0] + "-" + dtF[1] ;

        var id_user = $("#selectUser").val();

        var parametros = {
             dataInicio: dataini,
             dataFim: datafim,
             idUser: id_user,
        };
        console.log(parametros);

        $.ajax({
            type: "post",            
            url: '/ReportController/ConsultaDadosReport',
            data: parametros,            
            dataType: "json",
            success: function (dados) {
                console.log(dados);
                var _dados = [];
                var _elementos = {};
                counterPageSizeReport = 0;
                try
                {
                    $.each(dados, function (index, dadosRes) {
                        _elementos = {};
                        _elementos.dataCadastro = dadosRes.dataCadastro;
                        if (dadosRes.numeroSerie != undefined) {
                            _elementos.numeroSerie = dadosRes.numeroSerie;
                        }
                        else {
                            _elementos.numeroSerie = "";
                        }
                        _elementos.nomeUser = dadosRes.nomeUser;
                        _elementos.nomeEmpresa = dadosRes.nomeEmpresa;
                        _elementos.tipoLicense = dadosRes.tipoLicense;
                        _elementos.descricaoLicense = dadosRes.descricaoLicense;

                        _dados.push(_elementos);
                        counterPageSizeReport++;
                    });
                    $(function () {
                        $("#gridModalReport").jsGrid({
                            height: "auto",
                            width: "100%",
                            sorting: true,
                            editing: false,
                            filtering: true,
                            paging: true,
                            pageSize: 7,
                            autoload: true,
                            heading: true,
                            selecting: false,
                            //altRows: true,
                            fields: [
                                { name: "dataCadastro", type: "text", width: 120, title: "Data"},
                                { name: "numeroSerie", type: "text", width: 100, title: "Série" },
                                { name: "nomeUser", type: "text", width: 120, title: "Usuario" },
                                { name: "nomeEmpresa", type: "text", width: 120, title: "Empresa"},
                                { name: "tipoLicense", type: "text", width: 150, title: "Tipo Licensa" },
                                { name: "descricaoLicense", type: "text", width: 220, title: "Descrição"},
                            ],
                            controller:
                            {
                                data: _dados,
                                loadData: function (filter) {
                                    console.log('loadData');
                                    return $.grep(this.data, function (item) {
                                        return (!filter.dataCadastro || item.dataCadastro.toUpperCase().includes(filter.dataCadastro.toUpperCase()))
                                            && (!filter.numeroSerie || item.numeroSerie.toUpperCase().includes(filter.numeroSerie.toUpperCase()))
                                            && (!filter.nomeUser || item.nomeUser.toUpperCase().includes(filter.nomeUser.toUpperCase()))
                                            && (!filter.nomeEmpresa || item.nomeEmpresa.toUpperCase().includes(filter.nomeEmpresa.toUpperCase()))
                                            && (!filter.tipoLicense || item.tipoLicense.toUpperCase().includes(filter.tipoLicense.toUpperCase()))
                                            && (!filter.descricaoLicense || item.descricaoLicense.toUpperCase().includes(filter.descricaoLicense.toUpperCase()));
                                    });
                                },
                            },
                        });
                    });

                    var valPage = document.getElementById("SelectPageModalReport");

                    if (valPage.value == "7") {
                        $(function () {
                            $("#gridModalReport").jsGrid("option", 'pageSize', 7);
                        });
                    }
                    else {
                        $(function () {
                            $("#gridModalReport").jsGrid("option", 'pageSize', counterPageSizeReport);
                        });
                    }
                    filteringSearchReport = '0';
                    $(function () {
                        $("#gridModalReport").jsGrid("option", 'filtering', false);
                    });
                }
                catch (e) {
                    console.log("Error Reader Report:" + e);
                }

            }
        });
    }

    function dpMUser(valor) {
        var _dados = [];
        
        counterPageSizeReport = 0;
        try {
           
            $(function () {
                $("#gridModalReport").jsGrid({
                    height: "auto",
                    width: "100%",
                    sorting: true,
                    editing: false,
                    filtering: true,
                    paging: true,
                    pageSize: 7,
                    autoload: true,
                    heading: true,
                    selecting: false,
                    fields: [
                        { name: "dataCadastro", type: "text", width: 120, title: $('#hdnGridDataCadastro').val() },
                        { name: "numeroSerie", type: "text", width: 100, title: $('#hdnGridNumeroSerie').val() },
                        { name: "nomeUser", type: "text", width: 120, title: $('#hdnGridUsuario').val() },
                        { name: "nomeEmpresa", type: "text", width: 120, title: $('#hdnGridEnterprise').val() },
                        { name: "tipoLicense", type: "text", width: 150, title: $('#hdnGridTipoLicenca').val() },
                        { name: "descricaoLicense", type: "text", width: 220, title: $('#hdnGridDescricaoLicensa').val() },
                    ],
                    controller:
                    {
                        data: _dados,
                        loadData: function (filter) {
                            console.log('loadData');
                            return $.grep(this.data, function (item) {
                                return (!filter.dataCadastro || item.dataCadastro.toUpperCase().includes(filter.dataCadastro.toUpperCase()))
                                    && (!filter.numeroSerie || item.numeroSerie.toUpperCase().includes(filter.numeroSerie.toUpperCase()))
                                    && (!filter.nomeUser || item.nomeUser.toUpperCase().includes(filter.nomeUser.toUpperCase()))
                                    && (!filter.nomeEmpresa || item.nomeEmpresa.toUpperCase().includes(filter.nomeEmpresa.toUpperCase()))
                                    && (!filter.tipoLicense || item.tipoLicense.toUpperCase().includes(filter.tipoLicense.toUpperCase()))
                                    && (!filter.descricaoLicense || item.descricaoLicense.toUpperCase().includes(filter.descricaoLicense.toUpperCase()));
                            });
                        },
                    },
                });
            });

            var valPage = document.getElementById("SelectPageModalReport");

            if (valPage.value == "7") {
                $(function () {
                    $("#gridModalReport").jsGrid("option", 'pageSize', 7);
                });
            }
            else {
                $(function () {
                    $("#gridModalReport").jsGrid("option", 'pageSize', counterPageSizeReport);
                });
            }
            filteringSearchReport = '0';
            $(function () {
                $("#gridModalReport").jsGrid("option", 'filtering', false);
            });
        }
        catch (e) {
            console.log("Error Reader Report:" + e);
        }
    }

    
 </script> 
