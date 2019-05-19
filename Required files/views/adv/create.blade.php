@extends("layouts._admin")

@section("title", "اضافة اعلان جديد")

@section("content")
<form class="w-50" method="POST" action="{{ route('adv.store') }}">
@csrf
<!-- POST, PUT, Patch and Delete methods must have @csrf token in Laravel Web -->
  <div class="form-group">
    <label for="title">العنوان</label>
    <input autofocus value="{{ old('title') }}" type="text" class="form-control" id="title" name="title" placeholder="العنوان">
    </div>
     <div class="form-group">
    <label for="url">الرابط</label>
    <input autofocus value="{{ old('url') }}" type="text" class="form-control" id="url" name="url" placeholder="الرابط">
    </div>
     <div class="form-group">
    <label for="photo">صورة الاعلان</label>
    <input autofocus value="{{ old('photo') }}" type="text" class="form-control" id="photo" name="photo" placeholder="اصورة">
</div>
     <div class="form-group">
    <label for="code">الكود</label>
    <input autofocus value="{{ old('code') }}" type="text" class="form-control" id="code" name="code" placeholder="الكود">
    </div>
    <div class="form-group">
<div class="custom-control custom-checkbox">
  <input  {{ old("is_code")?"checked":"" }} type="checkbox" value="1" name="iscode" class="custom-control-input" id="customCheck1">
  <label class="custom-control-label" for="customCheck1">هل هو كود؟</label>
</div>

</div>
    <div class="form-group">
    <label for="adv-locations-id">مكان الاعلان</label>
    <select class="form-control" id="adv-locations-id" name="adv-locations-id">
    <option value="">اختر مكان الاعلان</option>
       
        @foreach($advsLocation as $advlocation)
            <option {{ old("adv-locations-id")==$advlocation->id?"selected":"" }} value="{{ $advlocation->id }}">{{ $advlocation->name }} </option>
        @endforeach
    </select>
</div>
    <div class="form-group">
<div class="custom-control custom-checkbox">
  <input  {{ old("deleted")?"checked":"" }} type="checkbox" value="1" name="deleted" class="custom-control-input" id="customCheck2">
  <label class="custom-control-label" for="customCheck2">محذوف</label>
</div>
        <div class="form-group">
    <label for="start_at">تاريخ البدء</label>
    <input autofocus value="{{ old('start_at') }}" type="text" class="form-control" id="start_at" name="start_at" placeholder="تاريخ البدء">
    </div>
 <div class="form-group">
    <label for="title">تاريخ الانتهاء</label>
    <input autofocus value="{{ old('expire_at') }}" type="text" class="form-control" id="expire_at" name="expire_at" placeholder="تاريخ الانتهاء">
    </div>

</div>
    
    
  <button type="submit" class="btn btn-primary">انشاء</button>
  <a class="btn btn-dark" href="{{ route('adv.index') }}">الغاء الأمر</a>
</form>
@endsection
