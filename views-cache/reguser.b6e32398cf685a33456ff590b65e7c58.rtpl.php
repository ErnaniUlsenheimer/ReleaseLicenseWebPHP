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
    <li class="active">Usuário</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <!-- Your Page Content Here -->
    <div class="row">
        <div class="col-md-12">
            <div class="box ">
                <div class="box-header">
                    <h3 class="box-title" id="lbl_ModalUsuario"> Registro Usuario</h3>
                    <div class="box-tools pull-right box-solid box-success">
                        <!-- Buttons, labels, and many other things can be placed here! -->
                        <!-- Here is a label for example -->
                        <button type="button" class="btn btn-box-tool" data-widget="collapse">
                            <i class="fa fa-minus"></i>
                        </button>

                    </div><!-- /.box-tools -->

                </div><!-- /.box-header -->
                <div class="box-body">
                    <div box>
                        <div class="box-header">
                            <div class="box-tools pull-right">

                                <div class="form-group">
                                    <button class="btn btn-sm btn-primary" id="gridUserNew">Novo</button>
                                    <label>Page Size:</label>
                                    <select style="width:50px;background:#fcfcfc;border:1px solid #e9e9e9" onchange="dpMUsuarios(this.value)" id="SelectPageModalUsuarios">
                                        <option class="info-box-number" value="7">7</option>
                                        <option class="info-box-number" value="All">All</option>
                                    </select>
                                    <button type="button" class="btn btn-box-tool" id="btnSerchGridUsuarios">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="box-body" style="margin-top:10px;">
                            <div class="box-body table-responsive no-padding" id="gridModalUsuarios"></div>

                        </div>
                    </div>

                </div><!-- /.box-body -->
                <div class="box-footer">

                </div><!-- box-footer -->
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModalSaveUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabelSaveUser">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"> <span class="info-box-text" id="myModalLabelSaveUser">Novo Usuário</span></h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label id="lbl_New_Nome">Nome</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-user-circle"></i>
                            </div>
                            <input type="text" class="form-control" id="input_New_Nome">
                        </div>
                    </div>
                    <div class="form-group">
                        <label id="lbl_New_Email">Email</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <input type="text" class="form-control" id="input_New_Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label id="lbl_New_Senha">Senha</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-lock"></i>
                            </div>
                            <input type="text" class="form-control" id="input_New_Senha">
                        </div>
                    </div>
                    <div class="form-group">
                        <label id="lbl_New_Grupo">Recurso</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-group"></i>
                            </div>
                            <select class="form-control" style="width:auto;background:#fcfcfc;border:1px solid #e9e9e9" @*onchange="dpMReport(this.value)"*@ id="select_New_Grupo">
                                @*<option class="info-box-text" value="7">Administrador</option>
                                    <option class="info-box-text" value="15">Gerente</option>
                                    <option class="info-box-text" value="All">Usuário</option>*@
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label id="lbl_New_Empresa">Empresa</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-institution"></i>
                            </div>
                            <select class="form-control" style="width:auto;background:#fcfcfc;border:1px solid #e9e9e9" @*onchange="dpMReport(this.value)"*@ id="select_New_Empresa">
                                @*<option class="info-box-text" value="1">Percolore</option>
                                    <option class="info-box-text" value="2">PPG Autraslia</option>
                                    <option class="info-box-text" value="3">Teste</option>*@
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label id="lbl_New_Idioma">Idioma</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-language"></i>
                            </div>
                            <select class="form-control" style="width:auto;background:#fcfcfc;border:1px solid #e9e9e9" @*onchange="dpMReport(this.value)"*@ id="select_New_Idioma">
                                <option class="info-box-text" value="pt-br">Brasil</option>
                                <option class="info-box-text" value="es">Spain</option>
                                <option class="info-box-text" value="en">English</option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="btnSaveUser">Salvar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModalUpdateUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabelUpdateUser">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"> <span class="info-box-text" id="myModalLabelUpdateUser"> Editar Usuário</span></h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label id="lbl_Update_ID"> ID</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-id-card"></i>
                            </div>
                            <input type="text" class="form-control" id="input_Update_Id" readonly="readonly" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label id="lbl_Update_Nome"> Nome</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-user-circle"></i>
                            </div>
                            <input type="text" class="form-control" id="input_Update_Nome" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label id="lbl_Update_Email"> Email</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <input type="text" class="form-control" id="input_Update_Email" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label id="lbl_Update_Senha"> Senha</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-lock"></i>
                            </div>
                            <input type="text" class="form-control" id="input_Update_Senha" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label id="lbl_Update_Grupo"> Recurso</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-group"></i>
                            </div>
                            <select class="form-control" style="width:auto;background:#fcfcfc;border:1px solid #e9e9e9" @*onchange="dpMReport(this.value)"*@ id="select_Update_Grupo">
                                @*<option class="info-box-text" value="7">Administrador</option>
                                    <option class="info-box-text" value="15">Gerente</option>
                                    <option class="info-box-text" value="All">Usuário</option>*@
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label id="lbl_Update_Empresa"> Empresa</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-institution"></i>
                            </div>
                            <select class="form-control" style="width:auto;background:#fcfcfc;border:1px solid #e9e9e9" @*onchange="dpMReport(this.value)"*@ id="select_Update_Empresa">
                                @*<option class="info-box-text" value="1">Percolore</option>
                                    <option class="info-box-text" value="2">PPG Autraslia</option>
                                    <option class="info-box-text" value="3">Teste</option>*@
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label id="lbl_Update_Idioma"> Idioma</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-language"></i>
                            </div>
                            <select class="form-control" style="width:auto;background:#fcfcfc;border:1px solid #e9e9e9" @*onchange="dpMReport(this.value)"*@ id="select_Update_Idioma">
                                <option class="info-box-text" value="pt-br">Brasil</option>
                                <option class="info-box-text" value="es">Spain</option>
                                <option class="info-box-text" value="en">English</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label id="lbl_Update_Ativo"> Ativo</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-check"></i>
                            </div>
                            <select class="form-control" style="width:auto;background:#fcfcfc;border:1px solid #e9e9e9" @*onchange="dpMReport(this.value)"*@ id="select_Update_Ativo">
                                <option class="info-box-text" value="True">True</option>
                                <option class="info-box-text" value="False">False</option>

                            </select>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="btnUpdateUser">Salvar</button>
                    <button type="button" class="btn btn-danger" id="btnDeleteUser">Remover</button>
                </div>
            </div>
        </div>
    </div>


</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script type="text/javascript">
    var filteringSearchUsuario = '0';
    var counterPageSizeUsuario = 0;

    jQuery(document).ready(function ($) {
        console.log('RegUser');
        $.ajax({
            type: "post",
            url:   "/regUserController/ConsultaDadosUsuarios",
        //    data: parametros_lang,
            dataType: "json",
            success: function (dados) {
          //      console.log(dados);
                var _dados = [];
                var _elementos = {};
                counterPageSizeUsuario = 0;
                $.each(dados, function (index, dadosRes) {
            //        console.log(dadosRes);
                    _elementos = {};
                    _elementos.id_usuario = dadosRes.id_usuario;
                    _elementos.id_empresa = dadosRes.id_empresa;
                    _elementos.id_recurso = dadosRes.id_recurso;
                    _elementos.nomeUser = dadosRes.nomeUser;
                    _elementos.nomeEmpresa = dadosRes.nomeEmpresa;
                    _elementos.nomeRecurso = dadosRes.nomeRecurso;
                    _elementos.email = dadosRes.email;
                    _elementos.senha = dadosRes.senha;
                    _elementos.IdiomaPercolore = dadosRes.IdiomaPercolore;
                    if(dadosRes.ativo == '1')
                    {
                        _elementos.ativo = "True";
                    }
                    else
                    {
                        _elementos.ativo = "False";
                    }

                    _dados.push(_elementos);
                    counterPageSizeUsuario++;                            
                });

                 $(function () {
                        $("#gridModalUsuarios").jsGrid({
                            height: "auto",
                            width: "100%",
                            sorting: true,
                            editing: false,
                            filtering: true,
                            paging: true,
                            pageSize: 7,
                            autoload: true,
                            heading: true,
                            selecting: true,
                            //altRows: true,
                            fields: [
                                { name: "id_usuario", type: "text", width: 150, title: 'id_usuario', visible: false },
                                { name: "id_empresa", type: "text", width: 150, title: 'id_empresa', visible: false },
                                { name: "id_recurso", type: "text", width: 150, title: 'id_recurso', visible: false },

                                { name: "nomeUser", type: "text", width: 120, title: 'Nome'},
                                { name: "nomeEmpresa", type: "text", width: 100, title: 'Empresa' },
                                { name: "nomeRecurso", type: "text", width: 120, title: 'Recurso' },
                                { name: "email", type: "text", width: 200, title: 'Email'},
                                { name: "senha", type: "text", width: 150, title: 'Senha', visible:false},
                                { name: "IdiomaPercolore", type: "text", width: 300, title: 'Idioma', visible: false},
                                { name: "ativo", type: "text", width: 50, title: 'Ativo' },

                            ],
                            controller:
                            {
                                data: _dados,
                                loadData: function (filter) {
                                    //console.log('loadData');
                                    return $.grep(this.data, function (item) {
                                        return (!filter.nomeUser || item.nomeUser.toUpperCase().includes(filter.nomeUser.toUpperCase()))
                                            && (!filter.nomeEmpresa || item.nomeEmpresa.toUpperCase().includes(filter.nomeEmpresa.toUpperCase()))
                                            && (!filter.nomeRecurso || item.nomeRecurso.toUpperCase().includes(filter.nomeRecurso.toUpperCase()))
                                            && (!filter.email || item.email.toUpperCase().includes(filter.email.toUpperCase()))
                                            //&& (!filter.IdiomaPercolore || item.IdiomaPercolore.toUpperCase().includes(filter.IdiomaPercolore.toUpperCase()))
                                            && (!filter.ativo || item.ativo.toUpperCase().includes(filter.ativo.toUpperCase()));
                                    });
                                },
                            },
                            rowClick: function (args) {
                                openModalUpdate(args.item.id_usuario, args.item.nomeUser, args.item.email, args.item.senha, args.item.id_recurso, args.item.id_empresa, args.item.ativo, args.item.IdiomaPercolore);
                            },
                        });
                    });

                    var valPage = document.getElementById("SelectPageModalUsuarios");

                    if (valPage.value == "7") {
                        $(function () {
                            //document.getElementById('gridModalUsuarios').jsGrid("option", 'pageSize', 7);
                            $("#gridModalUsuarios").jsGrid("option", 'pageSize', 7);
                        });
                    }
                    else {
                        $(function () {
                            //document.getElementById('gridModalUsuarios').jsGrid("option", 'pageSize', counterPageSizeUsuario);
                            $("#gridModalUsuarios").jsGrid("option", 'pageSize', counterPageSizeUsuario);
                        });
                    }
                    filteringSearchUsuario = '0';
                    $(function () {
                        //document.getElementById('gridModalUsuarios').jsGrid("option", 'filtering', false);
                        $("#gridModalUsuarios").jsGrid("option", 'filtering', false);
                    });
            }
        });
    });

    $("#btnSerchGridUsuarios").click(function () {
        
        if (counterPageSizeUsuario > 0) {
            console.log('btnSerchGridUsuarios');
            if (filteringSearchUsuario == '0') {
                filteringSearchUsuario = '1';
                $(function () {
                    $("#gridModalUsuarios").jsGrid("option", 'filtering', true);
                });
            }
            else {
                filteringSearchUsuario = '0';
                $(function () {
                    $("#gridModalUsuarios").jsGrid("option", 'filtering', false);
                    $("#gridModalUsuarios").jsGrid("loadData");
                });
            }
        }
    });

    function dpMUsuarios(periodo) {
        if (counterPageSizeUsuario> 0) {
            if (periodo == "7") {
                $(function () {
                    $("#gridModalUsuarios").jsGrid("option", 'pageSize', 7);
                });
            }
            else if (periodo == "15") {
                $(function () {
                    $("#gridModalUsuarios").jsGrid("option", 'pageSize', 15);
                });
            }
            else {
                $(function () {
                    $("#gridModalUsuarios").jsGrid("option", 'pageSize', counterPageSizeUsuario);
                });
            }
        }
    }

    function removeOptions(selectElement) {
        try
        {
            var i, L = selectElement.options.length - 1;
            for (i = L; i >= 0; i--) {
                selectElement.remove(i);
            }
        }
        catch (e) {}
    }

    $("#gridUserNew").click(function () {
        console.log('gridUserNew');
        removeOptions(document.getElementById('select_New_Grupo'));

        removeOptions(document.getElementById('select_New_Empresa'));
        var parametros_lang = {
            IdiomaPercolore: "us",
        };

        $.ajax({
            type: "post",
            url:   "/regUserController/ConsultaDadosUsuariosGruposEmpresas",
        //    data: parametros_lang,
            dataType: "json",
              success: function (dados) {
        //        console.log(dados);

                  $.each(dados.lRecurso, function (index, dadosResGrup) {
                    //console.log(dadosResGrup);
                      $('#select_New_Grupo').append( '<option class="info-box-text" value="' + dadosResGrup.idGrupo + '">' + dadosResGrup.nomeGrupo + '</option>');
                  });
                  $.each(dados.lEmpresa, function (index, dadosResEmp) {
                      $('#select_New_Empresa').append('<option class="info-box-text" value="' + dadosResEmp.idEmpresa + '">' + dadosResEmp.nomeEmpresa + '</option>');
                  });


                  openModalSave();
            }
        });
//        openModalSave();

    });

    function openModalSave() {
        $('#myModalSaveUser').modal('show');
    }

    $("#btnSaveUser").click(function () {
        console.log('btnSaveUser #Grupo:' + $("#select_New_Grupo").val() + '#Empresa:' + $("#select_New_Empresa").val());
        var idioma = readCookie(`IdiomaPercoloreLicense`);
        if (idioma == undefined) {
            idioma = 'pt-br';
            setCookie('IdiomaPercoloreLicense', 'pt-br', 1);
        }
        var parametros = {
            nomeuser: $("#input_New_Nome").val(),
            email: $("#input_New_Email").val(),
            senha: $("#input_New_Senha").val(),
            recurso: $("#select_New_Grupo").val(),
            empresa: $("#select_New_Empresa").val(),
            IdiomaPercolore: $("#select_New_Idioma").val(),
        };

        //string nomeuser, string email, string senha, string recurso, string empresa, string IdiomaPercolore
        $.ajax({
            type: "post",
            url:   "/regUserController/InsertUsuario",            
            data: parametros,
            dataType: "json",
            success: function (dados) {
                  if (dados.retorno.toString() == "1") {
                      alert(dados.descricao);
                      var url = '/Activation/User';
                      window.location.href = url;
                  }
                  else {
                      alert(dados.descricao);
                  }
            }
        });
    });

    function selectOptions(selectElement, valor) {
        try {
            var i, L = selectElement.options.length - 1;
            for (i = L; i >= 0; i--) {
                if (valor == selectElement.options[i].value) {
                    selectElement.options[i].selected = 'selected';
                }

            }
        }
        catch (e) { }
    }

    function openModalUpdate(idUser, nomeUser, emailUser, passUser, recurso, empresa, ativo, idioma) {
        console.log('openModalUpdate id_user=' + idUser + '#nomeUser=' + nomeUser + '#emailUser=' + emailUser + '#passUser=' + passUser + '#recurso=' + recurso + '#empresa=' + empresa + '#ativo=' + ativo + '#idioma=' + idioma);

        removeOptions(document.getElementById('select_Update_Grupo'));

        removeOptions(document.getElementById('select_Update_Empresa'));

        $.ajax({
            type: "post",
            url:   "/regUserController/ConsultaDadosUsuariosGruposEmpresas",
            dataType: "json",
              success: function (dados) {

                  $.each(dados.lRecurso, function (index, dadosResGrup) {
                      if (recurso == dadosResGrup.idGrupo) {
                          console.log('encontrou grupo:' + recurso);
                          $('#select_Update_Grupo').append('<option class="info-box-text" selected value="' + dadosResGrup.idGrupo + '">' + dadosResGrup.nomeGrupo + '</option>');
                      }
                      else {
                          $('#select_Update_Grupo').append('<option class="info-box-text" value="' + dadosResGrup.idGrupo + '">' + dadosResGrup.nomeGrupo + '</option>');
                      }
                  });
                  $.each(dados.lEmpresa, function (index, dadosResEmp) {
                      if (empresa == dadosResEmp.idEmpresa) {
                          console.log('encontrou empresa:' + empresa);
                          $('#select_Update_Empresa').append('<option class="info-box-text" selected value="' + dadosResEmp.idEmpresa + '">' + dadosResEmp.nomeEmpresa + '</option>');
                      }
                      else {
                          $('#select_Update_Empresa').append('<option class="info-box-text" value="' + dadosResEmp.idEmpresa + '">' + dadosResEmp.nomeEmpresa + '</option>');
                      }
                  });
                  $('#input_Update_Id').val(idUser);
                  $('#input_Update_Nome').val(nomeUser);
                  $('#input_Update_Email').val(emailUser);
                  $('#input_Update_Senha').val(passUser);
                  selectOptions(document.getElementById('select_Update_Ativo'), ativo);

                  selectOptions(document.getElementById('select_Update_Idioma'), idioma);


                  openShowModalUpdate();
            }
        });
    }

    function openShowModalUpdate() {
        $('#myModalUpdateUser').modal('show');
    }

     $("#btnUpdateUser").click(function () {
        console.log('btnUpdateUser #Grupo:' + $("#select_Update_Grupo").val() + '#Empresa:' + $("#select_Update_Empresa").val());
        var idioma = readCookie(`IdiomaPercoloreLicense`);
        if (idioma == undefined) {
            idioma = 'pt-br';
            setCookie('IdiomaPercoloreLicense', 'pt-br', 1);
        }
        var parametros = {
            idUser: $("#input_Update_Id").val(),
            nomeuser: $("#input_Update_Nome").val(),
            email: $("#input_Update_Email").val(),
            senha: $("#input_Update_Senha").val(),
            recurso: $("#select_Update_Grupo").val(),
            empresa: $("#select_Update_Empresa").val(),
            IdiomaPercolore: $("#select_Update_Idioma").val(),
            ativo: $("#select_Update_Ativo").val(),
        };

        //string nomeuser, string email, string senha, string recurso, string empresa, string IdiomaPercolore
        $.ajax({
            type: "post",
            url:   "/regUserController/UpdateUsuario",           
            data: parametros,            
            dataType: "json",
              success: function (dados) {
                  if (dados.retorno.toString() == "1") {
                      alert(dados.descricao);
                      var url = '/Activation/User';
                      window.location.href = url;
                  }
                  else {
                      alert(dados.descricao);
                  }

            }
        });


    });

     $("#btnDeleteUser").click(function () {
        console.log('btnDeleteUser #Grupo:' + $("#select_Update_Grupo").val() + '#Empresa:' + $("#select_Update_Empresa").val());
        if (confirm('Deseja Realmente excluir o usuário?' )) {

            var parametros = {
                idUser: $("#input_Update_Id").val(),
            };
            
            $.ajax({
                type: "post",
                url:   "/regUserController/deleteUsuario",                 
                data: parametros,                
                dataType: "json",
                success: function (dados) {
                    if (dados.retorno.toString() == "1") {
                        alert(dados.descricao);
                        var url = '/Activation/User';
                        window.location.href = url;
                    }
                    else {
                        alert(dados.descricao);
                    }

                }
            });
        }


    });

 </script> 
