

<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Students') }}
        </h2>
    </x-slot>

    <div class="mt-6 ms-4">
        <a wire:navigate href="{{route('student.create')}}" class="px-3 py-2 text-white font-medium  bg-gray-800 rounded-sm hover:bg-indigo-500">Add Student</a>
    </div>

    <div class="py-10">
        <div class="mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-2 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="p-0">
                     <table class="w-full text  text-gray-500">
                          <thead class="text-gray-700 uppercase bg-gray-50 border">
                               <tr>
                                  <th scope="col" class="px-6 py-3">
                                            STUDENT NAME
                                  </th>
                                  <th scope="col" class="px-6 py-3">
                                          EMAIL
                                  </th>
                                  <th scope="col" class="px-6 py-3">
                                        PROGRAME
                                     </th>
                                  <th scope="col" class="px-6 py-3">
                                         DEPARTMENT
                                  </th>
                                  <th scope="col" class="px-6 py-3">
                                       ACTION
                                   </th>
                               </tr>
                         </thead>
                       <tbody>
                             @foreach($students as $student)
                                 <tr class="bg-white border text-center">
                                   <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                     {{$student->name}}
                                   </th>
                                   <td class="px-6 py-4">
                                    {{$student->email}}
                                  </td>
                                     <td class="px-6 py-4">
                                   {{$student->programe->code}}
                                    </td>
                                <td class="px-6 py-4">
                                  {{$student->department->code}}
                                </td>
                                <td class="px-4 py-4 text-right">
                                  <a  href="{{route('student.edit' , $student->id)}}" class="ms-4 font-medium text-indigo-800-600  hover:underline mx-3">Edit ||</a>
                                  <button wire:confirm="Are you sure you want to delete this student?" wire:click="deleteStudent({{$student->id}})" class="font-medium text-red-600  hover:underline mx-3">
                                      Delete
                                  </button>

                               </td>
                               </tr>
                           @endforeach


                       </tbody>
                 </table>

                    <div class="mt-4">
                        {{$students->links()}}
                    </div>
                 </div>

           </div>

        </div>

    </div>

</div>

