
<section id="people" class="mb-12">
    <h1 class="text-3xl font-bold mb-4">People</h1>
    <div class="mb-6 flex items-center gap-4">
        <input
        type="text"
        wire:model.debounce.300ms="search"
        placeholder="Search people from star wars..."
        class="border border-gray-300 rounded-lg px-4 py-2 w-1/2 focus:outline-none focus:ring-2 focus:ring-blue-500"
        />
        <button
        wire:click="searchPeople"
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
                    <td class="px-6 py-4 text-sm text-gray-800">Nationality</th>
                </tr>
            </thead>
            <tbody>
                @forelse($people['player'] as $i=>$p) 
                    <tr class="border-t">
                        <td class="px-6 py-4 text-sm text-gray-800">{{ ++$i }}</td>
                        <td class="px-6 py-4 text-sm text-gray-800">{{ $p['strPlayer'] }}</td>
                        <td class="px-6 py-4 text-sm text-gray-800">{{ $p['strNationality'] }}</td>
                    </tr>
                @empty
                    <tr class="border-t">
                        <td class="px-6 py-4 text-sm text-gray-800">No People Found!</td>
                    </tr>
                @endforelse        
            </tbody>
        </table>
    </div>
</section>
