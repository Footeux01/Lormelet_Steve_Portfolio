    <!DOCTYPE html>
    <html lang="fr">
      <head>
        <meta charset="utf-8">
      </head>
      <body>
        <h3>Réception d'une prise de contact sur mon Portfolio Online</h3>
        <h5>Message reçu par {{ $contact['name'] }}</h5>
        <ul>
          {{-- <li><strong>Nom</strong> : {{ $contact['name'] }}</li> --}}
          <li><strong>Email</strong> : {{ $contact['mail'] }}</li>
          <li><strong>Telephone</strong> : {{ $contact['telephone'] }}</li>
          <li><strong>Message</strong> : {{ $contact['message'] }}</li>
        </ul>
      </body>
    </html>