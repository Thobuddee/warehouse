<style>
  .line{
  	margin-bottom: 20px;
  }
  </style>
  <h1>New Warehouse</h1>
  <form action="{{url('/')}}/delivery" method="POST">
  {{ csrf_field() }}
  {{ method_field('POST')}}

  <div class="line">
  <input type="text" name="Matrial_Number" placeholder="name here...">
  </div>

  <div class="line">
  <input type="number" step="any" name="Product_Name" placeholder="latitude here...">
  </div>

  <div class="line">
  <input type="number" step="any" name="date" placeholder="longitude here...">
  </div>

    <div class="line">
  <input type="number" step="any" name="Amount" placeholder="longitude here...">
  </div>

    <div class="line">
  <input type="number" step="any" name="EmpID" placeholder="longitude here...">
  </div>

  <div class="line">
  <button type="submit">Create</button>
  </div>
  
  </form>
