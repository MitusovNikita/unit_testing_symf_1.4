<?php use_helper('I18N', 'Date') ?>
<?php include_partial('users/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Edit Users', array(), 'messages') ?></h1>

  <?php include_partial('users/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('users/form_header', array('Users' => $Users, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('users/form', array('Users' => $Users, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('users/form_footer', array('Users' => $Users, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
