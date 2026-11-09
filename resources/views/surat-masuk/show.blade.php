
@extends('layouts.app')

@section('title', 'Detail Surat Masuk')

@section('content')

    <div class="detail-page">

        <h1>Detail Surat Masuk</h1>

        @if ($surat)

            <div class="detail-card">

                <div class="detail-heading">
                    <h2>Informasi Surat</h2>
                    <span class="detail-status">Surat Masuk</span>
                </div>

                <div class="detail-content">

                    <div class="detail-row">
                        <span>Nomor Surat</span>
                        <strong>{{ $surat->nomor_surat }}</strong>
                    </div>

                    <div class="detail-row">
                        <span>Tanggal</span>
                        <strong>{{ $surat->tanggal }}</strong>
                    </div>

                    <div class="detail-row">
                        <span>Pengirim</span>
                        <strong>{{ $surat->pengirim }}</strong>
                    </div>

                    <div class="detail-row">
                        <span>Perihal</span>
                        <strong>{{ $surat['perihal'] }}</strong>
                    </div>

                    <div class="detail-row">
                        <span>Keterangan</span>
                        <strong>{{ $surat->keterangan }}</strong>
                    </div>

                </div>

            </div>

        @else

            <div class="detail-card">
                <p>Surat tidak ditemukan.</p>
            </div>

        @endif

        <div class="detail-actions">
            <a href="{{ route('surat-masuk.index') }}" class="btn-kembali">
                ← Kembali
            </a>
        </div>

    </div>

@endsection
