@extends('layout.app')
@section('content')
<div class="menue">
    <center>
        <form action="{{route('task_update',$data->id)}}" method="post" class="form">
            @csrf
            <input type="hidden" name="id" value="{{$data['id']}}">
            <div>
                <label>عنوان المهمة</label>
                <input type="text" name="title" id="text" value="{{$data['title']}}">
            </div>
            <div>
                <label>وصف المهمة</label>
                <textarea name="description" id="description" cols="55" rows="10">{{$data['description']}}</textarea>
            </div>
            <div>
                <label>حالة المهمة</label>
                <select name="status" id="status" value="{{$data['status']}}">
                    <option value="">الحالة</option>
                    <option value="pending">>pending</option>
                    <option value="done">done</option>
                </select>
            </div>
            <div>
                <button name='update' class='button'>تعديل مهمة</button>
            </div>
            <div>
                <a href="{{ route('task_index') }}">رجوع</a>
            </div>
        </form>
    </center>
</div>
@endsection