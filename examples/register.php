<?php require_once 'test1.php' ?>


<form method="post">
    
    <div class="field">
        Username<br>
        <input name="username" placeholder="username"><br>
        <span style="color: #cd5c5c; font-size: small">
            <?=$validator->getError('username')?>
        </span><br><br>
    </div>
    
    <div class="field">
        Email<br>
        <input name="email" placeholder="username"><br>
        <span style="color: #cd5c5c; font-size: small">
            <?=$validator->getError('email')?>
        </span><br><br>
    </div>
    
    <div class="field">
        Password<br>
        <input name="password" placeholder="password"><br>
        <span style="color: #cd5c5c; font-size: small">
            <?=$validator->getError('password')?>
        </span><br><br>
    </div>
    
    <div class="field">
        Url<br>
        <input name="url" placeholder="Website or ftp url"><br>
        <span style="color: #cd5c5c; font-size: small">
            <?=$validator->getError('url')?>
        </span><br><br>
    </div>
    
    <div class="field">
        Slug<br>
        <input name="slug" placeholder="Friendly url portion"><br>
        <span style="color: #cd5c5c; font-size: small">
            <?=$validator->getError('slug')?>
        </span><br><br>
    </div>
    
    <div class="field">
        Date<br>
        <input name="date" placeholder="Format d-m-Y"><br>
        <span style="color: #cd5c5c; font-size: small">
            <?=$validator->getError('date')?>
        </span><br><br>
    </div>
    
    <div class="field">
        Date Before<br>
        <input name="date_before" placeholder="Before 12-09-2016"><br>
        <span style="color: #cd5c5c; font-size: small">
            <?=$validator->getError('date_before')?>
        </span><br><br>
    </div>
    
    <div class="field">
        Date After<br>
        <input name="date_after" placeholder="After 12-07-2016"><br>
        <span style="color: #cd5c5c; font-size: small">
            <?=$validator->getError('date_after')?>
        </span><br><br>
    </div>
    
    <div class="field">
        Greet something<br>
        <input name="greet" placeholder="only lowercase alphabets"><br>
        <span style="color: #cd5c5c; font-size: small">
            <?=$validator->getError('greet')?>
        </span><br><br>
    </div>
    
    <div class="field">
        <input type="submit">
    </div>

</form>