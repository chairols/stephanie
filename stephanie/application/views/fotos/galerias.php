<title>Stephanie Admin</title>
<div id="content">
    <div id="content-header">
        <h1>Galerías de Fotos</h1>
    </div>
    
    <div class="container-fluid">
        <hr>
        
        <form method="POST">
            <div class="row-fluid">
                <div class="span5">
                    <select name="categoria" class="span12">
                        <?php foreach($categorias as $categoria) { ?>
                        <option value="<?=$categoria['idcategoria']?>"><?=$categoria['categoria']?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="span1">
                    <button class="btn btn-success" id="boton">Cambiar</button>
                </div>
            </div>
        </form>
        <hr>
        
        
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-picture"></i>
                </span>
                <h5><?=$cat?></h5>
            </div>

            <div class="widget-content">
                <ul class="thumbnails">
                    
                    <?php foreach($fotos as $foto) { ?>
                    <li class="span2">
                        <a>
                            <img src="/upload/thumb/<?=$foto['foto']?>" alt>
                        </a>
                        <div class="actions">
                            <a class="lightbox_trigger" href="/upload/<?=$foto['foto']?>">
                                <i class="icon-search"></i>
                            </a>
                            <a title href="/fotos/borrar/<?=$foto['idfoto']?>/<?=$idcategoria?>/">
                                <i class="icon-trash"></i>
                            </a>
                        </div>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>

    </div>
    
</div>