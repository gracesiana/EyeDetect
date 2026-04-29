<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mulai Deteksi</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f8ff;
        }

        .deteksi-page {
            min-height: 100vh;
            padding: 35px 45px;
        }

        .deteksi-header {
            text-align: center;
            margin-bottom: 25px;
        }

        .deteksi-header h1 {
            color: #061b49;
            font-size: 42px;
            margin: 0;
            font-weight: 900;
        }

        .deteksi-header p {
            color: #5d6f95;
            font-size: 15px;
        }

        .upload-card {
            max-width: 620px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 16px;
            text-align: center;
            box-shadow: 0 8px 25px rgba(15, 42, 95, 0.12);
        }

        .upload-icon {
            width: 55px;
            height: 55px;
            background: #e8f1ff;
            color: #1167df;
            border-radius: 50%;
            margin: 0 auto 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
        }

        .upload-card h2 {
            color: #061b49;
            margin-bottom: 8px;
        }

        .upload-card p {
            color: #6d7d9f;
            font-size: 14px;
        }

        .dropzone {
            border: 2px dashed #1167df;
            background: #f8fbff;
            border-radius: 14px;
            padding: 35px 20px;
            margin: 20px 0;
            cursor: pointer;
        }

        .dropzone:hover {
            background: #eef5ff;
        }

        .retina-icon {
            font-size: 70px;
            margin-bottom: 10px;
        }

        .dropzone strong {
            color: #52668e;
            font-size: 14px;
        }

        .dropzone small {
            color: #8a9abb;
            display: block;
            margin-top: 5px;
        }

        .format {
            font-size: 13px;
            color: #6d7d9f;
        }

        .btn-upload {
            background: #1167df;
            color: white;
            border: none;
            padding: 11px 38px;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
        }

        .btn-analyze {
            display: block;
            margin: 18px auto 0;
            background: #071c4d;
            color: white;
            border: none;
            padding: 14px 55px;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
        }

        .result-grid {
            max-width: 900px;
            margin: 28px auto 0;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;
        }

        .box {
            background: white;
            border-radius: 14px;
            border: 1px solid #d8e6fb;
            box-shadow: 0 6px 20px rgba(15, 42, 95, 0.08);
            overflow: hidden;
        }

        .box-title {
            padding: 16px 20px;
            border-bottom: 1px solid #e7eefb;
            color: #115ecf;
            font-weight: bold;
        }

        .preview {
            margin: 18px;
            height: 190px;
            border: 2px dashed #d4e2f8;
            border-radius: 12px;
            background: #f8fbff;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #8394b5;
            text-align: center;
            overflow: hidden;
        }

        .preview img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            display: none;
        }

        .result-row {
            display: flex;
            justify-content: space-between;
            padding: 14px 20px;
            border-bottom: 1px solid #edf2fb;
            color: #516386;
            font-size: 14px;
        }

        .result-row span:first-child {
            font-weight: bold;
        }

        .badge {
            background: #edf4ff;
            color: #7890b6;
            padding: 6px 12px;
            border-radius: 8px;
            font-size: 12px;
            font-weight: bold;
        }

        .note {
            margin: 14px 20px 18px;
            background: #eef5ff;
            color: #3167b8;
            padding: 12px;
            border-radius: 8px;
            font-size: 12px;
            font-weight: bold;
        }

        .guide-card {
            max-width: 900px;
            margin: 20px auto 0;
            background: #f8fbff;
            border: 1px solid #cfe0fa;
            border-radius: 14px;
            padding: 20px 25px;
        }

        .guide-card h3 {
            margin-top: 0;
            color: #115ecf;
        }

        .guide-steps {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
        }

        .guide-step {
            display: flex;
            gap: 12px;
            font-size: 13px;
            color: #1c3158;
        }

        .number {
            width: 25px;
            height: 25px;
            border-radius: 50%;
            background: #1167df;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            flex-shrink: 0;
        }

        @media (max-width: 800px) {
            .result-grid,
            .guide-steps {
                grid-template-columns: 1fr;
            }

            .deteksi-header h1 {
                font-size: 32px;
            }

            .deteksi-page {
                padding: 25px 18px;
            }
        }
    </style>
</head>

<body>
    <div class="deteksi-page">
        <div class="deteksi-header">
            <h1>Mulai Deteksi</h1>
            <p>Unggah citra retina untuk memulai proses analisis penyakit mata.</p>
        </div>

        <div class="upload-card">
            <div class="upload-icon">☁</div>

            <h2>Upload Gambar Retina</h2>
            <p>Unggah gambar retina dengan kualitas yang jelas agar analisis lebih akurat.</p>

            <label class="dropzone" for="gambarRetina">
                <div class="retina-icon">👁️</div>
                <strong>Seret & lepas gambar di sini</strong>
                <small>atau klik tombol di bawah</small>
            </label>

            <input type="file" id="gambarRetina" accept="image/png, image/jpg, image/jpeg" hidden>

            <div class="format">Format: JPG, JPEG, PNG</div>
            <br>

            <button class="btn-upload" onclick="document.getElementById('gambarRetina').click()">
                Pilih Gambar
            </button>
        </div>

        <button class="btn-analyze" onclick="analisisGambar()">
            Analisis Sekarang
        </button>

        <div class="result-grid">
            <div class="box">
                <div class="box-title">Pratinjau Gambar</div>

                <div class="preview">
                    <div id="previewText">
                        <div style="font-size: 45px;">🖼️</div>
                        Gambar yang Anda unggah<br>akan ditampilkan di sini.
                    </div>

                    <img id="previewImage" alt="Preview Gambar">
                </div>
            </div>

            <div class="box">
                <div class="box-title">Hasil Deteksi</div>

                <div class="result-row">
                    <span>Nama File</span>
                    <span id="namaFile">-</span>
                </div>

                <div class="result-row">
                    <span>Status Prediksi</span>
                    <span id="statusPrediksi">-</span>
                </div>

                <div class="result-row">
                    <span>Tingkat Kepercayaan</span>
                    <span id="confidence">-</span>
                </div>

                <div class="result-row">
                    <span>Visualisasi Explainable AI</span>
                    <span class="badge">Belum tersedia</span>
                </div>

                <div class="note">
                    Hasil akan ditampilkan setelah proses analisis selesai.
                </div>
            </div>
        </div>

        <div class="guide-card">
            <h3>Cara Menggunakan</h3>

            <div class="guide-steps">
                <div class="guide-step">
                    <div class="number">1</div>
                    <div>
                        <strong>Upload Gambar</strong><br>
                        Pilih dan unggah gambar retina.
                    </div>
                </div>

                <div class="guide-step">
                    <div class="number">2</div>
                    <div>
                        <strong>Klik Analisis</strong><br>
                        Tekan tombol Analisis Sekarang.
                    </div>
                </div>

                <div class="guide-step">
                    <div class="number">3</div>
                    <div>
                        <strong>Lihat Hasil Deteksi</strong><br>
                        Periksa hasil prediksi dari AI.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const inputGambar = document.getElementById("gambarRetina");
        const previewImage = document.getElementById("previewImage");
        const previewText = document.getElementById("previewText");
        const namaFile = document.getElementById("namaFile");
        const statusPrediksi = document.getElementById("statusPrediksi");
        const confidence = document.getElementById("confidence");

        inputGambar.addEventListener("change", function () {
            const file = this.files[0];

            if (!file) return;

            namaFile.innerText = file.name;

            previewImage.src = URL.createObjectURL(file);
            previewImage.style.display = "block";
            previewText.style.display = "none";

            statusPrediksi.innerText = "-";
            confidence.innerText = "-";
        });

        function analisisGambar() {
            if (!inputGambar.files.length) {
                alert("Silakan pilih gambar retina terlebih dahulu.");
                return;
            }

            statusPrediksi.innerText = "Normal";
            confidence.innerText = "95%";
        }
    </script>
</body>
</html>