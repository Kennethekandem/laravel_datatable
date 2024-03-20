<div>
    {{-- <h2>hello</h2> --}}
    <div class="min-h-screen p-6 h-auto bg-slate-800 flex justify-center items-center bg-color">
        <div class="row">
            <div class="col-12">
                <div class="p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold mb-2">Contact List</h2>
                <div class="flex justify-between items-center mb-4">
                    <div class="flex items
                    -center">
                        <input type="text" class="border p-2 w-80" placeholder="Search Contacts" wire:model="search">
                        <button class="btn btn-blue bg-blue-500 text-white p-2">Search</button>
                    </div>
                </div>
                <div class="flex justify-between mb-4">
                    <button class="btn btn-blue bg-blue-500 text-white p-2">
                        Filter by 
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
  <path fill-rule="evenodd" d="M2 3.75A.75.75 0 0 1 2.75 3h11.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 3.75ZM2 7.5a.75.75 0 0 1 .75-.75h7.508a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 7.5ZM14 7a.75.75 0 0 1 .75.75v6.59l1.95-2.1a.75.75 0 1 1 1.1 1.02l-3.25 3.5a.75.75 0 0 1-1.1 0l-3.25-3.5a.75.75 0 1 1 1.1-1.02l1.95 2.1V7.75A.75.75 0 0 1 14 7ZM2 11.25a.75.75 0 0 1 .75-.75h4.562a.75.75 0 0 1 0 1.5H2.75a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
</svg>

                        {{-- <i class="fas fa-chevron-down"></i> --}}
                    </button>
                </div>

            </div>
            </div>
            <div class="col-12">
                <div class="relative overflow-x-auto w-70" style="background: #e8e3e3; border: 1px solid #e8e3e3">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Phone
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Address
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Occupation
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contacts as $contact)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                {{ $contact->name}}
                            </th>
                            <td class="px-6 py-4">
                                {{$contact->email}}
                            </td>
                            <td class="px-6 py-4">
                                {{$contact->phone}}
                            </td>
                            <td class="px-6 py-4">
                                {{$contact->address}}
                            </td>
                            <td class="px-6 py-4">
                                {{$contact->occupation}}
                            </td>
                        </tr>
                        @endforeach
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                Microsoft Surface Pro
                            </th>
                            <td class="px-6 py-4">
                                White
                            </td>
                            <td class="px-6 py-4">
                                Laptop PC
                            </td>
                            <td class="px-6 py-4">
                                $1999
                            </td>
                            <td class="px-6 py-4">
                                $1999
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                Magic Mouse 2
                            </th>
                            <td class="px-6 py-4">
                                Black
                            </td>
                            <td class="px-6 py-4">
                                Accessories
                            </td>
                            <td class="px-6 py-4">
                                $99
                            </td>
                            <td class="px-6 py-4">
                                $99
                            </td>
                        </tr>
                    </tbody>
                </table>
        </div>
            </div>
        </div>
        
        
    </div>
</div>
