<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <div class="register_form">
        <?= Form::open(array('url' => '/proceed')); ?>
        <?= Form::label('login', 'Login:'); ?>
            <br/>
        <?= Form::text('login'); ?>
            <br/>
        <?= Form::label('password', 'Password:'); ?>
            <br/>
        <?= Form::password('password'); ?>
            <br/>
            <br/>
            <button class="btn btn-success" type="submit">Register</button>
        <?= Form::close(); ?>
    </div>