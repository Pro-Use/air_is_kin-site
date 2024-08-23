<div style="font-family: apercu, system-ui, arial, sans-serif;">
    Dear <?= $title; ?> <?= $name;?>,
    <br/>
    <div>
    <?= $body; ?>
    </div>
    <?php if ($logo = $sig_img->toFile()): 
        $small = $logo->thumb(['width' => 450]);
        $src = $small->url();
        $height = $small->height();
    ?>
        <img src="<?= $src ?>" alt="Eldens" width="450" height="<?= $height ?>">
    <?php endif ?>
    <div style='font-size:8pt;font-family:"Lucida Sans Typewriter", monospace'>
        <?= $signature; ?>
    </div>
</div>

