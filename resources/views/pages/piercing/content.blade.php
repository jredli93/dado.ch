<section class="piercing-content-wrap">
    <div class="piercing-content">

        @if($services)
            @foreach($services as $service)
                <a class="time-slot-reservation" onclick='return serviceId()' data-service="{{ $service->id }}" style="margin-left: 400px; margin-top: 200px; text-decoration:none;" href="/reservations/{{$service->id}}">Reserve termin for {{$service->service_name}} | Price {{$service->price}}CHF | Duration {{$service->duration}} MIN</a> <br>
                <br>
            @endforeach

        @else
            NO SERVICES
        @endif

        <span class="piercing-overtitle">Our process of</span>
        <h1 class="piercing-title">Piercing</h1>

        <p class="piercing-text">Es gibt unzählige Möglichkeiten, wo man Körperschmuck tragen kann. Wir bieten dir die ganze Palette an möglichen
        Piercingarten.
        Damit du aber lange Freude an deinem Schmuckstück hast, ist es wichtig einiges zu beachten. Ein Piercing sollte gut
        überlegt sein, deshalb legen wir wert auf einen reibungslosen Ablauf. Bei uns im Studio verwenden wir ausschliesslich
        Qualitätsprodukte von höchstem Standard. Du kannst direkt online einen Piercingtermin buchen oder spontan bei uns im
        Studio vorbeikommen

        auf gut Glück.</p>

        <div class="process-wrap">
            <span class="process-overtitle">How it</span>
            <h1 class="process-title">Works</h1>
            <div class="process-container">
                <div class="process-single">
                    <img class="process-single-icon" src="/images/icons-tattoo/031-tattoo-studio.png" alt="">
                    <h2 class="process-single-title">Hallo sagen</h2>
                    <p class="process-singletext">Ein Piercing stechen zu lassen ist Vertrauenssache. Deshalb laden wir dich gerne auf einen Espresso ein, damit du uns
                    kennenlernen kannst.</p>
                </div>
                <div class="process-single">
                    <img class="process-single-icon" src="/images/icons-tattoo/029-tattoo.png" alt="">
                    <h2 class="process-single-title">Studio</h2>
                    <p class="process-singletext">Unser Studio ist unser Herzstück. Damit du dich genau so wohlfühlen kannst wie wir, zeigen dir unsere Piercer gerne
                    alles und erzählen dir alles über Hygiene, Sicherheit und Schmuckvielfalt.</p>
                </div>
                <div class="process-single">
                    <img class="process-single-icon" src="/images/icons-tattoo/034-tattoo-machine.png" alt="">
                    <h2 class="process-single-title">Idee & planung</h2>
                    <p class="process-singletext">In einem persönlichen Gespräch kannst du uns alles über dein neues Piercing erzählen. Wir prüfen und planen mit dir
                    gemeinsam das perfekte Piercing, damit nichts schief läuft. Unser fachliches Know-How hilft dir bei der Suche nach der
                    richtigen Stelle.</p>
                </div>
                <div class="process-single">
                    <img class="process-single-icon" src="/images/icons-tattoo/003-bandage.png" alt="">
                    <h2 class="process-single-title">Stechtag</h2>
                   Jetzt geht es los! Nachdem wir die Körperstelle desinfiziert wurde, die Stelle eingezeichnet und jedes Detail nochmals
                geprüft wurde, geht es los mit dem Stechen. Bitte konsumiere davor kein Alkohol oder sonstiges.</p>
                </div>
                <div class="process-single">
                    <img class="process-single-icon" src="/images/icons-tattoo/010-cream.png" alt="">
                    <h2 class="process-single-title">Pflege</h2>
                    <p class="process-singletext">Wir möchten dass du viele Jahre glücklich bist mit deinem neuen Schmuckstück. Bitte konsumiere vor dem Piercen kein
                    Alkohol, Drogen oder Schmerzmittel. Bei Einnahme von blutverdünnenden Medikamenten den Arzt fragen ob 1 Tag vor dem
                    Piercingtermin darauf verzichtet werden kann. Bitte halte dich daran, nur so können wir gewährleisten, dass das
                    Endergebnis perfekt wird.</p>
                </div>
                <div class="process-single">
                    <img class="process-single-icon" src="/images/icons-tattoo/019-sketchbook.png" alt="">
                    <h2 class="process-single-title">Schmuckwechsel</h2>
                    <p class="process-singletext">Wir sind auch nach dem Stechen des Piercings für dich da und stehen dir jederzeit per Email oder Telefon zur Verfügung. Wenn du dir nicht sicher bist, ob ein Schmuckwechsel nötig ist, kannst du uns gerne im Studio besuchen.</p>
                </div>
            </div>
        </div>

        <h1 class="piercing-title-advice">Pflegeanleitung</h1>

        <p class="piercing-text">Achte auf Hygiene, d.h. wasche dir vor der Behandlung die Hände, vermeide Kontakt mit Schmutz, durch andere Personen
        oder Haustiere.

        Trage das Desinfektionsmittel mehrmals am Tag auf! .

        ​

        Vermeide bis zur vollständigen Abheilung (ca. 3-4 Wochen) Kontaktsportarten, Salzwasser, Seewasser, Chlorwasser, Sauna,
        Solarium und direkte Sonneneinstrahlung.

        Auf keinen Fall kratzen oder den losen Schorf entfernen. Dieser sollte von selbst abfallen, da sonst die untere
        Hautschicht geschädigt wird.
        </p>

        <div class="documents">
            <button class="single-document">
                <i class="fas fa-2x fa-print"></i>
                <span class="document-text">Pflegeanleitung herunterladen</span>
            </button>
            <button class="single-document">
                <i class="fas fa-2x fa-print"></i>
                <span class="document-text">Pflegeanleitung Schleimhaut / Intim herunterladen</span>
            </button>
        </div>

        <h2 class="legal-age">Noch nicht volljährig?</h2>
        <p class="legal-age-text">Du bist noch nicht 18 Jahre alt, möchtest aber trotzdem ein neues Tattoo stechen lassen? Solange deine
        Erziehungsberechtigten damit einverstanden sind, ist es kein Problem. Bringe zur Besprechung einfach dieses Formular
        ausgefüllt und unterzeichnet mit!</p>
        <button class="legal-age-button">
            <i class="fas fa-2x fa-exclamation"></i>
            <span class="document-text">Einverständniserklärung herunterladen</span>
        </button>

    </div>
</section>
