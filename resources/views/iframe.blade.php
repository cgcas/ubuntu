<!DOCTYPE html>
<html lang="EN">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="robots" content="noindex">
    <link rel="stylesheet" href="//www.diverporno.com/css/reset.css" type="text/css" >
    <link rel="stylesheet" href="//www.diverporno.com/css/i/i1.css" type="text/css" media="screen,projection">

    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://rs.maxiporn.com/js/iframe-tracker.js"></script>
    
</head>
<body>
    <div class="contenido contenido-tube">

        <h2 class="title"><span class="ico-h2 sprite"></span> Titulo de prueba</h2>
        <div class="clear"></div>
        <div class="box-listados">
            <a class="btn-left-tube sprite ga-left" id="btn-left" href="#"></a>
            <?php $i = 0; $max = 6; $p = 1;?>

            <?php foreach($categories as $c) : ?>
                <div class="muestra-canal muestra-canal-tube movible" <?= ( $i > ($max-1) )?'style="display:none"' : '' ?> data-order="<?=$i++?>" id="muestra<?= $c['id'] ?>">
                    <?php $srcHref = $c['link'] ?>
                    <a class="thumb thumb-tube iframetracker ga-click" target="_blank" href="<?= $srcHref?>" data-id="<?= $c['id'] ?>" data-name="<?= $c['name'] ?>" data-position="<?=$p?>">
                        <img src="<?= $c['thumbnail'] ?>" width="175" height="150"  />
                    </a>
                    <h2 class="tit-tube"><a class="ga-click" data-id="<?= $c['id'] ?>" target="_blank" href="<?= $srcHref; ?>" data-name="<?= $c['name'] ?>" data-position="<?=$p?>"><?= $c['name'] ?></a></h2>
                </div>
                <?php $p++; ?>
            <?php endforeach; ?>

            <a class="btn-right-tube sprite ga-right" id="btn-right" href="#"></a>
            <div class="clear"></div>
        </div>
    </div>
    <script type="text/javascript" src="js/iframe.js"></script>
    
</body>

</html>
