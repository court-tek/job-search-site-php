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
              <div class="endeed__listing">
                <div class="parent">
                  <h2 class=""><?= $listing->title ?></h2>
                  <p class="">
                    <?= $listing->description ?>
                  </p>
                  <ul class="">
                    <li class=""><strong>Salary:</strong> <?= formatSalary($listing->salary) ?></li>
                    <li class="">
                      <strong>Location:</strong> <?= $listing->city ?> -
                      <span class=""><?= $listing->work_environment ?></span>
                    </li>
                    <?php if (!empty($listing->tags)) : ?>
                        <li class="">
                          <strong>Tags:</strong>
                          <?= $listing->tags ?>
                        </li>
                    <?php endif; ?>
                  </ul>
                  <a href="/listing/<?= $listing->id ?>" class="<?php echo ($_SERVER['REQUEST_URI'] == '/') ? 'invisible' : '' ?>">Details</a>
                  <button class="btn" dataListingId="<?= $listing->id ?>">My names' Ajax</button>
                </div>
              </div>
              <!-- End Job Listing -->
          <?php endforeach; ?>
          </div>
          <div class="listings__right">
              <h2 class="listings__job-git title"></h2>
              <p class="listings__company-name"></p>
              <p class="listings__salary"></p>
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