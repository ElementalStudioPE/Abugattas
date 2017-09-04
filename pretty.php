<section class="login-abugattas">

   <?php echo $this->getMessagesBlock()->getGroupedHtml() ?>
    <form action="<?php echo $this->getPostActionUrl() ?>" method="post" id="login-form">
        <?php echo $this->getBlockHtml('formkey'); ?>
        <div class="row">
            <div class="col-sm-12" style="max-width: 600px;padding: 20px;">
                <div class="registered-users form-wrap">
                    <div class="content">
                        <div class="caja-login" >
                           <h2>INGRESAR</h2>
                           <a href="#facebook-login">
                              <img src="http://sergiosaavedra.me/media/wysiwyg/facebook.png"> <span>Conectar con facebook</span>
                           </a>
                           <p>ó</p>

                        </div>
                        <ul class="form-list">
                            <li>
                                <div class="input-box">
                                    <input type="text" name="login[username]" value="<?php echo $this->escapeHtml($this->getUsername()) ?>" id="email" class="input-text required-entry validate-email" title="<?php echo $this->__('Email Address') ?>" placeholder="E-mail" />
                                </div>
                            </li>
                            <li>
                                <div class="input-box">
                                    <input type="password" name="login[password]" class="input-text required-entry validate-password" id="pass" title="<?php echo $this->__('Password') ?>" placeholder="Contraseña"/>
                                </div>
                            </li>
                            <?php echo $this->getChildHtml('form.additional.info'); ?>
                            <?php echo $this->getChildHtml('persistent.remember.me'); ?>
                        </ul>
                        <?php echo $this->getChildHtml('persistent.remember.me.tooltip'); ?>
                        <p class="required"><?php echo $this->__('* Required Fields') ?></p>
                    </div>
                    <div class="buttons-set">
                        <a href="<?php echo $this->getForgotPasswordUrl() ?>" class="f-left">Olvidé mi contraseña</a>
                        <button type="submit" class="button" title="<?php echo $this->__('Login') ?>" name="send" id="send2"><span><span>INICIAR SESIÓN</span></span></button>
                    </div>
                </div>
                <div class="registro-abugattas">
                  <button type="button" title="<?php echo $this->__('Create an Account') ?>" class="button" onclick="window.location='<?php echo Mage::helper('persistent')->getCreateAccountUrl($this->getCreateAccountUrl()) ?>';"><span><span>REGÍSTRECE</span></span></button>
                </div>
            </div>
        </div>
        <?php if (Mage::helper('checkout')->isContextCheckout()): ?>
            <input name="context" type="hidden" value="checkout" />
        <?php endif; ?>
    </form>
    <script type="text/javascript">
    //<![CDATA[
        var dataForm = new VarienForm('login-form', true);
    //]]>
    </script>

   
</section>