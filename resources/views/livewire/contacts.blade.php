<div>
    {{-- <h2>hello</h2> --}}
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold mb-2">Contact List</h2>
                <div class="row">
                    <div class="col-8">
                        <div class="flex items
                        -center">
                            <input type="text" class="border p-2 w-80" placeholder="Search Contacts" wire:model="search">
                            <button class="btn btn-primary text-white p-2">Search <i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </div>
                    <div class="col-4 d-flex justify-content-end align-content-end">
                        <button class="btn btn-primary align-self-end" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <i class="fa-solid fa-filter"></i>
                            Filter By:
                        </button>
                    </div>
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
                    </tbody>
                </table>
        </div>
            </div>
        </div>
        
        
    </div>

    {{-- off-canvas for filtering data --}}
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">Offcanvas right</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            ...
        </div>
    </div>
</div>