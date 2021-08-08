<div class="bg-gray-100 max-w-sm mx-auto m-6 p-5 rounded-lg">
    <form>

        <div class="mb-6">
            <label for="service" class="inline-block text-gray-700 font-bold mb-2">
                Select service
            </label>
            <select name="service" id="service" class="bg-white h-10 w-full border-none rounded-lg" wire:model="state.service">
                <option value="">-- Select service --</option>
                @foreach($services as $service)
                    <option value="{{ $service->id }}">{{ $service->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-6 {{ !$employees->count() ? 'opacity-25' : '' }}">
            <label for="employee" class="inline-block text-gray-700 font-bold mb-2">
                Select employee
            </label>
            <select name="employee" id="employee" class="bg-white h-10 w-full border-none rounded-lg" wire:model="state.employee" {{ !$employees->count() ? 'disabled="disabled"': '' }}>
                <option value="">-- Select employee --</option>
                @foreach($employees as $employee)
                    <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                @endforeach
            </select>
        </div>


        <div class="mb-6 {{ !$this->selectedService || !$this->selectedEmployee ? 'opacity-25' : '' }}">
            <label for="appointment" class="inline-block text-gray-700 font-bold mb-2">
                Select appointment time
            </label>
        </div>

        <div class="bg-white rounded-lg">
            <div class="flex items-center justify-center relative">
                <button type="button" class="p-4 absolute left-0 top-0">
                    Prev
                </button>

                <div class="text-lg font-semibold p-4">
                    Mes 2021
                </div>

                <button type="button" class="p-4 absolute right-0 top-0">
                    Next
                </button>
            </div>

            <div class="flex justify-between items-center px-3 border-b border-gray-200 pb-2">
                <button type="button" class="text-center group cursor-pointer focus:outline-none">
                    <div class="text-xs leading-none mb-1 text-gray-700">Mon</div>
                    <div class="text-lg leading-none p-1 rounded-full w-9 h-9 group-hover:bg-gray-200 flex items-center justify-center">
                        1
                    </div>
                </button>
            </div>

            <div class="max-h-52 overflow-y-scroll">
                <div class="flex flex-row items-center border-b border-gray-200">
                    <input type="radio" name="time" id="" value="" class="" />
                    <label for="" class="text-left focus:outline-none px-4 py-2 cursor-pointer flex items-center">
                        09:00
                    </label>
                </div>
            </div>

            <div class="text-center text-gray-700 px-4 py-2">
                No available slots
            </div>
        </div>


    </form>
</div>
