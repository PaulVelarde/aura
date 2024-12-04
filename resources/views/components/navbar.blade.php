

<!-- resources/views/components/navbar.blade.php -->
<nav class="bg-white shadow-md py-4">
    <div class="container mx-auto px-6 md:flex md:justify-between md:items-center">
        <!-- Logo -->
        <div class="flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-2xl font-bold text-gray-800">Aura</a>
            <button class="text-gray-800 focus:outline-none md:hidden">
                <i class="fas fa-bars"></i>
            </button>
        </div>

        <!-- Menú de navegación -->
        <div class="hidden md:flex space-x-6 mt-4 md:mt-0">
            <a href="{{ url('/noticias') }}" class="text-gray-800 hover:text-blue-600">Noticias</a>
            <a href="{{ url('/mundo') }}" class="text-gray-800 hover:text-blue-600">Mundo</a>
            <a href="{{ url('/multimedia') }}" class="text-gray-800 hover:text-blue-600">Multimedia</a>
            <a href="{{ url('/nosotros') }}" class="text-gray-800 hover:text-blue-600">Nosotros</a>
            <a href="{{ url('/en-vivo') }}" class="text-red-500 hover:text-red-600 font-semibold">En Vivo</a>
        </div>
        
        <!-- Íconos sociales -->
        <div class="hidden md:flex items-center space-x-4 mt-4 md:mt-0">
            <a href="#" class="text-gray-800 hover:text-blue-600"><i class="fab fa-facebook"></i></a>
            <a href="#" class="text-gray-800 hover:text-blue-600"><i class="fab fa-twitter"></i></a>
            <a href="#" class="text-gray-800 hover:text-blue-600"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-gray-800 hover:text-blue-600"><i class="fab fa-tiktok"></i></a>
        </div>
    </div>
</nav>

<div >
    <nav class="navbar rounded-box shadow">
      <div class="navbar-start">
        <a class="link text-base-content/90 link-neutral text-xl font-semibold no-underline" href="#">
          FlyonUI
        </a>
      </div>
      <div class="navbar-center max-sm:hidden">
        <ul class="menu menu-horizontal gap-2 p-0 text-base rtl:ml-20">
          <li class="dropdown relative inline-flex [--auto-close:inside] [--offset:9] [--placement:bottom-end] max-sm:[--placement:bottom]">
            <button id="dropdown-end" type="button" class="dropdown-toggle dropdown-open:bg-base-content/10 dropdown-open:text-base-content max-sm:px-2" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
              Products
              <span class="icon-[tabler--chevron-down] dropdown-open:rotate-180 size-4"></span>
            </button>
            <ul class="dropdown-menu dropdown-open:opacity-100 hidden w-48" role="menu" aria-orientation="vertical" aria-labelledby="nested-dropdown">
              <li><a class="dropdown-item" href="#">Templates</a></li>
              <li><a class="dropdown-item" href="#">UI kits</a></li>
              <li class="dropdown relative [--auto-close:inside] [--offset:10] [--placement:right-start] max-sm:[--placement:bottom] rtl:[--placement:left-start]">
                <button id="nested-dropdown-2" class="dropdown-toggle dropdown-item dropdown-open:bg-base-content/10 dropdown-open:text-base-content justify-between" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                  Components
                  <span class="icon-[tabler--chevron-right] size-4 rtl:rotate-180"></span>
                </button>
                <ul class="dropdown-menu dropdown-open:opacity-100 hidden w-48" role="menu" aria-orientation="vertical" aria-labelledby="nested-dropdown-2">
                  <li><a class="dropdown-item" href="#">Basic</a></li>
                  <li>
                    <a class="dropdown-item" href="#">
                      Advanced
                      <span class="badge badge-sm badge-soft badge-primary rounded-full">Pro</span>
                    </a>
                  </li>
                  <li class="dropdown relative [--auto-close:inside] [--offset:10] [--placement:right-start] max-sm:[--placement:bottom] rtl:[--placement:left-start]">
                    <button id="nested-dropdown-2" class="dropdown-toggle dropdown-item dropdown-open:bg-base-content/10 dropdown-open:text-base-content justify-between" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                      Vendor
                      <span class="icon-[tabler--chevron-right] size-4 rtl:rotate-180"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-open:opacity-100 hidden w-48" role="menu" aria-orientation="vertical" aria-labelledby="nested-dropdown-2">
                      <li>
                        <a class="dropdown-item" href="#">
                          Data tables
                          <span class="badge badge-sm badge-soft badge-primary rounded-full">Pro</span>
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">
                          Apex charts
                          <span class="badge badge-sm badge-soft badge-primary rounded-full">Pro</span>
                        </a>
                      </li>
                      <li><a class="dropdown-item" href="#">Clipboard</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#">About</a></li>
          <li><a href="#">Careers</a></li>
        </ul>
      </div>
      <div class="navbar-end items-center gap-4">
        <div class="dropdown relative inline-flex sm:hidden rtl:[--placement:bottom-end]">
          <button id="dropdown-default" type="button" class="dropdown-toggle btn btn-text btn-secondary btn-square" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
            <span class="icon-[tabler--menu-2] dropdown-open:hidden size-5"></span>
            <span class="icon-[tabler--x] dropdown-open:block hidden size-5"></span>
          </button>
          <ul class="dropdown-menu dropdown-open:opacity-100 hidden min-w-60" role="menu" aria-orientation="vertical" aria-labelledby="dropdown-default">
            <li class="dropdown relative [--auto-close:inside] [--offset:9] [--placement:bottom-end] max-sm:[--placement:bottom]">
              <a id="dropdown-end-2" class="dropdown-toggle dropdown-item dropdown-open:bg-base-content/10 dropdown-open:text-base-content justify-between" href="#" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                Products
                <span class="icon-[tabler--chevron-right] size-4 rtl:rotate-180"></span>
              </a>
              <ul class="dropdown-menu dropdown-open:opacity-100 hidden w-48" role="menu" aria-orientation="vertical" aria-labelledby="nested-dropdown">
                <li><a class="dropdown-item" href="#">Templates</a></li>
                <li><a class="dropdown-item" href="#">UI kits</a></li>
                <li class="dropdown relative [--auto-close:inside] [--offset:10] [--placement:right-start] max-sm:[--placement:bottom] rtl:[--placement:left-start]">
                  <a id="nested-dropdown-2" class="dropdown-toggle dropdown-item dropdown-open:bg-base-content/10 dropdown-open:text-base-content justify-between" href="#" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                    Components
                    <span class="icon-[tabler--chevron-right] size-4 rtl:rotate-180"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-open:opacity-100 hidden w-48" role="menu" aria-orientation="vertical" aria-labelledby="nested-dropdown-2">
                    <li><a class="dropdown-item" href="#">Basic</a></li>
                    <li>
                      <a class="dropdown-item" href="#">
                        Advanced
                        <span class="badge badge-sm badge-soft badge-primary rounded-full">Pro</span>
                      </a>
                    </li>
                    <li class="dropdown relative [--auto-close:inside] [--offset:10] [--placement:right-start] max-sm:[--placement:bottom] rtl:[--placement:left-start]">
                      <a id="nested-dropdown-2" class="dropdown-toggle dropdown-item dropdown-open:bg-base-content/10 dropdown-open:text-base-content justify-between" href="#" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                        Vendor
                        <span class="icon-[tabler--chevron-right] size-4 rtl:rotate-180"></span>
                      </a>
                      <ul class="dropdown-menu dropdown-open:opacity-100 hidden w-48" role="menu" aria-orientation="vertical" aria-labelledby="nested-dropdown-2">
                        <li>
                          <a class="dropdown-item" href="#">
                            Data tables
                            <span class="badge badge-sm badge-soft badge-primary rounded-full">Pro</span>
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">
                            Apex charts
                            <span class="badge badge-sm badge-soft badge-primary rounded-full">Pro</span>
                          </a>
                        </li>
                        <li><a class="dropdown-item" href="#">Clipboard</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a class="dropdown-item" href="#">About</a></li>
            <li><a class="dropdown-item" href="#">Careers</a></li>
          </ul>
        </div>
        <a class="btn btn-primary" href="#">Login</a>
      </div>
    </nav>
  </div>