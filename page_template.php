<?php get_template_part( 'second-header' );   ?>


            <?php
               while ( have_posts() ) : the_post();
                        the_content();
                    endwhile;
           
            ?>

   <section id="content">
        <div class="container">
            <div class="col-md-8 col-sm-12 col-xs-12">

                <div class="big-icon">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="wrap">
                                <div class="img-wrap">
                                    <div class="img-pos">
                                        <img src="/wp-content/themes/wptest3/images/gaming-icon-1.png" alt=""/>
                                    </div>
                                </div>
                                <span>400 + Platforms Created</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="wrap">
                                <div class="img-wrap">
                                    <div class="img-pos">
                                        <img src="/wp-content/themes/wptest3/images/gaming-icon-2.png" alt=""/>
                                    </div>
                                </div>
                                <span>15 Years Industry Experience</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="wrap">
                                <div class="img-wrap">
                                    <div class="img-pos">
                                            <img src="/wp-content/themes/wptest3/images/gaming-icon-3.png" alt=""/>
                                    </div>
                                </div>
                                <span>Agile Development</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="wrap wrap-4">
                                <div class="img-wrap">
                                    <div class="img-pos">
                                        <img src="/wp-content/themes/wptest3/images/gaming-icon-4.png" alt=""/>
                                    </div>
                                </div>
                                <span>U.S. Project Manager</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="wrap wrap-5">
                                <div class="img-wrap">
                                    <div class="img-pos">
                                        <img src="/wp-content/themes/wptest3/images/gaming-icon-5.png" alt=""/>
                                    </div>
                                </div>
                                <span>55 Developers</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content-text">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="title">
                                <sapan class="ico">
                                    <img src="/wp-content/themes/wptest3/images/gaming-smal-icon-1.png" alt=""/>
                                </sapan>
                                Mobile Solutions
                            </div>
                            <p class="body">
                                Our team has built iOS and Android educational solutions for many clients while providing full compliance and integration of proprietary data.  We can create custom apps that stand alone or work as an extension of your current software or e-learning system.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <div class="title">
                                <sapan class="ico">
                                    <img src="/wp-content/themes/wptest3/images/gaming-smal-icon-2.png" alt=""/>
                                </sapan>
                                SCORM Expertise
                            </div>
                            <p class="body">
                                Pilgrim Consulting has extensive knowledge in building complex SCORM e-learning platforms and systems.  Our team has worked with various versions of Learning Management Systems and are experts at incorporating the Experience API (xAPI).
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="title">
                                <sapan class="ico">
                                    <img src="/wp-content/themes/wptest3/images/gaming-smal-icon-3.png" alt=""/>
                                </sapan>
                                QA & Testing
                            </div>
                            <p class="body">
                                We have extensive quality assurance and quality control professionals connected with every project and client we work with to ensure that all requirements are meet and exceeded.  You will never get a completed project back that has not been extensively tested.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <div class="title">
                                <sapan class="ico">
                                    <img src="/wp-content/themes/wptest3/images/gaming-smal-icon-4.png" alt=""/>
                                </sapan>
                                Custom Development
                            </div>
                            <p class="body">
                               At Pilgrim Consulting we have the experience and knowledge to develop various educational custom systems while providing integration with leading software platforms and services incorporating the latest in usability and cyber security for e-learning platforms  
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="form">
                   <!--  <form novalidate="" method="post" action="" class="col-md-12 col-sm-12 col-xs-12 side-contact-form" id="contact-form" >
                       <div class="talk-to col-md-12 col-sm-12 col-xs-12">
                           <span class="top-text">Let's Talk Business!</span>
                           <span class="phone">1 615 236 6868</span>
                       </div>
                       <div class="form-group col-md-12 col-sm-12 col-xs-12">
                           <div class="controls">
                               <input type="text" class="form-control" placeholder="Your name" name="contactName" required>
                           </div>
                       </div>
                       <div class="form-group col-md-12 col-sm-12 col-xs-12">
                           <div class=" controls">
                               <input type="text" class="form-control" placeholder="Company" name="yourcompany">
                           </div>
                       </div>
                       <div class="form-group col-md-12 col-sm-12 col-xs-12">
                           <div class="controls">
                               <input type="email" class="form-control" placeholder="Email Address" name="email" required>
                           </div>
                       </div>
                       <div class="form-group col-md-12 col-sm-12 col-xs-12">
                           <div class=" controls">
                               <input type="text" class="form-control" placeholder="Skype" name="skype">
                           </div>
                       </div>
                       <div class="form-group col-md-12 col-sm-12 col-xs-12">
                           <div class=" controls">
                               <input type="text" class="form-control" placeholder="Phone Number" name="phonenumber">
                           </div>
                       </div>
                       <div class="form-group col-md-12  col-sm-12 col-xs-12 textarea-box">
                           <div class="controls">
                               <textarea rows="6" class="form-control" placeholder="How can we help?" name="description"></textarea>
                           </div>
                       </div>
                       <div class="form-group col-md-12 col-xs-12 col-sm-12 text-right">
                           <a href="#" class="top-contact-btn">Submit</a>
                       </div>
                       <div class="form-group col-md-12  col-sm-12 col-xs-12 textarea-box">
                           <input type="submit" value="submit" class="submit" />
                       </div>
                   
                   </form> -->

                   <?php echo do_shortcode( '[contact-form-7 id="92" title="Contact form 1"]' ); ?>
                </div>
                <div style="clear: both"></div>
                <div class="book col-sm-6 col-md-12">
                    <div class="title">
                        Report on IP Data Security
                    </div>
                    <div class="row">
                        <div class="col-md-6 text">
                            Are you ready for the digitized world? This report will help you see how data security affects your business
                        </div>
                        <div class="col-md-6 book-img">
                            <img src="/wp-content/themes/wptest3/images/ceo-book.png" alt=""/>
                        </div>
                    </div>
                    <div class="col-md-12"> 
                            <form id="book-form" class="book-contact-form has-validation-callback" action="" method="post" novalidate="">
                                <div class="form-group"> 
                                    <div class="col-md-12 col-sm-12 col-xs-12"> 
                                        <input type="text" class="form-control input-md" data-validation-length="2-20" data-validation="length" placeholder="Name" name="mailChimpName" id="mailChimpName"> 
                                    </div> 
                                    <div class="col-md-12 col-sm-12 col-xs-12"> 
                                        <input type="text" class="form-control input-md" data-validation="email" placeholder="Email" name="mailChimpEmail" id="mailChimpEmail"> 
                                    </div> 
                                    <div class="col-md-12 col-sm-12 col-xs-12"> 
                                        <a href="" class="book-down subscribe-url" type="submit" data-subscribe-id="39cdb68231" data-report-title="Report on IP Data Security">Download</a>
                                        <!--<a href="#" data-subscribe-id="9102711007"class="orange-btn subscribe-url">Download Now</a>-->
                                    </div> 
                                </div> 

                            </form> 
                        </div>
                </div>
            </div>
        </div>
    </section>


   <?php echo do_shortcode( '[contact-form-7 id="92" title="Contact form 1"]' ); ?>

<?php get_footer(); ?>