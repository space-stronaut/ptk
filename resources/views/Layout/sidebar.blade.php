<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('adminLTE') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"> <strong>E-Kinerja N5</strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('adminLTE') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth()->user()->name }}</a>
          <span class="badge badge-success text-uppercase">{{ Auth()->user()->role }}</span>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">MENU UTAMA</li>
          <li class="nav-item">
            <a href="{{ url('/dashboard') }}" class="nav-link">
              <i class="fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            @if (Auth()->user()->role == 'admin')
            <a href="#" class="nav-link">
              <i class="fas fa-server"></i>
              <p>
                Data Master
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            @endif
            <ul class="nav nav-treeview">
              @if (Auth()->user()->role == 'admin')
              <li class="nav-item">
                <a href="{{ route('datalevel.index') }}" class="nav-link">
                  <i class="fas fa-angle-right"></i>
                  <p>Data Level</p>
                </a>
              </li>
              @endif
              <li class="nav-item">
                <a href="{{ route('datajurusan.index') }}" class="nav-link">
                  <i class="fas fa-angle-right"></i>
                  <p>Data Jurusan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('datakelas.index') }}" class="nav-link">
                  <i class="fas fa-angle-right"></i>
                  <p>Data Kelas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('datamapel.index') }}" class="nav-link">
                  <i class="fas fa-angle-right"></i>
                  <p>Data Mapel</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            @if (Auth()->user()->role == 'admin')
            <a href="#" class="nav-link">
              <i class="fas fa-user-graduate"></i>
              <p>
                Data PTK
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            @endif
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('datapendidik.index') }}" class="nav-link">
                  <i class="fas fa-angle-right"></i>
                  <p>Data Pendidik</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('datatendik.index') }}" class="nav-link">
                  <i class="fas fa-angle-right"></i>
                  <p>Data Tendik</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-edit"></i>
              <p>
                Kegiatan Pendidik</p>
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('kegiatanpendidik.index') }}" class="nav-link">
                  <i class="fas fa-angle-right"></i>
                  <p>Kegiatan Utama</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('kegiatantambahan.index') }}" class="nav-link">
                  <i class="fas fa-angle-right"></i>
                  <p>Kegiatan Tambahan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-edit"></i>
              <p>
                Kegiatan Tendik
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('tendikutama.index') }}" class="nav-link">
                  <i class="fas fa-angle-right"></i>
                  <p>Kegiatan Utama</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('tendiktambahan.index') }}" class="nav-link">
                  <i class="fas fa-angle-right"></i>
                  <p>Kegiatan Tambahan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-edit"></i>
              <p>
                Tugas Tambahan (TUTA)
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('tutautama.index') }}" class="nav-link">
                  <i class="fas fa-angle-right"></i>
                  <p>Kegiatan Utama</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('tutatambahan.index') }}" class="nav-link">
                  <i class="fas fa-angle-right"></i>
                  <p>Kegiatan Tambahan</p>
                </a>
              </li>
            </ul>
          </li>
          @if (Auth()->user()->role == 'admin' || Auth()->user()->role == 'pendidik' || Auth()->user()->role == 'tendik')
          <li class="nav-item">
            <a href="/laporan" class="nav-link">
              <i class="fas fa-copy"></i>
              <p>Buat Laporan</p>
            </a>
          </li>
          @endif
          @if (Auth()->user()->role == 'admin' || Auth()->user()->role == 'kepala sekolah')
          <li class="nav-header">APPROVAL</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-check"></i>
              <p>
                Kegiatan Pendidik
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('kegpendidikUtama') }}" class="nav-link">
                  <i class="fas fa-angle-right"></i>
                  <p>Kegiatan Utama</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('kegpendidikTambahan') }}" class="nav-link">
                  <i class="fas fa-angle-right"></i>
                  <p>Kegiatan Tambahan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-check"></i>
              <p>
                Tugas Tambahan TUTA
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('tutaUtama') }}" class="nav-link">
                  <i class="fas fa-angle-right"></i>
                  <p>Kegiatan Utama</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('tutaTambahan') }}" class="nav-link">
                  <i class="fas fa-angle-right"></i>
                  <p>Kegiatan Tambahan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-check"></i>
              <p>
                Kegiatan TENDIK
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('tendikUtama') }}" class="nav-link">
                  <i class="fas fa-angle-right"></i>
                  <p>Kegiatan Utama</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('tendikTambahan') }}" class="nav-link">
                  <i class="fas fa-angle-right"></i>
                  <p>Kegiatan Tambahan</p>
                </a>
              </li>
            </ul>
          </li>
          @endif
          <li class="nav-header">PENGATURAN</li>
          @if (Auth()->user()->role == 'admin')
          <li class="nav-item">
            <a href="{{ url('/users') }}" class="nav-link">
              <i class="fas fa-users-cog"></i>
              <p>
                Manage User
              </p>
            </a>
          </li>
            @endif
            @if (Auth()->user()->role == 'admin' || Auth()->user()->role == 'kepala sekolah'
            || Auth()->user()->role == 'pendidik' || Auth()->user()->role == 'tendik')
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-user-friends"></i>
                <p>Profil Saya</p>
              </a>
              </li>
              @endif
              @if (Auth()->user()->role == 'admin')
            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-cogs"></i>
              <p>Setting Aplikasi</p>
            </a>
          </li>
          @endif
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
          </li>
          <br>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
