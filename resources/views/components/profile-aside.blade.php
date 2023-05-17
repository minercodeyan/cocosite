<aside>
    <ul>
        @if(\App\Helpers\PermissionHelper::getUserRole() === 'ADMIN')
            <li><a href="/admin">Админ панель</a></li>
        @endif
        <li><a href="/profile">Мой кабинет</a></li>
        <li><a href="/userdata">Личные данные</a></li>
        <li><a href="/change-password">Сменить пароль</a></li>
        <li><a href="/orders">Текущие заказы</a></li>
        <li><a href="/orders-story">История заказов</a></li>
        <li><a href="/re-bin">Корзина</a></li >
        <li><a href="/logout">Выйти</a></li>
    </ul>
</aside>
