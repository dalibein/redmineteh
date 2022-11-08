<x-app-layout>

    <h1>Таблица работники</h1>
    @auth
        @if(Auth::user()->isAdmin())
    <a href="/employeessave" class="animated-button">Добавить</a>

    
    @endif
    @endauth
 
@if($errors->any())
@endif
 <table  class="table">
    <thead class="thead-dark">
        <th>ID</th>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>Отчество</th>
        <th>Дата рождения</th>
        <th>Зарплата</th>
        <th>Телефон</th>
        <th>Почта</th>
        <th>Адрес</th>
        <th></th>
        </td>
    </thead>
    <tbody>
       
    @foreach($employees as $el)
    <tr>
        <td>{{$el->id}}</td>
        <td>{{$el->name}}</td>
        <td>{{$el->second_name}}</td>
        <td>{{$el->middle_name}}</td>
        <td>{{$el->birthdate}}</td>
        <td>{{$el->salary}}</td>
        <td>{{$el->phone}}</td>
        <td>{{$el->email}}</td>
        <td>{{$el->adress}}</td>
        @auth
        @if(Auth::user()->isAdmin())
        <td><a href = 'delete/{{$el->id}}' class="animated-button">Удалить</a></td>
        @endif
       @endauth
        </td>
        
    </tr>
    @endforeach
    </tbody>
</table>

</x-app-layout>