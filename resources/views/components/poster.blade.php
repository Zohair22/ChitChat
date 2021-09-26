


<div class="bg-white border-2 border-blue-400 rounded-3xl p-5">
    <form action="{{ route('poster') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div>
            <label for="body" hidden></label>
            <textarea
                name="body"
                id="body"
                class='w-full px-4 py-2 rounded-xl resize-none form-textarea text-md bg-gray-50'
                rows="3"
                placeholder="What's Up Bro ..!"
            ></textarea>
        </div>
        @error('body')
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Holy smokes!</strong>
            <span class="block sm:inline">Something seriously bad happened.</span>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
          </span>
        </div>
        @enderror

        <div class='mt-3'>
            <label
                class="w-32 flex flex-col px-4 py-2 items-center bg-white rounded-md shadow-md tracking-wide uppercase
              border border-blue cursor-pointer hover:bg-purple-600 hover:text-white text-purple-600 ease-linear
              transition-all duration-150">
                <i class="fas fa-cloud-upload-alt"></i>
                <span class="mt-2 text-xs leading-normal">Select a file</span>
                <input type='file' name="thumbnail" class="hidden" />
            </label>
        </div>
        @error('thumbnail')
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-1 text-sm rounded mt-3" role="alert">
            <span class="font-bold">{{ $message }}</span>
        </div>
        @enderror

        <div class="mt-14 relative">
            <x-jet-button class="px-12 py-1 text-md font-bold absolute bottom-0 right-0">POST</x-jet-button>
        </div>

    </form>
</div>
