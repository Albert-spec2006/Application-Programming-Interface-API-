@extends('layouts.master')

@section('title', 'Dashboard Admin — DIKS HAIR CUT')

@section('content')
<div class="diks-admin">
  <aside class="diks-admin-sidebar">
    <a class="diks-admin-brand" href="{{ route('frontend') }}"><span>D</span><b>DIKS <em>HAIR CUT</em><small>BARBER SHOP ADMIN</small></b></a>
    <p class="diks-admin-label">MENU UTAMA</p>
    <a class="diks-admin-nav is-active" href="{{ route('admin') }}"><span>▦</span> Ringkasan</a>
    <a class="diks-admin-nav" href="{{ route('frontend') }}#layanan"><span>✂</span> Lihat layanan</a>
    <div class="diks-admin-sidebar-bottom">
      <a class="diks-admin-nav" href="{{ route('frontend') }}"><span>↗</span> Lihat website</a>
      <div class="diks-admin-user"><span class="diks-admin-avatar">D</span><span><b>Admin DIKS</b><small>Panel pengelola</small></span></div>
    </div>
  </aside>

  <main class="diks-admin-main">
    <header class="diks-admin-topbar">
      <div><span class="diks-admin-breadcrumb">DIKS HAIR CUT /</span> Ringkasan</div>
      <a href="{{ route('frontend') }}">Kunjungi website <span>↗</span></a>
    </header>
    <div class="diks-admin-content">
      <div class="diks-admin-welcome">
        <div><p class="diks-kicker">PANEL PENGELOLA</p><h1>Selamat datang, <em>Admin.</em></h1><p>Kelola tampilan dan informasi DIKS HAIR CUT dari sini.</p></div>
        <span class="diks-admin-status"><i></i> Sesi aktif</span>
      </div>

      <section class="diks-admin-stats" aria-label="Ringkasan data">
        <article><span>LAYANAN UNGGULAN</span><b>03</b><small>Potongan &amp; grooming</small><i>✂</i></article>
        <article><span>RESERVASI HARI INI</span><b>—</b><small>Belum ada data reservasi</small><i>◷</i></article>
        <article><span>ULASAN PELANGGAN</span><b>—</b><small>Data akan tampil di sini</small><i>☆</i></article>
      </section>

      <section class="diks-admin-lower">
        <article class="diks-admin-panel">
          <div class="diks-admin-panel-heading"><div><p class="diks-kicker">AKSES CEPAT</p><h2>Website barbershop</h2></div><span>✳</span></div>
          <a class="diks-admin-action" href="{{ route('frontend') }}#layanan"><span class="diks-admin-action-icon">✂</span><span><b>Pratinjau layanan</b><small>Lihat layanan DIKS HAIR CUT</small></span><i>↗</i></a>
          <a class="diks-admin-action" href="{{ route('frontend') }}#layanan"><span class="diks-admin-action-icon">◎</span><span><b>Pratinjau website</b><small>Lihat tampilan DIKS HAIR CUT</small></span><i>↗</i></a>
        </article>
        <article class="diks-admin-note">
          <span class="diks-admin-note-icon">✳</span><p class="diks-kicker">DIKS HAIR CUT</p><h2>Rapi itu soal karakter.</h2><p>Jaga setiap detail tetap konsisten — dari layanan sampai pengalaman pelanggan.</p><a href="{{ route('frontend') }}">Buka website <span>↗</span></a>
        </article>
      </section>

      <footer class="diks-admin-footer">© {{ date('Y') }} DIKS HAIR CUT <span>PANEL PENGELOLA</span></footer>
    </div>
  </main>
</div>
@endsection
