@extends('layouts.frontend-metronic-template')

@section('content')

<style>
    h2 {
        text-align: center;
        color: #333;
        margin-bottom: 30px;
    }
    .timeline {
        position: relative;
    }
    .timeline-item {
        margin-bottom: 40px;
    }
    .timeline-date {
        position: absolute;
        top: 0;
        left: 0;
        background-color: #333;
        color: #fff;
        padding: 8px 12px;
        border-radius: 4px;
    }
    .timeline-content {
        background-color: #f9f9f9;
        padding: 20px;
        border-radius: 4px;
        position: relative;
    }
    .timeline-content::before {
        content: "";
        position: absolute;
        top: 20px;
        left: -10px;
        border: 10px solid transparent;
        border-right-color: #f9f9f9;
    }
    .team-member {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }
    .team-member-item {
        flex: 1 1 calc(25% - 20px);
        margin-bottom: 40px;
        text-align: center;
    }
    .team-member-img {
        border-radius: 50%;
        width: 150px;
        height: 150px;
        margin-bottom: 10px;
        object-fit: cover;
    }
    .team-member-name {
        font-weight: bold;
        color: #333;
        margin-bottom: 5px;
    }
    .team-member-position {
        color: #777;
    }
    .social-icons {
        margin-top: 10px;
    }
    .social-icons a {
        display: inline-block;
        width: 30px;
        height: 30px;
        background-color: #333;
        color: #fff;
        border-radius: 50%;
        font-size: 20px;
        line-height: 30px;
        margin-right: 5px;
        text-align: center;
        text-decoration: none;
    }
</style>

<div class="wrapper d-flex flex-column flex-row-fluid mt-5 mt-lg-10" id="kt_wrapper">
    <h2>About Us</h2>
    <p>Zonainformatika adalah platform belajar teknologi dan informatika secara online yang baru saja berdiri. Dikembangkan khusus untuk membantu individu memperoleh pengetahuan dan keterampilan di bidang teknologi informasi agar dapat bersaing di era digital saat ini.</p>
    <p>Dengan komitmen untuk memberikan akses pendidikan yang mudah dan berkualitas, Zonainformatika bertujuan untuk menjadi mitra pembelajaran yang terpercaya bagi mereka yang ingin mengembangkan karir mereka di dunia teknologi. Kami menyediakan berbagai kursus dan materi pembelajaran yang dirancang untuk memenuhi kebutuhan belajar beragam, mulai dari pemula hingga tingkat lanjutan.</p>
    <p>Dalam beberapa tahun mendatang, Zonainformatika bertekad untuk berkembang menjadi salah satu platform belajar terkemuka di bidang teknologi dan informatika di Indonesia. Dengan dukungan komunitas yang kuat dan komitmen untuk terus meningkatkan kualitas layanan, kami yakin dapat menjadi mitra yang berharga bagi generasi muda Indonesia dalam meraih kesuksesan di era digital.</p>
    
    <h2 class="d-none">Timeline</h2>
    <div class="d-none timeline">
        <div class="timeline-item">
            <div class="timeline-content">
                <div class="timeline-date">2020</div>
                <hr>
                <h3>Kami memulai segala sesuatunya</h3>
                <p>Memulai perjalanan kami dengan menyelenggarakan pelatihan online yang membahas tentang pemrograman dan teknologi.</p>
            </div>
        </div>
        <div class="timeline-item">
            <div class="timeline-content">
                <div class="timeline-date">2021</div>
                <hr>
                <h3>Lahirnya Zonainformatika Developer School</h3>
                <p>Meluncurkan program Coding Bootcamp, Zonainformatika. Kami juga mulai menyelenggarakan event bulanan untuk pelatihan bahasa pemrograman.</p>
            </div>
        </div>
        <div class="timeline-item">
            <div class="timeline-content">
                <div class="timeline-date">2024</div>
                <hr>
                <h3>Peluncuran Kelas Online Lifetime</h3>
                <p>Meluncurkan program Kelas Online Lifetime dan menjadi salah satu online course yang konsisten memberikan pembelajaran dalam bidang informatika di Indonesia.</p>
            </div>
        </div>
    </div>

    <h2>Our Team</h2>
    <div class="team-member">
        <div class="team-member-item">
            <img src="{{ asset('assets/image/suryo.jpg') }}" alt="Suryo Atmojo" class="team-member-img">
            <div class="team-member-name">Suryo Atmojo</div>
            <div class="team-member-position">CEO</div>
            <div class="social-icons">
                <a href="#"><i class="fab fa-github"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
        <div class="team-member-item">
            <img src="{{ asset('assets/image/yogi.jpg') }}" alt="Yogi Pradhokot" class="team-member-img">
            <div class="team-member-name">Yogi Pradhokot</div>
            <div class="team-member-position">Frontend Dev</div>
            <div class="social-icons">
                <a href="#"><i class="fab fa-github"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
        <div class="team-member-item">
            <img src="{{ asset('assets/image/danu.jpg') }}" alt="Danu" class="team-member-img">
            <div class="team-member-name">Danu</div>
            <div class="team-member-position">Backend Dev</div>
            <div class="social-icons">
                <a href="#"><i class="fab fa-github"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
        <div class="team-member-item">
            <img src="{{ asset('assets/image/andrik.jpg') }}" alt="Andrik" class="team-member-img">
            <div class="team-member-name">Andrik</div>
            <div class="team-member-position">Backend Dev</div>
            <div class="social-icons">
                <a href="#"><i class="fab fa-github"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
        <div class="team-member-item">
            <img src="{{ asset('assets/image/alfin.jpg') }}" alt="Alvin" class="team-member-img">
            <div class="team-member-name">Alvin</div>
            <div class="team-member-position">Frontend Dev</div>
            <div class="social-icons">
                <a href="#"><i class="fab fa-github"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
        <div class="team-member-item">
            <img src="{{ asset('assets/image/eko.jpg') }}" alt="Eko Budi" class="team-member-img">
            <div class="team-member-name">Eko Budi</div>
            <div class="team-member-position">Content Creator</div>
            <div class="social-icons">
                <a href="#"><i class="fab fa-github"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
        <div class="team-member-item">
            <img src="{{ asset('assets/image/ali.jpg') }}" alt="Ali Masud" class="team-member-img">
            <div class="team-member-name">Ali Masud</div>
            <div class="team-member-position">Mobile Dev</div>
            <div class="social-icons">
                <a href="#"><i class="fab fa-github"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
    </div>
</div>
@endsection
