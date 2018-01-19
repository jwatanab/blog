<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Modal\Entity\User $user
 * @var \App\Model\Entity\Item $item
 */
?>
<div id='modal_bg'></div>
<div id='modal_window'>                        
<span class='close'>&times;</span>
<form action="/api/content/add" method="POST">
    <div class='login_name'>
        <h3>Input Content</h3>
        <input type="hidden" name="user_id" value="<?= $user['user_id'] ?>">
        <input class='input_name' placeholder="Title" name="title" size="30" />
    </div>
    <div class='login_password'>
        <textarea class='input_password' placeholder="Content" name="content" cols="70" rows="4"></textarea>
        <input type="file" name="text" class="file" />
        <i class="fa fa-file" aria-hidden="true"></i>
        <button class="submit_btn">送信</button>                
    </div>
</form>
</div>
<div class="main">
    <div class="main_title">Sumare sore</div>
    <div class="login">User Form</div>
</div>
<div class="form_container">
    <div class="content_title email_content">Login: <?php print $user['email'] ?></div>    
    <div class="content_title content_post">内容を投稿</div>
    <div class="content_title">サービスを登録</div>
<div class="animation">
    <a href="/api/logout" class="shape"></a>
</div>
</div>
<div class="sub_container">
    <div class="sub_content">
        <div class="title"><?= h($item->title) ?></div>
        <div class="content"><?= $item->content ?></div>
    </div>
</div>
<?= $this->Html->script('http://code.jquery.com/jquery.min.js')  ?>
<?= $this->Html->script('script') ?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><? // __('Actions') ?></li>
        <li><? // $this->Html->link(__('Edit Item'), ['action' => 'edit', $item->id]) ?> </li>
        <li><? // $this->Form->postLink(__('Delete Item'), ['action' => 'delete', $item->id], ['confirm' => __('Are you sure you want to delete # {0}?', $item->id)]) ?> </li>
        <li><? // $this->Html->link(__('List Items'), ['action' => 'index']) ?> </li>
        <li><? // $this->Html->link(__('New Item'), ['action' => 'add']) ?> </li>
        <li><? // $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><? // $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="items view large-9 medium-8 columns content">
    <h3><? // h($item->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><= // __('User') ?></th>
            <td><? // $item->has('user') ? $this->Html->link($item->user->user_id, ['controller' => 'Users', 'action' => 'view', $item->user->user_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><? // __('Title') ?></th>
            <td><? // h($item->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><? // __('Content') ?></th>
            <td><? // h($item->content) ?></td>
        </tr>
        <tr>
            <th scope="row"><? // __('Id') ?></th>
            <td><? // $this->Number->format($item->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><? // __('Created At') ?></th>
            <td><? // h($item->created_at) ?></td>
        </tr>
    </table>
</div> ?>
