<link rel="stylesheet" href="<?= base_url("public/css/form_box.css"); ?>">
<div class="site-main">
    <h2 align="center">Manage Booking/Move</h2>
    <p>Resize the browser window to see the effect. When the screen is less than 600px wide, make the two columns stack
        on top of each other instead of next to each other.</p>

    id, username, dorm, room, checkin_due, mate-1, mate-2, mate-3, status timestamp<br>
    <?php if($queue) : ?>
        <?php foreach ($queue as $item) : ?>
            <?php
                $queue_id = $item['id'];
            ?>
            <?php foreach ($item as $key => $value) : ?>
                <?php echo $value."\t"; ?>
            <?php endforeach; ?>
            <a href="<?= base_url("booking/update_queue_status/$queue_id"); ?>">complete</a><br>
        <?php endforeach; ?>

    <?php endif; ?>

</div>
</div>
