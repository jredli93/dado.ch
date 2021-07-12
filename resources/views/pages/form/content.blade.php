<section class="form-content-wrap">
 <div class="contact">
    <div class="contact-form">
        <div class="form">
            <form method="POST">
                @csrf
            </form>
            <input type="hidden" class="input serviceTypeId" name="serviceTypeId" value="{{$id}}">
            <input type="text" class="input contact-name" name="contact-name" placeholder="Name" required>
            <input type="email" class="input contact-email" placeholder="Email" name="Email" required>
            <input type="text" class="input contact-phone" name="contact-phone" placeholder="Phone" name="Phone" required>
            <textarea class="textarea contact-ta" name="contact-ta" cols="30" rows="5" name="Messsage" placeholder="Message"
                required></textarea>
            <button class="form-submit">Jetzt zahlen</button>
        </div>
    </div>
</div>
</section>
