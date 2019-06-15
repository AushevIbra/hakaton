import React, { Component } from 'react';

export default class StorageCreateForm extends Component {
    render() {
        return (
            <React.Fragment>
                <div className="row justify-content-center">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Добавить объект
                    </button>
                </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Добавить новый склад</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="{{ route('profile') }}">
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">Наименование</label>
                                    <div class="col-md-6">
                                        <input id="email" type="text" class="form-control" name="email" required autofocus />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">Адрес</label>
                                    <div class="col-md-6">
                                        <input id="email" type="text" class="form-control" name="email" required autofocus />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">Фотография</label>
                                    <div class="col-md-6">
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">Описание</label>
                                    <div class="col-md-6">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
                            <button type="button" class="btn btn-primary">Изменить данные</button>
                        </div>
                        </div>
                    </div>
                </div>
            </React.Fragment>
        );
    }
}