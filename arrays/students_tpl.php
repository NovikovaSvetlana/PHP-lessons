<div class="student">
    <h2><?= $student['fName']?> <?= $student['lName']?></h2>
    <h3><?= $student['email']?></h3>
    <ul>
        <?php foreach($student['phones'] as $phone):?>
            <li><?= $phone?></li>
        <?php endforeach;?>
    </ul>
    
    <address>
        Город: <?= $student['address']['city']?>, улица: <?= $student['address']['street']?>,<?= $student['address']['house']?>
    </address>
</div>