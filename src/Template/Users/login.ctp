<div class="main">
    <div class="main_title">Sumare sore</div>
    <div class="login">Login || Registr</div>
  </div>
<h3>
<?= $this->Flash->render() ?>
<?= $this->Form->create() ?>
<fieldset>
  <legend><?= __('Please enter your email and password') ?></legend>
    <?= $this->Form->control('email') ?>
    <?= $this->Form->control('password') ?>
</fieldset>
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
</h3>