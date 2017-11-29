<?php if(count($errors) > 0): ?>
    <div class="error">
        <?php foreach ($errors as $error): ?>
            <p style = "color: red; 
                        font-family: sans-serif; 
                        font-size: 12px;
                        "><?php echo $error; ?></p>
        <?php endforeach ?>
    </div>
<?php endif ?>