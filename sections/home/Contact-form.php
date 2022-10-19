<div id="contact" class="contact-area bg-color area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline white-headline text-center">
                    <span class="top-head">Contacts</span>
                    <h3>Contact us</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="contact-inner">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="map-area">
                        <div style="width:100%;height:380px;">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3917.826502827642!2d106.71207401526084!3d10.900786659865595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174d7aeb4342d17%3A0x82c8a21dd3dd14d6!2zVHLhuqFtIFRodSBQaMOtIEPhuqd1IMOUbmcgQuG7kQ!5e0!3m2!1svi!2s!4v1625043589042!5m2!1svi!2s"
                                height="380" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="contact-form">
                        <div class="row">
                            <form id="contactForm" method="POST" action="contact.php" class="contact-form">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="name" class="form-control" placeholder="Name" required
                                        data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" class="email form-control" id="email" placeholder="Email"
                                        required data-error="Please enter your email">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" id="msg_subject" class="form-control" placeholder="Subject"
                                        required data-error="Please enter your message subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <textarea id="message" rows="7" placeholder="Massage" class="form-control" required
                                        data-error="Write your message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <button type="submit" id="submit" class="contact-btn">Submit</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>