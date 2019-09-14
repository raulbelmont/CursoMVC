<?php
namespace App\controller;

/**
 *
 */
class ControllerCarros
{
	public function valorCarro($Tipo, $Motor){

		if ($Tipo == 'veiculos' && $Motor == '1') {
			$Valor = '1.000,00';
		}elseif ($Tipo == 'veiculos' && $Motor == '2') {
			$Valor = '2.000,00';
		}elseif ($Tipo == 'caminhao' && $Motor == '1') {
			$Valor = '5.000,00';
		}elseif ($Tipo == 'caminhao' && $Motor == '2') {
			$Valor = '10.000,00';
		}

		echo "O tipo de carro é {$Tipo}, com motor {$Motor} e seu valor é {$Valor}";

	}
}