<?php foreach ($tichete as $tichet) :
    $p = $this->model_tichete->get_by_id($tichet['parinte']); ?>
    <div class="card my-2">
        <div class="card-body">
            <h3><?php echo $tichet['title']; ?></h3>
            <div class="main">
                <?php echo $tichet['descriere']; ?>
            </div>
            <small><?php echo "Parinte: " ?>
                <?php if (!$p) {
                    echo "Parinte inexistent";
                } else {
                    echo "$p->title";
                }
                ?></small>
            <div>
                <a class="btn btn-success" href="tichete/edit/<?php echo $tichet['id'] ?>">Editeaza</a>
                <a class="btn btn-danger" href="tichete/deletedata/<?php echo $tichet['id']; ?>">Sterge</a>
            </div>
        </div>
    </div>
<?php endforeach; ?>