<div class="menu">
      <?php foreach($items as $a):?>
       <a href="<?= $a['url']?>" title="<?= $a['title']?>"> <?= $a['text']?></a>
       <?php endforeach;?>
</div>