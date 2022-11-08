<x-app-layout>

    <h1>Таблица товары</h1>

    

    @auth
        @if(Auth::user()->isAdmin())
        <a href="/tovarisave" class="animated-button">Добавить</a>
    @endif
    @endauth
 <table  class="table">
    <thead class="thead-dark">
        <th>ID</th>
        <th>Название</th>
        <th>Количество</th>
        <th>Стоимость</th>
        <th>Описание</th>
        <th>Производитель</th>
        <th>Поставщик</th>
        <th>Цвет</th>
        <th>Материал</th>
        <th></th>
        </td>
    </thead>
    <tbody>
    @foreach($tovari as $el)
    <tr>
        <td>{{$el->id}}</td>
        <td>{{$el->name}}</td>
        <td>{{$el->quantity}}</td>
        <td>{{$el->price}}</td>
        <td>{{$el->description}}</td>
        <td>{{$el->creator}}</td>
        <td>{{$el->provider}}</td>
        <td>{{$el->color}}</td>
        <td>{{$el->material}}</td>
        @auth
        @if(Auth::user()->isAdmin())
        <td><a href = 'delete/{{$el->id}}' class="animated-button">Удалить</a></td>
        @endif
        @endauth
    </td>
    </tr> @endforeach
    </tbody>
</table>

</x-app-layout>