@extends('templates.layout')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header text-center bg-dark color-white">
                        <h3>Agregar juego</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 mx-auto">
                                <form method="POST">
                                    @csrf

                                    <div class="form-group">
                                        <label for="inp-name">Nombre</label>
                                        <input name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="inp-name">
                                        @if($errors->has('name'))
                                            <div class="invalid-feedback">
                                                {{ $errors->get('name')[0] }}
                                            </div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="inp-image_url">URL de imagen</label>
                                        <input name="image_url" class="form-control {{ $errors->has('image_url') ? 'is-invalid' : '' }}" id="inp-image_url">
                                        @if($errors->has('image_url'))
                                            <div class="invalid-feedback">
                                                {{ $errors->get('image_url')[0] }}
                                            </div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="inp-description">Descripción</label>
                                        <textarea rows="6" style="resize: none" name="description" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" id="inp-description"></textarea>
                                        @if($errors->has('description'))
                                            <div class="invalid-feedback">
                                                {{ $errors->get('description')[0] }}
                                            </div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="inp-price">Precio</label>
                                        <input type="number" name="price" class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" id="inp-price">
                                        @if($errors->has('price'))
                                            <div class="invalid-feedback">
                                                {{ $errors->get('price')[0] }}
                                            </div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="inp-trailer_url">URL de trailer</label>
                                        <input name="trailer_url" class="form-control {{ $errors->has('trailer_url') ? 'is-invalid' : '' }}" id="inp-trailer_url">
                                        @if($errors->has('trailer_url'))
                                            <div class="invalid-feedback">
                                                {{ $errors->get('trailer_url')[0] }}
                                            </div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="inp-fk_id_category">Categoría</label>
                                        <select name="fk_id_category" class="form-control" id="inp-fk_id_category" style="height: 48px">
                                            @foreach(\App\Category::asMap() as $i => $category)
                                                <option value="{{ $category }}">{{ $i }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">
                                            Agregar
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
