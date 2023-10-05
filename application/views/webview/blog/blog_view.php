 <section class="galeryhead">

     <div class="blogtext wrapper-body text-center ">
         <h1>Blog</h1>
         <p class="text-white">Baca Berbagai Tulisan Informatif, Inspiratif, dan Relevan untuk Anda.</p>
         <p class="text-white">Kami Senang dapat Menjadi Sumber Informasi dan Inspirasi </p>
     </div>
 </section>

 <section>
     <div class="wrapper-body">
         <div class="row height d-flex justify-content-center align-items-center">

             <div class="col-md-6">

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

 <section id="blog" class="blog">
     <div id="main-content" class="blog-page">
     </div>
     <div class="wrapper-body">
         <div class="row clearfix">
             <div class="col-lg-8 col-md-12 left-box" style="border-right:1px solid rgba(0, 0, 0, 0.10);">
                 <div class="card-blog single_post">
                     <div class="body">
                         <!-- <div class="cat-blogs d-flex justify-content-start"> -->
                         <div class="col-lg-12 d-flex justify-content-start" style="overflow-x:scroll; overflow-y:hidden;" style data-aos="fade-up" data-aos-delay="100">
                             <div id="portfolio-flters" class=" d-flex justify-content-start cat-blog-card">
                                 <button data-filter="*" class="filter-active cat-blog btn">All</button>

                                 <?php foreach ($category as $cat) { ?>
                                     <button data-filter=".filter-app" class="cat-blog btn"><?php echo $cat->category_name ?></button>

                                 <?php } ?>


                             </div>
                         </div>

                         <!-- </div> -->

                     </div>

                 </div>


                 <?php foreach ($all_blog as $a) { ?>
                     <div class="card-blog single_post" style="border-bottom:1px solid rgba(0, 0, 0, 0.10);" onclick="showDetail(<?php echo  $a->id ?>)">
                         <div class="body">
                             <div class="row">
                                 <div class="col-md-10">
                                     <div class="col-lg-12 d-flex justify-content-between">
                                         <div class="col-lg-6">
                                             <h3>
                                                 <a href="blog-details.html"><?php echo $a->title ?></a>
                                             </h3>
                                         </div>
                                         <div class="col-lg-6 d-flex justify-content-end">
                                             <p><?php echo $a->date ?></p>
                                         </div>

                                     </div>
                                     <p>
                                         <?php echo $a->thumbnail_desc ?>
                                     </p>
                                 </div>
                                 <div class="col-md-2 d-flex justify-content-between">
                                     <div class="img-post">
                                         <img class="d-block img-fluid image-thumbnail" src="<?php echo base_url() ?>assets/image/blog/image 56.png" alt="First slide" />
                                     </div>
                                 </div>
                             </div>

                         </div>
                         <div class="footer">
                             <div class="col-lg-12 d-flex justify-content-between ">
                                 <div class="actions d-flex">
                                     <h6><a href="javascript:void(0);" class="btn btn-outline-secondary" style="width:max-content;"><?php echo $a->category_name ?></a></h6>
                                     <p><?php echo $a->count ?> Kali dilihat</p>
                                 </div>
                                 <div class="action d-flex">
                                     <a href="javascript:void(0);" class="btn "><i class="bi bi-share"></i></a>
                                     <a href="javascript:void(0);" class="btn "><i class="bi bi-three-dots"></i></a>
                                 </div>

                             </div>
                         </div>
                     </div>
                 <?php } ?>




                 <div class="col-lg-6">
                     <?php echo $pagination; ?>

                 </div>
             </div>



             <div class="col-lg-4 col-md-12 right-box">
                 <div class="card-blog" style="border-bottom:1px solid rgba(0, 0, 0, 0.10);">
                     <div class="header d-flex ml-2">
                         <h4>Sedang Populer</h4>
                         <svg xmlns="http://www.w3.org/2000/svg" width="23" height="30" viewBox="0 0 23 30" fill="none">
                             <path d="M11.25 30C17.4637 30 22.5 26.25 22.5 19.6875C22.5 16.875 21.5625 12.1875 17.8125 8.4375C18.2812 11.25 15.4688 12.1875 15.4688 12.1875C16.875 7.5 13.125 0.9375 7.5 0C8.16938 3.75 8.4375 7.5 3.75 11.25C1.40625 13.125 0 16.3669 0 19.6875C0 26.25 5.03625 30 11.25 30ZM11.25 28.125C8.14313 28.125 5.625 26.25 5.625 22.9688C5.625 21.5625 6.09375 19.2188 7.96875 17.3438C7.73438 18.75 9.375 19.6875 9.375 19.6875C8.67188 17.3438 10.3125 13.5938 13.125 13.125C12.7894 15 12.6562 16.875 15 18.75C16.1719 19.6875 16.875 21.3075 16.875 22.9688C16.875 26.25 14.3569 28.125 11.25 28.125Z" fill="#EF5350" />
                         </svg>
                     </div>
                     <div class="body widget popular-post">
                         <div class="row">
                             <div class="col-lg-12">
                                 <?php foreach ($populer as $p) { ?>
                                     <div class="sidepost" onclick="showDetail(<?php echo  $p->id ?>)">
                                         <div class="single_post d-flex justify-content-between">
                                             <p class="m-b-0"><?php echo $p->title ?></p>
                                             <p><i class="bi bi-eye"></i><?php echo $p->count ?></p>
                                         </div>
                                         <div class="img-post">
                                             <p><?php echo substr($p->thumbnail_desc, 0, 150) . "..." ?></p>
                                         </div>
                                     </div>
                                 <?php } ?>



                             </div>
                         </div>
                     </div>
                 </div>




                 <div class="card-blog" style="border-bottom:1px solid rgba(0, 0, 0, 0.10);">
                     <div class="header d-flex ml-2">
                         <h4>Terbaru</h4>
                         <svg xmlns="http://www.w3.org/2000/svg" width="30" height="31" viewBox="0 0 30 31" fill="none">
                             <path d="M17.5 5.69032C17.9002 5.69049 18.2966 5.61177 18.6664 5.45868C19.0362 5.30559 19.3723 5.08112 19.6553 4.7981C19.9383 4.51508 20.1628 4.17906 20.3159 3.80924C20.469 3.43943 20.5477 3.04307 20.5475 2.64282H21.9538C21.9536 3.04297 22.0323 3.43922 22.1853 3.80896C22.3383 4.17869 22.5626 4.51465 22.8455 4.79765C23.1284 5.08066 23.4643 5.30515 23.834 5.45832C24.2036 5.61149 24.5999 5.69032 25 5.69032V7.09657C24.5999 7.09641 24.2036 7.17508 23.8339 7.3281C23.4641 7.48111 23.1282 7.70547 22.8452 7.98836C22.5622 8.27124 22.3377 8.60711 22.1845 8.97678C22.0313 9.34645 21.9525 9.74268 21.9525 10.1428H20.5462C20.5464 9.74268 20.4677 9.34642 20.3147 8.97669C20.1617 8.60696 19.9374 8.27099 19.6545 7.98799C19.3716 7.70499 19.0357 7.48049 18.666 7.32732C18.2964 7.17416 17.9001 7.09532 17.5 7.09532V5.69032ZM1.25 13.8928C3.23912 13.8928 5.14678 13.1026 6.5533 11.6961C7.95982 10.2896 8.75 8.38195 8.75 6.39282H11.25C11.25 8.38195 12.0402 10.2896 13.4467 11.6961C14.8532 13.1026 16.7609 13.8928 18.75 13.8928V16.3928C16.7609 16.3928 14.8532 17.183 13.4467 18.5895C12.0402 19.996 11.25 21.9037 11.25 23.8928H8.75C8.75 21.9037 7.95982 19.996 6.5533 18.5895C5.14678 17.183 3.23912 16.3928 1.25 16.3928V13.8928ZM21.5625 17.6428C21.5625 18.7203 21.1345 19.7536 20.3726 20.5154C19.6108 21.2773 18.5774 21.7053 17.5 21.7053V23.5803C18.5774 23.5803 19.6108 24.0083 20.3726 24.7702C21.1345 25.5321 21.5625 26.5654 21.5625 27.6428H23.4375C23.4375 26.5654 23.8655 25.5321 24.6274 24.7702C25.3892 24.0083 26.4226 23.5803 27.5 23.5803V21.7053C26.4226 21.7053 25.3892 21.2773 24.6274 20.5154C23.8655 19.7536 23.4375 18.7203 23.4375 17.6428H21.5625Z" fill="#2ECC71" />
                         </svg>
                     </div>
                     <div class="body widget popular-post">
                         <div class="row">
                             <div class="col-lg-12">

                                 <?php foreach ($terbaru as $t) { ?>
                                     <div class="sidepost" onclick="showDetail(<?php echo  $t->id ?>)">
                                         <div class="single_post d-flex justify-content-between">
                                             <p class="m-b-0"><?php echo $t->title ?></p>
                                             <p><i class="bi bi-eye"></i><?php echo $t->count ?></p>
                                         </div>
                                         <div class="img-post">
                                             <p><?php echo substr($t->thumbnail_desc, 0, 150) . "..." ?></p>
                                         </div>
                                     </div>
                                 <?php } ?>


                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     </div>
 </section>

 <script>
     function showDetail(id) {
         //  alert(id);
         url = "<?php echo base_url(); ?>Blog/detail/?id=" + id,

             window.location = url
     }
 </script>