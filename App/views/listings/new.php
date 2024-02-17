<?php loadPartial('head') ?>
<?php loadPartial('navigation') ?>
     <!-- Post a Job Form Box -->
     <section class="new">
      <!-- <div class=""> -->
        <form method="POST" action="/listings">
          <div class="new__media-section">
            <div class="new__header-container">
              <h2 class="new__header">Post your job listing now and find the perfect candidate.</h2>
            </div>
            <div class="new__image">
              <img src="../img/endeed-img-1.png" alt="image">
            </div>
          </div>
          <a href="/" class="">Cancel</a>
          <?php if (isset($errors)) : ?>
              <?php foreach($errors as $error) : ?>
                  <div class="danger-message">
                    <?= $error ?>
                  </div>
              <?php endforeach; ?>
          <?php endif; ?>
          <div class="mb-4">
            <input type="text" name="title" placeholder="Job Title" class="" value="<?= $listing['title'] ?? '' ?>"/>
          </div>
          <div class="mb-4">
            <textarea
              name="description"
              placeholder="Job Description"
              class=""
              value="<?= $listing['description'] ?? '' ?>"
            ></textarea>
          </div>
          <div class="mb-4">
            <input
              type="text"
              name="salary"
              placeholder="Annual Salary"
              class=""
              value="<?= $listing['salary'] ?? '' ?>"
            />
          </div>
          <div class="mb-4">
            <input
              type="text"
              name="requirements"
              placeholder="Requirements"
              class=""
              value="<?= $listing['requirements'] ?? '' ?>"
            />
          </div>
          <div class="mb-4">
            <input
              type="text"
              name="benefits"
              placeholder="Benefits"
              class=""
              value="<?= $listing['benefits'] ?? '' ?>"
            />
          </div>
          <div class="mb-4">
            <input
              type="text"
              name="tags"
              placeholder="Tags"
              class=""
              value="<?= $listing['tags'] ?? '' ?>"
            />
          </div>
          <div class="mb-4">
            <input
              type="text"
              name="work environment"
              placeholder="Work Environment"
              class=""
              value="<?= $listing['work_environment'] ?? '' ?>"
            />
          </div>
          <h2 class="">
            Company Info & Location
          </h2>
          <div class="mb-4">
            <input
              type="text"
              name="company"
              placeholder="Company Name"
              class=""
              value="<?= $listing['company'] ?? '' ?>"
            />
          </div>
          <div class="mb-4">
            <input
              type="text"
              name="address"
              placeholder="Address"
              class=""
              value="<?= $listing['address'] ?? '' ?>"
            />
          </div>
          <div class="mb-4">
            <input
              type="text"
              name="city"
              placeholder="City"
              class=""
              value="<?= $listing['city'] ?? '' ?>"
            />
          </div>
          <div class="mb-4">
            <input
              type="text"
              name="state"
              placeholder="State"
              class=""
              value="<?= $listing['state'] ?? '' ?>"
            />
          </div>
          <div class="mb-4">
            <input
              type="text"
              name="phone"
              placeholder="Phone"
              class=""
              value="<?= $listing['phone'] ?? '' ?>"
            />
          </div>
          <div class="mb-4">
            <input
              type="email"
              name="email"
              placeholder="Email Address For Applications"
              class=""
              value="<?= $listing['email'] ?? '' ?>"
            />
          </div>
          <button
            class=""
          >
            Save
          </button>
        </form>
      <!-- </div> -->
    </section>
<?php loadPartial('footer') ?>