<h1>Ciao amministratore</h1>
<p>hai ricevuto una nuova richiesta di contatto</p>
<dl>
    <dt>Da</dt>
    <dd>{{ $lead->name }}  {{ $lead->lastname }}</dd>
    <dt>Email:</dt>
    <dd>{{ $lead->email }}</dd>
    <dt>Telefono:</dt>
    <dd>{{ $lead->phone_number }}</dd>
    <dt>Messaggio:</dt>
    <dd>{{ $lead->message }}</dd>
</dl>