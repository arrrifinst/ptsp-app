@extends('layouts.web')
@section('content')
<div class="container">

    <section class="service" id="service">

        <h1 class="heading"> <span> Layanan </span> Kami </h1>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-star-and-crescent"></i>
                <h3>Bimas Islam</h3>
                <p>Permohonan Narasumber, Pemateri, Penceramah, Undangan</p>
                <button type="button" class="prime btn btn-sm" data-bs-toggle="modal" data-bs-target="#syaratModal1">
                    Cek Persyaratan
                </button>
            </div>

            <div class="box">
                <i class="fas fa-star-and-crescent"></i>
                <h3>Bimas Islam</h3>
                <p>Permohonan Rohaniwan</p>
                <button type="button" class="prime btn btn-sm" data-bs-toggle="modal" data-bs-target="#syaratModal2">
                    Cek Persyaratan
                </button>
            </div>

            <div class="box">
                <i class="fas fa-star-and-crescent"></i>
                <h3>Bimas Islam</h3>
                <p>Permohonan Pembaca Doa</p>
                <button type="button" class="prime btn btn-sm" data-bs-toggle="modal" data-bs-target="#syaratModal3">
                    Cek Persyaratan
                </button>
            </div>

            <div class="box">
                <i class="fas fa-star-and-crescent"></i>
                <h3>Bimas Islam</h3>
                <p>Permohonan Pengukuran & Kalibrasi Arah Kiblat</p>
                <button type="button" class="prime btn btn-sm" data-bs-toggle="modal" data-bs-target="#syaratModal4">
                    Cek Persyaratan
                </button>
            </div>

            <div class="box">
                <i class="fas fa-star-and-crescent"></i>
                <h3>Bimas Islam</h3>
                <p>Permohonan Rekomendasi / Surat Keterangan</p>
                <button type="button" class="prime btn btn-sm" data-bs-toggle="modal" data-bs-target="#syaratModal5">
                    Cek Persyaratan
                </button>
            </div>

        </div>

    </section>

</div>

<!-- Modal 1 -->
<div class="modal fade" id="syaratModal1" tabindex="-1" aria-labelledby="syaratModal1Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        Permohonan Narasumber/Pemateri/Penceramah/Undangan
      </div>
      <div class="modal-body">
        <ul class="list-group">
            <li class="list-group-item">Surat permohonan dari instansi/lembaga/swasta</li>
            <li class="list-group-item">Narahubung aktif</li>
            <li class="list-group-item"><strong>Pembatalan/penundaan jadwal harus disampaikan maksimal H-1</strong></li>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal 2 -->
<div class="modal fade" id="syaratModal2" tabindex="-1" aria-labelledby="syaratModal2Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        Permohonan Rohaniwan
      </div>
      <div class="modal-body">
        <ul class="list-group">
            <li class="list-group-item">Surat permohonan dari instansi/lembaga/swasta</li>
            <li class="list-group-item">Narahubung aktif</li>
            <li class="list-group-item"><strong>Pembatalan/penundaan jadwal harus disampaikan maksimal H-1</strong></li>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal 3 -->
<div class="modal fade" id="syaratModal3" tabindex="-1" aria-labelledby="syaratModal3Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        Permohonan Pembaca Doa
      </div>
      <div class="modal-body">
        <ul class="list-group">
            <li class="list-group-item">Surat permohonan dari instansi/lembaga/swasta</li>
            <li class="list-group-item">Narahubung aktif</li>
            <li class="list-group-item"><strong>Pembatalan/penundaan jadwal harus disampaikan maksimal H-1</strong></li>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal 4 -->
<div class="modal fade" id="syaratModal4" tabindex="-1" aria-labelledby="syaratModal4Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        Permohonan Pengukuran & kalibrasi Arah Kiblat
      </div>
      <div class="modal-body">
        <ul class="list-group">
            <li class="list-group-item">Surat permohonan dari yayasan/pondok pesantren/pengurus masjid/musholla</li>
            <li class="list-group-item">Narahubung aktif</li>
            <li class="list-group-item">Denah lokasi masjid/musholla yang jelas</li>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal 5 -->
<div class="modal fade" id="syaratModal5" tabindex="-1" aria-labelledby="syaratModal5Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        Permohonan Rekomendasi/Surat Keterangan
      </div>
      <div class="modal-body">
        <ul class="list-group">
            <li class="list-group-item">Rekomendasi/Surat keterangan</li>
            <li class="list-group-item">Narahubung aktif</li>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

@endsection