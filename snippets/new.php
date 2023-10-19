<article class="flex flex-col items-start" <?php if(isset($animation)): ?>data-aos="fade" data-aos-delay="<?= $aosDelay ?>"<?php endif ?>>
  <div class="relative w-full mb-4">
    <?php if ($cover = $new->cover()): ?>
        <a href="<?= $new->url() ?>">
          <img class="aspect-[4/3] w-full bg-gray-100 object-cover sm:aspect-[4/3] lg:aspect-[4/3] rounded-xl bg-gray-900/5 shadow-lg"
            src="<?= $cover->toFile()
        ->resize(390, 260)
        ->url() ?>"
            alt="<?= $new->title()
        ->esc() ?>">
        </a>
    <?php endif ?>
  </div>
  <div class="max-w-xl">
    <div class="group relative">
      <a class="no-underline" href="<?= $new->url() ?>">
        <h3 class="mt-3 text-lg font-semibold leading-6 text-colorone group-hover:text-gray-600">
            <span class="absolute inset-0"></span>
            <?= $new->title()
                ->esc() ?>
        </h3>
      </a>

    </div>

  </div>
</article>