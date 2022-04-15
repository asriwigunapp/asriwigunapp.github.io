<?= $this->extend('template'); ?>
<?= $this->section('bodycontent'); ?>
<div class="shadow-1-strong bg-white my-5 p-5" id="experience">
    <div class="work-experience-section">
        <h2 class="h2 fw-light mb-4">Experience</h2>
        <div class="timeline">
            <?php foreach ($exp as $row) : ?>
                <div class="timeline-card timeline-card-info" data-aos="fade-in" data-aos-delay="0">
                    <div class="timeline-head px-4 pt-3">
                        <!-- <div class="timeline-body px-4 pt-4"> -->
                            <div class="h5">
                                <h5><?= $row['exp_name'] ?></h5>
                            </div>
                            <div class="text-muted text-small mb-3"><span><?= $row['exp_in'] ?> <i>to</i> <?= $row['exp_out'] ?></span></div>
                            <div>
                                <p><?= $row['exp_detail'] ?></p>
                            </div>
                        <!-- </div> -->
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
</div>
<div class="shadow-1-strong bg-white my-5 p-5" id="education">
    <div class="education-section">
        <h2 class="h2 fw-light mb-4">Education</h2>
        <div class="timeline">
            <?php foreach ($edu as $row) : ?>
                <div class="timeline-card timeline-card-success" data-aos="fade-in" data-aos-delay="0">
                    <div class="timeline-head px-4 pt-3">
                        <!-- <div class="timeline-body px-4 pt-4"> -->
                            <div class="h5">
                                <h5><?= $row['edu_name'] ?></h5>
                            </div>
                            <div class="text-muted text-small mb-3"><span><?= $row['edu_in'] ?> <i>to</i> <?= $row['edu_out'] ?></span></div>
                            <div>
                                <p><?= $row['edu_detail'] ?></p>
                            </div>
                        <!-- </div> -->
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<div class="shadow-1-strong bg-white my-5 p-5 d-print-none" id="portfolio">
    <div class="portfolio-section">
        <h2 class="h2 fw-light mb-4">Portfolio</h2>
        <div class="row g-0">
            <div class="col-md-6"><a href="https://dribbble.com/" target="_blank"><img class="img-fluid" src="assets/images/project-1.jpg" width="800" height="500" /></a></div>
            <div class="col-md-6 d-flex align-items-center" data-aos="fade-left" data-aos-delay="100">
                <div class="m-4 mt-md-2">
                    <h3>Graphic Design</h3>
                    <p class="text-muted">Graphic designer (desainer grafis) merupakan sebuah pekerjaan menciptakan ilustrasi, tipografi, fotografi, atau grafis motion baik untuk penerbit maupun media cetak dan elektronik. Seorang graphic designer bertanggung jawab atas tampilan pada media promosi suatu produk. Tugasnya menyampaikan informasi mengenai suatu produk secara menarik dengan mengakomodasi keinginan klien.</p>
                </div>
            </div>
        </div>
        <div class="row g-0 portfolio-reverse">
            <div class="col-md-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                <div class="m-4 mt-md-2 text-end">
                    <h3>Video Editor</h3>
                    <p class="text-muted">Video editor sendiri merupakan salah satu jenis pekerjaan yang kini banyak dibutuhkan oleh perusahaan. Hal ini menandakan pekerjaan video editor sendiri memiliki peluang yang terbuka lebar. Hal ini juga sesuai dengan kebutuhan seiring semakin berkembangnya industri digital yang cukup pesat.</p>
                </div>
            </div>
            <div class="col-md-6"><a href="https://www.behance.net/" target="_blank"><img class="img-fluid" src="assets/images/project-2.jpg" width="800" height="500" /></a></div>
        </div>
    </div>
</div>
<div class="shadow-1-strong bg-white my-5 p-5" id="references">
    <div class="reference-section">
        <h2 class="h2 fw-light mb-4">References</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="d-flex mb-2">
                    <div class="avatar"><img src="assets/images/reference-image-1.png" width="60" height="60" /></div>
                    <div class="header-bio m-3 mb-0">
                        <h3 class="h6 mb-1" data-aos="fade-left" data-aos-delay="0">BTRRyzen</h3>
                        <p class="text-muted text-small" data-aos="fade-left" data-aos-delay="100">Pro Player / Super Manggis</p>
                    </div>
                </div>
                <div class="d-flex"><i class="text-secondary fas fa-quote-left"></i>
                    <p class="lead mx-2" data-aos="fade-left" data-aos-delay="100">Muhammad Albi memulai karirnya di dunia Esports pada tahun 2018 lalu setelah turnamen PUBG Mobile National Championship (PINC) Season 1 selesai digelar.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex mb-2">
                    <div class="avatar"><img src="assets/images/reference-image-2.png" width="60" height="60" /></div>
                    <div class="header-bio m-3 mb-0">
                        <h3 class="h6 mb-1" data-aos="fade-left" data-aos-delay="0">BTRBabyla</h3>
                        <p class="text-muted text-small" data-aos="fade-left" data-aos-delay="100">Pro Player / Bu Manggis</p>
                    </div>
                </div>
                <div class="d-flex"><i class="text-secondary fas fa-quote-left"></i>
                    <p class="lead mx-2" data-aos="fade-left" data-aos-delay="100">BabyLa sudah menorehkan banyak prestasi di esports PUBG Mobile ladies, baik di Indonesia maupun di tingkat internasional.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="shadow-1-strong bg-white my-5 p-5" id="contact">
    <div class="contant-section">
        <h2 class="h2 fw-light text mb-4">Contact</h2>
        <div class="row mb-4">
            <div class="col-md-5" data-aos="fade-left" data-aos-delay="200">
                <div class="mt-1">
                    <div class="h6"><i class="fas fa-phone pe-2 text-muted" style="width:24px;opacity:0.85;"></i> +62838-0869-2455</div>
                    <div class="h6"><i class="far fa-envelope pe-2 text-muted" style="width:24px;opacity:0.85;"></i> asriwigunap@gmail.com</div>
                </div>
                <div class="mt-5 d-print-none">
                    <form action="https://formspree.io/your@email.com" method="POST">
                        <div class="form-outline mb-4">
                            <input type="text" id="name" class="form-control" required />
                            <label class="form-label" for="name">Name</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="email" id="email" class="form-control" required />
                            <label class="form-label" for="email">Email address</label>
                        </div>
                        <div class="form-outline mb-4">
                            <textarea class="form-control" style="resize: none;" id="message" rows="4" required></textarea>
                            <label class="form-label" for="message">Message</label>
                        </div>
                        <button class="btn btn-info btn-block mb-4" type="submit">Send</button>
                    </form>
                </div>
            </div>
            <div class="col-md-7 d-print-none" data-aos="zoom-in" data-aos-delay="100"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990.1711972299879!2d106.91528472917757!3d-6.92822936837488!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e684826d2cdad35%3A0x1f049de885459aa!2sJl.%20Benteng%20Kidul%2C%20Benteng%2C%20Kec.%20Warudoyong%2C%20Kota%20Sukabumi%2C%20Jawa%20Barat%2043132!5e0!3m2!1sid!2sid!4v1649828117046!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<?= $this->endSection(); ?>