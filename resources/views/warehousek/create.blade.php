<style>
  .line{
  	margin-bottom: 20px;
  }
  </style>
  <h1>New Warehouse</h1>
  <form action="{{url('/')}}/warehouse" method="POST">
  {{ csrf_field() }}
  {{ method_field('POST')}}
  <div class="line">
  <input type="text" name="name" placeholder="name here...">
  </div>
  <div class="line">
  <input type="number" step="any" name="latitude" placeholder="latitude here...">
  </div>
  <div class="line">
  <input type="number" step="any" name="longitude" placeholder="longitude here...">
  </div>
  <div class="line">
  <button type="submit">Create</button>
  </div>
  </form>
