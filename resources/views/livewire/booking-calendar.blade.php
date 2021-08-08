<div class="bg-white rounded-lg">
    <div class="flex items-center justify-center relative">
        @if($this->weekIsGreaterThanCurrent)
            <button type="button" class="p-4 absolute left-0 top-0" wire:click="decrementCalendarWeek">
                Prev
            </button>
        @endif

        <div class="text-lg font-semibold p-4">
            {{ $calendarStartDate->format('M Y') }}
        </div>

        <button type="button" class="p-4 absolute right-0 top-0" wire:click="incrementCalendarWeek">
            Next
        </button>
    </div>

    <div class="flex justify-between items-center px-3 border-b border-gray-200 pb-2">
        @foreach($this->calendarWeekInterval as $day)
            <button type="button" class="text-center group cursor-pointer focus:outline-none" wire:click="setDate({{ $day->timestamp }})">
                <div class="text-xs leading-none mb-1 text-gray-700">
                    {{ $day->format('D') }}
                </div>
                <div class="text-lg leading-none p-1 rounded-full w-9 h-9 group-hover:bg-gray-200 flex items-center justify-center {{ $date === $day->timestamp ? 'bg-gray-200': '' }}">
                    {{ $day->format('d') }}
                </div>
            </button>
        @endforeach
    </div>

    <div class="max-h-52 overflow-y-scroll">
        @if($this->availableTimeSlots->count())
            @foreach($this->availableTimeSlots as $slot)
                <div class="flex flex-row items-center border-b border-gray-200">
                    <input type="radio" name="time" id="" value="" class="" />
                    <label for="" class="text-left focus:outline-none px-4 py-2 cursor-pointer flex items-center">
                        {{ $slot->format('g:i A') }}
                    </label>
                </div>
            @endforeach
        @else
            <div class="text-center text-gray-700 px-4 py-2">
                No available slots
            </div>
        @endif
    </div>

</div>
