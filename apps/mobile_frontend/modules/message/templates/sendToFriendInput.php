<?php use_helper('opMessage') ?>
<?php op_mobile_page_title(__('Compose Message')) ?>
<?php if ($sendMember): ?>
<?php echo __('To') ?>:
<?php echo op_message_link_to_member($sendMember) ?><br /><br />
<?php endif; ?>
<?php echo $form->renderFormTag(url_for('message/sendToFriend'), array('method' => 'POST')) ?>
<?php echo $form ?>
<input type="submit" value="<?php echo __('Send') ?>"><br>
<input type="submit" value="<?php echo __('Draft') ?>" name="is_draft">
</form>
