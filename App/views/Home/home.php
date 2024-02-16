<?php loadPartial('head') ?>
<?php loadPartial('navigation') ?>
<?php loadPartial('showcase-search') ?>
    <!-- Job Listings -->
    <section>
      <div id="home">
        <div class="listings__container container">
          <div class="listings__left" dataListingId="<?= $listing->id ?>">
            <?php foreach ($listings as $listing) : ?>
                <!-- Job Listing 1 -->
                <div class="listings__card-container">
                  <div class="listings__card">
                    <h2 class="listings__job-title"><?= $listing->title ?></h2>
                    <p class="listings__company-name">
                      <?= $listing->company ?>
                    </p>
                    <p class="listings__city-state">
                      <?= $listing->city ?>, <?= $listing->state ?>
                    </p>
                    <div class="listings__tags">
                      <button class="listings__tag">
                        <?= formatSalary($listing->salary) ?> - $200,000
                      </button>
                    </div>
                    <ul class="listings__about-job">
                      <li>This is a full time W2 role with benefits.</li>
                      <li>2+ years of PHP development.</li>
                      <li>21 days paid time off.</li>
                    </ul>

                    <p class="listings__timestamp">posted 6 days ago</p> 
                  </div>
                </div>
                <!-- End Job Listing -->
            <?php endforeach; ?>
          </div>
          <div class="listings__right">
              <h2 class="listings__job-git title"></h2>
              <p class="listings__company-name"></p>
              <a href="mailto:manager@company.com" class="">Apply Now</a>
              <!-- details -->
              <div class="listings__details-container">
                <h2 class="listings__section-title">job details</h2>
                <div class="">
                  <h3 class="listings__details-title">pay</h3>
                  <div class="listings__details-salary"></div>
                </div>
                <div class="child">child 2</div>
              </div>
              <!-- location -->
              <div class="listings__location-container">
                <h2 class="listings__section-title">location</h2>
                <div class="">
                  <div class="listings__location"></div>
                </div>
              </div>
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