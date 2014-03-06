<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <div class="register_form">
        <div style="font-size: 24px;margin-bottom: 25px;"><strong>Register:</strong></div>
        <?= Form::open(array('url' => '/proceed')); ?>
        <?= Form::label('email', 'Email:'); ?>
            <br/>
        <?= Form::text('email'); ?>
            <br/>
        <?= Form::label('password', 'Password:'); ?>
            <br/>
        <?= Form::password('password'); ?>
            <br/>
            <br/>
            <button class="btn btn-success" type="submit">Register</button>
        <?= Form::close(); ?>
    </div>