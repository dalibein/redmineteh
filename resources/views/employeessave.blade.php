<x-app-layout>

<h1>Добавить работника</h1>

 <div class="alert alert-danger">
     <ul>
     @foreach($errors->all() as $errors)
     <li>{{$errors}}</li>
     @endforeach
    </ul>
</div>
@endif

 <form method="post" action="employeessave/che">
@csrf
 <input type="text" name="name" id="name" placeholder="Введите имя" class="from-control" ><br><br>
 <input type="text" name="second_name" id="second_name" placeholder="Введите фамилию" class="from-control" ><br><br>
 <input type="text" name="middle_name" id="middle_name" placeholder="Введите отчество" class="from-control" ><br><br>
 <input type="text" name="birthdate" id="birthdate" placeholder="Введите дату рождения" class="from-control" ><br><br>
 <input type="text" name="salary" id="salary" placeholder="Введите заработную плату" class="from-control" ><br><br>
 <input type="text" name="phone" id="phone" placeholder="Введите телефон" class="from-control" ><br><br>
 <input type="text" name="email" id="email" placeholder="Введите почту" class="from-control" ><br><br>
 <input type="text" name="adress" id="adress" placeholder="Введите адрес" class="from-control" ><br><br>
<button type="submit" class="animated-button">Отправить</button>


 </form>
 <a href="/employees" class="animated-button">Вернуться к таблице</a>
</x-app-layout>