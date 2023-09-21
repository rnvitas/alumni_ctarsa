  <section class="galeryhead text-center">
      <div class="wrapper-body">
          <div class="card-live">
              <div class="row">
                  <div class="col-md-8 col-sm-12">
                      <img class="img-fluid wrapper-image" src="<?php echo base_url() ?>assets/image/portfolio/portfolio-2.jpg" alt="">
                  </div>
                  <div class="col-md-4 col-sm-12 text-start wrapper-title">
                      <h2 class="judulacara text-start">Acara hari ini</h2>
                      <p class="text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi
                          rerum ut vero! Nemo culpa, vel eum
                          eveniet ratione, voluptas ullam itaque possimus neque asperiores quisquam in laboriosam?
                          Deserunt,
                          facere natus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio,
                          necessitatibus. Quam repellendus molestias fugiat recusandae qui, quibusdam voluptatibus aliquam
                          maiores, odio minus architecto ipsam vel, deleniti deserunt illum veniam in.</p>


                      <div class="d-flex align-items-center justify-content-center">
                          <div class="col-lg-12 d-grid">
                              <a href="#about" class="btn btn-primary">Watch now</a>
                          </div>


                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <section class="container-fluid">
      <div class="wrapper-body">
          <div class="row height d-flex justify-content-center align-items-center">

              <div class="col-md-12">

                  <div class="form">
                      <i class="bi bi-search"></i>
                      <input type="text" class="form-control form-input" placeholder="Search anything...">
                      <span class="left-pan"><i class="fa fa-microphone"></i></span>
                  </div>

              </div>

          </div>
      </div>
      </div>

  </section>

  <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

          <div class="row" data-aos="fade-up" data-aos-delay="100">
              <div class="col-lg-12 d-flex justify-content-center">
                  <ul id="portfolio-flters">
                      <li data-filter="*" class="filter-active">All</li>

                      <?php foreach ($type_gallery as $tipe) { ?>
                          <li data-filter=".filter-app"><?php echo $tipe->name ?></li>

                      <?php } ?>
                      <!-- <li data-filter=".filter-app">App</li>
                      <li data-filter=".filter-card">Card</li>
                      <li data-filter=".filter-web">Web</li> -->
                  </ul>
              </div>
          </div>

          <div class="section-title">
              <h2 class="text-center">Gallery</h2>
              <p class="text-center">Check our Portfolio</p>
              <p class="text-center">lorem jsdssk</p>
          </div>

          <div class="gallery">
              <div class="gallery-item">
                  <figure>
                      <img src="assets/image/portfolio/portfolio-1.jpg" class="img-fluid" alt="" />
                      <figcaption>Picture of a few dogs having a rest and sleeping.</figcaption>
                  </figure>
              </div>
              <div class="gallery-item">
                  <figure>
                      <img src="assets/image/portfolio/portfolio-2.jpg" class="img-fluid" alt="" />
                      <figcaption>Caption of the pic</figcaption>
                  </figure>
              </div>
              <div class="gallery-item">
                  <figure>
                      <img src="https://upload.wikimedia.org/wikipedia/commons/0/0f/Eiffel_Tower_Vertical.JPG" class="img-fluid" alt="" />
                      <figcaption>Caption of the pic</figcaption>
                  </figure>
              </div>
              <div class="gallery-item">
                  <figure>
                      <img src="assets/image/portfolio/portfolio-4.jpg" class="img-fluid" alt="" />
                      <figcaption>Caption of the pic</figcaption>
                  </figure>
              </div>
              <div class="gallery-item">
                  <figure>
                      <img src="assets/image/portfolio/portfolio-5.jpg" class="img-fluid" alt="" />
                      <figcaption>Picture of a few dogs having a rest and sleeping.</figcaption>
                  </figure>
              </div>
              <div class="gallery-item">
                  <figure>
                      <img src="assets/image/portfolio/portfolio-6.jpg" class="img-fluid" alt="" />
                      <figcaption>Caption of the pic</figcaption>
                  </figure>
              </div>
              <div class="gallery-item">
                  <figure>
                      <img src="assets/image/portfolio/portfolio-7.jpg" class="img-fluid" alt="" />
                      <figcaption>Caption of the pic</figcaption>
                  </figure>
              </div>
              <div class="gallery-item">
                  <figure>
                      <img src="assets/image/portfolio/portfolio-8.jpg" class="img-fluid" alt="" />
                      <figcaption>Caption of the pic</figcaption>
                  </figure>
              </div>
              <div class="gallery-item">
                  <figure>
                      <img src="assets/image/portfolio/portfolio-8.jpg" class="img-fluid" alt="" />
                      <figcaption>Picture of a few dogs having a rest and sleeping.</figcaption>
                  </figure>
              </div>
              <div class="gallery-item">
                  <figure>
                      <img src="https://images.pexels.com/photos/6797836/pexels-photo-6797836.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img-fluid" alt="" />
                      <figcaption>Caption of the pic</figcaption>
                  </figure>
              </div>
              <div class="gallery-item">
                  <figure>
                      <img src="assets/image/portfolio/portfolio-8.jpg" class="img-fluid" alt="" />
                      <figcaption>Caption of the pic</figcaption>
                  </figure>
              </div>
              <div class="gallery-item">
                  <figure>
                      <img src="https://images.unsplash.com/photo-1544376798-89aa6b82c6cd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8dmVydGljYWx8ZW58MHx8MHx8fDA%3D&w=1000&q=80" class="img-fluid" alt="" />
                      <figcaption>Caption of the pic</figcaption>
                  </figure>
              </div>
              <div class="gallery-item">
                  <figure>
                      <img src="assets/image/portfolio/portfolio-9.jpg" class="img-fluid" alt="" />
                      <figcaption>Caption of the pic</figcaption>
                  </figure>
              </div>
              <div class="gallery-item">
                  <figure>
                      <img src="assets/image/portfolio/portfolio-9.jpg" class="img-fluid" alt="" />
                      <figcaption>Caption of the pic</figcaption>
                  </figure>
              </div>
          </div>
      </div>
  </section>