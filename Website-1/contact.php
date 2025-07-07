<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact page</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    />
    <link rel="stylesheet" href="InnerCss/contact.css" />
  </head>
  <body>
    <?php 
    include 'Layout/header.php'
    ?>

    <!-- top banner -->
    <section class="top-contact">
      <div class="container">
        <div class="top-title top-title-center">
          <p>CONTACT US</p>
        </div>
        <div
          class="description-container section-title d-flex justify-content-center flex-column text-center"
        >
          <h2 class="text-white">Get In Touch With Us</h2>
          <p class="text-white">
            We're here to help you transform your ideas into successful digital
            solutions. Reach out to discuss your project.
          </p>
        </div>
      </div>
    </section>

    <main>
      <section class="contact-form">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="form-container">
                <div class="form-header">
                  <div class="top-title">
                    <p>SEND MESSAGE</p>
                  </div>
                  <div class="description-container">
                    <h2>Let's Start a <span>Conversation</span></h2>
                    <p>
                      Fill out the form below and we'll get back to you within
                      24 hours. We're excited to learn about your project.
                    </p>
                  </div>
                </div>

                <form action="" class="mt-5">
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"
                      >Full Name *</label
                    >
                    <input
                      type="email"
                      class="form-control"
                      id="exampleFormControlInput1"
                      placeholder="Rohan Rathod"
                    />
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"
                      >Email Address *</label
                    >
                    <input
                      type="email"
                      class="form-control"
                      id="exampleFormControlInput1"
                      placeholder="Rohan@gmail.com"
                    />
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"
                      >Phone Number *</label
                    >
                    <input
                      type="email"
                      class="form-control"
                      id="exampleFormControlInput1"
                      placeholder="9876543210"
                    />
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label"
                      >Example textarea</label
                    >
                    <textarea
                      class="form-control"
                      id="exampleFormControlTextarea1"
                      rows="4"
                    ></textarea>
                  </div>
                  <div class="req-demo-btn">
                    <button>Send Message</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-md-6"></div>
          </div>
        </div>
      </section>
    </main>
    <?php 
    include 'Layout/footer.php'
    ?>

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
