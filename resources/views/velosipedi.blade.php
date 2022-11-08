<x-app-layout>

    
    <h1>Таблица велосипеды</h1>
    
    @auth
        @if(Auth::user()->isAdmin())
        <a href="/velosipedisave" class="animated-button">Добавить</a>
    @endif
    @endauth
 <table  class="table">
    <thead class="thead-dark">
        
        <th>Марка</th>
        <th>Тип</th>
        <th>Возраст</th>
        <th>Дата выпуска</th>
        <th>Количество скоростей</th>
        <th>Цвет</th>
        <th>Вес</th>
        <th>Цена</th>
        <th></th>
        </td>
    </thead>
    <tbody>
    @foreach($velosipedi as $el)
    <tr>
      
        <td>{{$el->marka}}</td>
        <td>{{$el->type}}</td>
        <td>{{$el->age}}</td>
        <td>{{$el->date}}</td>
        <td>{{$el->speed_count}}</td>
        <td>{{$el->color}}</td>
        <td>{{$el->weight}}</td>
        <td>{{$el->price}}</td>
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