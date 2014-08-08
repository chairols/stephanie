<div id="content">
    <div id="content-header">
        <h1>Agregar Fotos</h1>
    </div>
    <div class="container-fluid">
        
        <hr>
        <form method="post" enctype='multipart/form-data'>
            <div class="row-fluid">
                <div class="span5">
                    <input type="file" name="foto" class="span12" accept="image/*">
                </div>
                <div class="span5">
                    <select name="categoria" class="span12">
                        <?php foreach ($categorias as $categoria) { ?>
                        <option value="<?=$categoria['idcategoria']?>"><?=$categoria['categoria']?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="span2">
                    <button class="btn btn-block btn-success" type="submit">Agregar</button>
                </div>
            </div>
        </form>
        
        <?php if(isset($error)) { ?>
        <div class="alert alert-danger"><strong><?=$error['error']?></strong></div>
        <?php } ?>
        <?php if(isset($success)) { ?>
        <div class="alert alert-success"><strong><?=$success?></strong></div>
        <?php } ?>
    </div>
</div>