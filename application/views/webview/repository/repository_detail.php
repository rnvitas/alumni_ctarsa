<section class="galeryhead-repository">

    <div class="blogtext wrapper-body text-center ">
        <h1>Repository</h1>
        <p>Lorem ipsum dolor sit amet, syarat dan ketentuan </p>
        <p>Lorem ipsum dolor sit amet consectetur </p>
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

<section id="repositorydetails" class="repositorydetails">
    <div class="wrapper-body">
        <div class="container-detail">
            <?php foreach ($detail as $d) { ?>
                <div class="row">
                    <div class="leftside col-lg-4">
                        <img class="img-fluid img-detail" src=" <?php echo base_url(); ?>./../../../uploadFile_alumni/repository/<?php echo $d->thumbnail_image; ?>" alt=" " style="width: 60%;">
                    </div>
                    <div class="leftside col-lg-8">
                        <h3 style=" font-weight:700"><?php echo $d->title ?></h3>
                        <p><?php echo $d->author ?></p>
                        <div class="deskripsi d-flex ">
                            <div class="rujuk d-flex">
                                <p class="me-1" style="color:#cb9224; font-weight:700">Dirujuk: </p>
                                <p><?php echo $d->count ?> kali</p>
                            </div>
                            <div class="Pagecount d-flex">
                                <p class="me-1" style="color:#cb9224; font-weight:700">Page Count: </p>
                                <p><?php echo $d->page_count ?> halaman</p>
                            </div>
                            <div class="tahun d-flex">
                                <p class="me-1" style="color:#cb9224; font-weight:700">Tahun: </p>
                                <p><?php echo $d->date ?></p>
                            </div>
                        </div>
                        <p><?php echo $d->description ?></p>
                        <div class="ineteraksi d-flex">
                            <a type="button" class="btns btn btn-primary me-2" href="<?php echo base_url(); ?>repository/preview/?id=<?php echo $d->id ?>"><i class=" bi bi-book-half"></i>Baca</a>
                            <button type="button" class="btns btn btn-primary" onclick="download(<?php echo $d->id ?>)"><i class="bi bi-download"></i>Unduh</button>
                            <!-- <button type="button" class="btn btn-primary"><i class="bi bi-printer"></i>Cetak</button>
                        <button type="button" class="btn btn-primary"><i class="bi bi-quote"></i>Kutip</button> -->
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>

    <div class="wrapper-body mb-5">
        <div class="bacajuga col-lg-12">
            <div class="d-flex justify-content-between align-items-center">
                <h5 style="color:#cb9224; font-weight:700">Baca Juga</h5>
                <a type="button" class=" btn btn-primary align-items-center" href="<?php echo base_url('repository') ?>">lihat semua</a>
            </div>
        </div>
        <div class="readmore mt-3 mb-5">
            <div class="d-flex justify-content-center slider-repo">
                <?php foreach ($lainnya as $l) { ?>
                    <div class="card-details " onclick="showDetail(<?php echo $l->id ?>)">
                        <img src=" <?php echo base_url(); ?>./../../../uploadFile_alumni/repository/<?php echo $l->thumbnail_image; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title-book"><?php echo $l->title; ?> </h5>
                            <p class="card-text"><?php echo $l->author; ?></p>
                            <p class="cardview">dirujuk <?php echo $l->count; ?> kali</p>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    function showDetail(id) {
        alert(id);
        url = "<?php echo base_url(); ?>repository/detail/?id=" + id,

            window.location = url
    }

    function download() {
        var a = document.createElement("a");
        a.style = "display: none";
        a.href = "data:application/pdf;base64," + id;
        a.download = "download.pdf";
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
    }
</script>