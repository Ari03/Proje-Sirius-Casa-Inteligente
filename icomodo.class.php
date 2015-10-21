<?php

interface iComodo {
	
	public function controlarLuz($nome);
	public function controleLuzPorRelogio($nome);
	public function controlarPersiana($nome);
	public function controlarPortaDaGaragem($nome);
}

?>