@extends('layouts.app')
@section('order')
<div class="container mt-5">

<h2>Заполните анкету</h2>
</div>
<div class="container">
<form class="" action="{{ url('/orders') }}" method="post">
  {{csrf_field()}}
  <!-- @csrf -->
  <div class="form-group">
    <label for="title">Заголовок</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Например: Няня">
  </div>

  <div class="form-group">
    <label for="category">Выберите категорию</label>
    <select class="form-control" id="category" name="category">
      <option>Домашний мастер</option>
      <option>Ремонт техники</option>
      <option>Строительные работы</option>
      <option>Бытовые услуги</option>
      <option>Услуги красоты и здоровья</option>
      <option>Услуги репетиторов</option>
      <option>Ремонт авто</option>
      <option>Мебельные работы</option>
      <option>Отделочные работы</option>
    </select>
  </div>

  <div class="form-group">
    <label for="description">Опишите свои проблемы</label>
    <textarea class="form-control" id="description" name="description" rows="3"></textarea>

    @error('text')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $text ?? '' }}</strong>
        </span>
    @enderror
  </div>

  <div class="form-group">
    <label for="cost">Предварительная стоимость</label>
    <input type="text" name="cost" class="form-control" id="cost" placeholder="Например: 2000тг">

    @error('cost')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $cost ?? '' }}</strong>
        </span>
    @enderror
  </div>

  <div class="form-group">
    <label for="mobile">Номер телефона</label>
    <input type="text" name="mobile" class="form-control" id="mobile" placeholder="77771234567(начиная с 7)" value="">

    @error('mobile')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $mobile ?? '' }}</strong>
        </span>
    @enderror
  </div>

  <button type="submit" name="button" class="btn btn-primary">Отправить</button>

</form>

</div>

@endsection
