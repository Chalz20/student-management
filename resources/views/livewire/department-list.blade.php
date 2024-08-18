

<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Departments') }}
        </h2>
    </x-slot>

    <div class="mt-6 ms-4">
        <a wire:navigate href="{{route('department.create')}}" class="px-3 py-2 text-white font-medium  bg-gray-800 rounded-sm hover:bg-indigo-500">Add Department</a>
    </div>

    <div class="py-10">
        <div class="mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-2 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="p-0">
                    <table class="w-full text  text-gray-500">
                        <thead class="text-gray-700 uppercase bg-gray-50 border">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                DEPARTMENT NAME
                            </th>
                            <th scope="col" class="px-6 py-3">
                                DEPARTMENT CODE
                            </th>
                            <th scope="col" class="px-6 py-3">
                                ACTION
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($departments as $department)
                            <tr class="bg-white border text-center">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    {{$department->name}}
                                </th>
                                <td class="px-6 py-4">
                                    {{$department->code}}
                                </td>
                                <td class="px-4 py-4 text-right">
                                    <a  href="{{route('department.edit' , $department->id)}}" class="ms-4 font-medium text-indigo-800-600  hover:underline mx-3">Edit ||</a>
                                    <button wire:confirm="Are you sure you want to delete this department?" wire:click="deleteDepartment({{$department->id}})" class="font-medium text-red-600  hover:underline mx-3">
                                        Delete
                                    </button>

                                </td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>

                </div>

            </div>

        </div>

    </div>

</div>


