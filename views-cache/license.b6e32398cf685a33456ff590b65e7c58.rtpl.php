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
    <li class="active">Licença</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <!-- Your Page Content Here -->
    <div class="row">
        <div class="col-md-6">
            <div class="box box-solid box-success">
                <div class="box-header with-border">
                    <h3 class="box-title" id="lbl_LiberaManutencao"> Token de Validade da Manutenção</h3>
                    <div class="box-tools pull-right">
                        <!-- Buttons, labels, and many other things can be placed here! -->
                        <!-- Here is a label for example -->
                        <button type="button" class="btn btn-box-tool" data-widget="collapse">
                            <i class="fa fa-minus"></i>
                        </button>

                    </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th style="width:5%;"><span class="info-box-text text-bold" id="lbl_Serial">Serial da Máquina</span></th>
                            <th style="width:90%;">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-cog"></i>
                                        </div>
                                        <input type="text" class="form-control" placeholder="" id="input_SerialManutencao" data-mask="0000">
                                    </div>
                                </div>

                            </th>
                        </tr>
                        <tr>
                            <th style="width:5%;"><span class="info-box-text text-bold" id="lbl_PrazoManutencao">Prazo Expiração</span></th>
                            <th style="width:90%;">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-ticket"></i>
                                        </div>
                                        <input type="text" class="form-control" placeholder="" id="input_PrazoManutencao" data-mask="00">
                                    </div>
                                </div>

                            </th>
                        </tr>
                        <tr>
                            <th style="width:5%;"><span class="info-box-text text-bold" id="lbl_ValidadeManutencao">Validade Manutenção</span></th>
                            <th style="width:90%;">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right datepicker" id="input_ValidadeManutencao" placeholder="MM/DD/YYYY" value="">
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th style="width:5%;"><span class="info-box-text text-bold" id="lbl_LicensaValidadeManutencao">Licença</span></th>
                            <th style="width:90%;">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-tag"></i>
                                        </div>
                                        <input type="text" class="form-control" placeholder="" id="input_LicensaValidadeManutencao">
                                    </div>
                                </div>

                            </th>
                        </tr>
                    </table>

                </div><!-- /.box-body -->
                <div class="box-footer">
                    <span class='btn btn-lg btn-primary' onclick="getLicensaManutencao();" id="btn_GerarManutencao" style="margin-left:45%">
                        Gerar
                    </span>
                </div><!-- box-footer -->
            </div><!-- /.box -->
            <!-- /.row -->
        </div>

        <div class="col-md-6">
            <div class="box box-solid box-info">
                <div class="box-header with-border">
                    <h3 class="box-title" id="lbl_LiberaAtivacao">Ativador Software</h3>
                    <div class="box-tools pull-right">
                        <!-- Buttons, labels, and many other things can be placed here! -->
                        <!-- Here is a label for example -->
                        <button type="button" class="btn btn-box-tool" data-widget="collapse">
                            <i class="fa fa-minus"></i>
                        </button>

                    </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th style="width:5%;"><span class="info-box-text text-bold" id="lbl_Chave">Chave</span></th>
                            <th style="width:90%;">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-key"></i>
                                        </div>
                                        <input type="text" class="form-control" placeholder="" id="input_Chave">
                                    </div>
                                </div>

                            </th>
                        </tr>
                        <tr>
                            <th style="width:5%;"><span class="info-box-text text-bold" id="lbl_Licensa">Licença</span></th>
                            <th style="width:90%;">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-tag"></i>
                                        </div>
                                        <input type="text" class="form-control" placeholder="" id="input_Licensa">
                                    </div>
                                </div>

                            </th>
                        </tr>
                    </table>

                </div><!-- /.box-body -->
                <div class="box-footer">
                    <span class='btn btn-lg btn-primary' onclick="getLicensaAtivador();" id="btn_Gerar" style="margin-left:45%">Gerar</span>
                </div><!-- box-footer -->
            </div><!-- /.box -->
            <!-- /.row -->
        </div>



    </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script type="text/javascript">
    function today() {
        var d = new Date();
        var currDate = d.getDate();
        var currMonth = d.getMonth()+1;
        var currYear = d.getFullYear();
        return ((currMonth<10) ? '0'+currMonth : currMonth ) +  "/" + ((currDate<10) ? '0'+currDate : currDate ) + "/" + currYear  ;
    }

    jQuery(document).ready(function ($) {
        document.getElementById('input_ValidadeManutencao').value = today();
    });

    function getLicensaAtivador() {
        console.log('getLicensaAtivador');

         var parametros = {
             chave: document.getElementById("input_Chave").value,
        };
        //console.log(parametros);

        $.ajax({
            type: "post",            
            url: '/License/ConsultaLicenseActivator',
            data: parametros,            
            dataType: "json",
            success: function (dados) {
                //console.log(dados);
                if ((dados.StatusLicence + '') == '1') {
                    document.getElementById("input_Licensa").value = dados.GenerateLicense;
                    alert(/*$("#hdnstAtivacaoSucess").val()*/'Licença gerada com sucesso!');
                    gerarLog(/*$("#hdnAtivadorSoftware").val()*/ 'Ativador Sofware', '', 'Key:' + document.getElementById("input_Chave").value);
                }
                else if ((dados.StatusLicence + '') == '2') {
                    document.getElementById("input_Licensa").value = '';
                    alert(/*$("#hdnstAtivacaoKeyInvalid").val()*/'Chave Informada é inválida!');
                }
                else {
                    document.getElementById("input_Licensa").value = '';
                    alert(/*$("#hdnstAtivacaoError").val()*/'Não foi possível gerar a licença!' + dados.GenerateLicense);
                }
            }
        });
    }

    function getLicensaManutencao() {
        console.log('getLicensaManutencao');
        //ConsultaLicenseManutencao(string serial, string expirar, string dataVal, string tipoApp)

        var dtI = document.getElementById("input_ValidadeManutencao").value.split('/');
        
        var datavalidade = dtI[2] + "-" + dtI[0] + "-" + dtI[1] ;
        
        var parametros = {
            serial: document.getElementById("input_SerialManutencao").value,
            expirar: document.getElementById("input_PrazoManutencao").value,
            dataVal: datavalidade,
            tipoApp: '1'

        };

        $.ajax({
            type: "post",
            url: '/License/ConsultaLicenseManutencao',
            data: parametros,            
            dataType: "json",
            success: function (dados) {
                if ((dados.StatusLicence + '') == '1') {
                    document.getElementById("input_LicensaValidadeManutencao").value = dados.GenerateLicense;
                    alert(/*$("#hdnstManutencaoSucess").val()*/'Licença de manutenção gerada com sucesso!');
                    var _desc = 'Date:' + document.getElementById("input_ValidadeManutencao").value;
                    //gerarLog(/*$("#hdnValidadeManutencao").val()*/ 'Validade Manutenção', document.getElementById("input_SerialManutencao").value, _desc);
                }
                else if ((dados.StatusLicence + '') == '3') {
                    document.getElementById("input_LicensaValidadeManutencao").value = '';
                    alert(/*$("#hdnstManutencaoPrazoExpInvalid").val()*/ 'Prazo Invalido');
                }
                else if ((dados.StatusLicence + '') == '4') {
                    document.getElementById("input_LicensaValidadeManutencao").value = '';
                    alert(/*$("#hdnstManutencaoSerialInvalid").val()*/ 'Serial Invalido');
                }
                else if ((dados.StatusLicence + '') == '5') {
                    document.getElementById("input_LicensaValidadeManutencao").value = '';
                    alert(/*$("#hdnstManutencaoDateInvalid").val()*/ 'Data Invalida');
                }
                else {
                    document.getElementById("input_LicensaValidadeManutencao").value = '';
                    alert(/*$("#hdnstManutencaoError").val()*/ 'Error Validação');
                }

                
            }
        });
    }

    function gerarLog(_tipo, _numeroSerie, _descricao) {
        var parametros_Log = {
            tipo: _tipo,
            numeroSerie: _numeroSerie,
            descricao: _descricao,

        };

        $.ajax({
            type: "post",            
            url: '/License/SetLogLicense',
            data: parametros_Log,
            dataType: "json",
            success: function (dados) {
                console.log("SetLogLicense:" + dados);
            }
        });

    }


</script> 
