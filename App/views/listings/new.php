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
          <a href="/" class="new__redirect-link">Not here to post a job?</a>
          <?php if (isset($errors)) : ?>
              <?php foreach($errors as $error) : ?>
                  <div class="danger-message">
                    <?= $error ?>
                  </div>
              <?php endforeach; ?>
          <?php endif; ?>
          <div class="new__post-listing-form">
            <div class="form-group">
              <label for="title">Job Title<span>*</span></label>
              <input type="text" name="title" placeholder="" class="" value="<?= $listing['title'] ?? '' ?>"/>
            </div>
            
            <div class="form-group">
              <label for="salary">Annual Salary<span>*</span></label>
              <input type="text" name="salary" placeholder="" class="" value="<?= $listing['salary'] ?? '' ?>"/>
            </div>
            <div class="form-group">
              <label for="requirements">Requirements<span>*</span></label>
              <input type="text" name="requirements" placeholder="" class="" value="<?= $listing['requirements'] ?? '' ?>"/>
            </div>
            <div class="form-group">
              <label for="benefits">Benefit<span>*</span></label>
              <input type="text" name="benefits" placeholder="" class="" value="<?= $listing['benefits'] ?? '' ?>"/>
            </div>
            <div class="form-group">
              <label for="tags">Tags<span>*</span></label>
              <input type="text" name="tags" placeholder="" class="" value="<?= $listing['tags'] ?? '' ?>"/>
            </div>
            <div class="form-group">
              <label for="environment">Job location type<span>*</span></label>
              <input type="text" name="environment" placeholder="" class="" value="<?= $listing['work_environment'] ?? '' ?>"/>
            </div>
            <div class="form-group">
              <label for="environment">Job location type<span>*</span></label>
              <input type="text" name="company" placeholder="" class="" value="<?= $listing['company'] ?? '' ?>"/>
            </div>
            <div class="form-group">
              <label for="environment">Job location type<span>*</span></label>
              <input type="text" name="address" placeholder="" class="" value="<?= $listing['address'] ?? '' ?>"/>
            </div>
            <div class="form-group">
              <label for="environment">Job location type<span>*</span></label>
              <input type="text" name="city" placeholder="" class="" value="<?= $listing['city'] ?? '' ?>"/>
            </div>
            <div class="form-group">
              <label for="environment">State<span>*</span></label>
              <input type="text" name="state" placeholder="" class="" value="<?= $listing['state'] ?? '' ?>"/>
            </div>
            <div class="form-group">
              <label for="environment">Phone<span>*</span></label>
              <input type="text" name="phone" placeholder="" class="" value="<?= $listing['phone'] ?? '' ?>"/>
            </div>
            <div class="form-group">
              <label for="environment">Email<span>*</span></label>
              <input type="text" name="email" placeholder="" class="" value="<?= $listing['email'] ?? '' ?>"/>
            </div>
            <div class="form-group form-group--full-width">
              <label for="description">Job Description<span>*</span></label>
              <textarea name="description" placeholder="" class="" value="<?= $listing['description'] ?? '' ?>"></textarea>
            </div>
            <button type="submit" class="form-button">Save</button>
          </div>
        </form>
      <!-- </div> -->
    </section>
<?php loadPartial('footer') ?>