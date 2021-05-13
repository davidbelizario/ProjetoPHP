<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public function show($conteudo, $menu = true){
        $html = $this->load->view('commons/cabecalho', null, true);
        if($menu) $html .= $this->load->view('commons/navbar', null, true);
        $html .= $conteudo;
        $html .= $this->load->view('commons/rodape', null, true);
		echo $html;
	}

}