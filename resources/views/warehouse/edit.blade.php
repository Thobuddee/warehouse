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
  <input type="text" name="name" placeholder="name here..." value="{{ $row['name'] }}" />
  </div>
  <div class="line">
  <input type="number" step="any" name="latitude" placeholder="latitude here..." value="{{ $row['latitude'] }}" />
  </div>
  <div class="line">
  <input type="number" step="any" name="longitude" placeholder="longitude here..." value="{{ $row['longitude'] }}" />
  </div>
  <div class="line">
  <button type="submit">Update</button>
  </div>
  </form>
@break
@endforeach