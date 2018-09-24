@extends('theme.default')

@section('content')


<div class="container" style="width:100%; padding:20px;">
    <div class="row">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create" style="margin:20px;">เพิ่มข้อมูลโปรดักส์</button>
          @include('packmate.create')
    <!-- <a class="btn btn-primary" href="{{url ('/productfinal/create') }}" role="button">create</a> -->
    <table class="table" style="padding:20px;">
      <thead class="thead-light">
    <tr>
      <th scope="col"style="width:2%;">ลำดับ</th>
      <th scope="col"style="width:20%;">หมายเลขโปรดักส์</th>
      <th scope="col"style="width:20%;">ชื่อโปรดักส์</th>
      <th scope="col"style="width:30%;">Action</th>
    </tr>
     </thead>
     <tbody>
      @foreach ($obj as $row)
      <tr>
        <td scope="row">{{$loop->iteration}}</td>
        <td>{{$row->matrial_number}}</td>
        <td>{{$row->description}}</td>
        <td>
        <form action="{{url('/packmate/'.$row->id)}}" method="post"  onsubmit="return(confirm('จะลบหรอ'))">
          {{ method_field('DELETE') }}
          {{ csrf_field() }}
          <button type="submit" class="btn btn-danger" > ลบข้อมูลโปรดักส์ </button>
          <!--<a class="btn btn-primary" href="{{url('/packmate/'.$row->id.'/edit')}}" role="button">แก้ไขข้อมูลโปรดักส์</a> -->
        </form>
        <a type="button"  href="{{url('/packmate/'.$row->id.'/edit')}}" class="btn btn-primary" data-toggle="modal" data-target="#edit" style="margin:20px;">แก้ไขข้อมูลโปรดักส์</a>
        @include('packmate.edit')
        </td>

      </tr>
      @endforeach
    </tbody>
    </table>

  </div>

</div>


@endsection
