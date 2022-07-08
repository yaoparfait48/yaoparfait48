
                    <section data-id="contact" class="animated-section">
                        <div class="page-title">
                            <h2>Contact</h2>
                        </div>

                        <div class="section-content">

                            <div class="row">
                                <!-- Contact Info -->
                                <div class="col-xs-12 col-sm-4">
                                    <div class="lm-info-block gray-default">
                                        <i class="lnr lnr-map-marker"></i>
                                        <h4>Abidjan Treichville</h4>
                                        <span class="lm-info-block-value"></span>
                                        <span class="lm-info-block-text"></span>
                                    </div>

                                    <div class="lm-info-block gray-default">
                                        <i class="lnr lnr-phone-handset"></i>
                                        <h4>+225 07 89 42 52 35 <br> +225 05 76 75 92 63</h4>
                                        <span class="lm-info-block-value"></span>
                                        <span class="lm-info-block-text"></span>
                                    </div>

                                    <div class="lm-info-block gray-default">
                                        <i class="lnr lnr-envelope"></i>
                                        <h4><a href="https://lmpixels.com/cdn-cgi/l/email-protection"
                                                class="__cf_email__"
                                                data-cfemail="c1a0ada4b981a4b9a0acb1ada4efa2aeac">yaoparfait48@gmail.com</a>
                                        </h4>
                                        <span class="lm-info-block-value"></span>
                                        <span class="lm-info-block-text"></span>
                                    </div>

                                    <div class="lm-info-block gray-default">
                                        <i class="lnr lnr-checkmark-circle"></i>
                                        <h4>Freelance possible</h4>
                                        <span class="lm-info-block-value"></span>
                                        <span class="lm-info-block-text"></span>
                                    </div>


                                </div>
                                <!-- End of Contact Info -->

                                <!-- Contact Form -->
                                <div class="col-xs-12 col-sm-8">
                                    <div id="map" class="map">
                                        <div class="lmpixels-map">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3235.596860654133!2d-4.010363170315309!3d5.306553813148982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1ebdd7fe9369b%3A0xc116a0b2d84af5a7!2zNcKwMTgnMTguOCJOIDTCsDAwJzI5LjkiVw!5e1!3m2!1sfr!2sci!4v1657127619873!5m2!1sfr!2sci" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                    <div class="block-title">
                                        <h3>Puis-je vous <span>aider?</span></h3>
                                    </div>

                                    <form wire:submit.prevent="submitContact">

                        @error('category_id') <div class="messages">Verifier les champs à saisir</div> @enderror

                                        <div class="controls two-columns">
                                            <div class="fields clearfix">
                                                <div class="left-column">
                                                    <div class="form-group form-group-with-icon">
                                                        <input id="form_name" type="text" wire:model.defer="name"
                                                            class="form-control" placeholder="" required="required"
                                                            data-error="Le champs nom est obligatoire">
                                                        <label>Nom et prénoms</label>
                                                        <div class="form-control-border"></div>
                                                        <div class="help-block with-errors"></div>
                                                    </div>

                                                    <div class="form-group form-group-with-icon">
                                                        <input id="form_email" type="email" wire:model.defer="email"
                                                            class="form-control" placeholder="" required="required"
                                                            data-error="Un email valide est obligatoire">
                                                        <label>Email</label>
                                                        <div class="form-control-border"></div>
                                                        <div class="help-block with-errors"></div>
                                                    </div>

                                                    <div class="form-group form-group-with-icon">
                                                        <input id="form_subject" type="text" wire:model.defer="subject"
                                                            class="form-control" placeholder="" required="required"
                                                            data-error="Objet du message oligatoire">
                                                        <label>Objet</label>
                                                        <div class="form-control-border"></div>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="right-column">
                                                    <div class="form-group form-group-with-icon">
                                                        <textarea id="form_message" wire:model.defer="message" class="form-control" placeholder="" rows="7" required="required"
                                                            data-error="S'il vous plaît entrez votre message"></textarea>
                                                        <label>Message</label>
                                                        <div class="form-control-border"></div>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="g-recaptcha"
                                                data-sitekey="6LdqmCAUAAAAAMMNEZvn6g4W5e0or2sZmAVpxVqI"
                                                data-theme="dark">
                                            </div>

                                            <input type="submit" class="button btn-send" value="Envoyer">
                                        </div>
                                    </form>
                                </div>
                                <!-- End of Contact Form -->
                            </div>

                        </div>
                    </section>