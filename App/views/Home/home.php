<?php loadPartial('head') ?>
<?php loadPartial('navigation') ?>
<?php loadPartial('showcase-search') ?>
    <!-- Job Listings -->
    <section>
      <div id="home">
        <div class="listings__container container">
          <div class="listings__left">
            <?php foreach ($listings as $listing) : ?>
                <!-- Job Listing 1 -->
                <div data-listingid="<?= $listing->id ?>" class="listings__card-container">
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
              <h2 class="listings__right-job-title"></h2>
              <p class="listings__right-company-name"></p>
              <a href="mailto:manager@company.com" class="listing__right-apply">Apply Now</a>
              <!-- details -->
              <div class="listings__right-details-container">
                <h2 class="listings__right-section-title">job details</h2>
                <div class="">
                  <h3 class="listings__right-details-title">pay</h3>
                  <div class="listings__right-details-salary"></div>
                </div>
                <div class="child">child 2</div>
              </div>
              <!-- location -->
              <div class="listings__right-location-container">
                <h2 class="listings__right-section-title">location</h2>
                <div class="">
                  <div class="listings__right-location"></div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end Job Listings -->
<?php loadPartial('bottom-banner') ?>
<?php loadPartial('footer') ?>