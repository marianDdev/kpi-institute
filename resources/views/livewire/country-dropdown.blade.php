<div>
    <div class="mb-6">
        <select wire:model="prefix" id="countries" name="country"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option value="" selected>Select country</option>
            @foreach($countries as $country)
                <option value="{{ $country->international_phone }}">{{ $country->name }}</option>
            @endforeach
        </select>
        @include('components.error', ['field' => 'country'])
    </div>

    <div class="mb-6">
        <input type="text" id="prefix" name="prefix" value="{{ $prefix }}"
               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
               placeholder="Prefix">
        @include('components.error', ['field' => 'prefix'])
    </div>
</div>
