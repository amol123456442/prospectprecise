<!DOCTYPE html>
<html >

<head>
     <meta charset="utf-8" />
    <title>Prospect Precise | Contact Us </title>
    <meta content="" name="description" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Webflow" name="generator" />
    <?php echo $links; ?>
    <?= $header ?>

</head>

<body>
<style>
      .location__section {
        padding: 40px 0;
        background-color: #F8F9FA;
      }
      .container {
        max-width: 1600px;
        margin: 0 auto;
        padding: 0 15px;
      }
      .location__items {
        display: flex;
        gap: 20px;
        justify-content: center;
        flex-wrap: wrap;
      }
      .location__item {
        width: 700px;
        min-height: 250px;
        border-radius: 12px;
        color: #fff;
        padding: 30px;
        display: flex;
        align-items: center;
        background-size: cover;
        background-position: right center;
        background-repeat: no-repeat;
        position: relative;
      }
      .location__item-container {
        background: linear-gradient(47deg, #0A3764 0%, #0A7FB6 100%);
        padding: 30px;
        border-radius: 8px;
        width: 100%;
      }
      .location__item-flag img {
        display: block;
        margin-bottom: 15px;
      }
      .location__item h2 {
        font-size: 1.75rem;
        margin-bottom: 15px;
      }
      .location__item-address .address div,
      .location__item-address .info div {
        margin-bottom: 18px;
      }
      .location__item a {
        color: #FFFFFF;
        text-decoration: underline;
      }
      .location__item.boca-raton {
        background-image: url('');
      }
      .location__item.london {
        background-image: ('');
      }
      @media (max-width: 1600px) {
        .location__item {
          width: 100%;
        }
      }
    </style>
    <style>
      .contact {
        overflow: hidden;
        color: #FFFFFF;
        background: var(--brand-navy);
        min-height: 61vh;
        display: flex;
        align-items: center;
      }
      .contact .media-right {
        position: absolute;
        top: 0;
        right: 0;
        height: 61%;
        width: clamp(520px, 90vw, 1500px);
      }
      .contact .media-right img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        filter: saturate(1.05);
      }
      .contact .media-gradient {
        position: absolute;
        inset: 0;
        background: linear-gradient(90deg,
            var(--brand-navy) 0%,
            rgba(8, 31, 58, 0.85) 38%,
            rgba(8, 31, 58, 0.35) 56%,
            rgba(8, 31, 58, 0.12) 70%,
            rgba(8, 31, 58, 0.0) 82%);
        pointer-events: none;
      }
      .contact h1 {
        font-size: clamp(2.5rem, 3vw, 7rem);
        line-height: 0.95;
        font-weight: 900;
        margin: 8px 0 16px 0;
      }
      .contact p {
        font-size: clamp(1.5rem, 1vw, 1.5rem);
        margin: 0 0 28px 0;
        max-width: 620px;
        font-weight: 300;
      }
    </style>






    <section class="contact" style=" margin-top: 200px;">

        <div class="media-right">
            <img src="https://t3.ftcdn.net/jpg/12/45/07/20/360_F_1245072099_HtmlsKLjlTD8wbzIjsyJsRdjMnSBmgv2.jpg" alt="">
            <div class="media-gradient"></div>
        </div>

        <div class="container position-relative hero-content">
            <div class="row align-items-center">

                <div class="col-lg-6 col-md-12 text-white mb-4 mb-lg-0">
                    <h1>CONTACT US</h1>
                    <p>Our teams are available 24/5 to solve challenges specific</p>
                    <p>to your demand program, in your time zone</p>
                </div>

                <div class="col-lg-6 col-md-12 d-flex justify-content-center">
                    <div class="form-section p-4"
                        style="background-color: #c59453ff; border-radius: 10px; max-width: 450px; width: 100%;">

                        <!-- Heading (Initially Visible) -->
                        <h3 id="formHeading" class="text-center text-white fw-bold mb-4">GET IN TOUCH</h3>

                        <!-- The Form -->
                        <form id="downloadForm" onsubmit="submitForm(event)">
                            <div class="row g-3">

                                <div class="col-md-6">
                                    <input type="text" id="firstName" name="firstName" class="form-control" required
                                        placeholder="First Name *"
                                        oninput="this.value = this.value.replace(/[^a-zA-Z]/g, '')">
                                    <span id="firstNameError" class="error-message">&emsp;</span>
                                </div>

                                <div class="col-md-6">
                                    <input type="text" id="lastName" name="lastName" class="form-control" required
                                        placeholder="Last Name *"
                                        oninput="this.value = this.value.replace(/[^a-zA-Z]/g, '')">
                                    <span id="lastNameError" class="error-message">&emsp;</span>
                                </div>

                                <div class="col-md-6">
                                    <input type="email" id="email" name="email" class="form-control" required
                                        placeholder="Email Address *">
                                    <span id="emailError" class="error-message">&emsp;</span>
                                </div>

                                <div class="col-md-6">
                                    <input type="text" id="cname" name="cname" class="form-control" required
                                        placeholder="Company *">
                                    <span id="companyError" class="error-message">&emsp;</span>
                                </div>

                                <div class="col-12">
                                    <textarea class="form-control" id="message" name="message" rows="4"
                                        placeholder="Type your message here..." required></textarea>
                                </div>

                                <div class="col-12 text-center">
                                    <button type="submit"
                                        class="btn text-white"
                                        style="background-color: #c59453ff; width: 100%; max-width: 350px; border-radius: 25px;">
                                        <b>SEND</b>
                                    </button>
                                </div>

                            </div>
                        </form>

                        <!-- Thank You Message (Initially Hidden) -->
                        <div id="thankYouMessage" class="text-center text-white mt-4" style="display: none;">
                            <h4><b>Thank You!</b></h4>
                            <p>A member of the PROSPECT PRECISE team will contact you soon.</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </section>




    <section class="location__section">
        <div class="container">
            <div class="location__items">


                <div class="location__item boca-raton">
                    <div class="location__item-container">
                        <figure class="location__item-flag">
                            <img src="asset/Images/usa-flag.svg" alt="USA Flag" width="32" height="24">
                        </figure>
                        <h2>Dubai</h2>
                        <div class="location__item-address">
                            <div class="address">
                                <div>2385 NW Executive Center Drive, Suite 100</div>
                                <div>Boca Raton, FL 33431</div>
                            </div>
                            <div class="info">
                                <div>+1 (617) 459-4500</div>
                                <div><a href="mailto:info@infuse.com">info@prospectprecise.com</a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- London Card -->
                <div class="location__item london">
                    <div class="location__item-container">
                        <figure class="location__item-flag">
                            <img src="asset/Images/uk.svg" alt="UK Flag" width="32" height="24">
                        </figure>
                        <h2>London</h2>
                        <div class="location__item-address">
                            <div class="address">
                                <div>Salisbury House, 29 Finsbury Circus</div>
                                <div>London EC2M 5SQ</div>
                            </div>
                            <div class="info">
                                <div>+1 (617) 459-4500</div>
                                <div><a href="mailto:info@infuse.com">info@prospectprecise.com</a></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="bottom__section py-5">
        <div class="container">
            <div class="row">

                <!-- Content Section -->
                <div class="col-lg-6 mb-4">
                    <h2 class="fw-bold">WE PUT OUR CLIENTS FIRST</h2>
                    <p class="bottom__subtitle">
                        With a global team in 75+ countries, we work across all time zones and speak 40+ languages to serve our clients where, how, and when you need us most.
                    </p>
                    <p class="bottom__description">
                        As advocates for change, we collaborate and drive innovation together. Our team is a mosaic of talented individuals who are <strong>uniquely positioned to take on and adapt to the challenges of today’s global markets to exceed your expectations.</strong>
                    </p>
<div class="container my-4">
  <div class="row g-2 justify-content-center">

    <div class="col-auto">
      <img src="https://dummyimage.com/600x400/000/fff" alt="Demo Image" class="img-fluid" style="width: 200px;">
    </div>

    <div class="col-auto">
      <img src="https://dummyimage.com/600x400/000/fff" alt="Demo Image" class="img-fluid" style="width: 200px;">
    </div>

    <div class="col-auto">
      <img src="https://dummyimage.com/600x400/000/fff" alt="Demo Image" class="img-fluid" style="width: 200px;">
    </div>

    <div class="col-auto">
      <img src="https://dummyimage.com/600x400/000/fff" alt="Demo Image" class="img-fluid" style="width: 200px;">
    </div>

    <div class="col-auto">
      <img src="https://dummyimage.com/600x400/000/fff" alt="Demo Image" class="img-fluid" style="width: 200px;">
    </div>
    <div class="col-auto">
      <img src="https://dummyimage.com/600x400/000/fff" alt="Demo Image" class="img-fluid" style="width: 200px;">
    </div>
    <!-- add more as needed -->

  </div>
</div>



                </div>

                <!-- Map + Stats Section -->
                <div class="col-lg-6 text-center">
                    <div class="row justify-content-center mb-3">
                        <div class="col-6 col-md-4">
                            <div class="map-item p-3 border rounded">
                                <h3 class="display-5">75+</h3>
                                <p>countries</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="map-item p-3 border rounded">
                                <h3 class="display-5">40+</h3>
                                <p>languages</p>
                            </div>
                        </div>
                    </div>

                    <img class="img-fluid" src="https://infuse.com/wp-content/themes/infuse-main/assets/images/contact/map.webp" alt="Maps" width="650" height="319">
                </div>

            </div>
        </div>
    </section>





<?php echo $script; ?>
<?= $footer ?>


</body>


</html>