<div class="card">
    <div class="card-title"><?= $row['title'] ?></div>
    <img src="https://placekitten.com/286/200" class="card-img-top"  alt="produkt">
    <div class="card-body">
        <?= $row['descripton'] ?>
        <hr>
        <?= $row['price'] ?>
        <!-- Testprodukt, hier könnte ihre beschreibung stehen!! -->
    </div>
    <div class="card-footer">
        <a href="" class="btn btn-primary btn-sm">details</a>
        <a href="" class="btn btn-success btn-sm">In den Warenkorb</a>
    </div>
</div>