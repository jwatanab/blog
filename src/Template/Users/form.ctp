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
                <textarea class='input_password' placeholder="Content" name="content" cols="60" rows="4"></textarea>
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
<div class="user_content_main_title">User Content</div>
<div class="select_form">
    <div class="content_title">Report link</div>
    <div class="content_title">News</div>
    <div class="content_title">User</div>
</div>
<div class="content_container">
    <div class="content_title">Archive</div>
    <div class="main_content">
    <!-- 要ソート -->
    <?php foreach($items as $item): ?>
        <form class="content_submit_form" action="/api/content/view" method="POST">
        <input type="hidden" name="id" value="<?= $item->id ?>">
            <div class="content">
                <!-- 日本語が表示できない -->
                <div class="name"><?= h($item->title) ?></div>
                <div class="time"><?= h($item->created_at) ?></div>
            </div>
        </form>
    <?php endforeach ?>   
    </div>
    <!-- どうなっているかは分からない -->
    <?php 
        $this->Paginator->setTemplates([
            'current' => '<div class="link"><a href="{{url}}">{{text}}</a></div>',
            'number' => '<div class="link"><a href="{{url}}">{{text}}</a></div>'
        ]); 
    ?>
    <div class="pagenate">
        <?php print $this->Paginator->numbers(); ?>
    </div>
</div>