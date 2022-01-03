@extends('admin-panel.main')

@section('content')



 <div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Project Details</h3>
            </div>
            <hr>
            @if(session()->has('addedrec'))
            <div class="alert alert-success">
                {{ session()->get('addedrec') }}
            </div>
            @endif
            <form action="{{url('employee_task')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="projectName" class="control-label mb-1">Project Name</label>
                    <input id="projectName" name="proName" type="text" class="form-control" >
                    <span style="color:darkolivegreen;font-weight:bold">@error('proName'){{$message}} @enderror</span>
                </div>
                <div class="form-group has-success">
                    <label for="taskName" class="control-label mb-1">Task Name</label>
                    <input id="taskName" name="taskName" type="text" class="form-control cc-name valid"  >
                    <span style="color:darkolivegreen;font-weight:bold">@error('taskName'){{$message}} @enderror</span>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="txtDate" class="control-label mb-1">Start Date</label>
                            <input id="txtDate" min="<?php echo date('Y-m-d') ?>" max="<?php echo date('Y-m-d') ?>" name="startTime" type="date" class="form-control " >
                            <span style="color:darkolivegreen;font-weight:bold">@error('startTime'){{$message}} @enderror</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="txtTime" class="control-label mb-1">Start Time</label>
                            <input id="txtTime" name="starttime" min="<?php echo date('H-i-sa') ?>" type="time" class="form-control " >
                            <span style="color:darkolivegreen;font-weight:bold">@error('starttime'){{$message}} @enderror</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="endDate" class="control-label mb-1">End Date</label>
                            <input id="endDate"  name="endTime" min="<?php echo date('Y-m-d') ?>" max="<?php echo date('Y-m-d') ?>" type="date" class="form-control cc-number identified visa" >
                            <span style="color:darkolivegreen;font-weight:bold">@error('endTime'){{$message}} @enderror</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="endtime" class="control-label mb-1">End Time</label>
                            <input id="endtime"  name="endtime" type="time" class="form-control cc-number identified visa" >
                            <span style="color:darkolivegreen;font-weight:bold">@error('endtime'){{$message}} @enderror</span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="img-profile" class="control-label mb-1">ScreenShot</label>
                    <input id="img-profile" name="image" type="file" class="form-control cc-number identified visa" >
                    <span style="color:darkolivegreen;font-weight:bold">@error('image'){{$message}} @enderror</span>
                </div>
                <button id="payment-button" type="save" class="btn btn-lg btn-info btn-block">
                <i class="fa fa-lock fa-lg"></i>&nbsp;
                Submit
                </button>
            </form>
        </div>
    </div>
</div>





@endsection