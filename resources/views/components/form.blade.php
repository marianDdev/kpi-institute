<form method="post" action="/users" class="pb-5 pr-5">
    <h3 class="text-green-500 mb-5">DOWNLOAD A FREE PREVIEW</h3>
    <p class="mb-5">To proceed with your order, <br> please take a moment to fill in the fields below:</p>
    @csrf
    <div class="mb-6">
        <input type="text" id="first_name" name="first_name"
               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
               placeholder="First name">
        @include('components.error', ['field' => 'first_name'])
    </div>

    <div class="mb-6">
        <input type="text" id="last_name" name="last_name"
               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
               placeholder="Last name">
        @include('components.error', ['field' => 'last_name'])
    </div>

    <div class="mb-6">
        <input type="text" id="company" name="company"
               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
               placeholder="Company">
        @include('components.error', ['field' => 'company'])
    </div>

    <div class="mb-6">
        <input type="text" id="phone" name="phone"
               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
               placeholder="Phone">
        @include('components.error', ['field' => 'phone'])
    </div>

    <div class="mb-6">
        <input type="email" id="email" name="email"
               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
               placeholder="Email address">
        @include('components.error', ['field' => 'email'])
    </div>
    <livewire:country-dropdown />

    <button type="submit"
            class="text-white bg-green-500 hover:bg-green-700 font-medium rounded-lg text-sm sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700">Download
    </button>
</form>
