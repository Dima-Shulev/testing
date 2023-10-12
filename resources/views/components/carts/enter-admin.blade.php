<x-carts.cart class="card mb-2">
    <x-carts.body>
        <x-carts.form class="form-control" action="{{route('admin.room.check')}}" method="POST">

            <x-carts.cart class="mb-3">
                <x-carts.title class="h3">{{__('Вход в Админ панель')}}</x-carts.title>
                <hr>
            </x-carts.cart>

            <x-carts.label>
                <h5>{{__('Логин:')}}</h5>
            </x-carts.label>

            <x-carts.cart class="mb-3">
                <x-carts.input type="text" name="name" placeholder="{{__('Ваш Логин')}}" />
            </x-carts.cart>

            <x-carts.label>
                <h5>{{__('Пароль:')}}</h5>
            </x-carts.label>

            <x-carts.cart class="mb-3">
                <x-carts.input type="password" name="password" placeholder="{{__('Ваш Пароль')}}" />
            </x-carts.cart>

            <x-carts.cart class="mb-3">
                <x-carts.button type="submit" name="enterAdmin" class="btn btn-primary">{{__('Вход')}}</x-carts.button>
            </x-carts.cart>

        </x-carts.form>
    </x-carts.body>
</x-carts.cart>
