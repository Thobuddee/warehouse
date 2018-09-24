

<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel"> สร้างข้อมูล โปรดักส์ </h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="{{url('/packmate/')}}" method="POST">
          {{ method_field('post') }}
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
      <div class="modal-body">
      <div class="container"  style="width:100%; padding:20px;">
        <div class="form-group">
          <label for="matrial_number">หมายเลขโปรดักส์</label>
          <input type="number" class="form-control" name="matrial_number" placeholder="ป้อนหมายเลข 10 หลัก">
        </div>
        <div class="form-group">
          <label for="description">ชื่อโปรดักส์</label>
          <input type="text" class="form-control" name="description" placeholder="ชื่อโปรดักส์">
        </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" >Create</button>
        </div>
      </form>
    </div>
  </div>
</div>
