<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;
use SoapClient;

class CalculadorController extends Controller
{
    /**
     * CalculadorController constructor.
     */
    public function __construct()
    {
        ini_set('max_execution_time', 1800);
        ini_set('soap.wsdl_cache_enabled',0);
        ini_set('soap.wsdl_cache_ttl',0);
    }

    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('calculador.index');
    }

    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function calcPrecoPrazo(Request $request)
    {
        $params = array(
            'nCdEmpresa'          => $request->get('nCdEmpresa'),           // String
            'sDsSenha'            => $request->get('sDsSenha'),             // String
            'nCdServico'          => $request->get('nCdServico'),           // String
            'sCepOrigem'          => $request->get('sCepOrigem'),           // String
            'sCepDestino'         => $request->get('sCepDestino'),          // String
            'nVlPeso'             => $request->get('nVlPeso'),              // String
            'nCdFormato'          => (int) $request->get('nCdFormato'),     // Int
            'nVlComprimento'      => (float) $request->get('nVlComprimento'),    // Decimal
            'nVlAltura'           => (float) $request->get('nVlAltura'),         // Decimal
            'nVlLargura'          => (float) $request->get('nVlLargura'),        // Decimal
            'nVlDiametro'         => (float) $request->get('nVlDiametro'),       // Decimal
            'sCdMaoPropria'       => $request->get('sCdMaoPropria'),             // String
            'nVlValorDeclarado'   => (float) $request->get('nVlValorDeclarado'), // Decimal
            'sCdAvisoRecebimento' => $request->get('sCdAvisoRecebimento'),       // string
            'StrRetorno'          => 'xml', // string
            'nIndicaCalculo'      => 3
        );

        $client = new SoapClient(
            "http://ws.correios.com.br/calculador/CalcPrecoPrazo.asmx?wsdl"
        );

        $response = $client->__soapCall("CalcPrecoPrazo", array($params));
        $resultado = $response->CalcPrecoPrazoResult->Servicos->cServico;

        return view('calculador.resultado', ['resultado' => $resultado]);
    }

    /**
     * @return Application|Factory|View
     */
    public function resultado()
    {
        return view('calculador.resultado');
    }
}
