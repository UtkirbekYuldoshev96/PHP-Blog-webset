<?php
$title = 'Registratsiya';
require('./includes/header.php');
?>

<div class="container">
      <div class="py-5 text-center">
            <h2>PHP | Blog Ro'yxatdan o'tish</h2>
            <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form
                  group has a validation state that can be triggered by attempting to submit the form without completing
                  it.</p>
      </div>

      <div class="row g-5">
            <div class="col-md-7 col-lg-8">
                  <h4 class="mb-3">Billing address</h4>

                  <form class="needs-validation" novalidate>
                        <div class="row g-3">
                              <div class="col-sm-6">
                                    <label for="firstName" class="form-label">First name</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="" value=""
                                          required>
                                    <div class="invalid-feedback">
                                          Valid first name is required.
                                    </div>
                              </div>

                              <div class="col-sm-6">
                                    <label for="lastName" class="form-label">Last name</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="" value=""
                                          required>
                                    <div class="invalid-feedback">
                                          Valid last name is required.
                                    </div>
                              </div>

                              <div class="col-12">
                                    <label for="username" class="form-label">Username</label>
                                    <div class="input-group has-validation">
                                          <span class="input-group-text">@</span>
                                          <input type="text" class="form-control" id="username" placeholder="Username"
                                                required>
                                          <div class="invalid-feedback">
                                                Your username is required.
                                          </div>
                                    </div>
                              </div>

                              <div class="col-12">
                                    <label for="email" class="form-label">Email <span
                                                class="text-body-secondary">(Optional)</span></label>
                                    <input type="email" class="form-control" id="email" placeholder="you@example.com">
                                    <div class="invalid-feedback">
                                          Please enter a valid email address for shipping updates.
                                    </div>
                              </div>

                              <div class="col-12">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="address" placeholder="1234 Main St"
                                          required>
                                    <div class="invalid-feedback">
                                          Please enter your shipping address.
                                    </div>
                              </div>

                        </div>

                        <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
                  </form>

            </div>
      </div>
</div>

<?php require('./includes/footer.php'); ?>