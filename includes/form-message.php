<form name="message-form" id="message-form" method="post" action="http://localhost/wordpress/message_page/">
    <div class="form-group row">
        <div class="col-lg-6">
            <input type="text" name="fname" placeholder="First Name" class="form-control" required />
        </div>
        <div class="col-lg-6">
            <input type="text" name="lname" placeholder="Last Name" class="form-control" required />
        </div>
    </div>
    <div class="form-group row">
        <div class="col-lg-6">
            <input type="email" name="email" placeholder="Email Address" class="form-control" required />
        </div>
        <div class="col-lg-6">
            <input type="tel" name="phone" placeholder="Phone Number" class="form-control" required />
        </div>
    </div>

    <div class="form-group">
        <textarea name="message" class="form-control" required placeholder="Your Message"></textarea>
    </div>
    <div class="form-group">
        <button id="submit-button" type="submit" class="btn btn-success">Send Message!</button>
    </div>
</form>