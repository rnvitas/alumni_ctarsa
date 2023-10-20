 <section id="portfolio" class="detail-gallery">
     <div class="container" data-aos="fade-up">
         <?php foreach ($keterangan as $d) { ?>
             <div class="headergalery">
                 <h3><?php echo ($d->title) ?></h3>
                 <p><?php echo ($d->date) ?></p>
             </div>

         <?php } ?>

         <div class="gallery">


             <?php foreach ($detail_gallery as $gf) { ?>
                 <?php if ($gf->type_file == 'jpeg' || $gf->type_file == 'jpg' || $gf->type_file == 'png') { ?>
                     <div class="gallery-item ">
                         <figure>
                             <img src="../../../../uploadFile_alumni/<?php echo $gf->file ?>" class="img-fluid" alt="" />
                             <figcaption>

                             </figcaption>
                             <div class="title-galery">
                                 <p><?php echo $gf->title ?></p>
                             </div>
                         </figure>
                     </div>
                 <?php } else if ($gf->type_file == 'mp4' || $gf->type_file == 'mkv' || $gf->type_file == '3gp') { ?>
                     <div class="gallery-item ">
                         <figure>
                             <video width="410" height="270" controls>
                                 <source src="../../../../uploadFile_alumni/<?php echo $gf->file ?>" type="video/mp4">
                                 Your browser does not support the video tag.
                             </video>
                             <figcaption>

                             </figcaption>
                             <div class="title-galery">
                                 <p><?php echo $gf->title ?></p>
                             </div>
                         </figure>
                     </div>
                 <?php } else { ?>
                     <div class="gallery-item ">
                         <figure>
                             <object width="425" height="350" data="<?php echo $gf->link ?>" type="application/x-shockwave-flash">
                                 <param name="src" value="<?php echo $gf->link ?>" />
                             </object>
                             <!-- <iframe src="<?php echo $gf->link ?>" allowfullscreen></iframe> -->
                             <figcaption>

                             </figcaption>
                             <div class="title-galery">
                                 <p><?php echo $gf->title ?></p>
                             </div>
                         </figure>
                     </div>
             <?php }
                } ?>
         </div>



         <?php foreach ($keterangan as $k) { ?>
             <div class="descriptext">
                 <p>
                     <?php echo ($k->description) ?>
                 </p>

             </div>
         <?php } ?>
     </div>
 </section>