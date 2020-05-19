<?php

function wpb_login_logo() { ?>
    <style type="text/css">
    .wp-core-ui .button-group.button-large .button, .wp-core-ui .button.button-large{
      min-height: 32px;
      line-height: 2.30769231;
      padding: 0 12px;
      background-color: red;
      border: 1px solid #fff;
    }
        #login h1 a, .login h1 a {
            background-image: url(http://localhost/amea/wp-content/themes/amea/assets/images/logo.gif);
        height:100px;
        width:300px;
        background-size: 109px 89px;
        background-repeat: no-repeat;
        padding-bottom: 10px;
        }
    </style>
  <?php }
  add_action( 'login_enqueue_scripts', 'wpb_login_logo' );
