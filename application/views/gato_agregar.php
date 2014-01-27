<?php $this->load->view('includes/header'); ?>
<form action="<?= site_url('gatos/agregar'); ?>" method="POST" role="form"> 
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" class="form-control" name="nombre">
    </div>
    <div class="form-group">
        <label>Alias</label>
        <input type="text" class="form-control" name="alias">
    </div>
    <div class="form-group">
        <label>Edad</label>
        <input type="text" class="form-control" name="edad">
    </div>
    <div class="form-group">
        <label>Color</label>
        <input type="text" class="form-control" name="color">
    </div>
    <div class="form-group">
        <label>Raza</label>
        <input type="text" class="form-control" name="raza">
    </div>
    <div class="form-group">
        <label>Descripción</label>
        <textarea class="form-control" rows="3" name="descripcion"></textarea>
    </div>
    <div class="form-group">
        <label>Sexo</label>
        <select class="form-control" name="sexo">
            <option value="0">Hembra</option>
            <option value="1">Macho</option>
        </select>
    </div>
    <div class="form-group">
        <label>Historia médica</label>
        <textarea class="form-control" rows="3" name="historiaMedica"></textarea>
    </div>
    <div class="form-group">
        <label>Foto para listado</label>
        <input type="text" class="form-control" name="urlFoto">
    </div>
    <input type="hidden" name="envioFormulario" value="1"></br>
    <button type="submit" class="btn btn-default">Agregar</button>
</form>
<?php $this->load->view('includes/footer'); ?>