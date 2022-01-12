<h3>
    <a href="<?php echo $_SESSION['home'] ?>admin" title="Inicio">Inicio</a> <span>| </span>
    <a href="<?php echo $_SESSION['home'] ?>admin/novas" title="Novas">Novas</a> <span>| </span>
    <?php if ($datos->id){ ?>
        <span>Editar <?php echo $datos->titulo ?></span>
    <?php } else { ?>
        <span>Nova nova</span>
    <?php } ?>
</h3>
<div class="row">
    <?php $id = ($datos->id) ? $datos->id : "nuevo" ?>
    <form class="col s12" method="POST" enctype="multipart/form-data" action="<?php echo $_SESSION['home'] ?>admin/novas/editar/<?php echo $id ?>">
        <div class="col m12 l6">
            <div class="row">
                <div class="input-field col s12">
                    <input id="titulo" type="text" name="titulo" value="<?php echo $datos->titulo ?>">
                    <label for="titulo">Título</label>
                </div>
                <div class="input-field col s12">
                    <input id="autor" type="text" name="autor" value="<?php echo $datos->autor ?>">
                    <label for="autor">Autor</label>
                </div>
                <div class="input-field col s12">
                    <?php $datat = ($datos->datat) ? date("d-m-Y", strtotime($datos->datat)) : date("d-m-Y") ?>
                    <input id="datat" type="text" name="datat" class="datepicker" value="<?php echo $datat ?>">
                    <label for="datat">Data</label>
                </div>
            </div>
        </div>
        <div class="col m12 l6 center-align">
            <div class="file-field input-field">
                <div class="btn">
                    <span>Imaxe</span>
                    <input type="file" name="imaxe">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                </div>
            </div>
            <?php if ($datos->imaxe){ ?>
                <img src="<?php echo $_SESSION['public']."img/".$datos->imaxe ?>" alt="<?php echo $datos->titulo ?>">
            <?php } ?>
        </div>
        <div class="col s12">
            <div class="row">
                <div class="input-field col s12">
                    <textarea id="extracto" class="materialize-textarea" name="extracto"><?php echo $datos->extracto ?></textarea>
                    <label for="extracto">Extracto</label>
                </div>
                <div class="input-field col s12">
                    <textarea id="texto" class="materialize-textarea" name="texto"><?php echo $datos->texto ?></textarea>
                    <label for="texto">Texto</label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <a href="<?php echo $_SESSION['home'] ?>admin/novas" title="Volver">
                    <button class="btn waves-effect waves-light" type="button">Volver
                        <i class="material-icons right">replay</i>
                    </button>
                </a>
                <button class="btn waves-effect waves-light" type="submit" name="guardar">Gardar
                    <i class="material-icons right">save</i>
                </button>
            </div>
        </div>
    </form>
</div>