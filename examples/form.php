<?php require_once 'validator.php' ?>

<!DOCTYPE html>
    <html>
        <head>
            <title>Girgit/Validator: Validation Redefined</title>
            <link rel="stylesheet" href="css/bricks.css">
            <link rel="stylesheet" href="css/custom.css">
        </head>
        <body>
            <header>
                <h3>&#10052; Girgit / Validator</h3>
            </header>
            
            <section class="wrapper">
                <form method="post" class="row">
                    
                    <div class="col m12 t6 form-field">
                        <label for="username" class="label-block">Username</label>
                        <input type="text" name="username" placeholder="username" id="username" class="full-width" value="<?=htmlentities($_POST['username'] ?? '')?>">
                        <span class="error">
                            <?=$validator->getError('username')?>
                        </span>
                    </div>
                    
                    <div class="col m12 t6 form-field">
                        <label for="email" class="label-block">Email</label>
                        <input type="text" name="email" placeholder="username" id="email" class="full-width" value="<?=htmlentities($_POST['email'] ?? '')?>">
                        <span class="error">
                            <?=$validator->getError('email')?>
                        </span>
                    </div>
                    
                    <div class="col m12 t6 form-field">
                        <label for="password" class="label-block">Password</label>
                        <input type="text" name="password" placeholder="password" id="password" class="full-width" value="<?=htmlentities($_POST['password'] ?? '')?>">
                        <span class="error">
                            <?=$validator->getError('password')?>
                        </span>
                    </div>
                    
                    <div class="col m12 t6 form-field">
                        <label for="confirm_password" class="label-block">Confirm Password</label>
                        <input type="text" name="confirm_password" placeholder="confirm_password" id="confirm_password" class="full-width" value="<?=htmlentities($_POST['confirm_password'] ?? '')?>">
                        <span class="error">
                            <?=$validator->getError('confirm_password')?>
                        </span>
                    </div>
                    
                    <div class="col m12 t6 form-field">
                        <label for="url" class="label-block">Url</label>
                        <input type="text" name="url" placeholder="website/ftp url" id="url" class="full-width" value="<?=htmlentities($_POST['url'] ?? '')?>">
                        <span class="error">
                            <?=$validator->getError('url')?>
                        </span>
                    </div>
                    
                    <div class="col m12 t6 form-field">
                        <label for="slug" class="label-block">Slug</label>
                        <input type="text" name="slug" placeholder="friendly url portion" id="slug" class="full-width" value="<?=htmlentities($_POST['slug'] ?? '')?>">
                        <span class="error">
                            <?=$validator->getError('slug')?>
                        </span>
                    </div>
                    
                    <div class="col m12 t6 form-field">
                        <label for="date" class="label-block">Date</label>
                        <input type="text" name="date" placeholder="format d-m-Y" id="date" class="full-width" value="<?=htmlentities($_POST['date'] ?? '')?>">
                        <span class="error">
                            <?=$validator->getError('date')?>
                        </span>
                    </div>
                    
                    <div class="col m12 t6 form-field">
                        <label for="date_before" class="label-block">Date Before</label>
                        <input type="text" name="date_before" placeholder="before 12-09-2016" id="date_before" class="full-width" value="<?=htmlentities($_POST['date_before'] ?? '')?>">
                        <span class="error">
                            <?=$validator->getError('date_before')?>
                        </span>
                    </div>
                    
                    <div class="col m12 t6 form-field">
                        <label for="date_after">Date After</label>
                        <input type="text" name="date_after" placeholder="after 12-07-2016" id="date_after" class="full-width" value="<?=htmlentities($_POST['date_after'] ?? '')?>">
                        <span class="error">
                            <?=$validator->getError('date_after')?>
                        </span>
                    </div>
                    
                    <div class="col m12 t6 form-field">
                        <label for="regex">Regex</label>
                        <input type="text" name="regex" placeholder="greet something: only lowercase alphabets" id="regex" class="full-width" value="<?=htmlentities($_POST['regex'] ?? '')?>">
                        <span class="error">
                            <?=$validator->getError('regex')?>
                        </span>
                    </div>
                    
                    <div class="col m12 t6 form-field">
                        <label for="ip">IP Adress</label>
                        <input type="text" name="ip" placeholder="enter an IP adress" id="ip" class="full-width" value="<?=htmlentities($_POST['ip'] ?? '')?>">
                        <span class="error">
                            <?=$validator->getError('ip')?>
                        </span>
                    </div>
                    
                    <div class="col m12 t6 form-field">
                        <label for="length">Length</label>
                        <input type="text" name="length" placeholder="enter something of length 12" id="length" class="full-width" value="<?=htmlentities($_POST['length'] ?? '')?>">
                        <span class="error">
                            <?=$validator->getError('length')?>
                        </span>
                    </div>
                    
                    <div class="col m12 t6 form-field">
                        <label for="age">Age</label>
                        <input type="text" name="age" placeholder="between 16 to 28" id="age" class="full-width" value="<?=htmlentities($_POST['age'] ?? '')?>">
                        <span class="error">
                            <?=$validator->getError('age')?>
                        </span>
                    </div>
                    
                    <div class="col m12 form-field txt-center">
                        <input type="submit" class="btn btn-blue">
                    </div>
                
                </form>            
            </section>
            
            <footer class="txt-center">
                &copy; Pradeep T. | Licencse: MIT
            </footer>
        </body>
    </html>

