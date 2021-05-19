<form action="" method="POST">
    <input type="hidden" name="id" value="<?php echo $tichet->id; ?>">
    <div class="form-group">
        <label for="denumire">Denumire</label>
        <input type="text" value="<?php echo $tichet->title ?>" name="title" class="form-control" id="denumire" aria-describedby="denumire">
    </div>
    <div class="form-group">
        <label for="descriere">Descriere</label>
        <textarea class="form-control" name="descriere" id="descriere" rows="3"><?php echo $tichet->descriere ?></textarea>
    </div>
    <div class="form-group">
        <label for="data">Data</label>
        <input type="text" name="data" value="<?php echo $tichet->data ?>" class="form-control" id="data">
    </div>
    <div class="form-group">
        <label for="poza">Poza</label>
        <input type="file" name="poza" class="form-control-file" id="poza">
    </div>
    <div class="form-group">
        <label for="parinte">Select</label>
        <select class="form-control" name="parinte" id="parinte">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
    </div>
    <input type="submit" name="update" class="btn btn-primary" value="Update" />
</form>