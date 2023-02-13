<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight"> {{ __('Dashboard for CENT admin portal') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200"> You're logged in as a CENT administrator! </div>
            </div>
            <!-- <div class="sm:hidden">
                <label for="tabs" class="sr-only">Select your country</label>
                <select id="tabs"
                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option>Profile</option>
                    <option>Canada</option>
                    <option>France</option>
                    <option>Germany</option>
                </select>
            </div> -->
            <br />
            <br />
            <!-- <ul
                class=" text-sm font-medium text-center text-gray-500 rounded-lg divide-x divide-gray-200 shadow sm:flex dark:divide-gray-700 dark:text-gray-400">
                <li id="cleared" class="w-full">
                    <a href="#"
                        class="inline-block p-4 w-full text-gray-900 bg-gray-100 rounded-l-lg focus:ring-4 focus:ring-blue-300 active focus:outline-none dark:bg-gray-700 dark:text-white"
                        aria-current="page">Cleared</a>
                </li>
                <li id="un-cleared" class="w-full">
                    <a href="#"
                        class="inline-block p-4 w-full bg-white hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">Un
                        Cleared</a>
                </li>
            </ul> -->
            <br />
            <!-- <br /> {{ $data }} -->
            <!-- component {{ $data }} {{var_dump($data)}} -->
            <div{{ $data }} id="cleared-table"
                class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 pr-10 lg:px-8">
                <div
                    class="align-middle rounded-tl-lg rounded-tr-lg inline-block w-full py-4 overflow-hidden bg-white shadow-lg px-12">
                    <div class="flex justify-between">
                        <div class="inline-flex rounded w-7/12 px-2 lg:px-6 h-12 bg-transparent">

                        </div>
                    </div>
                </div>
                <div
                    class="align-middle inline-block min-w-full shadow overflow-hidden bg-white shadow-dashboard px-8 pt-3 rounded-bl-lg rounded-br-lg">
                    <table class="min-w-full" id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th
                                    class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                    ID</th>
                                <th
                                    class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                    Fullname</th>
                                <!-- <th
                                    class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                    Email</th> -->
                                <th
                                    class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                    Mat No</th>
                                <th
                                    class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                    Business Category</th>
                                <th
                                    class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                    Business Description</th>
                                <th
                                    class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                    Date</th>
                                <th
                                    class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                    Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white"> @for($i = 0; $i < count($data); $i++) <tr class="my-6">
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                    <div class="flex items-center">
                                        <div>
                                            <div class="text-sm leading-5 text-gray-800">{{ $i + 1 }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-10 whitespace-no-wrap border-b border-gray-500">
                                    {{ $data[$i]['name'] }}
                                </td>
                                <!-- <td  class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                                    {{ $data[$i]['email'] }}</td> -->
                                <td
                                    class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                                    {{ $data[$i]['mat_no'] }}</td>
                                <td
                                    class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                                    {{ $data[$i]['business_id'] }}</td>
                                <td
                                    class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                                    {{ $data[$i]['business_description'] }}</td>

                                <td
                                    class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-sm leading-5">
                                    {{ $data[$i]['created_at'] }}</td>
                                <td
                                    class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-sm leading-5">
                                    {{ $data[$i]['created_at'] }}</td>

                                <td
                                    class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-500 text-sm leading-5">
                                    <a href="send-message/{{ $data[$i]['id'] }}"> <button
                                            class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">Send
                                            Message</button>
                                    </a>
                                </td>
                                <td
                                    class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-500 text-sm leading-5">
                                    <a href="user/{{ $data[$i]['id'] }}"> <button
                                            class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">View</button>
                                    </a>
                                </td>

                                </tr> @endfor </tbody>

                    </table>
                    <br />












                    <br />
                </div>
        </div>
    </div>
    </div>
</x-app-layout>