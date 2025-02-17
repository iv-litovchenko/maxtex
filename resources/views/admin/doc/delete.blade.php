@extends('layouts.default')

@section('LayoutSectionPageTitle', 'Удалить документ')
@section('LayoutSectionPageHeader', 'Удалить документ')

@section('LayoutSectionPageContent')
    <form action="{{ route('admin.doc.destroy', $doc->id) }}" method="post">
        @csrf
        @method('DELETE')
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">ID</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="id" disabled value="{{ $doc->id }}">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Название</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="bodytext" disabled value="{{ $doc->bodytext }}">
            </div>
        </div>
        <div class="alert alert-danger alert-block">
            <strong>
                Внимание - удаление записи приведет к ее потере!
            </strong>
            <br />
            <button type="submit" class="btn btn-danger">Выполнить удаление</button>
        </div>
    </form>
@endsection
