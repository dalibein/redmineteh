<x-app-layout>

    <h1>Таблица поставщики</h1>
    @auth
        @if(Auth::user()->isAdmin())
    <a href="/supplierssave" class="animated-button">Добавить</a>

    
    @endif
    @endauth
 
 <table  class="table">
    <thead class="thead-dark">
        <th>ID</th>
        <th>Имя</th>
        <th>Адрес</th>
        <th>Телефон</th>
        <th>Марка</th>
        <th>Количество</th>
        <th>Дата поступления</th>
        <th>Город</th>
        <th>Сумма</th>
        <th></th>
        </td>
    </thead>
    <tbody>
    @foreach($suppliers as $el)
    <tr>
        <td>{{$el->id}}</td>
        <td>{{$el->name}}</td>
        <td>{{$el->adress}}</td>
        <td>{{$el->phone}}</td>
        <td>{{$el->marka}}</td>
        <td>{{$el->count}}</td>
        <td>{{$el->delivery_date}}</td>
        <td>{{$el->sity}}</td>
        <td>{{$el->the_amount}}</td>
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