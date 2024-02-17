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
            <div class="listings__right-card">
              <div class="listings__right-header">
                <h2 class="listings__right-job-title"></h2>
                <p class="listings__right-company-name"></p>
                <div class="listings__right-location-container">
                    <div class="listings__right-location"></div> 
                    <span class="listings__right-spacer">-</span>
                    <span class="listings__right-work-environment"></span>
                </div>
                <a href="mailto:manager@company.com" class="listings__right-apply">Apply Now</a>
              </div>
              </p>
              <!-- details -->
              <div class="listings__right-details-container">
                <p class="listings__right-job-description"></p>

                <h3 class="listings__right-details-title">
                  About <span class="listings__right-company"></span>
                </h3>
                <p class="listings__right-about-company">
                  We are more than an external IT provider, we are a true ally. Our personalised services and reliable team allow us to be productive and reactive to the new challenges that arise in each project. We have a single mission; to offer solutions that, together, help us achieve our client goals.
                </p>
                <h3 class="listings__right-details-title">
                  Who we are looking for? 
                </h3>
                <p class="listings__right-requirements"></p>
                <h3 class="listings__right-details-title">
                  Technical Skills 
                </h3>
                <p class="listings__right-skills-tags"></p>
                <h3 class="listings__right-details-title">
                  What we offer
                </h3>
                <p class="listings__right-benefits"></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end Job Listings -->
<?php loadPartial('footer') ?>