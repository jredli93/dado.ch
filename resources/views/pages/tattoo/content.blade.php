<section class="tattoo-content-wrap">
    <div class="tattoo-content">
        <span class="tattoo-overtitle">Our process of</span>
        <h1 class="tattoo-title">Tattoing</h1>

        <p class="tattoo-text">Wir möchten in guter Erinnerung bleiben, wenn du von deinem neuen Tattoo erzählst. Wir legen grossen Wert darauf, dir
        das bestmögliche Erlebnis zu bieten. Damit du weisst wie wir arbeiten, haben wir für dich den Ablauf aufs Papier
        gebracht. Natürlich kannst du dich aber auch jederzeit telefonisch oder per E-mail bei uns melden, wenn du offene Fragen
        hast. Ein neues Tattoo sollte gut überlegt sein, wir helfen dir dabei!

        Gemeinsam schaffen wir ein einzigartiges Kunstwerk, dass unter die Haut geht.</p>

        <div class="reservation-slots-wrap">
            @if($services)
                @foreach($services as $service)
                    <a class="time-slot-reservation" onclick='return serviceId()' data-service="{{ $service->id }}" style="margin-left: 400px; margin-top: 200px; text-decoration:none;" href="/reservations/{{$service->id}}">Reserve termin for {{$service->service_name}} | Price {{$service->price}}CHF | Duration {{$service->duration}} MIN</a> <br>
                    <br>
                @endforeach

            @else
                NO SERVICES
            @endif
        </div>      

        <div class="process-wrap">
            <span class="process-overtitle">How it</span>
            <h1 class="process-title">Works</h1>
            <div class="process-container">
                <div class="process-single">
                    <img class="process-single-icon" src="/images/icons-tattoo/031-tattoo-studio.png" alt="">
                    <h2 class="process-single-title">Hallo sagen</h2>
                    <p class="process-singletext">Ein Tattoo stechen zu lassen ist Vertrauenssache. Deshalb laden wir dich gerne auf einen Espresso ein, damit du uns
                    kennenlernen kannst.</p>
                </div>
                <div class="process-single">
                    <img class="process-single-icon" src="/images/icons-tattoo/029-tattoo.png" alt="">
                    <h2 class="process-single-title">Idee & planung</h2>
                    <p class="process-singletext">In einem persönlichen Gespräch kannst du uns deine Ideen und Wünsche mitteilen. Wir prüfen und planen gemeinsam mit dir
                    das Projekt und beachten dabei wichtige Aspekte wie die richtige Platzierung, der Einfluss der Körperströmungen, der
                    optimale Kontrast und vieles mehr. Dein Motiv wird somit einzigartig und passt auf deine Haut wie angegossen.</p>
                </div>
                <div class="process-single">
                    <img class="process-single-icon" src="/images/icons-tattoo/034-tattoo-machine.png" alt="">
                    <h2 class="process-single-title">Anprobe</h2>
                    <p class="process-singletext">Nachdem der Artist für dich das Design fertiggestellt hat und davon überzeugt ist, kannst du das Meisterwerk bewundern.
                    Das Design wird dir mithilfe von digitaler Visualisierung auf deiner Körperstelle gezeigt. Wie bei einer
                    massgeschneiderten Hose muss natürlich alles passen.</p>
                </div>
                <div class="process-single">
                    <img class="process-single-icon" src="/images/icons-tattoo/003-bandage.png" alt="">
                    <h2 class="process-single-title">Stechtag</h2>
                    Jetzt geht es los! Nochmals alles überprüft, wird nun der Abdruck gemacht, auf die Haut geklebt und mit dem tätowieren
                    begonnen. Bitte konsumiere vor dem Tätowieren kein Alkohol, Drogen oder Schmerzmittel. Bei Einnahme von blutverdünnenden
                    Medikamenten den Arzt fragen ob 1 Tag vor dem Tätowieren darauf verzichtet werden kann.</p>
                </div>
                <div class="process-single">
                    <img class="process-single-icon" src="/images/icons-tattoo/010-cream.png" alt="">
                    <h2 class="process-single-title">Pflege</h2>
                    <p class="process-singletext">Ein Tattoo stechen zu lassen ist Vertrauenssache. Deshalb laden wir dich gerne auf
                        einen Espresso ein, damit du uns
                        kennenlernen kannst.Ein Tattoo stechen zu lassen ist Vertrauenssache. Deshalb laden wir dich gerne auf einen
                        Espresso ein, damit du uns
                        kennenlernen kannst.</p>
                </div>
                <div class="process-single">
                    <img class="process-single-icon" src="/images/icons-tattoo/019-sketchbook.png" alt="">
                    <h2 class="process-single-title">Kontrolle</h2>
                    <p class="process-singletext">Bei guter Pflege wenn das frische Tattoo abgeheilt ist und die überschüssige Farbe mit der Kruste von der Haut löst,
                    wird das Tattoo je nach Hauttyp ca. 10% heller. 3 Wochen nach dem Stechen wird das Tattoo überprüft. Der Artist sieht
                    schnell ob ein Nachstechtermin erforderlich ist.</p>
                </div>
            </div>
        </div>

        <h1 class="tattoo-title-advice">Pflegeanleitung</h1>

        <p class="tattoo-text">Achte auf Hygiene, d.h. wasche dir vor der Behandlung die Hände, vermeide Kontakt mit Schmutz, durch andere Personen oder Haustiere.
        Trage die Salbe immer nur hauchdünn, dafür mehrmals am Tag auf! Zu dick aufgetragene Salbe lässt die Tätowierung immer wieder aufweichen und behindert dadurch die Wundheilung.
        Trage nur locker anliegende Kleidung (Baumwolle) um nicht mit den Textilien zu verkleben.
        Sollte deine Tätowierung dennoch einmal verkleben, auf keinen Fall einfach abziehen oder gewaltsam lösen, sondern unter fliessendem Wasser vorsichtig anweichen und langsam entfernen.
        Vermeide bis zur vollständigen Abheilung (ca. 3-4 Wochen) Kontaktsportarten, Salzwasser, Seewasser, Chlorwasser, Sauna, Solarium und direkte Sonneneinstrahlung.
        Auf keinen Fall kratzen oder den losen Schorf entfernen. Dieser sollte von selbst abfallen, da sonst die untere Hautschicht geschädigt wird und es dadurch zu Farbverlust und Vernarbung kommen kann.
        </p>

        <div class="documents">
            <form target="_blank" action="/Pflege.pdf">
            <button type="submit" class="single-document">
                <i class="fas fa-2x fa-print"></i>
                <span class="document-text">Pflegeanleitung herunterladen</span>
            </button>
            </form>
            <form target="_blank" action="/Pflegedermalize.pdf">
            <button type="submit" class="single-document">
                <i class="fas fa-2x fa-print"></i>
                <span class="document-text">Pflegeanleitung (dermalize) herunterladen</span>
            </button>
            </form>
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
