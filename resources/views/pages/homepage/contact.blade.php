<section id="contact-wrap" class="contact-wrap">
    <div class="contact">
        <h1 class="contact-title">Kontakt</h1>
        <div class="contact-info-wrap">
            <div class="info">
                <h2 class="info-title">Dado Artist Collective</h2>
                <span class="info-subtitle">St Gallerstrasse 65</span>
            </div>
            <div class="info">
                <h2 class="info-title">INFO@DADO.CH</h2>
                <span class="info-subtitle"><u>+41 (0)71 446 11 74</u></span>
            </div>
        </div>
        <div class="contact-form">
            <form method="POST" action="{{ route('contact.send') }}" class="form">
                        @csrf
               <input type="text" class="input" name="contact-name" placeholder="Name" required>
               <input type="email" class="input" name="contact-email" placeholder="Email" name="Email" required>
               <textarea class="textarea" name="contact-ta" cols="30" rows="5" placeholder="Message" required></textarea>
               <button class="contact-send-btn type="submit">Send</button>
           </form>
        </div>
    </div>
    <div id='map'></div>
</section>
