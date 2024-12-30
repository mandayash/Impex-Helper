<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Comodify</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-slate-50">
    <!-- Header -->
    <button
      class="mt-6 ml-20 bg-blue-500 text-white px-6 rounded hover:bg-blue-600"
    >
      <a href="{{ route('home') }}" class="text-white font-bold text-3xl">&larr;</a>
    </button>
    <!-- Main Content -->
    <main class="flex flex-col items-center mt-10 px-4">
      <!-- Title -->
      <h1 class="text-blue-500 text-4xl font-bold">Comodify</h1>

      <!-- Subtitle -->
      <p class="text-gray-700 text-center mt-4 max-w-lg">
        Here are six key commodities that are the main focus of export and
        import activities in Indonesia.
      </p>

      <!-- Commodities Section -->
      <section
        class="comodify-container grid grid-cols-1 md:grid-cols-3 gap-6 mt-10 w-full max-w-5xl"
      >
        <!-- Card 1 -->
        <div
          class="bg-white shadow-lg rounded-lg overflow-hidden max-w-xs mx-auto"
        >
          <img
            src="https://via.placeholder.com/400x240"
            alt="Commodity"
            class="w-full h-48 object-cover"
          />
          <div class="p-4 text-center">
            <h5 class="text-blue-500 font-semibold text-lg">Lorem Lorem</h5>
            <p class="text-gray-600 mt-2">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Temporibus, laboriosam?
            </p>
            <button
              class="mt-4 bg-blue-500 text-white px-24 py-2 rounded hover:bg-blue-600"
            >
              Read More
            </button>
          </div>
        </div>

        <!-- Card 2 -->
        <div
          class="bg-white shadow-lg rounded-lg overflow-hidden max-w-xs mx-auto"
        >
          <img
            src="https://via.placeholder.com/400x240"
            alt="Commodity"
            class="w-full h-48 object-cover"
          />
          <div class="p-4 text-center">
            <h5 class="text-blue-500 font-semibold text-lg">Lorem Lorem</h5>
            <p class="text-gray-600 mt-2">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Temporibus, laboriosam?
            </p>
            <button
              class="mt-4 bg-blue-500 text-white px-24 py-2 rounded hover:bg-blue-600"
            >
              Read More
            </button>
          </div>
        </div>

        <!-- Card 3 -->
        <div
          class="bg-white shadow-lg rounded-lg overflow-hidden max-w-xs mx-auto"
        >
          <img
            src="https://via.placeholder.com/400x240"
            alt="Commodity"
            class="w-full h-48 object-cover"
          />
          <div class="p-4 text-center">
            <h5 class="text-blue-500 font-semibold text-lg">Lorem Lorem</h5>
            <p class="text-gray-600 mt-2">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Temporibus, laboriosam?
            </p>
            <button
              class="mt-4 bg-blue-500 text-white px-24 py-2 rounded hover:bg-blue-600"
            >
              Read More
            </button>
          </div>
        </div>

        <!-- Card 4 -->
        <div
          class="bg-white shadow-lg rounded-lg overflow-hidden max-w-xs mx-auto"
        >
          <img
            src="https://via.placeholder.com/400x240"
            alt="Commodity"
            class="w-full h-48 object-cover"
          />
          <div class="p-4 text-center">
            <h5 class="text-blue-500 font-semibold text-lg">Lorem Lorem</h5>
            <p class="text-gray-600 mt-2">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Temporibus, laboriosam?
            </p>
            <button
              class="mt-4 bg-blue-500 text-white px-24 py-2 rounded hover:bg-blue-600"
            >
              Read More
            </button>
          </div>
        </div>

        <!-- Card 5 -->
        <div
          class="bg-white shadow-lg rounded-lg overflow-hidden max-w-xs mx-auto"
        >
          <img
            src="https://via.placeholder.com/400x240"
            alt="Commodity"
            class="w-full h-48 object-cover"
          />
          <div class="p-4 text-center">
            <h5 class="text-blue-500 font-semibold text-lg">Lorem Lorem</h5>
            <p class="text-gray-600 mt-2">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Temporibus, laboriosam?
            </p>
            <button
              class="mt-4 bg-blue-500 text-white px-24 py-2 rounded hover:bg-blue-600"
            >
              Read More
            </button>
          </div>
        </div>

        <!-- Card 6 -->
        <div
          class="bg-white shadow-lg rounded-lg overflow-hidden max-w-xs mx-auto"
        >
          <img
            src="https://via.placeholder.com/400x240"
            alt="Commodity"
            class="w-full h-48 object-cover"
          />
          <div class="p-4 text-center">
            <h5 class="text-blue-500 font-semibold text-lg">Lorem Lorem</h5>
            <p class="text-gray-600 mt-2">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Temporibus, laboriosam?
            </p>
            <button
              class="mt-4 bg-blue-500 text-white px-24 py-2 rounded hover:bg-blue-600"
            >
              Read More
            </button>
          </div>
        </div>
      </section>
    </main>

    <footer
      class="bg-emerald-50 py-10 px-5 font-sans text-gray-800 w-full w-screen-xl mx-auto mt-24"
    >
      <div
        class="flex flex-wrap justify-between gap-5 max-w-screen-lg mx-auto px-5"
      >
        <div class="flex-1 min-w-[200px] pr-36">
          <h3 class="text-xl text-[#002d62] mb-2">IMPEX HELPER</h3>
          <p class="text-sm mb-2">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vulputate
            a, ultricies sit nunc purus vel cras pellentesque.
          </p>
          <div class="flex space-x-2">
            <a href="#"
              ><img src="icon-instagram.svg" alt="Instagram" class="w-5 h-5"
            /></a>
            <a href="#"
              ><img src="icon-facebook.svg" alt="Facebook" class="w-5 h-5"
            /></a>
            <a href="#"
              ><img src="icon-twitter.svg" alt="Twitter" class="w-5 h-5"
            /></a>
          </div>
        </div>
        <div class="flex-1 min-w-[200px]">
          <h4 class="text-lg text-[#002d62] mb-2">About us</h4>
          <ul class="list-none pl-0">
            <li class="mb-1">
              <a
                href="#"
                class="text-[#002d62] hover:text-[#0056b3] transition-colors"
                >Home</a
              >
            </li>
            <li class="mb-1">
              <a
                href="#"
                class="text-[#002d62] hover:text-[#0056b3] transition-colors"
                >Regulation Info</a
              >
            </li>
            <li class="mb-1">
              <a
                href="#"
                class="text-[#002d62] hover:text-[#0056b3] transition-colors"
                >Commodity</a
              >
            </li>
          </ul>
        </div>
        <div class="flex-1 min-w-[200px]">
          <h4 class="text-lg text-[#002d62] mb-2">Contact us</h4>
          <p class="text-sm mb-2">
            <a
              href="mailto:impexHelper@gmail.com"
              class="text-[#002d62] hover:text-[#0056b3]"
              >impexHelper@gmail.com</a
            >
          </p>
          <p class="text-sm">+62 878-234-567</p>
        </div>
        <div class="flex-1 min-w-[200px]">
          <h4 class="text-lg text-[#002d62] mb-2">Stay In Touch</h4>
          <p class="text-sm mb-2">Keep Updated!!</p>
          <form class="flex gap-2 items-center">
            <input
              type="email"
              placeholder="Enter Your Email"
              class="p-2 flex-1 border border-gray-300 rounded text-sm"
            />
            <button
              type="submit"
              class="p-2 px-3 bg-[#002d62] text-white rounded cursor-pointer text-sm hover:bg-[#0056b3]"
            >
              Submit
            </button>
          </form>
        </div>
      </div>
      <div
        class="text-center mt-5 text-xs text-gray-600 max-w-screen-lg mx-auto px-5"
      >
        <p>© 2024 Impex Helper by Group 3 | All Rights Reserved</p>
      </div>
    </footer>
  </body>
</html>
