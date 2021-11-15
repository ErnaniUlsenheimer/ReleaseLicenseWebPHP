<?php 
namespace Percolore\Model;

class Security {

    public function AtivacaoSoftware($chave)
    {
        return md5($chave, false);
    }
    public function ValidadeManutencao($dtVal, $serial, $exipra)
    {
        //implementar
        return 'OK';

    }
}
 
?>