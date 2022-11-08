<x-app-layout>

<h1>Добавить велосипед</h1>

@if($errors->any())
 <div class="alert alert-danger">
     <ul>
     @foreach($errors->all() as $errors)
     <li>{{$errors}}</li>
     @endforeach
    </ul>
</div>
@endif

 <form method="post" action="velosipedisave/che">
@csrf
 <input type="text" name="marka" id="marka" placeholder="Введите марку" class="from-control" ><br><br>
 <input type="text" name="type" id="type" placeholder="Введите тип" class="from-control" ><br><br>
 <input type="text" name="age" id="age" placeholder="Введите возраст" class="from-control" ><br><br>
 <input type="text" name="date" id="date" placeholder="Введите год выпуска" class="from-control" ><br><br>
 <input type="text" name="speed_count" id="speed_count" placeholder="Введите количество скоростей" class="from-control" ><br><br>
 <input type="text" name="color" id="color" placeholder="Введите цвет" class="from-control" ><br><br>
 <input type="text" name="weight" id="weight" placeholder="Введите вес" class="from-control" ><br><br>
 <input type="text" name="price" id="price" placeholder="Введите цену" class="from-control" ><br><br>
<button type="submit" class="animated-button">Отправить</button>


 </form>
 <a href="/velosipedi" class="animated-button">Вернуться к таблице</a>
</x-app-layout>