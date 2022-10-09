@props(['disabled' => false])
<input type="checkbox" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-check-input appearance-none bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-md checked:bg-primary-600 dark:checked:bg-primary-600 checked:border-primary-600 active:bg-primary-800 checked:focus:bg-primary-800 checked:hover:bg-primary-800 focus:outline-none focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-600 dark:focus:border-primary-600 transition duration-200 align-top bg-no-repeat bg-center bg-contain cursor-pointer disabled:opacity-75 disabled:cursor-no-drop']) !!}>