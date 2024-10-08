<?php
/*
 * CnabPHP - GeraÃ§Ã£o de arquivos de remessa e retorno em PHP
 *
 * LICENSE: The MIT License (MIT)
 *
 * Copyright (C) 2013 Ciatec.net
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this
 * software and associated documentation files (the "Software"), to deal in the Software
 * without restriction, including without limitation the rights to use, copy, modify,
 * merge, publish, distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to the following
 * conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies
 * or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED,
 * INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A
 * PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
 * OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
 * SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */
namespace CnabPHP\resources\B001\remessa\cnab240;
use \CnabPHP\resources\generico\remessa\cnab240\Generico0;
use Exception;

class Registro0 extends Generico0
{
	protected $meta = array(
		'codigo_banco'=>array( // 01.0
			'tamanho'=>3,
			'default'=>'001',
			'tipo'=>'int',
			'required'=>true),
		'codigo_lote'=>array( // 02.0
			'tamanho'=>4,
			'default'=>'0000',
			'tipo'=>'int',
			'required'=>true),
		'tipo_registro'=>array( // 03.0
			'tamanho'=>1,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
		'filler1'=>array( //  04.0
			'tamanho'=>9,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'tipo_inscricao'=>array( // 05.0
			'tamanho'=>1,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
		'numero_inscricao'=>array(//06.0
			'tamanho'=>14,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
		'uso_bb1'=>array( // 07.0
			'tamanho'=>20,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'agencia'=>array( // 08.0
			'tamanho'=>5,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
		'agencia_dv'=>array(//09.0
			'tamanho'=>1,
			'default'=>'',
			'tipo'=>'alfa',
			'required'=>true),
		'conta'=>array( // 10.0
			'tamanho'=>12,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
		'conta_dv'=>array(// 11.0
			'tamanho'=>1,
			'default'=>'0',
			'tipo'=>'alfa',
			'required'=>true),
		'filler2'=>array(//12.0
			'tamanho'=>1,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'nome_empresa'=>array(//13.0
			'tamanho'=>30,
			'default'=>'',
			'tipo'=>'alfa',
			'required'=>true),
		'nome_banco'=>array(//14.0
			'tamanho'=>30,
			'default'=>'BANCO DO BRASIL S.A',
			'tipo'=>'alfa',
			'required'=>true),
		'filler3'=>array(//15.0
			'tamanho'=>10,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'codigo_remessa'=>array(//16.0
			'tamanho'=>1,
			'default'=>'1',
			'tipo'=>'int',
			'required'=>true),
		'data_geracao'=>array(//17.0
			'tamanho'=>8,
			'default'=>'',// nao informar a data na instanciaÃ§Ã£o - gerada dinamicamente
			'tipo'=>'date',
			'required'=>true),
		'hora_geracao'=>array(//18.00
			'tamanho'=>6,
			'default'=>'',// nao informar a data na instanciaÃ§Ã£o - gerada dinamicamente
			'tipo'=>'int',
			'required'=>true),
		'numero_sequencial_arquivo'=>array(//19.0
			'tamanho'=>6,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
		'versao_layout'=>array(//20.0
			'tamanho'=>3,
			'default'=>'000',
			'tipo'=>'int',
			'required'=>true),
		'densidade_gravacao'=>array(//21.0
			'tamanho'=>5,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
		'filler4'=>array(//22.0
			'tamanho'=>20,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'situacao_arquivo2'=>array(//23.0
			'tamanho'=>20,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'filler5'=>array(
			'tamanho'=>14,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'filler6'=>array(		//Caso a versão do leiaute seja 30,
			'tamanho'=>3,			//Deve ser preenchido com 'zeros' nas posições 226 a 228.
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'filler7'=>array(
			'tamanho'=>12,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true)
	);
}
