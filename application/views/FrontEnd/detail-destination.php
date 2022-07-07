<!-- ====== Banner Start ====== -->
<section class="ud-page-banner">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="ud-banner-content">
              <h1>Detail Destination</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Banner End ====== -->

    <!-- ====== Blog Details Start ====== -->
    <section class="ud-blog-details">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="ud-blog-details-image">
              <?php $filegambar1 = base_url('/uploads/wisata/'.$wisata->foto1); ?>
              <img
                src="<?= $filegambar1 ?>"
                alt="blog details"
              />
              <div class="ud-blog-overlay">
                <div class="ud-blog-overlay-content">

                  <div class="ud-blog-meta">
                    <p class="date">
                      <i class="lni lni-flag"></i> <span><?= $wisata->nama_jenis ?></span>
                    </p>
                    <p class="comment">
                      <i class="lni lni-comments"></i> <span>50</span>
                    </p>
                    <p class="comment">
                      <i class="lni lni-ticket"></i> <span><?= $wisata->harga_tiket ?></span>
                    </p>
                    <p class="comment">
                      <i class="lni lni-money-location"></i> <span><?= $wisata->latlong ?></span>
                    </p>
                    <p class="comment">
                      <i class="lni lni-star"></i> <span><?= $wisata->skor_rating ?></span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-8">
            <div class="ud-blog-details-content">
              <h2 class="ud-blog-details-title">
                <?= $wisata->nama ?>
              </h2>
              <h3 class="ud-blog-details-subtitle">Alamat</h3>
              <p class="ud-blog-details-para">
                <?= $wisata->alamat ?>
              </p>
              <h3 class="ud-blog-details-subtitle">Deskrpsi</h3>
              <p class="ud-blog-details-para">
                <?= $wisata->deskripsi ?>
              </p>
              <h3 class="ud-blog-details-subtitle">Failitas</h3>
              <p class="ud-blog-details-para">
                <?= $wisata->fasilitas ?>
              </p>

              <?php if(!$wisata->website == "-"): ?>
              <div class="ud-blog-details-action">
                <div class="ud-blog-share">
                  <ul class="ud-blog-share-links">
                    <li>
                      <a href="javascript:void(0)" class="facebook">
                        <i class="lni lni-link"></i>
                      </a>
                    </li>
                    <li>
                      <a href="javascript:void(0)" class="facebook">
                        <i class="lni lni-facebook-filled"></i>
                      </a>
                    </li>
                    
                  </ul>
                </div>
              </div>
              <?php endif; ?>
              
            </div>
          </div>
          <div class="col-lg-4">
            <div class="ud-blog-sidebar">
              <div class="ud-newsletter-box">
                <img
                  src="<?= base_url('assets/images/blog/dotted-shape.svg')?>"
                  alt="shape"
                  class="shape shape-1"
                />
                <img
                  src="<?= base_url('assets/images/blog/dotted-shape.svg')?>"
                  alt="shape"
                  class="shape shape-2"
                />
                <h3 class="ud-newsletter-title">Make Comment</h3>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Launch static backdrop modal
                </button>
              </div>

              <div class="ud-articles-box">
                <h3 class="ud-articles-box-title">Popular Comment</h3>
                <ul class="ud-articles-list">
                  <li>
                    <div class="ud-article-image">
                      <img
                        src="<?= base_url('assets/images/blog/article-author-01.png')?>"
                        alt="author"
                      />
                    </div>
                    <div class="ud-article-content">
                      <h5 class="ud-article-title">
                        <a href="javascript:void(0)">
                          The 8 best landing page builders, reviewed
                        </a>
                      </h5>
                      <p class="ud-article-author">Martin Fedous</p>
                    </div>
                  </li>
                  <li>
                </ul>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Blog Details End ====== -->

    <!-- ====== Blog Start ====== -->
    <section class="ud-blog-grids ud-related-articles">
      <div class="container">
        <div class="row col-lg-12">
          <div class="ud-related-title">
            <h2 class="ud-related-articles-title">Related Destination</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="ud-single-blog">
              <div class="ud-blog-image">
                <a href="blog-details.html">
                  <img src="<?= base_url('assets/images/blog/blog-01.jpg')?>" alt="blog" />
                </a>
              </div>
              <div class="ud-blog-content">
                <span class="ud-blog-date">Dec 22, 2023</span>
                <h3 class="ud-blog-title">
                  <a href="blog-details.html">
                    Meet AutoManage, the best AI management tools
                  </a>
                </h3>
                <p class="ud-blog-desc">
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="ud-single-blog">
              <div class="ud-blog-image">
                <a href="blog-details.html">
                  <img src="<?= base_url('assets/images/blog/blog-02.jpg')?>" alt="blog" />
                </a>
              </div>
              <div class="ud-blog-content">
                <span class="ud-blog-date">Dec 22, 2023</span>
                <h3 class="ud-blog-title">
                  <a href="blog-details.html">
                    How to earn more money as a wellness coach
                  </a>
                </h3>
                <p class="ud-blog-desc">
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="ud-single-blog">
              <div class="ud-blog-image">
                <a href="blog-details.html">
                  <img src="<?= base_url('assets/images/blog/blog-03.jpg')?>" alt="blog" />
                </a>
              </div>
              <div class="ud-blog-content">
                <span class="ud-blog-date">Dec 22, 2023</span>
                <h3 class="ud-blog-title">
                  <a href="blog-details.html">
                    The no-fuss guide to upselling and cross selling
                  </a>
                </h3>
                <p class="ud-blog-desc">
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Blog End ====== -->

    <!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Make Comment</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      </div>
    </div>
  </div>
</div>