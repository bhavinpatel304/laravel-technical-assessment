<section id="actors" class="mb-12">
    <h1 class="text-3xl font-bold mb-4">Actors</h1>
    <div class="mb-6 flex items-center gap-4">
        <input
        type="text"
        wire:model.defer="search"
        placeholder="Search actors..."
        class="border border-gray-300 rounded-lg px-4 py-2 w-1/2 focus:outline-none focus:ring-2 focus:ring-blue-500"
        />
        <button
        wire:click="searchActors"
        class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition"
        >
        Submit
        </button>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead class="bg-gray-200">        
                <tr class="border-t">
                    <td class="text-left px-6 py-3 text-sm font-semibold text-gray-700">ID</th>
                    <td class="px-6 py-4 text-sm text-gray-800">Name</th>
                    <td class="px-6 py-4 text-sm text-gray-800">Movies</th>
                </tr>
            </thead>
            <tbody>
                @forelse($actors as $actor)
                    <tr class="border-t">
                        <td class="px-6 py-4 text-sm text-gray-800">{{ $actor->id }}</td>
                        <td class="px-6 py-4 text-sm text-gray-800">{{ $actor->name }}</td>
                        <td class="px-6 py-4 text-sm text-gray-800">{{$actor->movie_titles }}</td>
                    </tr>
                @empty
                    <tr class="border-t">
                        <td class="px-6 py-4 text-sm text-gray-800">No Actor</td>
                    </tr>
                @endforelse        
            </tbody>
        </table>
    </div>
</section>