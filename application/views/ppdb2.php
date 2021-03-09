<!-- <section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <nav>
                    <ol class="breadcrumb bg-transparent pl-0">
                        <li class="breadcrumb-item"><a href="<?= base_url('User'); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">PPDB</li>
                    </ol>
                </nav>
                <h3 class="mb-4 text-center">Formulir Pendaftaran Peserta Didik Baru</h3>
                <br><br>
                <form>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">NIS</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label pr-5">Nama</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label ">Jenis Kelamin</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label ">Tempat/Taggal Lahir</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label ">Agama</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label ">Anak Ke</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label ">Status Dalam Keluarga</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label ">Alamat</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="">
                        </div>
                    </div>
                    <fieldset class="form-group">
                    </fieldset>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section> -->

<style>
    * {
        margin: 0;
        padding: 0
    }

    html {
        height: 100%
    }

    p {
        color: grey
    }

    #heading {
        text-transform: uppercase;
        color: #673AB7;
        font-weight: normal
    }

    #msform {
        text-align: center;
        position: relative;
        margin-top: 20px
    }

    #msform fieldset {
        background: white;
        border: 0 none;
        border-radius: 0.5rem;
        box-sizing: border-box;
        width: 100%;
        margin: 0;
        padding-bottom: 20px;
        position: relative
    }

    .form-card {
        text-align: left
    }

    #msform fieldset:not(:first-of-type) {
        display: none
    }

    #msform input,
    #msform textarea {
        padding: 8px 15px 8px 15px;
        border: 1px solid #ccc;
        border-radius: 0px;
        margin-bottom: 25px;
        margin-top: 2px;
        width: 100%;
        box-sizing: border-box;
        font-family: montserrat;
        color: #2C3E50;
        background-color: #ECEFF1;
        font-size: 16px;
        letter-spacing: 1px
    }

    #msform input:focus,
    #msform textarea:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: 1px solid #673AB7;
        outline-width: 0
    }

    #msform .action-button {
        width: 100px;
        background: #673AB7;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 0px 10px 5px;
        float: right
    }

    #msform .action-button:hover,
    #msform .action-button:focus {
        background-color: #311B92
    }

    #msform .action-button-previous {
        width: 100px;
        background: #616161;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px 10px 0px;
        float: right
    }

    #msform .action-button-previous:hover,
    #msform .action-button-previous:focus {
        background-color: #000000
    }

    .card {
        z-index: 0;
        border: none;
        position: relative
    }

    .fs-title {
        font-size: 25px;
        color: #673AB7;
        margin-bottom: 15px;
        font-weight: normal;
        text-align: left
    }

    .purple-text {
        color: #673AB7;
        font-weight: normal
    }

    .steps {
        font-size: 25px;
        color: gray;
        margin-bottom: 10px;
        font-weight: normal;
        text-align: right
    }

    .fieldlabels {
        color: gray;
        text-align: left
    }

    #progressbar {
        margin-bottom: 30px;
        overflow: hidden;
        color: lightgrey
    }

    #progressbar .active {
        color: #673AB7
    }

    #progressbar li {
        list-style-type: none;
        font-size: 15px;
        width: 25%;
        float: left;
        position: relative;
        font-weight: 400
    }

    #progressbar #account:before {
        font-family: FontAwesome;
        content: "\f13e"
    }

    #progressbar #personal:before {
        font-family: FontAwesome;
        content: "\f007"
    }

    #progressbar #payment:before {
        font-family: FontAwesome;
        content: "\f030"
    }

    #progressbar #confirm:before {
        font-family: FontAwesome;
        content: "\f00c"
    }

    #progressbar li:before {
        width: 50px;
        height: 50px;
        line-height: 45px;
        display: block;
        font-size: 20px;
        color: #ffffff;
        background: lightgray;
        border-radius: 50%;
        margin: 0 auto 10px auto;
        padding: 2px
    }

    #progressbar li:after {
        content: '';
        width: 100%;
        height: 2px;
        background: lightgray;
        position: absolute;
        left: 0;
        top: 25px;
        z-index: -1
    }

    #progressbar li.active:before,
    #progressbar li.active:after {
        background: #673AB7
    }

    .progress {
        height: 20px
    }

    .progress-bar {
        background-color: #673AB7
    }

    .fit-image {
        width: 100%;
        object-fit: cover
    }
</style>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <br>
                <br>
                <br>
                <h3>Form Pendaftaran Peserta Didik Baru</h3> <br>
                <form id="msform">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active" id="data diri">
                            <h6>Data Diri</h6>
                        </li>
                        <li id="data orang tua">
                            <h6>Data Orang Tua</h6>
                        </li>
                        <li id="confirm">
                            <h6>Konfirmasi</h6>
                        </li>
                        <li id="selesai">
                            <h6>Selesai</h6>
                        </li>
                    </ul>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> <br>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Informasi Data Diri:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 1 - 4</h2>
                                </div>
                            </div>
                            <label class="fieldlabels">NIS: *</label> <input type="text" name="text" placeholder="NIS" />
                            <label class="fieldlabels">Nama Lengkap: *</label> <input type="text" name="nama" placeholder="Nama Lengkap" />
                            <label class="fieldlabels">Jenis Kelamin: *</label>
                            <select class="custom-select form-control-border border-width-2" id="exampleSelectBorderWidth2" name="jk" style="margin-bottom:20px;">
                                <option value="">Pilih</option>
                                <option value="laki-laki">Laki-laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                            <label class="fieldlabels">Tempat/Tanggal Lahir: *</label> <input type="text" name="text" placeholder="Tempat/Tanggal Lahir" />
                            <label class="fieldlabels">Agama: *</label>
                            <select class="custom-select form-control-border border-width-2" id="exampleSelectBorderWidth2" name="agama" style="margin-bottom:20px;">
                                <option value="">Pilih</option>
                                <option value="Islam">Islam</option>
                                <option value="Protestan">Protestan</option>
                                <option value="Katholik">Katholik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                            <label class="fieldlabels">Anak Ke-: *</label>
                            <select class="custom-select form-control-border border-width-2" id="exampleSelectBorderWidth2" name="anak ke-" style="margin-bottom:20px;">
                                <option value="">Pilih</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                            <label class="fieldlabels">Status dalam keluarga: *</label>
                            <select class="custom-select form-control-border border-width-2" id="exampleSelectBorderWidth2" name="Status" style="margin-bottom:20px;">
                                <option value="">Pilih</option>
                                <option value="Anak Kandung">Anak Kandung</option>
                                <option value="Anak Tiri">Anak Tiri</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                            <label class="fieldlabels">Alamat: *</label> <input type="text" name="text" placeholder="Alamat" />
                            <label class="fieldlabels">No. Telepon: *</label> <input type="text" name="text" placeholder="No. Telepon" />
                            <label class="fieldlabels">Asal Sekolah: *</label> <input type="text" name="text" placeholder="Asal Sekolah" />
                            <label class="fieldlabels">Nilai Akhir: *</label> <input type="text" name="text" placeholder="Nilai Akhir" />
                            <label class="fieldlabels">Nilai Rata-rata: *</label> <input type="text" name="text" placeholder="Nilai Rata-rata" />
                        </div>
                        <input type="button" name="next" class="next action-button" value="Next" />

                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Data Orang Tua:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 2 - 4</h2>
                                </div>
                            </div>
                            <label class="fieldlabels">Nama: *</label> <input type="text" name="nama" placeholder="Nama" />
                            <label class="fieldlabels">
                                Tempat/Tanggal Lahir: *</label> <input type="text" name="tempat/tanggal lahir" placeholder="Tempat/Tanggal Lahir" />
                            <label class="fieldlabels">Alamat: *</label> <input type="text" name="Alamat" placeholder="Alamat" />
                            <label class="fieldlabels">Pekerjaan: *</label>
                            <select class="custom-select form-control-border border-width-2" id="exampleSelectBorderWidth2" name="Status" style="margin-bottom:20px;">
                                <option value="">Pilih</option>
                                <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil</option>
                                <option value="Pegawai Swasta">Pegawai Swasta</option>
                                <option value="Dosen/Pengajar">Dosen/Pengajar</option>
                                <option value="TNI/Polri">TNI/Polri</option>
                                <option value="Wiraswasta">Wiraswasta</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>

                            <label class="fieldlabels">Penghasilan: *</label>
                            <select class="custom-select form-control-border border-width-2" id="exampleSelectBorderWidth2" name="Status" style="margin-bottom:20px;">
                                <option value="">Pilih</option>
                                <option value="Rp. 500.000 - Rp. 2.000.000">Rp. 500.000 - Rp. 2.000.000</option>
                                <option value="Rp. 2.000.000 - Rp 5.000.000 ">Rp. 2.000.000 - Rp 5.000.000 </option>
                                <option value="Rp. 5.000.000 - Lainnya">Rp. 5.000.000 - Lainnya</option>
                            </select>
                        </div>
                        <input type="button" name="next" class="next action-button" value="Next" />
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Konfirmasi:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 3 - 4</h2>
                                </div>
                            </div> <br><br>
                            <div class="row justify-content-center">
                                <div class="col-7 text-center">
                                    <h6 class="purple-text text-center">Dengan ini saya menyatakan bahwa data yang saya masukan adalah yang sebenar-benarnya.</h6>
                                </div>
                                <a class="btn btn-dark" href="<?= base_url("Informasi/ppdb") ?>">Simpan</a>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Finish:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 4 - 4</h2>
                                </div>
                            </div> <br><br>
                            <h2 class="purple-text text-center"><strong>SUKSES !</strong></h2> <br>
                            <div class="row justify-content-center">
                                <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                            </div> <br><br>
                            <div class="row justify-content-center">
                                <div class="col-7 text-center">
                                    <h5 class="purple-text text-center">Anda telah berhasil mendaftar</h5>
                                    <br>
                                    <h6 class="purple-text text-center">Tunggu Informasi selanjutnya di website kami, Terima Kasih.</h6>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {

        var current_fs, next_fs, previous_fs; //fieldsets
        var opacity;
        var current = 1;
        var steps = $("fieldset").length;

        setProgressBar(current);

        $(".next").click(function() {

            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            //Add Class Active
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    next_fs.css({
                        'opacity': opacity
                    });
                },
                duration: 500
            });
            setProgressBar(++current);
        });

        $(".previous").click(function() {

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            //Remove class active
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

            //show the previous fieldset
            previous_fs.show();

            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    previous_fs.css({
                        'opacity': opacity
                    });
                },
                duration: 500
            });
            setProgressBar(--current);
        });

        function setProgressBar(curStep) {
            var percent = parseFloat(100 / steps) * curStep;
            percent = percent.toFixed();
            $(".progress-bar")
                .css("width", percent + "%")
        }

        $(".submit").click(function() {
            return false;
        })

    });
</script>