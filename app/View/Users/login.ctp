<div class="loading-container">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>

<div class="content-wrapper hide-until-loading"><div class="body-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 animated" data-animtype="flipInY"
                     data-animrepeat="0"
                     data-speed="1s"
                     data-delay="0.5s">
                    <h2 class="h2-section-title">Login</h2>

                    <div class="i-section-title">
                        <i class="icon-users-outline">

                        </i>
                    </div>

                    <div class="space-sep20"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-sm-6 centered">
                    <div class="classic-form">
                        <?php echo $this->Form->create('User', array('class' => 'form-horizontal', 'name' => 'User')); ?>
                            <div class="form-group">
                                <label for="username" class="col-sm-3 control-label">Username</label>
                                <div class="col-sm-9">
                                    <?php echo $this -> Form -> input('username', array(
                                        'type' => 'text',
                                        'id' => 'username',
                                        'label' => false,
                                        'class' => 'form-control',
                                        'placeholder' => 'Username'
                                    ));?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-sm-3 control-label">Password</label>
                                <div class="col-sm-9">
                                    <?php echo $this -> Form -> input('password', array(
                                        'type' => 'password',
                                        'id' => 'password',
                                        'label' => false,
                                        'class' => 'form-control',
                                        'placeholder' => 'Password'
                                    ));?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <?php echo $this -> Form -> submit('Login', array(
                                        'class' => 'btn btn-block btn-cofc-red'
                                    ))?>
                                </div>
                            </div>

                        <?php echo $this -> Form -> end();?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--.content-wrapper end -->