<div>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('New Student') }}
            </h2>
        </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
           <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
              <div class="max-w-xl">
                  <header>
                      <h2 class="text-lg font-medium font-semibold text-gray-900">
                          {{ __('Student Information') }}
                      </h2>

                      <p class="mt-1 text-m text-gray-600">
                         {{ __("Fill in the information for the new student") }}
                      </p>
                  </header>

                  <form wire:submit="addStudent" class="mt-6 space-y-6">
                    @csrf
                      <div>
                          <label for="name" >Name</label>
                          <input id="name" name="name" type="text" class="mt-1 block w-full rounded-lg "  wire:model="name"  />
                          @error('name')
                              <p class="mt-1 text-sm text-red-600">{{$message}}</p>
                          @enderror
                      </div>

                      <div>
                          <label for="email" >Email</label>
                          <input id="email" name="email" type="text" class="mt-1 block w-full rounded-lg"  wire:model="email"  />
                          @error('email')
                          <p class="mt-1 text-sm text-red-600">{{$message}}</p>
                          @enderror
                      </div>

                      <div>
                          <label for="name" >Program</label>
                          <select id="programe" name="programe_id" class="mt-1 block w-full rounded-lg" wire:model.live="programe_id">
                              <option  value=" ">--Select degree programme--</option>
                              @foreach($programes as $programe)
                                <option value="{{$programe->id}}">{{$programe->code}}</option>
                              @endforeach
                          </select>
                          @error('programe_id')
                          <p class="mt-1 text-sm text-red-600">{{$message}}</p>
                          @enderror
                      </div>

                      <div>
                          <label for="name" >Department</label>
                          <select id="department" name="department_id" class="mt-1 block w-full rounded-lg" wire:model="department_id">
                              <option  value="">--Select department--</option>
                              @foreach($departments as $department)
                                  <option value="{{$department->id}}">{{$department->code}}</option>
                              @endforeach
                          </select>
                          @error('department_id')
                          <p class="mt-1 text-sm text-red-600">{{$message}}</p>
                          @enderror
                      </div>

                      <div>
                          <x-primary-button type="submit">Save</x-primary-button>

                      </div>




                  </form>
              </div>
           </div>
        </div>
    </div>

</div>
