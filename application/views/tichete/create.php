<?php echo validation_errors(); ?>

<!-- ?php echo form_open('create'); ?> -->
<form action="create" method="POST">
    <div class="form-group">
        <label for="denumire">Denumire</label>
        <input type="text" name="title" class="form-control" id="denumire" aria-describedby="denumire">
    </div>
    <div class="form-group">
        <label for="descriere">Descriere</label>
        <textarea class="form-control" name="descriere" id="descriere" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="data">Data</label>
        <input type="text" name="data" class="form-control" id="data">
    </div>
    <div class="form-group">
        <label for="poza">Poza</label>
        <input type="file" name="poza" class="form-control-file" id="poza">
    </div>
    <div class="form-group">
        <label for="parinte">Select</label>
        <select class="form-control" name="parinte" id="parinte">
            <?php foreach ($tichete as $tichet) : ?>
                <option value="<?php echo $tichet['id'] ?>"><?php echo $tichet['title'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <input type="submit" name="submit" class="btn btn-primary" value="Adauga" />
</form>