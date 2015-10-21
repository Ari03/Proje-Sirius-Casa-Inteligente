<?php

include_once('icomodo.class.php');

class Comodo implements iComodo {
	
	public $nome; // Nome do comodo especifico
	public $quantidade; 
	
	
	public function setNome($nome) {
		$this->nome = $nome;
	}
	
	public function getQuantidade() {
		return $quantidade;	
	}
	
	function abreConexaoComUSB($slot) {
		$porta = fopen('/dev/ttyUSB0', 'w'); // Abre conexão com a porta serial na qual o arduino está conectado
		fwrite($porta, $slot); // Escrita na porta,	
		fclose($porta); // Fecha a conexão 
	}
	
	function controlarLuz($nome) {	
		$this->abreConexaoComUSB(1);
		
	}
	
	function controleLuzPorRelogio($nome) {
		
	}
	
	function controlarPersiana($nome) {
		
	}
	
	function controlarPortaDaGaragem($nome) {
		
	}
	
}

?>