<section class="events">
<h2><?= $data->title() ?></h2>
    <?php if (page('events')->upcoming() == NULL): ?>
    <article class="empty">
      <h3><?= page('events')->emptytitle(); ?></h3>
      <p><?= page('events')->emptytext(); ?></p>
    </article>
    <?php else: ?>
    <?php foreach (page('events')->upcoming($data->limitBy()->value()) as $event): ?>
    <article class="event">
      <header class="event-header">
        <div>
          <h3><time><?= $event['from']->toDate('d.m H:i') ?></time> - <time><?= $event['to']->toDate('d.m H:i') ?></time></h3>
          <p><a href="<?php $event['event']->url() ?>" ><?= $event['event']->title() ?></a> @ <?= $event['location'] ?></p>
          
          <a class='ical' href="<?= page('ical')->url() ?>/id:<?= $event['id'] ?>">🗓</a>
        </div>
      </header>
    </article>
    <?php endforeach ?>
    <?php endif ?>

</section>