@extends('template')

@section('content')

{{-- Menambahkan style khusus untuk kartu proyek yang bisa diklik --}}
<style>
    .project-card-link {
        display: block;
        text-decoration: none;
        color: inherit;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .project-card-link:hover {
        text-decoration: none;
        color: inherit;
        transform: translateY(-5px);
        box-shadow: 0 12px 28px rgba(99, 102, 241, 0.2);
    }
    /* Mengatur border pada kartu di dalam link */
    .project-card-link .card {
        border: 1px solid rgba(255, 255, 255, 0.8) !important;
    }
</style>

{{-- Panel utama kembali menggunakan style default dari template --}}
<div class="content-panel">
    <header class="py-4" style="background-color: transparent;">
        <div class="container px-4 px-lg-5">
            <div class="text-center text-dark">
                <h1 class="font-weight-bold">Portofolio Pemrograman Web</h1>
                <p class="lead text-muted mb-0">Seluruh project dari pertemuan 1 - ETS</p>
            </div>
        </div>
    </header>

    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-4">
            {{-- Kelas gutter (gx, gy) dihapus dan diganti dengan margin pada kolom --}}
            <div class="row justify-content-center">

                {{-- PERUBAHAN: Menambahkan mb-5 untuk margin bawah (jarak vertikal) --}}
                <div class="col-lg-4 col-md-6 mb-5">
                    <a href="pertama" class="project-card-link">
                        <div class="card h-100" style="background: rgba(255, 255, 255, 0.4); -webkit-backdrop-filter: blur(15px); backdrop-filter: blur(15px); border-radius: 1.25rem; box-shadow: 0 8px 24px rgba(0, 0, 0, 0.05);">
                            <img class="card-img-top" src="/img/pertama.png" alt="Pertemuan Pertama" style="border-top-left-radius: 1.25rem; border-top-right-radius: 1.25rem;" />
                            <div class="card-body p-4">
                                <div class="text-center text-dark">
                                    <h5 class="font-weight-bold">Pertemuan 1</h5>
                                    Blog ITS
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 mb-5">
                     <a href="video" class="project-card-link">
                        <div class="card h-100" style="background: rgba(255, 255, 255, 0.4); -webkit-backdrop-filter: blur(15px); backdrop-filter: blur(15px); border-radius: 1.25rem; box-shadow: 0 8px 24px rgba(0, 0, 0, 0.05);">
                            <img class="card-img-top" src="img/video.png" alt="..." style="border-top-left-radius: 1.25rem; border-top-right-radius: 1.25rem;" />
                            <div class="card-body p-4">
                                <div class="text-center text-dark">
                                    <h5 class="font-weight-bold">Tugas Video 1&2</h5>
                                    CSS Layout & Tooltips
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 mb-5">
                    <a href="bootstrap" class="project-card-link">
                        <div class="card h-100" style="background: rgba(255, 255, 255, 0.4); -webkit-backdrop-filter: blur(15px); backdrop-filter: blur(15px); border-radius: 1.25rem; box-shadow: 0 8px 24px rgba(0, 0, 0, 0.05);">
                            <img class="card-img-top" src="img/bootstrap.png" alt="..." style="border-top-left-radius: 1.25rem; border-top-right-radius: 1.25rem;" />
                            <div class="card-body p-4">
                                <div class="text-center text-dark">
                                    <h5 class="font-weight-bold">Pertemuan 2</h5>
                                    Latihan bootstrap
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 mb-5">
                    <a href="layout" class="project-card-link">
                        <div class="card h-100" style="background: rgba(255, 255, 255, 0.4); -webkit-backdrop-filter: blur(15px); backdrop-filter: blur(15px); border-radius: 1.25rem; box-shadow: 0 8px 24px rgba(0, 0, 0, 0.05);">
                            <img class="card-img-top" src="img/layout.png" alt="..." style="border-top-left-radius: 1.25rem; border-top-right-radius: 1.25rem;" />
                            <div class="card-body p-4">
                                <div class="text-center text-dark">
                                    <h5 class="font-weight-bold">Tugas Layout</h5>
                                    Web ITS TV Kode 7
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 mb-5">
                    <a href="linktree" class="project-card-link">
                        <div class="card h-100" style="background: rgba(255, 255, 255, 0.4); -webkit-backdrop-filter: blur(15px); backdrop-filter: blur(15px); border-radius: 1.25rem; box-shadow: 0 8px 24px rgba(0, 0, 0, 0.05);">
                            <img class="card-img-top" src="img/linktree.png" alt="..." style="border-top-left-radius: 1.25rem; border-top-right-radius: 1.25rem;" />
                            <div class="card-body p-4">
                                <div class="text-center text-dark">
                                    <h5 class="font-weight-bold">Tugas Linktree</h5>
                                    Mitski Linktree
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 mb-5">
                    <a href="javascript" class="project-card-link">
                        <div class="card h-100" style="background: rgba(255, 255, 255, 0.4); -webkit-backdrop-filter: blur(15px); backdrop-filter: blur(15px); border-radius: 1.25rem; box-shadow: 0 8px 24px rgba(0, 0, 0, 0.05);">
                            <img class="card-img-top" src="img/javascript.png" alt="..." style="border-top-left-radius: 1.25rem; border-top-right-radius: 1.25rem;" />
                            <div class="card-body p-4">
                                <div class="text-center text-dark">
                                    <h5 class="font-weight-bold">Pertemuan 7</h5>
                                    Belajar Javascript
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 mb-5">
                    <a href="danantara" class="project-card-link">
                        <div class="card h-100" style="background: rgba(255, 255, 255, 0.4); -webkit-backdrop-filter: blur(15px); backdrop-filter: blur(15px); border-radius: 1.25rem; box-shadow: 0 8px 24px rgba(0, 0, 0, 0.05);">
                            <img class="card-img-top" src="img/danantara.png" alt="..." style="border-top-left-radius: 1.25rem; border-top-right-radius: 1.25rem;" />
                            <div class="card-body p-4">
                                <div class="text-center text-dark">
                                    <h5 class="font-weight-bold">Tugas Remake</h5>
                                    Remake Website Danantara
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 mb-5">
                    <a href="ets" class="project-card-link">
                        <div class="card h-100" style="background: rgba(255, 255, 255, 0.4); -webkit-backdrop-filter: blur(15px); backdrop-filter: blur(15px); border-radius: 1.25rem; box-shadow: 0 8px 24px rgba(0, 0, 0, 0.05);">
                            <img class="card-img-top" src="img/ets.png" alt="..." style="border-top-left-radius: 1.25rem; border-top-right-radius: 1.25rem;" />
                            <div class="card-body p-4">
                                <div class="text-center text-dark">
                                    <h5 class="font-weight-bold">ETS</h5>
                                    Remake Website Polri
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>
</div>
@endsection
