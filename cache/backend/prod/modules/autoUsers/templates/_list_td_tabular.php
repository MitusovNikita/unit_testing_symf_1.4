<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($Users->getId(), 'users_edit', $Users) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_name">
  <?php echo $Users->getName() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_status_id">
  <?php echo $Users->getStatusId() ?>
</td>
