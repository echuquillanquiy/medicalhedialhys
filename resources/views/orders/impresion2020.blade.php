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
    <td colspan="4"><strong>Apellidos y Nombres: </strong></th>
      <td width="396px" style="border-bottom: solid 1px">{{ $order->patient->name }}</td>
      <td><strong>Fecha: </strong></th>
        <td style="border: solid 1px; padding: 2px">{{ $date }}</td>
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
          <td style="font-size: 0.6rem; width: %">1.- </td>
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
            <td style="font-size: 0.6rem; margin-bottom: 1px solid; height: 20px" colspan="2">EXAMEN </td>
          </tr>
        </table>
      </tr>
    </table>