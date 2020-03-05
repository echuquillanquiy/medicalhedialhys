<table style="margin-top:-30px;border:solid 1px black; float: right; height: 5%">
  <th style="font-size: 0.7rem;">
    <p>Coloque el adhesivo del Código de Barras y/o Lote de Dializador</p>
  </th>
</table>

<table width="100%" style="margin-top: 50px;">
  <tr>
    <th style="text-align: center">
      <h3 width="100%">FICHA DE PRESCRIPCION Y EVOLUCIÓN DE LA SESIÓN DE HEMODIALISIS</h3>
    </th>
  </tr>
</table>

    <table>
      <tr>
        <td colspan="4" style="font-size: 0.8rem"><strong>Apellidos y Nombres: </strong></th>
          <td width="453px" style="border-bottom: solid 1px; font-size: 0.8rem">{{ $order->patient->name }}</td>
          <td style="font-size: 0.8rem"><strong>Fecha: </strong></td>
            <td style="border: solid 1px; padding: 2px; font-size: 0.8rem">{{ $date }}</td>
          </tr>
    </table>

    <table style="margin-top: 0px; font-size: 0.8rem;" width="100%">
      <tr>
        <td style="width: 5%;"><strong>Frecuencia:</strong></td>
        <td style="border:solid 1px; width: 15%; text-align: center">3 VECES POR SEMANA</td>

        <td style="width: 3%"><strong>Turno: </strong></td>
        <td style="border:solid 1px;width: 7%; text-align: center">M - J - S</td>

        <td style="width: 6%"><strong>N° de Sesión: </strong></td>
        <td style="border:solid 1px; width: 5%; text-align: center">20</td>

        <td style="width: 5%"><strong>N° de HC: </strong></td>
        <td style="border:solid 1px;width: 5%; text-align: center">320</td>
      </tr>
    </table>

    <table width="100%" style="border:2px solid; border-collapse: collapse;">
      <tr>
        <td style="font-size: 0.8rem; color: white; background-color: black; text-align: center;" colspan="2"><strong>EVALUACIÓN MÉDICA</strong></td>
      </tr>

      <table width="100%" style="border:2px solid; border-collapse: collapse; margin-top: -3px;">
        <tr>
          <td style="font-size: 0.6rem" colspan="2">PROBLEMAS CLINICOS: </td>
        </tr>

        <tr>
          <td style="font-size: 0.6rem; width: 2%">1.- </td>
          <td style="border-bottom: solid 1px; width: 98%"></td>
        </tr>
        <tr>
          <td style="font-size: 0.6rem; width: 2%;">2.- </td>
          <td style="border-bottom: solid 1px; width: 98%;"></td>
        </tr>
        <tr>
          <td style="font-size: 0.6rem; width: 2%;"></td>
          <td style="width: 98%;"></td>
        </tr>
        <tr>
          <td style="font-size: 0.6rem; width: 2%;"></td>
          <td style="width: 98%;"></td>
        </tr>
      </table>

      <tr>
        <table width="100%" style="border:2px solid; border-collapse: collapse; border-top: none; margin-top: -2px">
          <tr>
            <td style="font-size: 0.6rem; margin-bottom: 1px; height: 20px" colspan="2">EXAMEN </td>
          </tr>
        </table>
      </tr>
    </table>

    <table width="100%" style="border:2px solid; border-collapse: collapse; border-top: none;">
      <tr>
        <td style="font-size: 0.7rem; margin-bottom: 1px;" colspan="8">PRESCRIPCIÓN</td>
      </tr>
      <tr>
        <td style="font-size: 0.7rem; width: 9%">Tiempo Dialisis:</td>
        <td style="font-size: 0.7rem; border-bottom: 1px solid; width: 10%"></td>
        <td style="font-size: 0.7rem; width: 10%">Flujo Sanguineo(Qb):</td>
        <td style="font-size: 0.7rem; border-bottom: 1px solid; width: 10%">20 m/min</td>
        <td style="font-size: 0.7rem; width: 5%">Perfil UF:</td>
        <td style="font-size: 0.7rem; border-bottom: 1px solid; width: 8%"> </td>
        <td style="font-size: 0.7rem; width: 6%">Dializador:</td>
        <td style="font-size: 0.7rem; border-bottom: 1px solid; width: 10%"> </td>
      </tr>
      <tr>
        <td style="font-size: 0.7rem; width: 2%">Heparina:</td>
        <td style="font-size: 0.7rem; border-bottom: 1px solid; width: 5%"></td>
        <td style="font-size: 0.7rem; width: 11%">Flujo Dializado(Qd):</td>
        <td style="font-size: 0.7rem; border-bottom: 1px solid; width: 10%">20 m/min</td>
        <td style="font-size: 0.7rem; width: 7%">Sodio Inicial:</td>
        <td style="font-size: 0.7rem; border-bottom: 1px solid; width: 8%"> </td>
        <td style="font-size: 0.7rem; width: 9%">Tipo Membrana:</td>
        <td style="font-size: 0.7rem; border-bottom: 1px solid; width: 10%"> </td>
      </tr>

      <tr>
        <td style="font-size: 0.7rem; width: 9%">Peso Seco:</td>
        <td style="font-size: 0.7rem; border-bottom: 1px solid; width: 10%"></td>
        <td style="font-size: 0.7rem; width: 10%">Solución:</td>
        <td style="font-size: 0.7rem; border-bottom: 1px solid; width: 10%">20 m/min</td>
        <td style="font-size: 0.7rem; width: 5%">Sodio Final:</td>
        <td style="font-size: 0.7rem; border-bottom: 1px solid; width: 8%"> </td>
        <td style="font-size: 0.7rem; width: 6%">Área:</td>
        <td style="font-size: 0.7rem; border-bottom: 1px solid; width: 10%"> </td>
      </tr>
      <tr>
        <td style="font-size: 0.7rem; width: 9%">Ultrafiltración:</td>
        <td style="font-size: 0.7rem; border-bottom: 1px solid; width: 10%"></td>
        <td style="font-size: 0.7rem; width: 10%">Bicarbonato:</td>
        <td style="font-size: 0.7rem; border-bottom: 1px solid; width: 10%">20 m/min</td>
        <td style="font-size: 0.7rem; width: 5%" colspan="1"></td>
        <td style="font-size: 0.7rem; border-bottom: 1px solid; width: 8%"> </td>
        <td style="font-size: 0.7rem; width: 6%">Serologia:</td>
        <td style="font-size: 0.7rem; border-bottom: 1px solid; width: 10%"> </td>
      </tr>

      <tr>
        <td style="font-size: 0.7rem; width: 9%"></td>
        <td style="font-size: 0.7rem; width: 10%"></td>
        <td style="font-size: 0.7rem; width: 10%">Calcio en la Solución:</td>
        <td style="font-size: 0.7rem; border-bottom: 1px solid; width: 10%">20 m/min</td>
        <td style="font-size: 0.7rem; width: 5%"> Temperatura</td>
        <td style="font-size: 0.7rem; border-bottom: 1px solid; width: 8%"> </td>
        <td style="font-size: 0.7rem; width: 6%"></td>
        <td style="font-size: 0.7rem; width: 10%"> </td>
      </tr>

      <tr>
        <td colspan="4" style="font-size: 0.7rem; text-align: center;">
          <br>
          <br>
          <br>
          <br>
          <br>
          __________________________
          <br>
          Firma y Sellos de <br>Médico que Inicia HD
        </td>
        <td colspan="4" style="font-size: 0.7rem; text-align: center">
          <br>
          <br>
          <br>
          <br>
          <br>
          __________________________
          <br>
          Firma y Sellos de <br> Médico que Finaliza HD
        </td>
      </tr>

    </table>

    <table width="100%">
      <tr>
        <td style="font-size: 0.8rem; color: white; background-color: black; text-align: center;" colspan="8"><strong>EVOLUCIÓN DE ENFERMERÍA</strong></td>
      </tr>

      <tr>
        <td style="font-size: 0.7rem; width:8%">PA Inicial:</td>
        <td style="border:1px solid;"></td>
        <td style="font-size: 0.7rem; width:18%" colspan="4">Tipo de Acceso vascular:</td>
        <td style="font-size: 0.7rem; width:10%">N° de Maq:</td>
        <td style="border:1px solid"></td>
      </tr>

      <tr>
        <td style="font-size: 0.7rem; width:8%">PA Final</td>
        <td style="font-size: 0.7rem; border:1px solid;"></td>
        @if ($order->nurse->access1 != null && $order->nurse->access2 == 'FAV')
          <td style="font-size: 0.6rem;" colspan="2">FAV (X)</td>
        @else
          <td style="font-size: 0.6rem;" colspan="2">FAV ( )</td>
        @endif

        @if ($order->nurse->access1 != null && $order->nurse->access2 == 'CVCLP')
          <td style="font-size: 0.6rem;" colspan="2">CVCLP (X)</td>
        @else
          <td style="font-size: 0.6rem;" colspan="2">CVCLP ( )</td>
        @endif

        <td style="font-size: 0.6rem">Puesto</td>
        <td style="border:1px solid"></td>
      </tr>

      <tr>
        <td style="font-size: 0.6rem; width:8%">PA Final</td>
        <td style="font-size: 0.6rem; border:1px solid;"></td>
        @if ($order->nurse->access2 != null && $order->nurse->access1 == 'CVCT')
          <td style="font-size: 0.6rem;" colspan="2">CVCT (X)</td>
        @else
          <td style="font-size: 0.6rem;" colspan="2">CVCT ( )</td>
        @endif

        @if ($order->nurse->access2 != null && $order->nurse->access1 == 'INJ')
          <td style="font-size: 0.6rem;" colspan="2">INJERTO (X)</td>
        @else
          <td style="font-size: 0.6rem;" colspan="2">INJERTO ( )</td>
        @endif

        <td style="font-size: 0.7rem">Puesto</td>
        <td style="border:1px solid"></td>
      </tr>
    </table>
