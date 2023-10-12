<x-cart class="card mb-2">
    <x-carts.body>
        <x-carts.form class="form-control" action="{{route('admin.room.check')}}" method="POST">

            <x-cart class="mb-3">
                <x-carts.title class="h3">{{__('Вход в Админ панель')}}</x-carts.title>
                <hr>
            </x-cart>

            <x-cart class="mb-3">
                <x-carts.input type="text" name="name" placholder="{{__('Ваш Логин')}}" />
            </x-cart>

            <x-cart class="mb-3">
                <x-carts.input type="password" name="name" placholder="{{__('Ваш Пароль')}}" />
            </x-cart>

            <x-cart class="mb-3">
                <x-carts.button type="submit" name="enterAdmin" class="btn btn-primary">{{__('Вход')}}</x-carts.button>
            </x-cart>

        </x-carts.form>
    </x-carts.body>
</x-cart>
