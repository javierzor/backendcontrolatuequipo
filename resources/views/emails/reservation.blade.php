<!-- @component('mail::message') -->
# Verificación


Codigo de Confirmación: &nbsp;{{($amount_person)}}


ControlaTuEquipo: Verificacion de cuentas.


Utiliza este codigo para verificar su cuenta
<p style="color:green">Gracias !!</p>
<br>
@component('mail::button', ['url' => 'https://app.controlatuequipo.com/'])
Visita ControlaTuEquipo
@endcomponent

Thanks to <br>
ControlaTuEquipo.
<!-- {{ config('app.name') }} -->
@endcomponent
