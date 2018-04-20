<div class="row">
  <div class="col-md-8 col-md-offset-2">
      <div class="card card-wizard" id="wizardCard">
          <form id="wizardForm" method="post" action="<?php echo base_url('submission/submit'); ?>" enctype="multipart/form-data">
              <div class="card-header text-center">
                  <h4 class="card-title">Kirim Lamaran Anda</h4>
                  <p class="category"><?php echo $vacancy->title; ?></p>
              </div>
              <div class="card-content">
                  <ul class="nav">
                      <li><a href="#personal" data-toggle="tab">Data Diri</a></li>
                      <li><a href="#submission" data-toggle="tab">Berkas</a></li>
                      <li><a href="#questionnaire" data-toggle="tab">Kuesioner</a></li>
                      <li><a href="#account" data-toggle="tab">Akun</a></li>
                  </ul>
                  <div class="tab-content">
                      <div class="tab-pane" id="personal">
                          <h5 class="text-center">Ceritakan tentang dirimu.</h5>
                          <div class="row">
                              <div class="col-md-5 col-md-offset-1">
                                  <div class="form-group">
                                      <label class="control-label">
                                          Nama Depan<star>*</star>
                                      </label>
                                      <input class="form-control"
                                             type="text"
                                             name="first_name"
                                             required="true"
                                             placeholder="ex: Mike"
                                      />
                                  </div>
                              </div>
                              <div class="col-md-5">
                                  <div class="form-group">
                                      <label class="control-label">
                                          Nama Belakang
                                      </label>
                                      <input class="form-control"
                                             type="text"
                                             name="last_name"
                                             placeholder="ex: Andrew"
                                      />
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-10 col-md-offset-1">
                                  <div class="form-group">
                                      <label class="control-label">
                                          Lokasi<star>*</star>
                                      </label>
                                      <input class="form-control"
                                             type="text"
                                             name="location"
                                             required="true"
                                             placeholder="Bandung, West java"
                                      />
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-10 col-md-offset-1">
                                  <div class="form-group">
                                      <label class="control-label">
                                          Email<star>*</star>
                                      </label>
                                      <input class="form-control"
                                             type="text"
                                             name="email"
                                             email="true"
                                             required="true"
                                             placeholder="ex: hello@fazan.my.id"
                                      />
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-10 col-md-offset-1">
                                  <div class="form-group">
                                      <label class="control-label">
                                          No Telepon<star>*</star>
                                      </label>
                                      <input class="form-control"
                                             type="number"
                                             name="phone"
                                             required="true"
                                             placeholder="08567018044"
                                      />
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="tab-pane" id="submission">
                          <h5 class="text-center">Beri kami lebih banyak rincian tentang diri Anda.</h5>
                          <div class="row">
                              <div class="col-md-10 col-md-offset-1">
                                  <div class="form-group">
                                      <label class="control-label">Alamat Situs<star>*</star></label>
                                      <input class="form-control"
                                             type="text"
                                             name="website"
                                             url="true"
                                             placeholder="ex: https://fazan.my.id"
                                      />
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-5 col-md-offset-1">
                                  <div class="form-group">
                                      <label class="control-label">LinkedIn URL</label>
                                      <input class="form-control"
                                             type="text"
                                             name="linkedin"
                                             placeholder="ex: https://www.linkedin.com/in/fakhrifauzan"
                                      />
                                  </div>
                              </div>
                              <div class="col-md-5">
                                  <div class="form-group">
                                      <label class="control-label">GitHub URL</label>
                                      <input class="form-control"
                                             type="text"
                                             name="github"
                                             placeholder="ex: https://github.com/fakhrifauzan"
                                      />
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-5 col-md-offset-1">
                                  <div class="form-group">
                                      <label class="control-label">Facebook</label>
                                      <input class="form-control"
                                             type="text"
                                             name="facebook"
                                             placeholder="ex: https://www.facebook.com/fazan697"
                                      />
                                  </div>
                              </div>
                              <div class="col-md-5">
                                  <div class="form-group">
                                      <label class="control-label">Twitter</label>
                                      <input class="form-control"
                                             type="text"
                                             name="twitter"
                                             placeholder="ex: https://twitter.com/fakhrifauzan"
                                      />
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-10 col-md-offset-1">
                                  <div class="form-group">
                                      <label class="control-label">Resume / CV<star>*</star></label>
                                      <input class="form-control"
                                             type="file"
                                             name="resume"
                                             required="true"
                                      />
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="tab-pane" id="questionnaire">
                          <h5 class="text-center">Izinkan kami lebih mengenal Anda.</h5>
                          <div class="row">
                              <div class="col-md-10 col-md-offset-1">
                                  <div class="form-group">
                                      <label class="control-label">
                                          1. Bagaimana biasanya kamu menyalurkan energi?<star>*</star>
                                      </label>
                                      <div class="radio">
                                        <input type="radio" name="energi" id="energi1" value="E">
                                        <label for="energi1">
                                          Extroversion
                                        </label>
                                      </div>
                                      <div class="typo-line">
                                          <p>Kamu menyalurkan energimu dengan bersemangat, antusias, suka mengobrol, senang berinteraksi dengan orang lain, pandai merangkai kata, dan lebih menyukai tatap muka langsung.</p>
                                      </div>
                                      <div class="radio">
                                        <input type="radio" name="energi" id="energi2" value="I">
                                        <label for="energi2">
                                          Introversion
                                        </label>
                                      </div>
                                      <div class="typo-line">
                                          <p>Kamu menyalurkan energimu dengan menyimpan semangat, dan antusiasme dalam hati, lebih menyukai komunikasi tidak langsung, mempertimbangkan ide dengan hati-hati, dan tidak terlalu banyak bicara.</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-10 col-md-offset-1">
                                  <div class="form-group">
                                      <label class="control-label">
                                          2. Bagaimana biasanya kamu memporoses informasi?<star>*</star>
                                      </label>
                                      <div class="radio">
                                        <input type="radio" name="informasi" id="informasi1" value="S">
                                        <label for="informasi1">
                                          Sensing
                                        </label>
                                      </div>
                                      <div class="typo-line">
                                          <p>Kamu memecahkan masalah dengan mengikuti metode yang telah ada, praktis, memerhatikan fakta-fakta, menyukai rutinitas ketimbang spontanitas, bertindak hati-hati, dan penuh perhitungan.</p>
                                      </div>
                                      <div class="radio">
                                        <input type="radio" name="informasi" id="informasi2" value="N">
                                        <label for="informasi2">
                                          Intuition
                                        </label>
                                      </div>
                                      <div class="typo-line">
                                          <p>Kamu senang memecahkan masalah-masalah baru, senang dengan tantangan baru, berpegang pada inspirasi, inovatif, menyukasi perubahan, bersemangat dan meledak-ledak.</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-10 col-md-offset-1">
                                  <div class="form-group">
                                      <label class="control-label">
                                          3. Bagaimana biasanya kamu membuat keputusan?<star>*</star>
                                      </label>
                                      <div class="radio">
                                        <input type="radio" name="keputusan" id="keputusan1" value="T">
                                        <label for="keputusan1">
                                          Thinking
                                        </label>
                                      </div>
                                      <div class="typo-line">
                                          <p>Kamu menyukai sesuatu yang singkat dan padat, mempertimbangkan pro dan kontra dengan baik, kritis, objektif, dapat diyakinkan melalui penjelasan yang logis, menggunakn emosi dan perasaan sebagai pertimbangan kedua. </p>
                                      </div>
                                      <div class="radio">
                                        <input type="radio" name="keputusan" id="keputusan2" value="F">
                                        <label for="keputusan2">
                                          Feeling
                                        </label>
                                      </div>
                                      <div class="typo-line">
                                          <p>Kamu menyukai sesuatu yang personal, dapat diyakinkan melalui karisma seseorang, mempertimbangkan banyak alternatif, menganggap logika dan objektivitas sebagai pertimbangan kedua.</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-10 col-md-offset-1">
                                  <div class="form-group">
                                      <label class="control-label">
                                          4. Bagaiman kamu mengatur hidup?<star>*</star>
                                      </label>
                                      <div class="radio">
                                        <input type="radio" name="hidup" id="hidup1" value="J">
                                        <label for="hidup1">
                                          Judging
                                        </label>
                                      </div>
                                      <div class="typo-line">
                                          <p>Senang membuat kesepakatan, target, dan batas waktu. Tidak suka dengan hal-hal mendadak, mengharapkan orang lain patuh dengan jadwal, berperndirian tetap, fokus pada arah dan tujuan.</p>
                                      </div>
                                      <div class="radio">
                                        <input type="radio" name="hidup" id="hidup2" value="P">
                                        <label for="hidup2">
                                          Perceiving
                                        </label>
                                      </div>
                                      <div class="typo-line">
                                          <p>Tidak suka jadwal yang ketat dan kaku. Menyukai hal-hal tidak terduga dan dapat menyesuaikan diri. Memiliki pandangan yang masih dapat berubah, ingin tahu pilihan-pilihan yang ada, memerhatikan proses dan fokus pada kebebasan.</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="tab-pane" id="account">
                          <h5 class="text-center">Terus pantau lamaran Anda.</h5>
                          <input class="form-control"
                                 type="hidden"
                                 name="id_vacancy"
                                 required="true"
                                 value="<?php echo $vacancy->id_vacancy; ?>" 
                          />
                          <div class="row">
                              <div class="col-md-10 col-md-offset-1">
                                  <div class="form-group">
                                      <label class="control-label">
                                          Username<star>*</star>
                                      </label>
                                      <input class="form-control"
                                             type="text"
                                             name="username"
                                             required="true"
                                             placeholder="ex: fakhrifauzan"
                                      />
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-10 col-md-offset-1">
                                  <div class="form-group">
                                      <label class="control-label">
                                          Password<star>*</star>
                                      </label>
                                      <input class="form-control"
                                             type="password"
                                             name="password"
                                             required="true"
                                      />
                                  </div>
                              </div>
                          </div>
                          <h2 class="text-center text-space">Yuhuuu! <br><small> Klik "<b>Selesai</b>" untuk menyelesaikan lamaran Anda</small></h2>
                      </div>
                  </div>
              </div>
              <div class="card-footer">
                  <button type="button" class="btn btn-default btn-fill btn-wd btn-back pull-left">Kembali</button>
                  <button type="button" class="btn btn-info btn-fill btn-wd btn-next pull-right">Berikutnya</button>
                  <button type="submit" class="btn btn-info btn-fill btn-wd btn-finish pull-right" onclick="onFinishWizard()">Selesai</button>
                  <div class="clearfix"></div>
              </div>
          </form>
      </div>
  </div>
</div>