<?php loadPartial('head') ?>
<?php loadPartial('navigation') ?>
<?php loadPartial('showcase-search') ?>
<?php loadPartial('top-banner') ?>
    <!-- Job Listings -->
    <section>
      <div id="home">
        <div class="title">Recent Jobs</div>
        <div class="listings">
          <div class="listings__left">
          <?php foreach ($listings as $listing) : ?>
              <!-- Job Listing 1 -->
              <div class="">
                <div class="">
                  <h2 class=""><?= $listing->title ?></h2>
                  <p class="">
                    <?= $listing->description ?>
                  </p>
                  <ul class="">
                    <li class=""><strong>Salary:</strong> <?= formatSalary($listing->salary) ?></li>
                    <li class="">
                      <strong>Location:</strong> <?= $listing->city ?> -
                      <span
                        class=""
                        ><?= $listing->work_environment ?></span
                      >
                    </li>
                    <?php if (!empty($listing->tags)) : ?>
                        <li class="">
                          <strong>Tags:</strong>
                          <?= $listing->tags ?>
                        </li>
                      <?php endif; ?>
                  </ul>
                  <a href="/listing/<?= $listing->id ?>"
                    class=""
                  >
                    Details
                  </a>
                </div>
              </div>
              <!-- End Job Listing -->
          <?php endforeach; ?>
          </div>
          <div class="listings__right">
              <h2 class="listings__title">About Job</h2>
              <p class="listings__info">This section is info about the job</p>
          </div>
        </div>
        <a href="/listings" class="">
          <i class=""></i>
          Show All Jobs
        </a>
      </div>
    </section>
    <!-- end Job Listings -->
<?php loadPartial('bottom-banner') ?>
<?php loadPartial('footer') ?>