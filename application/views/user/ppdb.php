<style>
    /* CSS Document */
    div.joincontent {
        position: relative;
        width: 65%;
        min-height: 131vh;
        height: auto;
        margin-top: 2%;
        margin-left: auto;
        margin-right: auto;
        background-color: #fcfcfc;
        border-radius: 20px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 15px 0 rgba(0, 0, 0, 0.12);

    }

    div.progresscont {
        width: 98%;
        padding-top: 5.5%;
        margin-left: auto;
        margin-right: auto;

        height: 7rem;

    }

    div.joincontent h4 {
        font-family: 'Noto Serif JP', sans-serif;
        color: #34393f;
    }

    div.circulo {
        width: 5em;
        height: 5em;
        border: 2px solid #45597a;
        background-color: #fcfcfc;
        border-radius: 2.5em;
        padding-top: 30%;
        cursor: pointer;
    }

    .activecirculo {
        transition: .5s ease all;
        background-color: #45597a !important;
    }

    .activecirculo i {
        color: #fcfcfc !important;
    }

    div.circulo i {
        font-size: 1.75rem;
        color: #45597a;
    }

    div.circleblocks {
        width: 100%;
        position: absolute;
        top: 0;
        margin-top: 3.5%;
    }

    .progress-bar {
        background-color: #45597a !important;
    }

    .wizard-navigation {
        position: relative;
        bottom: 0;
        width: 98%;
        margin-left: auto;
        margin-right: auto;
        padding-bottom: 2.5%;
    }

    .wizard-navigation button {
        border-radius: 2rem;
        width: 10rem;
    }

    #submitForm {
        width: 15rem;
    }

    div.registration-content {
        width: 95%;
        min-height: 51vh;
        margin-left: auto;
        margin-right: auto;
        position: relative;
        margin-top: 5%;
        padding-top: 2.5%;
    }

    div.registration-content>div {
        width: 100%;
        min-height: inherit;

    }

    div.registration-content input {
        border-radius: 2rem;
    }

    #addrescont,
    #verifycont,
    #aboutcont {
        display: none;
    }

    #aboutcont {}

    #addrescont {}

    #verifycont {}

    #submitForm {
        display: none;
    }

    .btn-file {
        position: relative;
        overflow: hidden;
        background-color: #c5ccd8 !important;
        border-top-right-radius: 0 !important;
        border-bottom-right-radius: 0 !important;
    }

    .btn-file input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        min-width: 100%;
        min-height: 100%;
        font-size: 100px;
        text-align: right;
        filter: alpha(opacity=0);
        opacity: 0;
        outline: none;
        background: white;
        cursor: inherit;
        display: block;
    }

    #id-cont,
    #proof-cont {
        width: 100%;
        height: 18em;
        padding: 2.5%;
    }

    .uploadid {
        border: 1px solid #c9ced6;
        height: 40vh;
        position: relative;
    }

    .uploadid .form-group {
        height: inherit !important;
    }

    /*Extra small devices (portrait phones, less than 576px)*/
    @media (max-width: 575.98px) {
        div.joincontent {
            width: 98%;
            height: 155vh;

        }

        div.registration-content {
            padding-top: 17.5%;
        }
    }

    /* Medium devices (tablets, less than 992px)*/
    @media (max-width: 991.98px) {}

    /*Large devices (desktops, less than 1200px)*/
    @media (max-width: 1350px) {

        #id-cont,
        #proof-cont {
            height: 15em;

        }
    }

    /*Large devices (desktops, less than 1200px)*/
    @media (max-width: 1750px) {
        div.joincontent {

            height: 94vh;
        }
    }
</style>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<br>
<br>
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="joincontent">
                    <h4 class="text-center">Formulir Pendaftaran Peserta Didik Baru</h4>
                    <div class="progresscont">
                        <div class="progress" style="height: 20px;">
                            <div id="progresswizard" class="progress-bar" role="progressbar" style="width: 30%;" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="circleblocks">
                            <div class="d-flex justify-content-around mb-3">
                                <div class="p-2 ">
                                    <div class="aboutblock">
                                        <div class="circulo activecirculo text-center"><i class="fas fa-user-tie"></i></div>
                                        <div class="title text-center">Data Diri</div>
                                    </div>
                                </div>
                                <div class="p-2 ">
                                    <div class="addressblock">
                                        <div class="circulo text-center"><i class="fas fa-user"></i></div>
                                        <div class="title text-center">Data Orang Tua</div>
                                    </div>
                                </div>
                                <div class="p-2 ">
                                    <div class="verifyblock">
                                        <div class="circulo text-center"><i class="far fa-id-card"></i></div>
                                        <div class="title text-center">Verifikasi</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>

                        <form action="registerUser" method="POST">
                            <input type="hidden" name="_token" value="iJquRbgH4Np4OcWzjk8Bd03CaexHzse7gz2vHrml">

                            <div class="registration-content">
                                <div id="aboutcont" data-progress="15%">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">

                                                <label for="nis">NISN <span style="color: #cc1818;">*</span></label>
                                                <input type="text" class="form-control form-control-lg" name="nis" id="nis" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="nama lengkap">Nama Lengkap<span style="color: #cc1818;">*</span></label>
                                                <input type="text" class="form-control form-control-lg" name="nama lengkap" id="nama lengkap" required>

                                            </div>

                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="fieldlabels">Jenis Kelamin: *</label>
                                                <select class="custom-select form-control-border border-width-2" id="exampleSelectBorderWidth2" name="jk" style="margin-bottom:20px;">
                                                    <option value="">Pilih</option>
                                                    <option value="laki-laki">Laki-laki</option>
                                                    <option value="perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="ttl">Tempat/Tanggal Lahir<span style="color: #cc1818;">*</span></label>
                                                <input type="text" class="form-control" name="ttl" id="ttl" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
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
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="fieldlabels">Anak Ke-: *</label>
                                                <select class="custom-select form-control-border border-width-2" id="exampleSelectBorderWidth2" name="anak ke-" style="margin-bottom:20px;">
                                                    <option value="">Pilih</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="Lainnya">Lainnya</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="fieldlabels">Status dalam keluarga: *</label>
                                                <select class="custom-select form-control-border border-width-2" id="exampleSelectBorderWidth2" name="Status" style="margin-bottom:20px;">
                                                    <option value="">Pilih</option>
                                                    <option value="Anak Kandung">Anak Kandung</option>
                                                    <option value="Anak Tiri">Anak Tiri</option>
                                                    <option value="Lainnya">Lainnya</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="alamat">Alamat<span style="color: #cc1818;">*</span></label>
                                                <input type="text" class="form-control form-control-lg" name="alamat" id="alamat" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="no telpon">No. Telpon<span style="color: #cc1818;">*</span></label>
                                                <input type="text" class="form-control form-control-lg" name="no telpon" id="no telpon" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="asal sekolah">Asal Sekolah<span style="color: #cc1818;">*</span></label>
                                                <input type="text" class="form-control form-control-lg" name="asal sekolah" id="asal sekolah" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="nilai akhir">Nilai Akhir<span style="color: #cc1818;">*</span></label>
                                                <input type="text" class="form-control form-control-lg" name="nilai akhir" id="nilai akhir" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="nilai rata">Nilai Rata<span style="color: #cc1818;">*</span></label>
                                                <input type="text" class="form-control form-control-lg" name="nilai rata" id="nilai rata" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="addrescont" data-progress="50%">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">

                                                <label for="streetname">Nama<span style="color: #cc1818;">*</span></label>
                                                <input type="text" class="form-control form-control-lg" name="nama lengkap" id="nama lengkap" required>

                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">

                                                <label for="streetno">Tempat/Tanggal Lahir <span style="color: #cc1818;">*</span></label>
                                                <input type="text" class="form-control form-control-lg" name="streetno" id="streetno" required>

                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">

                                                <label for="city">Alamat <span style="color: #cc1818;">*</span></label>
                                                <input type="text" class="form-control form-control-lg" name="alamat" id="alamat" required>

                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">

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
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">

                                                <label class="fieldlabels">Penghasilan: *</label>
                                                <select class="custom-select form-control-border border-width-2" id="exampleSelectBorderWidth2" name="Status" style="margin-bottom:20px;">
                                                    <option value="">Pilih</option>
                                                    <option value="Rp. 500.000 - Rp. 2.000.000">Rp. 500.000 - Rp. 2.000.000</option>
                                                    <option value="Rp. 2.000.000 - Rp 5.000.000 ">Rp. 2.000.000 - Rp 5.000.000 </option>
                                                    <option value="Rp. 5.000.000 - Lainnya">Rp. 5.000.000 - Lainnya</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="verifycont" data-progress="85%">
                                    <h5 class="text-center">Dengan ini saya menyatakan bahwa data yang saya masukan adalah yang sebenar-benarnya.</h5>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between mb-3 wizard-navigation ">
                                <div class="p-2"><button id="prevbtn" type="button" class="btn btn-outline-dark btn-lg">Previous</button></div>

                                <div class="p-2"><button id="nextbtn" type="button" class="btn btn-primary btn-lg text-center">Next</button>
                                    <button id="submitForm" name="submitForm" style="" type="submit" class="btn btn-primary btn-lg" href="<?= base_url('Informasi/ppdb'); ?>">Daftar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // JavaScript Document
    (function() {

        var wizard = {
            formstate: 0,
            emptyInputs: 0,
            inactiveSections: [1, 2],
            setInactiveSections: function() {
                if (this.formstate === 0) {
                    this.inactiveSections = [1, 2];
                } else if (this.formstate === 1) {
                    this.inactiveSections = [0, 2];
                } else {
                    this.inactiveSections = [0, 1];
                }
            },
            setInactiveCircles: function() {
                if (this.formstate === 0) {
                    var inactiveCirclea = document.querySelector(this.circlesections[this.inactiveSections[0]]);
                    var inactiveCircleb = document.querySelector(this.circlesections[this.inactiveSections[1]]);
                    inactiveCirclea.classList.remove("activecirculo");
                    inactiveCircleb.classList.remove("activecirculo");
                } else if (this.formstate === 1) {
                    var inactiveCircles = document.querySelector(this.circlesections[this.inactiveSections[1]]);
                    inactiveCircles.classList.remove("activecirculo");

                }

            },
            formsections: ['#aboutcont', '#addrescont', '#verifycont'],
            circlesections: ['.aboutblock .circulo', '.addressblock .circulo', '.verifyblock .circulo'],
            prevbtn: 'prevbtn',
            nextbtn: 'nextbtn',

            initiateForm: function() {

                var currsection = document.querySelector(this.formsections[this.formstate]);
                var inactiveSecta = document.querySelector(this.formsections[this.inactiveSections[0]]);
                var inactiveSectb = document.querySelector(this.formsections[this.inactiveSections[1]]);


                var currcircle = document.querySelector(this.circlesections[this.formstate]);


                var progressbar = document.querySelector('#progresswizard');
                var currsectionprogress = currsection.getAttribute('data-progress');

                progressbar.style.width = currsectionprogress;
                currsection.style.display = "block";
                inactiveSecta.style.display = "none";
                inactiveSectb.style.display = "none";


                if (this.formstate === 0) {
                    document.getElementById(this.prevbtn).style.display = "none";
                } else {
                    document.getElementById(this.prevbtn).style.display = "inline-block";
                }

                currcircle.classList.add("activecirculo");
                this.setInactiveCircles();


                if (this.formstate === 2) {
                    document.querySelector("#nextbtn").style.display = "none";
                    document.querySelector("#submitForm").style.display = "inline-block";
                } else {
                    document.querySelector("#nextbtn").style.display = "inline-block";
                    document.querySelector("#submitForm").style.display = "none";
                }

                this.checkInput();
            },
            nextSection: function() {
                this.validateInput();
                if (this.emptyInputs === 0) {
                    if (this.formstate < 2) {

                        this.formstate++;
                        this.setInactiveSections();
                        wizard.initiateForm();
                    }
                }

            },
            prevSection: function() {
                if (this.emptyInputs === 0) {
                    if (this.formstate > 0) {
                        this.formstate--;
                        this.setInactiveSections();
                        wizard.initiateForm();
                    }
                }
            },
            validateInput: function() {

                var currsection = this.formsections[this.formstate];


                var inputfields = document.querySelectorAll(currsection + " input");
                for (var i = 0; i < inputfields.length; i++) {
                    if (inputfields[i].value.length === 0) {
                        inputfields[i].classList.add("is-invalid");
                        this.emptyInputs++;
                    }
                }


            },
            checkInput: function() {

                var currsection = this.formsections[this.formstate];
                var inputfields = document.querySelectorAll(currsection + " input");
                for (var i = 0; i < inputfields.length; i++) {
                    var currElement = inputfields[i];
                    currElement.addEventListener('focusout', inputValidation, false);
                }

                function inputValidation(event) {
                    console.log(event.target.id);

                    var currentInput = document.getElementById(event.target.id);

                    if (currentInput.value.length > 3) {
                        currentInput.classList.remove("is-invalid");
                        if (wizard.emptyInputs > 0) {
                            wizard.emptyInputs--;
                        }
                    }
                    console.log(wizard.emptyInputs);
                }
            }
        };


        wizard.initiateForm();

        document.getElementById(wizard.nextbtn).addEventListener("click", function() {
            wizard.nextSection();
        });
        document.getElementById(wizard.prevbtn).addEventListener("click", function() {
            wizard.prevSection();
        });




    })();
</script>