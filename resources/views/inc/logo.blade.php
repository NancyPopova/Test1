@extends('layouts.app')

@section('title-block')Заказть звонок@endsection

@section('logo')


  <form action="{{ route('contact-form') }}" method="post">
    @csrf

    <div class="form-group">
      <label for="name">Введите имя</label>
      <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      <input type="text" name="email" placeholder="Введите email" id="email" class="form-control">
    </div>

      <button type="submit" class="btn btn-success">Заказать звонок</button>

  </form>


@endsection
