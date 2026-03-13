<x-layout>
    <div class="flex w-[30rem] ml-16 mt-8">
        <x-form action="/login">
            <x-form.input name="username" />
            <x-form.input name="password" type="password" />
            <x-form.submit name="Login" />
        </x-form>
    </div>
</x-layout>