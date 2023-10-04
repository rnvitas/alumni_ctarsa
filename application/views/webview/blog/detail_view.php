 <!-- <div class="wrapper-blog " style="margin-top:10rem;">
     <div class=" col-lg-12">
         <p class="headerblog">Kategori</p>
         <h1 class="headerblog1">Judul Blog yang Keren Lorem ipsum dolor sit amet consectetur adipiscing</h1>
         <p class="headerblog2">Minggu, 29 Agustus 2023 | Adib Dwi Kusuma</p>
     </div>
 </div> -->


 <section id="blogdetails" class="blog-detail" style="margin-top:10rem;">


     <div class="wrapper-blog">
         <?php foreach ($detail_blog as $d) { ?>
             <div class=" col-lg-12">
                 <p class="headerblog"><?php echo $d->category_name ?></p>
                 <h1 class="headerblog1"><?php echo $d->title ?></h1>
                 <p class="headerblog2"><?php echo $d->date ?> | <?php echo $d->post_by ?> | <i class="bi bi-eye"></i> <?php echo $d->count ?> dilihat</p>
             </div>
             <div class="container-blog">
                 <div class="judul col-lg-12">
                     <?php echo $d->description ?>
                 </div>

             </div>
         <?php } ?>

     </div>

     <div class="wrapper-blog">
         <p class="readmorep">Baca juga dari kategori lomba</p>
         <div class="bacajuga">
             <div class="card-blog single_post">
                 <div class="body">
                     <div class="row">
                         <div class="col-md-10">
                             <div class="col-lg-12 d-flex justify-content-between">
                                 <div class="col-lg-6">
                                     <h3>
                                         <a href="blog-details.html">All photographs are accurate</a>
                                     </h3>
                                 </div>
                                 <div class="col-lg-6 d-flex justify-content-end">
                                     <p>17 Desember 2023</p>
                                 </div>

                             </div>
                             <p>
                                 It is a long established fact that a reader will be distracted
                                 by the readable content of a page when looking at its layout.
                                 The point of using Lorem Ipsum is that it has a more-or-less
                                 normal It is a long established fact that a reader will be distracted
                                 by the readable content of a page when looking at its layout.
                                 The point of using Lorem Ipsum is that it has a more-or-less
                                 normal
                             </p>
                         </div>
                         <div class="col-md-2 d-flex justify-content-between">
                             <div class="img-post">
                                 <img class="d-block img-fluid" src="<?php echo base_url() ?>assets/image/blog/image 56.png" alt="First slide" />
                             </div>
                         </div>
                     </div>

                 </div>
             </div>
             <div class="card-blog single_post">
                 <div class="body">
                     <div class="row">
                         <div class="col-md-10">
                             <div class="col-lg-12 d-flex justify-content-between">
                                 <div class="col-lg-6">
                                     <h3>
                                         <a href="blog-details.html">All photographs are accurate</a>
                                     </h3>
                                 </div>
                                 <div class="col-lg-6 d-flex justify-content-end">
                                     <p>17 Desember 2023</p>
                                 </div>

                             </div>
                             <p>
                                 It is a long established fact that a reader will be distracted
                                 by the readable content of a page when looking at its layout.
                                 The point of using Lorem Ipsum is that it has a more-or-less
                                 normal It is a long established fact that a reader will be distracted
                                 by the readable content of a page when looking at its layout.
                                 The point of using Lorem Ipsum is that it has a more-or-less
                                 normal
                             </p>
                         </div>
                         <div class="col-md-2 d-flex justify-content-between">
                             <div class="img-post">
                                 <img class="d-block img-fluid" src="<?php echo base_url() ?>assets/image/blog/image 56.png" alt="First slide" />
                             </div>
                         </div>
                     </div>

                 </div>
             </div>
             <div class="card-blog single_post">
                 <div class="body">
                     <div class="row">
                         <div class="col-md-10">
                             <div class="col-lg-12 d-flex justify-content-between">
                                 <div class="col-lg-6">
                                     <h3>
                                         <a href="blog-details.html">All photographs are accurate</a>
                                     </h3>
                                 </div>
                                 <div class="col-lg-6 d-flex justify-content-end">
                                     <p>17 Desember 2023</p>
                                 </div>

                             </div>
                             <p>
                                 It is a long established fact that a reader will be distracted
                                 by the readable content of a page when looking at its layout.
                                 The point of using Lorem Ipsum is that it has a more-or-less
                                 normal It is a long established fact that a reader will be distracted
                                 by the readable content of a page when looking at its layout.
                                 The point of using Lorem Ipsum is that it has a more-or-less
                                 normal
                             </p>
                         </div>
                         <div class="col-md-2 d-flex justify-content-between">
                             <div class="img-post">
                                 <img class="d-block img-fluid" src="<?php echo base_url() ?>assets/image/blog/image 56.png" alt="First slide" />
                             </div>
                         </div>
                     </div>

                 </div>
             </div>
             <div class="card-blog single_post card-blogs">
                 <div class="body">
                     <div class="row">
                         <div class="col-md-10">
                             <div class="col-lg-12 d-flex justify-content-between">
                                 <div class="col-lg-6">
                                     <h3>
                                         <a href="blog-details.html">All photographs are accurate</a>
                                     </h3>
                                 </div>
                                 <div class="col-lg-6 d-flex justify-content-end">
                                     <p>17 Desember 2023</p>
                                 </div>

                             </div>
                             <p>
                                 It is a long established fact that a reader will be distracted
                                 by the readable content of a page when looking at its layout.
                                 The point of using Lorem Ipsum is that it has a more-or-less
                                 normal It is a long established fact that a reader will be distracted
                                 by the readable content of a page when looking at its layout.
                                 The point of using Lorem Ipsum is that it has a more-or-less
                                 normal
                             </p>
                         </div>
                         <div class="col-md-2 d-flex justify-content-between">
                             <div class="img-post">
                                 <img class="d-block img-fluid" src="<?php echo base_url() ?>assets/image/blog/image 56.png" alt="First slide" />
                             </div>
                         </div>
                     </div>

                 </div>
             </div>
         </div>
     </div>
 </section>