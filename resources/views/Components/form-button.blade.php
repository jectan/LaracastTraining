<!-- <button type="submit" >Save</button> -->
<button {{ $attributes->merge(['class'='rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focuse-visible:outline-indigo-600', 'type'=>'submit'])}}
    {{ $slot }}
</button>