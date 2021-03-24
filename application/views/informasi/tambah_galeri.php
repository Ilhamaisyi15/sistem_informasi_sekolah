<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="text-center font-weight-bolder" class="m-0">Galeri SMP Pangeran Diponegoro</h1> <br>
                </div>
                <div class="col-sm-6">
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card card-dark ">
                    </div>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <script src="<?= base_url("asset/ckeditor/"); ?>ckeditor.js"></script>
                            <label for="exampleFormControlTextarea1"></label>
                            <textarea class="form-control ckeditor" name="isi" id="exampleFormControlTextarea1" rows="6"></textarea>
                            <input class="form-control mt-3 " type="text" name="penulis" placeholder="Penulis">
                            <div class="form-group">
                                <br>
                                <label for="alamat" class="">Foto</label>
                                <input class="form-control" type="file" name="foto_galeri" placeholder="Foto Galeri">
                                <?= form_error('alamat', '<small class="text-danger pl-3"', '</small>'); ?>
                            </div>

                        </div>
                        <button name="submit" type="submit" class="btn btn-dark">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>


<!-- public function berita()
{
$this->load->model('Model_informasi');
$berita = $this->Model_informasi->berita();
$data = [
'judul' => "Berita",
'berita' => $berita
];

$this->load->view('template/header', $data);
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
$this->load->view('informasi/berita');
$this->load->view('template/footer');
}

public function edit_berita($id_berita)
{
$berita = $this->Model_informasi->getidberita($id_berita);
$this->form_validation->set_rules('judul', 'judul', 'trim|required');
$this->form_validation->set_rules('isi', 'isi', 'trim|required');
$this->form_validation->set_rules('penulis', 'penulis', 'trim|required');
$this->form_validation->set_rules('status', 'status', 'trim|required');
if ($this->form_validation->run() == false) {
$data = [
'judul' => "Edit Berita",
'berita' => $berita,
'penulis' => "penulis",
'isi' => "isi",
'isi' => "ringkas",
'status' => "status"
];
$this->load->view('template/header', $data);
$this->load->view('template/topbar',);
$this->load->view('template/sidebar',);
$this->load->view('informasi/edit_berita', $data);
$this->load->view('template/footer',);
} else {
$judul = $this->input->post('judul');
$penulis = $this->input->post('penulis');
$id = $this->input->post('id');
$isi = $this->input->post('isi');
$status = $this->input->post('status');

$this->db->set('ringkas', $isi);
$this->db->set('judul', $judul);
$this->db->set('penulis', $penulis);
$this->db->set('isi', $isi);
$this->db->set('status', $status);
$this->db->where('id_berita', $id);
$this->db->update('tb_berita');
redirect('Informasi/berita');
}
}

public function hapus_berita($id_berita)
{
$this->db->delete('tb_berita', ['id_berita' => $id_berita]);
redirect('Informasi/berita');
}

public function tambah_berita()
{

$berita['judul'] = "Tambah Berita";
$this->form_validation->set_rules('judul', 'judul', 'required');
$this->form_validation->set_rules('isi', 'isi', 'required');
$this->form_validation->set_rules('penulis', 'penulis', 'required');
$this->form_validation->set_rules('status', 'status', 'required');

if ($this->form_validation->run() == false) {

$this->load->view('template/header', $berita);
$this->load->view('template/topbar', $berita);
$this->load->view('template/sidebar', $berita);
$this->load->view('informasi/tambah_berita', $berita);
$this->load->view('template/footer', $berita);
} else {

$judul = $this->input->post('judul');
$isi = $this->input->post('isi');
$penulis = $this->input->post('penulis');
$status = $this->input->post('status');

// Uploag Gamabar
$fotoBerita = $_FILES['foto_berita']['name'];
if ($fotoBerita) {

// Format Gambar
$config['allowed_types'] = 'gif|jpg|png|jpeg';
// Ukuran Gambar Maksimal 5 MB
$config['max_size'] = '5000';
// Tujuan Upload Gmbar
$config['upload_path'] = './asset/gambar/berita/';

$this->load->library('upload', $config);

if ($this->upload->do_upload('foto_berita')) {
$foto_baru = $this->upload->data('file_name');
} else {
echo $this->upload->display_errors();;
}
}

if (empty($foto_baru)) $foto_baru = "default.jpeg";

$berita = [
'tanggal' => date('Y-m-d'),
'judul' => $judul,
'isi' => $isi,
'ringkas' => $isi,
'penulis' => $penulis,
'status' => $status,
'foto' => $foto_baru

];

$this->db->insert('tb_berita', $berita);
redirect('Informasi/berita');
}
}

public function berita()
    {
        $this->db->order_by('id_berita', 'DESC');
        return $this->db->get('tb_berita')->result_array();
    }
    public function getidberita($id_berita)
    {
        return $this->db->get_where('tb_berita', ['id_berita ' => $id_berita])->row_array();
    }

    public function tambah_berita()
    {
        $this->db->order_by('id_berita', 'DESC');
        $judul = $this->input->post('judul', true);
        $isi = $this->input->post('isi', true);
        $penulis = $this->input->post('penulis', true);
        $status = $this->input->post('status', true);

        $berita = array(
            'judul' => $judul,
            'isi' => $isi,
            'penulis' => $penulis,
            'status' => $status
        );

        $this->db->insert('tb_berita', $berita);
    } -->