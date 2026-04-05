@extends('layout.app')
@section('content')
<div class="menue">
    <center>
        <form action="{{route('task_store')}}" method="post" class="form">
            @csrf
            <label>عنوان المهمة</label>
            <input type="text" name="title" id="text">
            <div>
                <label>وصف المهمة</label>
                <textarea name="description" id="description" cols="55" rows="10"></textarea>
            </div>

            <label>حالة المهمة</label>
            <select name="status">
                <option value="">الحالة</option>
                <option value="pending">pending</option>
                <option value="done">done</option>
            </select>
            <div>
                <button name='upload' class='button'>أنشاء مهمة</button>
            </div>
            <a href="#show">عرض كل المهام </a>
        </form>
    </center>
</div>
<div class="A">
    <div id="show">
        <h2>المهام</h2>
    </div>
</div>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>العنوان</th>
            <th>الوصف</th>
            <th>الحالة</th>
            <th>العمليات</th>
        </tr>
    </thead>
    <tbody id="tasks-body">
        @if(isset($data) and !empty($data))

        @foreach($data as $datas)
        <tr>
            <td>{{$loop->iteration }}</td>
            <td>{{$datas->title}}</td>
            <td>{{$datas->description}}</td>
            <td>{{$datas->status}}</td>
            <td>
                <a class="link" href="{{route('task_delete',$datas->id)}}">حذف</a>
                <a class="link" href="{{route('task_edit',$datas->id)}}">تعديل</a>
                <a class="link" href="{{route('task_status',$datas->id)}}">تغيير الحالة</a>
            </td>
        </tr>
        @endforeach
        @endif
    </tbody>
</table>
@endsection