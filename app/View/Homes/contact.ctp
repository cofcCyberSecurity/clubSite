<div class="loading-container">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>

<div class="content-wrapper hide-until-loading">
    <!-- Contact Map -->

    <div class="contact-map3" id="contact_map">

    </div>

    <!-- Contact Map -->
    <div class="body-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <div class="contact-body">
                        <h3 class="h3-body-title">
                            Leave A Message
                        </h3>
                        <p class="body_paragraph contact-paragraph">
                        Something will go here to talk about things to contact us about.
                        </p>

                        <?php echo $this -> Form -> create('', array(
                            'class' => 'form-wrapper', 'id' => 'contact-form', 'method' => 'post', 'role' => 'form'
                        ));?>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-7">
                                        <label for="name">
                                            Name *
                                        </label>
                                        <?php echo $this -> Form -> input('name',
                                            array(
                                                'type' => 'text',
                                                'name' => 'name',
                                                'id' => 'name',
                                                'class' => 'form-control',
                                                'data-errmsg' => 'Name is required.',
                                                'minlength' => '2',
                                                'placeholder' => 'Your Name',
                                                'required',
                                                'label' => false
                                            )
                                        );?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-7">
                                        <label for="email">
                                            Email *
                                        </label>
                                        <?php echo $this -> Form -> input('email',
                                            array(
                                                'type' => 'email',
                                                'name' => 'email',
                                                'id' => 'email',
                                                'class' => 'form-control',
                                                'data-errmsg' => 'Email is required.',
                                                'minlength' => '2',
                                                'placeholder' => 'Your Email',
                                                'required',
                                                'label' => false
                                            )
                                        );?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-7">
                                        <label for="message">
                                            Subject *
                                        </label>
                                        <?php echo $this -> Form -> input('subject',
                                            array(
                                                'type' => 'text',
                                                'name' => 'subject',
                                                'id' => 'subject',
                                                'class' => 'form-control',
                                                'data-errmsg' => 'Subject is required.',
                                                'minlength' => '2',
                                                'placeholder' => 'Subject',
                                                'required',
                                                'label' => false
                                            )
                                        );?>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-8">
                                        <label for=message">
                                            Message *
                                        </label>
                                        <?php echo $this -> Form -> input('message',
                                            array(
                                                'type' => 'textarea',
                                                'name' => 'message',
                                                'id' => 'message',
                                                'class' => 'form-control',
                                                'data-errmsg' => 'Message is required.',
                                                'minlength' => '2',
                                                'rows' => '3',
                                                'placeholder' => 'Your Message',
                                                'required',
                                                'label' => false
                                            )
                                        );?>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2 col-sm-2 offset2">
                                    <?php echo $this -> Form -> button('Submit',
                                        array(
                                            'type' => 'submit',
                                            'value' => 'Submit',
                                            'class' => 'btn btn-lg btn-cofc-red',
                                            'div' => false,
                                            'label' => false
                                        )
                                    );?>
                                </div>
                            </div>

                        <?php echo $this -> Form -> end();?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-md-offset-1 col-sm-offset-1">
                    <div class="sidebar">


                        <div class="sidebar-block">
                            <h3 class="h3-sidebar-title">
                                Contact Us
                            </h3>
                            <div class="sidebar-icon-item">
                                <i class="icon-email"></i> cybersecurityclub@cofc.edu
                            </div>
                            <div class="sidebar-icon-item">
                                <i class="icon-home"></i> 360 Concord St. Charleston, SC 29401
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--.content-wrapper end -->