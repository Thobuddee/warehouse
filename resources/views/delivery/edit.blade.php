<style>
  .line{
  	margin-bottom: 20px;
  }
  </style>
  @foreach($table as $row)
  <h1>Edit Warehouse : {{ $row['id'] }}</h1>
  <form action="{{url('/')}}/warehouse/{{ $row['id']}}" method="POST">
  {{ csrf_field() }}
  {{ method_field('PUT')}}
  <div class="line">
  <input type="text" name="Matrial_Number" placeholder="กรุณาใส่ระหัสโปรดักส์" value="{{ $row['Matrial_Number'] }}" />
  </div>

  <div class="line">
  <input type="number" step="any" name="Product_Name" placeholder="กรุณาใส่ชื่อโปรดักส์" value="{{ $row['Product_Name'] }}" />
  </div>

  <div class="line">
  <input type="number" step="any" name="date" placeholder="กรุณาใส่วันที่" value="{{ $row['date'] }}" />
  </div>

<div class="line">
  <input type="number" step="any" name="Amount" placeholder="กรุณาใส่จำนวน" value="{{ $row['date'] }}" />
  </div>

  <div class="line">
  <input type="number" step="any" name="EmpID" placeholder="ไอดีผ้ใช้" value="{{ $row['Empid'] }}" />
  </div>


  <div class="line">
  <button type="submit">Update</button>
  </div>

  </form>
@break
@endforeach