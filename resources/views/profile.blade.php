@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-left">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Изменить данные пользователя</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('profile') }}">
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-mail адрес</label>
                            <input type="hidden" name="change_settings" value="1">
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Пароль</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" />
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Подтвердите пароль') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Изменить данные
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Добавить администратора</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('profile') }}">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">ФИО</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-mail адрес</label>
                            <input type="hidden" name="change_settings" value="1">
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="storage" class="col-md-4 col-form-label text-md-right">Склад</label>
                            <input type="hidden" name="change_settings" value="1">
                            <div class="col-md-6">
                                <select id="email" type="email" class="form-control" name="storage" required autofocus>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Добавить
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-left" style="margin-top: 1.2em">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Мои склады</div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Активных складов
                            <span class="badge badge-primary badge-pill">14</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Активных заказов
                            <span class="badge badge-primary badge-pill">2</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Заказов за последнюю неделю
                            <span class="badge badge-primary badge-pill">15</span>
                        </li>
                    </ul>
                    <div style="text-align:center; margin-top: 1.9em">
                        <a href="/storages">
                            Перейти к управлению складами
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Мои товары</div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Товаров в наличии
                            <span class="badge badge-primary badge-pill">14</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Товаров нет в наличии
                            <span class="badge badge-primary badge-pill">2</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Товаров продано за последнюю неделю
                            <span class="badge badge-primary badge-pill">167</span>
                        </li>
                    </ul>
                    <div style="text-align:center; margin-top: 1.9em">
                        <a href="/goods">
                            Перейти к управлению товарами
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-left" style="margin-top: 1.2em">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Мои машины</div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Всего машин
                            <span class="badge badge-primary badge-pill">14</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Машин в работе
                            <span class="badge badge-primary badge-pill">2</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Свободных машин
                            <span class="badge badge-primary badge-pill">12</span>
                        </li>
                    </ul>
                    <div style="text-align:center; margin-top: 1.9em">
                        <a href="/сars">
                            Перейти к управлению машинами
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Мои администраторы</div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Всего администраторов
                            <span class="badge badge-primary badge-pill">14</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Самый активный
                            <span class="badge badge-primary badge-pill">Анна Петрова</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Самый прибыльный
                            <span class="badge badge-primary badge-pill">Алексей Волочков</span>
                        </li>
                    </ul>
                    <div style="text-align:center; margin-top: 1.9em">
                        <a href="/сars">
                            Перейти к управлению администраторами
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection