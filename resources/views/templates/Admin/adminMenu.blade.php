<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item">
        <a href="ts" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard

          </p>
        </a>

        {{-- ADD data Mobil --}}
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-plus"></i>
              <p>
                Add Data
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url("/tambahMobilBaru")}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mobil Baru</p>
                </a>


            </ul>


            {{-- Lihat data Mobil --}}
            <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-database"></i>
                  <p>
                    Pengajuan Pembelian
                    <i class="right fas fa-angle-right"></i>
                  </p>
                </a>

                <ul class="nav nav-treeview">

                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Mobil Baru</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Mobil Bekas</p>
                    </a>
                  </li>

                </ul>


                <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-database"></i>
                      <p>
                        Pengajuan Penjualan
                        <i class="right fas fa-angle-right"></i>
                      </p>
                    </a>

                    <ul class="nav nav-treeview">

                      <li class="nav-item">
                        <a href="/kelola-penjualan" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Mobil Bekas</p>
                        </a>
                      </li>

                    </ul>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-car"></i>
                          <p>
                            Lihat Data Mobil
                            <i class="right fas fa-angle-right"></i>
                          </p>
                        </a>

                        <ul class="nav nav-treeview">

                          <li class="nav-item">
                            <a href="/data-mobil-baru" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Mobil Baru</p>
                            </a>
                          </li>

                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Mobil Bekas</p>
                            </a>
                          </li>

                        </ul>

    </ul>
  </nav>
