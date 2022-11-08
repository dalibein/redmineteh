<x-app-layout>
<h1>Добавить товары</h1>

@if($errors->any())
 <div class="alert alert-danger">
     <ul>
     @foreach($errors->all() as $errors)
     <li>{{$errors}}</li>
     @endforeach
    </ul>
</div>
@endif

 <form method="post" action="tovarisave/che">
@csrf
 <input type="text" name="name" id="name" placeholder="Введите название" class="from-control" ><br><br>
 <input type="text" name="quantity" id="quantity" placeholder="Введите количество" class="from-control" ><br><br>
 <input type="text" name="price" id="price" placeholder="Введите стоимость" class="from-control" ><br><br>
 <input type="text" name="description" id="description" placeholder="Введите описание" class="from-control" ><br><br>
 <input type="text" name="creator" id="creator" placeholder="Введите производителя" class="from-control" ><br><br>
 <input type="text" name="provider" id="provider" placeholder="Введите поставщика" class="from-control" ><br><br>
 <input type="text" name="color" id="color" placeholder="Введите цвет" class="from-control" ><br><br>
 <input type="text" name="material" id="material" placeholder="Введите материал" class="from-control" ><br><br>
<button type="submit" class="animated-button">Отправить</button>


 </form>
 <a href="/tovari" class="animated-button">Вернуться к таблице</a>
</x-app-layout>