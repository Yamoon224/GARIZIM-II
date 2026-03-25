<section class="contact-section padding bg-grey">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6 col-md-5">
                <div class="contact-content">
                    <div class="section-heading mb-40">
                        <h2>Votre temoignage</span></h2>
                    </div>
                    <ul class="contact-details">
                        <li><i class="fas fa-map-marker-alt"></i>Abidjan</li>
                        <li><i class="fas fa-envelope"></i><a href="mailto:legarizim.sarl@gmail.com" class="__cf_email__" data-cfemail="e78f828b8b88a7839e89868a8e848b869e829594c9898293">Legarizim.sarl@gmail.com</a></li>
                        <li><i class="fas fa-phone"></i>(+225) 0503538147</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-7">
                <div class="contact-form">
                    <form action="contact.php" method="post" id="ajax_contact" class="form-horizontal">
                        <div class="form-group colum-row row">
                            <div class="col-sm-6 xs-padding">
                                <input type="text" id="firstname" name="firstname" class="form-control" placeholder="First Name" required>
                            </div>
                            <div class="col-sm-6 xs-padding">
                                <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Last Name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12 xs-padding">
                                <input type="text" id="position" name="position" class="form-control" placeholder="Votre Fonction" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 xs-padding">
                                <textarea id="message" name="message" cols="30" rows="5" class="form-control message" placeholder="Message" required></textarea>
                            </div>
                        </div>
                        <button id="submit" class="default-btn" type="submit">Send Message<span></span></button>
                        <div id="form-messages" class="alert" role="alert"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section><!-- ./ contact-section -->
