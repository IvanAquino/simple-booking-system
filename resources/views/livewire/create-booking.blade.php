<div class="bg-gray-100 max-w-sm mx-auto m-6 p-5 rounded-lg">
    <form>

        <label for="service" class="inline-block text-gray-700 font-bold mb-2">
            Select service
        </label>
        <select name="service" id="service" class="bg-white h-10 w-full border-none rounded-lg" wire:mode="state.service">
            @foreach($services as $service)
                <option value="{{ $service->id }}">{{ $service->name }}</option>
            @endforeach
        </select>

    </form>
</div>
