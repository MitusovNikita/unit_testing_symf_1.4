<td colspan="3">
  <?php echo __('%%id%% - %%name%% - %%status_id%%', array('%%id%%' => link_to($Users->getId(), 'users_edit', $Users), '%%name%%' => $Users->getName(), '%%status_id%%' => $Users->getStatusId()), 'messages') ?>
</td>
