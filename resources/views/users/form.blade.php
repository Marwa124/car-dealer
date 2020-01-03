@push('css')
  <style>
    .select2-container--default .select2-selection--multiple .select2-selection__choice{
      background-color: #007bff !important;
    border-color: #006fe6 !important;
    color: #fff !important;
    }
    .select2-container--default .select2-results__option{
      text-align: right;
    }
  </style>
  @endpush
@inject('roles', 'Spatie\Permission\Models\Role')
<?php $role = $roles->pluck('name', 'id')->toArray()?>
<div class="text-right">

  <div class="form-group">
    <label>الاسم</label>
    {!! Form::text('name', $value = null, $attributes = [
      'class' => 'form-control'
    ]); !!}
  </div>

  <div class="form-group">
    <label>الايميل</label>
    {!! Form::text('email', $value = null, $attributes = [
      'class' => 'form-control'
    ]); !!}
  </div>

  <div class="form-group">
      <label>كلمه السر</label>
      {!! Form::password('password', $attributes = [
        'class' => 'form-control',
      ]); !!}
    </div>

    <div class="form-group">
        <label> تأكيد كلمه السر</label>
        {!! Form::password('password_confirmation', $attributes = [
          'class' => 'form-control',
        ]); !!}
      </div>

      <div class="form-group">
        <label>التليفون</label>
        {!! Form::text('phone', $value = null, $attributes = [
          'class' => 'form-control'
        ]); !!}
      </div>

  <label>الرتب</label>

{!! Form::select('roles_list[]', $role, null, [
  'class' => 'form-control pillbox ',
  'multiple' => 'multiple'
]) !!}
  {{--   <div class="row text-right">
        @foreach ($roles->all() as $role)
        <div class="col-md-3 text-right mb-2">
          <input type="checkbox" name="roles_list[]" value="{{$role->id}}"
            @if ($user->hasAnyRole($role->name))
            checked
            @endif
          >
              {{$role->name}}
        </div>
        @endforeach
      </div> --}}

  <div class="form-group mt-4">
    <button class="btn btn-primary" type="submit">حفظ</button>
    <a href="{{url(route('user.index'))}}" class="btn btn-danger">الغاء</a>
  </div>
</div>
@push('scripts')
<script>
  $('.pillbox').select2();
</script>
@endpush
