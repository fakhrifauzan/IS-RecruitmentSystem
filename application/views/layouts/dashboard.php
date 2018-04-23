<div class="row text-center">
    <h1>Halo, <?php echo $this->session->first_name.' '.$this->session->last_name ?></h1>
    <h3><?php echo $this->session->role_name ?></h3>
</div>
<div class="row">
    <div class="col-lg-6 col-sm-6">
        <div class="card">
            <div class="card-content">
                <div class="row">
                    <div class="col-xs-5">
                        <div class="icon-big icon-warning text-center">
                            <i class="fa fa-group"></i>
                        </div>
                    </div>
                    <div class="col-xs-7">
                        <div class="numbers">
                            <p>Pelamar</p>
                            <?php echo $pelamar ?>
                        </div>
                    </div>
                </div>
            </div>            
            <div class="card-footer">
                <hr />
                <div class="stats">
                    <i class="fa fa-group"></i> Jumlah Seluruh Pelamar
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-sm-6">
        <div class="card">
            <div class="card-content">
                <div class="row">
                    <div class="col-xs-5">
                        <div class="icon-big icon-success text-center">
                            <i class="fa fa-group"></i>
                        </div>
                    </div>
                    <div class="col-xs-7">
                        <div class="numbers">
                            <p>In Review</p>
                            <?php echo $in_review ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <hr />
                <div class="stats">
                    <i class="fa fa-calendar"></i> Jumlah Seluruh Pelamar Dengan Status "In Review"
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-sm-6">
        <div class="card">
            <div class="card-content">
                <div class="row">
                    <div class="col-xs-5">
                        <div class="icon-big icon-danger text-center">
                            <i class="fa fa-group"></i>
                        </div>
                    </div>
                    <div class="col-xs-7">
                        <div class="numbers">
                            <p>Interview</p>
                            <?php echo $interview ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <hr />
                <div class="stats">
                    <i class="fa fa-clock-o"></i> Jumlah Seluruh Pelamar Dengan Status "Interview"
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-sm-6">
        <div class="card">
            <div class="card-content">
                <div class="row">
                    <div class="col-xs-5">
                        <div class="icon-big icon-info text-center">
                            <i class="fa fa-group"></i>
                        </div>
                    </div>
                    <div class="col-xs-7">
                        <div class="numbers">
                            <p>Offer</p>
                            <?php echo $offer ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <hr />
                <div class="stats">
                    <i class="fa fa-refresh"></i> Jumlah Seluruh Pelamar Dengan Status "Offer"
                </div>
            </div>
        </div>
    </div>
</div>