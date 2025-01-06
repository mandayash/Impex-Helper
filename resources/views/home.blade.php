<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Impex Helper</title>
    <link rel="stylesheet" href="styles.css" />
    <link rel="icon" href="{{ asset('aset/logo-zoom.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    @vite('resources/css/home.css')
  </head>

  <body class="font-sans m-0 p-0">
    <nav
      class="absolute top-0 left-0 w-full flex justify-evenly gap-[300px] items-center z-50 bg-transparent mt-2"
    >
    <div class="mr-8">
        <img src="{{ asset('aset/logo.png') }}"alt="Impex Helper Logo" class="h-10">
    </div>
      <ul class="flex gap-5 list-none m-0">
        <li class="ml-8">
          <a href="{{ route('regulation') }}" class="text-blue-500 text-lg font-bold"
            >Export Import Regulation</a
          >
        </li>
        <li class="ml-8">
          <a href="{{ route('commodity') }}" class="text-blue-500 text-lg font-bold">Commodity</a>
        </li>
        <li class="ml-8">
          <a href="#" class="text-blue-500 text-lg font-bold login-btn"
            >Login</a
          >
        </li>
        <li class="ml-8">
          <a
            href="{{ route('signup') }}"
            class="bg-blue-500 text-white py-2 px-4 rounded transition-colors hover:bg-transparent hover:text-blue-500 font-bold text-lg"
            >Sign Up</a
          >
        </li>
      </ul>
    </nav>

    <section
      class="background-section relative h-screen bg-cover bg-center "
      style="background-image: url('{{ asset('img/bg.png') }}')"
    >
      <div
        class="content-section flex flex-col justify-center items-center max-w-3xl mx-auto p-5 text-center pt-10"
      >
        <div class="image-container relative text-center -my-5">
          <img
            class="image1 w-1/2 h-auto relative left-[176px]"
            src="{{ asset('img/gambar.png') }}"
            alt="Gambar Contoh"
          />
          <img
            class="absolute bottom-6 left-[196px] w-[18%] h-auto"
            src="{{ asset('img/gambar-2.png') }}"
            alt="Gambar Contoh"
          />
        </div>
        <div class="text-container w-full p-2 box-border">
          <h1 class="text-4xl mb-3 text-gray-800 font-bold">
            Bridging <span class="text-orange-500">Markets</span>, Building
            <span class="text-orange-500">Future</span>
          </h1>
          <p class="text-lg text-gray-600 leading-relaxed">
            Impex Helper streamlines export-import in ASEAN, connecting buyers and sellers in commodity
            trade while ensuring compliance with regional export regulations.
          </p>
          <div class="button-container mt-5">
            <button
              class="shopping-button py-2 px-5 text-lg font-bold text-blue-600 border-2 border-blue-600 rounded-full cursor-pointer transition-all hover:bg-blue-600 hover:text-white hover:shadow-lg"
            >
              Start Journey
            </button>
          </div>
        </div>
      </div>
    </section>


    <div class="mt-20 ml-32 pl-2 border-l-4 border-black">
        <h1 class="font-bold text-lg">Agriculture &  Plantation Comodity</h1>
    </div>
    <div
      class="card-section p-5 flex overflow-hidden w-4/5 mx-auto user-select-none"
    >
      <div class="card-container flex gap-5 flex-nowrap user-select-none">
        <!-- Card 1 -->
        <div
          class="card p-1 w-56 h-72 bg-white border border-gray-300 rounded-lg shadow-md relative overflow-hidden transition-transform transform hover:scale-105"
        >
          <img
            src="https://via.placeholder.com/200x240"
            alt="Barang 1"
            class="w-full h-3/4 object-cover rounded-t-lg"
          />
          <div
            class="card-info flex flex-col justify-between h-1/4 relative p-1"
          >
            <h3 class="text-lg font-bold text-gray-800">Barang 1</h3>
            <div class="flex items-center justify-between">
              <p class="text-gray-600 text-xs font-semibold">Harga: $100</p>
              <button
                class="btn-buy text-sm bg-blue-800 text-white py-1 px-6 rounded-md transition-colors hover:bg-blue-600"
              >
                Buy Now
              </button>
            </div>
          </div>
        </div>

        <div
          class="card p-1 w-56 h-72 bg-white border border-gray-300 rounded-lg shadow-md relative overflow-hidden transition-transform transform hover:scale-105"
        >
          <img
            src="https://via.placeholder.com/200x240"
            alt="Barang 1"
            class="w-full h-3/4 object-cover rounded-t-lg"
          />
          <div
            class="card-info flex flex-col justify-between h-1/4 relative p-1"
          >
            <h3 class="text-lg font-bold text-gray-800">Barang 1</h3>
            <div class="flex items-center justify-between">
              <p class="text-gray-600 text-xs font-semibold">Harga: $100</p>
              <button
                class="btn-buy text-sm bg-blue-800 text-white py-1 px-6 rounded-md transition-colors hover:bg-blue-600"
              >
                Buy Now
              </button>
            </div>
          </div>
        </div>

        <div
          class="card p-1 w-56 h-72 bg-white border border-gray-300 rounded-lg shadow-md relative overflow-hidden transition-transform transform hover:scale-105"
        >
          <img
            src="https://via.placeholder.com/200x240"
            alt="Barang 1"
            class="w-full h-3/4 object-cover rounded-t-lg"
          />
          <div
            class="card-info flex flex-col justify-between h-1/4 relative p-1"
          >
            <h3 class="text-lg font-bold text-gray-800">Barang 1</h3>
            <div class="flex items-center justify-between">
              <p class="text-gray-600 text-xs font-semibold">Harga: $100</p>
              <button
                class="btn-buy text-sm bg-blue-800 text-white py-1 px-6 rounded-md transition-colors hover:bg-blue-600"
              >
                Buy Now
              </button>
            </div>
          </div>
        </div>

        <div
          class="card p-1 w-56 h-72 bg-white border border-gray-300 rounded-lg shadow-md relative overflow-hidden transition-transform transform hover:scale-105"
        >
          <img
            src="https://via.placeholder.com/200x240"
            alt="Barang 1"
            class="w-full h-3/4 object-cover rounded-t-lg"
          />
          <div
            class="card-info flex flex-col justify-between h-1/4 relative p-1"
          >
            <h3 class="text-lg font-bold text-gray-800">Barang 1</h3>
            <div class="flex items-center justify-between">
              <p class="text-gray-600 text-xs font-semibold">Harga: $100</p>
              <button
                class="btn-buy text-sm bg-blue-800 text-white py-1 px-6 rounded-md transition-colors hover:bg-blue-600"
              >
                Buy Now
              </button>
            </div>
          </div>
        </div>

        <div
          class="card p-1 w-56 h-72 bg-white border border-gray-300 rounded-lg shadow-md relative overflow-hidden transition-transform transform hover:scale-105"
        >
          <img
            src="https://via.placeholder.com/200x240"
            alt="Barang 1"
            class="w-full h-3/4 object-cover rounded-t-lg"
          />
          <div
            class="card-info flex flex-col justify-between h-1/4 relative p-1"
          >
            <h3 class="text-lg font-bold text-gray-800">Barang 1</h3>
            <div class="flex items-center justify-between">
              <p class="text-gray-600 text-xs font-semibold">Harga: $100</p>
              <button
                class="btn-buy text-sm bg-blue-800 text-white py-1 px-6 rounded-md transition-colors hover:bg-blue-600"
              >
                Buy Now
              </button>
            </div>
          </div>
        </div>

        <div
          class="card p-1 w-56 h-72 bg-white border border-gray-300 rounded-lg shadow-md relative overflow-hidden transition-transform transform hover:scale-105"
        >
          <img
            src="https://via.placeholder.com/200x240"
            alt="Barang 1"
            class="w-full h-3/4 object-cover rounded-t-lg"
          />
          <div
            class="card-info flex flex-col justify-between h-1/4 relative p-1"
          >
            <h3 class="text-lg font-bold text-gray-800">Barang 1</h3>
            <div class="flex items-center justify-between">
              <p class="text-gray-600 text-xs font-semibold">Harga: $100</p>
              <button
                class="btn-buy text-sm bg-blue-800 text-white py-1 px-6 rounded-md transition-colors hover:bg-blue-600"
              >
                Buy Now
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="mt-20 ml-32 pl-2 border-l-4 border-black">
        <h1 class="font-bold text-lg">Processed Food & Beverages Comodity</h1>
    </div>
    <div
      class="card-section p-5 flex overflow-hidden w-4/5 mx-auto user-select-none"
    >
      <div class="card-container flex gap-5 flex-nowrap user-select-none">
        <!-- Card 1 -->
        <div
          class="card p-1 w-56 h-72 bg-white border border-gray-300 rounded-lg shadow-md relative overflow-hidden transition-transform transform hover:scale-105"
        >
          <img
            src="https://via.placeholder.com/200x240"
            alt="Barang 1"
            class="w-full h-3/4 object-cover rounded-t-lg"
          />
          <div
            class="card-info flex flex-col justify-between h-1/4 relative p-1"
          >
            <h3 class="text-lg font-bold text-gray-800">Barang 1</h3>
            <div class="flex items-center justify-between">
              <p class="text-gray-600 text-xs font-semibold">Harga: $100</p>
              <button
                class="btn-buy text-sm bg-blue-800 text-white py-1 px-6 rounded-md transition-colors hover:bg-blue-600"
              >
                Buy Now
              </button>
            </div>
          </div>
        </div>

        <div
          class="card p-1 w-56 h-72 bg-white border border-gray-300 rounded-lg shadow-md relative overflow-hidden transition-transform transform hover:scale-105"
        >
          <img
            src="https://via.placeholder.com/200x240"
            alt="Barang 1"
            class="w-full h-3/4 object-cover rounded-t-lg"
          />
          <div
            class="card-info flex flex-col justify-between h-1/4 relative p-1"
          >
            <h3 class="text-lg font-bold text-gray-800">Barang 1</h3>
            <div class="flex items-center justify-between">
              <p class="text-gray-600 text-xs font-semibold">Harga: $100</p>
              <button
                class="btn-buy text-sm bg-blue-800 text-white py-1 px-6 rounded-md transition-colors hover:bg-blue-600"
              >
                Buy Now
              </button>
            </div>
          </div>
        </div>

        <div
          class="card p-1 w-56 h-72 bg-white border border-gray-300 rounded-lg shadow-md relative overflow-hidden transition-transform transform hover:scale-105"
        >
          <img
            src="https://via.placeholder.com/200x240"
            alt="Barang 1"
            class="w-full h-3/4 object-cover rounded-t-lg"
          />
          <div
            class="card-info flex flex-col justify-between h-1/4 relative p-1"
          >
            <h3 class="text-lg font-bold text-gray-800">Barang 1</h3>
            <div class="flex items-center justify-between">
              <p class="text-gray-600 text-xs font-semibold">Harga: $100</p>
              <button
                class="btn-buy text-sm bg-blue-800 text-white py-1 px-6 rounded-md transition-colors hover:bg-blue-600"
              >
                Buy Now
              </button>
            </div>
          </div>
        </div>

        <div
          class="card p-1 w-56 h-72 bg-white border border-gray-300 rounded-lg shadow-md relative overflow-hidden transition-transform transform hover:scale-105"
        >
          <img
            src="https://via.placeholder.com/200x240"
            alt="Barang 1"
            class="w-full h-3/4 object-cover rounded-t-lg"
          />
          <div
            class="card-info flex flex-col justify-between h-1/4 relative p-1"
          >
            <h3 class="text-lg font-bold text-gray-800">Barang 1</h3>
            <div class="flex items-center justify-between">
              <p class="text-gray-600 text-xs font-semibold">Harga: $100</p>
              <button
                class="btn-buy text-sm bg-blue-800 text-white py-1 px-6 rounded-md transition-colors hover:bg-blue-600"
              >
                Buy Now
              </button>
            </div>
          </div>
        </div>

        <div
          class="card p-1 w-56 h-72 bg-white border border-gray-300 rounded-lg shadow-md relative overflow-hidden transition-transform transform hover:scale-105"
        >
          <img
            src="https://via.placeholder.com/200x240"
            alt="Barang 1"
            class="w-full h-3/4 object-cover rounded-t-lg"
          />
          <div
            class="card-info flex flex-col justify-between h-1/4 relative p-1"
          >
            <h3 class="text-lg font-bold text-gray-800">Barang 1</h3>
            <div class="flex items-center justify-between">
              <p class="text-gray-600 text-xs font-semibold">Harga: $100</p>
              <button
                class="btn-buy text-sm bg-blue-800 text-white py-1 px-6 rounded-md transition-colors hover:bg-blue-600"
              >
                Buy Now
              </button>
            </div>
          </div>
        </div>

        <div
          class="card p-1 w-56 h-72 bg-white border border-gray-300 rounded-lg shadow-md relative overflow-hidden transition-transform transform hover:scale-105"
        >
          <img
            src="https://via.placeholder.com/200x240"
            alt="Barang 1"
            class="w-full h-3/4 object-cover rounded-t-lg"
          />
          <div
            class="card-info flex flex-col justify-between h-1/4 relative p-1"
          >
            <h3 class="text-lg font-bold text-gray-800">Barang 1</h3>
            <div class="flex items-center justify-between">
              <p class="text-gray-600 text-xs font-semibold">Harga: $100</p>
              <button
                class="btn-buy text-sm bg-blue-800 text-white py-1 px-6 rounded-md transition-colors hover:bg-blue-600"
              >
                Buy Now
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="mt-20 ml-32 pl-2 border-l-4 border-black">
        <h1 class="font-bold text-lg">Fisheries & Marine Products Comodity</h1>
    </div>
    <div
      class="card-section p-5 flex overflow-hidden w-4/5 mx-auto user-select-none"
    >
      <div class="card-container flex gap-5 flex-nowrap user-select-none">
        <!-- Card 1 -->
        <div
          class="card p-1 w-56 h-72 bg-white border border-gray-300 rounded-lg shadow-md relative overflow-hidden transition-transform transform hover:scale-105"
        >
          <img
            src="https://via.placeholder.com/200x240"
            alt="Barang 1"
            class="w-full h-3/4 object-cover rounded-t-lg"
          />
          <div
            class="card-info flex flex-col justify-between h-1/4 relative p-1"
          >
            <h3 class="text-lg font-bold text-gray-800">Barang 1</h3>
            <div class="flex items-center justify-between">
              <p class="text-gray-600 text-xs font-semibold">Harga: $100</p>
              <button
                class="btn-buy text-sm bg-blue-800 text-white py-1 px-6 rounded-md transition-colors hover:bg-blue-600"
              >
                Buy Now
              </button>
            </div>
          </div>
        </div>

        <div
          class="card p-1 w-56 h-72 bg-white border border-gray-300 rounded-lg shadow-md relative overflow-hidden transition-transform transform hover:scale-105"
        >
          <img
            src="https://via.placeholder.com/200x240"
            alt="Barang 1"
            class="w-full h-3/4 object-cover rounded-t-lg"
          />
          <div
            class="card-info flex flex-col justify-between h-1/4 relative p-1"
          >
            <h3 class="text-lg font-bold text-gray-800">Barang 1</h3>
            <div class="flex items-center justify-between">
              <p class="text-gray-600 text-xs font-semibold">Harga: $100</p>
              <button
                class="btn-buy text-sm bg-blue-800 text-white py-1 px-6 rounded-md transition-colors hover:bg-blue-600"
              >
                Buy Now
              </button>
            </div>
          </div>
        </div>

        <div
          class="card p-1 w-56 h-72 bg-white border border-gray-300 rounded-lg shadow-md relative overflow-hidden transition-transform transform hover:scale-105"
        >
          <img
            src="https://via.placeholder.com/200x240"
            alt="Barang 1"
            class="w-full h-3/4 object-cover rounded-t-lg"
          />
          <div
            class="card-info flex flex-col justify-between h-1/4 relative p-1"
          >
            <h3 class="text-lg font-bold text-gray-800">Barang 1</h3>
            <div class="flex items-center justify-between">
              <p class="text-gray-600 text-xs font-semibold">Harga: $100</p>
              <button
                class="btn-buy text-sm bg-blue-800 text-white py-1 px-6 rounded-md transition-colors hover:bg-blue-600"
              >
                Buy Now
              </button>
            </div>
          </div>
        </div>

        <div
          class="card p-1 w-56 h-72 bg-white border border-gray-300 rounded-lg shadow-md relative overflow-hidden transition-transform transform hover:scale-105"
        >
          <img
            src="https://via.placeholder.com/200x240"
            alt="Barang 1"
            class="w-full h-3/4 object-cover rounded-t-lg"
          />
          <div
            class="card-info flex flex-col justify-between h-1/4 relative p-1"
          >
            <h3 class="text-lg font-bold text-gray-800">Barang 1</h3>
            <div class="flex items-center justify-between">
              <p class="text-gray-600 text-xs font-semibold">Harga: $100</p>
              <button
                class="btn-buy text-sm bg-blue-800 text-white py-1 px-6 rounded-md transition-colors hover:bg-blue-600"
              >
                Buy Now
              </button>
            </div>
          </div>
        </div>

        <div
          class="card p-1 w-56 h-72 bg-white border border-gray-300 rounded-lg shadow-md relative overflow-hidden transition-transform transform hover:scale-105"
        >
          <img
            src="https://via.placeholder.com/200x240"
            alt="Barang 1"
            class="w-full h-3/4 object-cover rounded-t-lg"
          />
          <div
            class="card-info flex flex-col justify-between h-1/4 relative p-1"
          >
            <h3 class="text-lg font-bold text-gray-800">Barang 1</h3>
            <div class="flex items-center justify-between">
              <p class="text-gray-600 text-xs font-semibold">Harga: $100</p>
              <button
                class="btn-buy text-sm bg-blue-800 text-white py-1 px-6 rounded-md transition-colors hover:bg-blue-600"
              >
                Buy Now
              </button>
            </div>
          </div>
        </div>

        <div
          class="card p-1 w-56 h-72 bg-white border border-gray-300 rounded-lg shadow-md relative overflow-hidden transition-transform transform hover:scale-105"
        >
          <img
            src="https://via.placeholder.com/200x240"
            alt="Barang 1"
            class="w-full h-3/4 object-cover rounded-t-lg"
          />
          <div
            class="card-info flex flex-col justify-between h-1/4 relative p-1"
          >
            <h3 class="text-lg font-bold text-gray-800">Barang 1</h3>
            <div class="flex items-center justify-between">
              <p class="text-gray-600 text-xs font-semibold">Harga: $100</p>
              <button
                class="btn-buy text-sm bg-blue-800 text-white py-1 px-6 rounded-md transition-colors hover:bg-blue-600"
              >
                Buy Now
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="mt-20 ml-32 pl-2 border-l-4 border-black">
        <h1 class="font-bold text-lg">Wood & Furniture Comodity</h1>
    </div>
    <div
      class="card-section p-5 flex overflow-hidden w-4/5 mx-auto user-select-none"
    >
      <div class="card-container flex gap-5 flex-nowrap user-select-none">
        <!-- Card 1 -->
        <div
          class="card p-1 w-56 h-72 bg-white border border-gray-300 rounded-lg shadow-md relative overflow-hidden transition-transform transform hover:scale-105"
        >
          <img
            src="https://via.placeholder.com/200x240"
            alt="Barang 1"
            class="w-full h-3/4 object-cover rounded-t-lg"
          />
          <div
            class="card-info flex flex-col justify-between h-1/4 relative p-1"
          >
            <h3 class="text-lg font-bold text-gray-800">Barang 1</h3>
            <div class="flex items-center justify-between">
              <p class="text-gray-600 text-xs font-semibold">Harga: $100</p>
              <button
                class="btn-buy text-sm bg-blue-800 text-white py-1 px-6 rounded-md transition-colors hover:bg-blue-600"
              >
                Buy Now
              </button>
            </div>
          </div>
        </div>

        <div
          class="card p-1 w-56 h-72 bg-white border border-gray-300 rounded-lg shadow-md relative overflow-hidden transition-transform transform hover:scale-105"
        >
          <img
            src="https://via.placeholder.com/200x240"
            alt="Barang 1"
            class="w-full h-3/4 object-cover rounded-t-lg"
          />
          <div
            class="card-info flex flex-col justify-between h-1/4 relative p-1"
          >
            <h3 class="text-lg font-bold text-gray-800">Barang 1</h3>
            <div class="flex items-center justify-between">
              <p class="text-gray-600 text-xs font-semibold">Harga: $100</p>
              <button
                class="btn-buy text-sm bg-blue-800 text-white py-1 px-6 rounded-md transition-colors hover:bg-blue-600"
              >
                Buy Now
              </button>
            </div>
          </div>
        </div>

        <div
          class="card p-1 w-56 h-72 bg-white border border-gray-300 rounded-lg shadow-md relative overflow-hidden transition-transform transform hover:scale-105"
        >
          <img
            src="https://via.placeholder.com/200x240"
            alt="Barang 1"
            class="w-full h-3/4 object-cover rounded-t-lg"
          />
          <div
            class="card-info flex flex-col justify-between h-1/4 relative p-1"
          >
            <h3 class="text-lg font-bold text-gray-800">Barang 1</h3>
            <div class="flex items-center justify-between">
              <p class="text-gray-600 text-xs font-semibold">Harga: $100</p>
              <button
                class="btn-buy text-sm bg-blue-800 text-white py-1 px-6 rounded-md transition-colors hover:bg-blue-600"
              >
                Buy Now
              </button>
            </div>
          </div>
        </div>

        <div
          class="card p-1 w-56 h-72 bg-white border border-gray-300 rounded-lg shadow-md relative overflow-hidden transition-transform transform hover:scale-105"
        >
          <img
            src="https://via.placeholder.com/200x240"
            alt="Barang 1"
            class="w-full h-3/4 object-cover rounded-t-lg"
          />
          <div
            class="card-info flex flex-col justify-between h-1/4 relative p-1"
          >
            <h3 class="text-lg font-bold text-gray-800">Barang 1</h3>
            <div class="flex items-center justify-between">
              <p class="text-gray-600 text-xs font-semibold">Harga: $100</p>
              <button
                class="btn-buy text-sm bg-blue-800 text-white py-1 px-6 rounded-md transition-colors hover:bg-blue-600"
              >
                Buy Now
              </button>
            </div>
          </div>
        </div>

        <div
          class="card p-1 w-56 h-72 bg-white border border-gray-300 rounded-lg shadow-md relative overflow-hidden transition-transform transform hover:scale-105"
        >
          <img
            src="https://via.placeholder.com/200x240"
            alt="Barang 1"
            class="w-full h-3/4 object-cover rounded-t-lg"
          />
          <div
            class="card-info flex flex-col justify-between h-1/4 relative p-1"
          >
            <h3 class="text-lg font-bold text-gray-800">Barang 1</h3>
            <div class="flex items-center justify-between">
              <p class="text-gray-600 text-xs font-semibold">Harga: $100</p>
              <button
                class="btn-buy text-sm bg-blue-800 text-white py-1 px-6 rounded-md transition-colors hover:bg-blue-600"
              >
                Buy Now
              </button>
            </div>
          </div>
        </div>

        <div
          class="card p-1 w-56 h-72 bg-white border border-gray-300 rounded-lg shadow-md relative overflow-hidden transition-transform transform hover:scale-105"
        >
          <img
            src="https://via.placeholder.com/200x240"
            alt="Barang 1"
            class="w-full h-3/4 object-cover rounded-t-lg"
          />
          <div
            class="card-info flex flex-col justify-between h-1/4 relative p-1"
          >
            <h3 class="text-lg font-bold text-gray-800">Barang 1</h3>
            <div class="flex items-center justify-between">
              <p class="text-gray-600 text-xs font-semibold">Harga: $100</p>
              <button
                class="btn-buy text-sm bg-blue-800 text-white py-1 px-6 rounded-md transition-colors hover:bg-blue-600"
              >
                Buy Now
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>


    <footer class="py-10 px-5 font-sans text-gray-800 border-t border-gray-300 w-full max-w-screen-xl mx-auto mt-24">
        <div class="flex flex-wrap justify-between gap-5 max-w-screen-lg mx-auto px-5">
          <div class="flex-1 min-w-[200px] pr-36">
            <h3 class="text-xl text-[#002d62] mb-2">IMPEX HELPER</h3>
            <p class="text-sm mb-2">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vulputate
              a, ultricies sit nunc purus vel cras pellentesque.
            </p>
            <div class="flex space-x-2">
              <a href="#"><img src="icon-instagram.svg" alt="Instagram" class="w-5 h-5" /></a>
              <a href="#"><img src="icon-facebook.svg" alt="Facebook" class="w-5 h-5" /></a>
              <a href="#"><img src="icon-twitter.svg" alt="Twitter" class="w-5 h-5" /></a>
            </div>
          </div>
          <div class="flex-1 min-w-[200px]">
            <h4 class="text-lg text-[#002d62] mb-2">About us</h4>
            <ul class="list-none pl-0">
              <li class="mb-1"><a href="#" class="text-[#002d62] hover:text-[#0056b3] transition-colors">Home</a></li>
              <li class="mb-1"><a href="#" class="text-[#002d62] hover:text-[#0056b3] transition-colors">Regulation Info</a></li>
              <li class="mb-1"><a href="#" class="text-[#002d62] hover:text-[#0056b3] transition-colors">Commodity</a></li>
            </ul>
          </div>
          <div class="flex-1 min-w-[200px]">
            <h4 class="text-lg text-[#002d62] mb-2">Contact us</h4>
            <p class="text-sm mb-2"><a href="mailto:impexHelper@gmail.com" class="text-[#002d62] hover:text-[#0056b3]">impexHelper@gmail.com</a></p>
            <p class="text-sm">+62 878-234-567</p>
          </div>
          <div class="flex-1 min-w-[200px]">
            <h4 class="text-lg text-[#002d62] mb-2">Stay In Touch</h4>
            <p class="text-sm mb-2">Keep Updated!!</p>
            <form class="flex gap-2 items-center">
              <input type="email" placeholder="Enter Your Email" class="p-2 flex-1 border border-gray-300 rounded text-sm" />
              <button type="submit" class="p-2 px-3 bg-[#002d62] text-white rounded cursor-pointer text-sm hover:bg-[#0056b3]">Submit</button>
            </form>
          </div>
        </div>
        <div class="text-center mt-5 text-xs text-gray-600 max-w-screen-lg mx-auto px-5">
          <p>© 2024 Impex Helper by Group 3 | All Rights Reserved</p>
        </div>
      </footer>


    <script src="{{ asset('js/script.js') }}"></script>
  </body>
</html>
