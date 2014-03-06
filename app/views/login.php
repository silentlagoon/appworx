<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
<div class="login_form">
    <div style="font-size: 24px;margin-bottom: 25px;"><strong>Currently you are not logged in:</strong></div>
    <?= Form::open(array('url' => '/verify')); ?>
    <?= Form::label('email', 'Email:'); ?>
        <br/>
    <?= Form::text('email'); ?>
        <br/>
    <?= Form::label('password', 'Password:'); ?>
        <br/>
    <?= Form::password('password'); ?>
        <br/>
        <br/>
        <button class="btn btn-success" type="submit">Login</button> or <a href="/register" class="btn btn-warning" type="submit">Register</a>
    <?= Form::close(); ?>
</div>
