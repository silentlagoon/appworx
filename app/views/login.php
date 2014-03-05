<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
<div class="login_form">
    <?= Form::open(array('url' => '/verify')); ?>
    <?= Form::label('login', 'Login:'); ?>
        <br/>
    <?= Form::text('login'); ?>
        <br/>
    <?= Form::label('password', 'Password:'); ?>
        <br/>
    <?= Form::password('password'); ?>
        <br/>
        <br/>
        <button class="btn btn-success" type="submit">Login</button>
    <?= Form::close(); ?>
</div>
