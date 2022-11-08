<x-app-layout>

<h1>Добавить поставщиков</h1>

@if($errors->any())
 <div class="alert alert-danger">
     <ul>
     @foreach($errors->all() as $errors)
     <li>{{$errors}}</li>
     @endforeach
    </ul>
</div>
@endif

 <form method="post" action="supplierssave/che">
@csrf
 <input type="text" name="name" id="name" placeholder="Введите имя" class="from-control" ><br><br>
 <input type="text" name="adress" id="adress" placeholder="Введите адрес" class="from-control" ><br><br>
 <input type="text" name="phone" id="phone" placeholder="Введите телефон" class="from-control" ><br><br>
 <input type="text" name="marka" id="marka" placeholder="Введите марку" class="from-control" ><br><br>
 <input type="text" name="count" id="count" placeholder="Введите количество" class="from-control" ><br><br>
 <input type="text" name="delivery_date" id="delivery_date" placeholder="Введите дату поступления" class="from-control" ><br><br>
 <input type="text" name="city" id="city" placeholder="Введите город" class="from-control" ><br><br>
 <input type="text" name="the_amount" id="the_amount" placeholder="Введите сумму" class="from-control" ><br><br>
<button type="submit" class="animated-button">Отправить</button>


 </form>
 <a href="/suppliers" class="animated-button">Вернуться к таблице</a>
</x-app-layout>