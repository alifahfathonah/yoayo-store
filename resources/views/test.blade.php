{!! Form::open(['route' => 'test_form', 'enctype' => 'multipart/form-data']) !!}

{!! Form::file('foto') !!}
<button type="submit">Simpan</button>

{!! Form::close() !!}