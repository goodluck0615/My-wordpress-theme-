<?php get_template_part( 'second-header' );   ?>

 <section id="header">
        <div class="container">
            <h1 style="margin-top: 14px;">contact</h1>
            
        </div>
    </section>
        <div id="itsolutons"></div>

  

    <section class="contactus">
            <img src="/wp-content/themes/wptest3/images/contactus.jpg" class="">
            <div class="container contactus-box">
                <div class="row">
                    <!--<h1 class="contactus-title" id="contactus-title"><p class="text-center"><span class="second-world">Contact</span><span class="first-world"> Us</span></p></h1>-->
                    <p class="text-center slogan">We would like to discuss your project and how we can help.</p>
                    <p class="text-center slogan">Please fill out the form below or scedule a call today.</p>
                    <div class="row contactform">
                        <form novalidate="" method="post" action="" class="col-md-7 col-sm-12 col-xs-12 bottom-contact-form" id="contact-form">
                            <div class="form-group col-md-12 col-sm-12">
                                <div class="controls">
                                    <input type="text" class="form-control" placeholder="Your name" name="contactName" required>
                                </div>
                            </div>
                            <div class="form-group col-md-12 col-sm-12">
                                <div class=" controls">
                                    <input type="email" class="form-control" placeholder="Your email" name="email">
                                </div>
                            </div>
                            <div class="form-group col-md-12 col-sm-12">
                                <div class="controls">
                                    <input type="text" class="form-control" placeholder="Phone Number" name="phonenumber">
                                </div>
                            </div>
                            <div class="form-group col-md-12 col-sm-12">
                                <div class=" controls">
                                    <input type="text" class="form-control" placeholder="Skype" name="skype">
                                </div>
                            </div>
                            <div class="form-group col-md-12 col-sm-12">
                                <div class=" controls">
                                    <input type="text" class="form-control" placeholder="Your Company" name="yourcompany">
                                </div>
                            </div>
                            <div class="form-group col-md-12  col-sm-12 form-text-input">
                                <div class="controls">
                                    <textarea rows="6" class="form-control" placeholder="Brief Project Description.." name="description"></textarea>
                                </div>
                                <div class="col-md-12  col-sm-12 text-right form-btn-box">
                                    <!-- <a href="#" class="text-left attach-file"><span class="up-file"></span>Attach File</a> -->
                                    <a href="" class="bottom-contact-btn"  id="contactFormSubmit">Submit</a>
                                </div>
                            </div>

                        </form>
                        <div class="col-md-5 col-sm-12 pull-right contact-info-block">
                            <div class="col-md-12 col-sm-6  contactus-phone">1 615 236 6868</div>
                            <div class="col-md-12 col-sm-7 schedule-box"><a href="mailto:contact@pilgrimconsulting.com" class="schedule-call">Schedule A Call</a></div>
                            <div class="col-md-12 col-sm-12 contact-info">
                                <ul>
                                    <li><span class="contact-info-title col-md-4 col-sm-2"><i class="fa fa-paper-plane"></i>Email:</span><span class="col-md-8 col-sm-10"><a href="mailto:contact@pilgrimconsulting.com">contact@pilgrimconsulting.com</a></span></li>
                                    <li><span class="contact-info-title col-md-4 col-sm-2"><i class="fa fa-skype"></i>Skype:</span><span class="col-md-8 col-sm-10"><a href="skype:PilgrimConsultingInc?chat">PilgrimConsultingInc</a></span></li>
                                    <li><span class="contact-info-title col-md-4 col-sm-2"><i class="fa fa-map-marker"></i>Address:</span><span class="col-md-8 col-sm-10">616 Bradley Ct. Franklin, TN 37067</span></li>
                                </ul>
                                <div class="col-md-12 map-box">
                                    <i class="fa fa-compass"></i> <a href="http://maps.google.com?q=616+Bradley+Ct.+Franklin,+TN+37067" target="_blanc">View on map</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php get_footer(); ?>